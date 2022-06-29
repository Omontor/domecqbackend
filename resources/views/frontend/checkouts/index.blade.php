@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @can('checkout_create')
                <div style="margin-bottom: 10px;" class="row">
                    <div class="col-lg-12">
                        <a class="btn btn-success" href="{{ route('frontend.checkouts.create') }}">
                            {{ trans('global.add') }} {{ trans('cruds.checkout.title_singular') }}
                        </a>
                    </div>
                </div>
            @endcan
            <div class="card">
                <div class="card-header">
                    {{ trans('cruds.checkout.title_singular') }} {{ trans('global.list') }}
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class=" table table-bordered table-striped table-hover datatable datatable-Checkout">
                            <thead>
                                <tr>
                                    <th>
                                        {{ trans('cruds.checkout.fields.id') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.checkout.fields.datetime') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.checkout.fields.lat') }}
                                    </th>
                                    <th>
                                        {{ trans('cruds.checkout.fields.lng') }}
                                    </th>
                                    <th>
                                        &nbsp;
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($checkouts as $key => $checkout)
                                    <tr data-entry-id="{{ $checkout->id }}">
                                        <td>
                                            {{ $checkout->id ?? '' }}
                                        </td>
                                        <td>
                                            {{ $checkout->datetime ?? '' }}
                                        </td>
                                        <td>
                                            {{ $checkout->lat ?? '' }}
                                        </td>
                                        <td>
                                            {{ $checkout->lng ?? '' }}
                                        </td>
                                        <td>
                                            @can('checkout_show')
                                                <a class="btn btn-xs btn-primary" href="{{ route('frontend.checkouts.show', $checkout->id) }}">
                                                    {{ trans('global.view') }}
                                                </a>
                                            @endcan

                                            @can('checkout_edit')
                                                <a class="btn btn-xs btn-info" href="{{ route('frontend.checkouts.edit', $checkout->id) }}">
                                                    {{ trans('global.edit') }}
                                                </a>
                                            @endcan

                                            @can('checkout_delete')
                                                <form action="{{ route('frontend.checkouts.destroy', $checkout->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
    </div>
</div>
@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('checkout_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('frontend.checkouts.massDestroy') }}",
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
  let table = $('.datatable-Checkout:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection