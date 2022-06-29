@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.visitReport.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.visit-reports.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.visitReport.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $visitReport->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.visitReport.fields.user') }}
                                    </th>
                                    <td>
                                        {{ $visitReport->user->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.visitReport.fields.client') }}
                                    </th>
                                    <td>
                                        {{ $visitReport->client->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.visitReport.fields.checkin') }}
                                    </th>
                                    <td>
                                        {{ $visitReport->checkin->datetime ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.visitReport.fields.checkout') }}
                                    </th>
                                    <td>
                                        {{ $visitReport->checkout->datetime ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.visitReport.fields.productos') }}
                                    </th>
                                    <td>
                                        @foreach($visitReport->productos as $key => $productos)
                                            <span class="label label-info">{{ $productos->producto }}</span>
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.visit-reports.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection