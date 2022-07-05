@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.variante.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.variantes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.variante.fields.id') }}
                        </th>
                        <td>
                            {{ $variante->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.variante.fields.producto') }}
                        </th>
                        <td>
                            {{ $variante->producto }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.variante.fields.marca') }}
                        </th>
                        <td>
                            {{ $variante->marca->marca ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.variantes.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#productos_visit_reports" role="tab" data-toggle="tab">
                {{ trans('cruds.visitReport.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="productos_visit_reports">
            @includeIf('admin.variantes.relationships.productosVisitReports', ['visitReports' => $variante->productosVisitReports])
        </div>
    </div>
</div>

@endsection