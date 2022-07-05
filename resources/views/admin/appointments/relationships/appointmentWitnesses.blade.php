<div class="m-3">
    @can('witness_create')
        <div style="margin-bottom: 10px;" class="row">
            <div class="col-lg-12">
                <a class="btn btn-success" href="{{ route('admin.witnesses.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.witness.title_singular') }}
                </a>
            </div>
        </div>
    @endcan
    <div class="card">
        <div class="card-header">
            {{ trans('cruds.witness.title_singular') }} {{ trans('global.list') }}
        </div>

        <div class="card-body">
            <div class="table-responsive">
                <table class=" table table-bordered table-striped table-hover datatable datatable-appointmentWitnesses">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.witness.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.witness.fields.witness_category') }}
                            </th>
                            <th>
                                {{ trans('cruds.witness.fields.witness') }}
                            </th>
                            <th>
                                {{ trans('cruds.witness.fields.appointment') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($witnesses as $key => $witness)
                            <tr data-entry-id="{{ $witness->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $witness->id ?? '' }}
                                </td>
                                <td>
                                    {{ $witness->witness_category->name ?? '' }}
                                </td>
                                <td>
                                    @if($witness->witness)
                                        <a href="{{ $witness->witness->getUrl() }}" target="_blank" style="display: inline-block">
                                            <img src="{{ $witness->witness->getUrl('thumb') }}">
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    {{ $witness->appointment->title ?? '' }}
                                </td>
                                <td>
                                    @can('witness_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.witnesses.show', $witness->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('witness_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.witnesses.edit', $witness->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('witness_delete')
                                        <form action="{{ route('admin.witnesses.destroy', $witness->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                        </form>
                                    @endcan

                                </td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('witness_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.witnesses.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  });
  let table = $('.datatable-appointmentWitnesses:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection