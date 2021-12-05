@extends('adminlte::page')

@section('title', 'Empresas')

@section('content_header')

@stop

@section('content')
    {{-- Permisson: Administrator --}}
    @can('is_admin')
    <div class="row">
        <div class="col m-3">
            {{-- Card --}}
            <div class="card card-info">
                {{-- Card Header --}}
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        {{-- Return: Companies Menu --}}
                        <a href="{{ url('/companies/menu') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.company-index') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title">
                            <i class="far fa-building fa-lg"></i>&nbsp;&nbsp;&nbsp;
                            {{ __('page.companies.index-title') }}
                        </h3>
                        {{-- Return: Management Menu --}}
                        <a href="{{ url('/management/menu') }}" data-toggle="tooltip" data-placement="left" title="{{ __('page.link.management-menu') }}">
                            <i class="fas fa-th fa-lg"></i>
                        </a>
                    </div>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col mb-3">
                            <i class="far fa-question-circle text-info fa-lg"
                             data-toggle="tooltip" data-placement="right"
                             title="{{ __('page.companies.tip-index') }} {{ $mainCompany->company_name }}"></i>
                        </div>
                    </div>
                    {{-- Add Company --}}
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <a class="btn bg-gradient-success btn-sm" href="{{ url('/companies/create') }}" role="button"
                            data-toggle="tooltip" data-placement="right" title="{{ __('page.companies.tip-add') }}">
                                <i class="far fa-plus-square fa-lg"></i>&nbsp;&nbsp;{{ __('page.companies.add-title') }}
                            </a>
                        </div>
                    </div>
                    {{-- Table --}}
                    <table class="table table-hover table-responsive-md" id="companiesTable">
                        {{-- Table Head --}}
                        <thead class="text-center">
                            <tr>
                                <th scope="col">{{ __('page.companies.th-name') }}</th>
                                <th scope="col">{{ __('page.companies.th-type') }} {{ $mainCompany->company_name }}</th>
                                <th scope="col">{{ __('page.companies.th-sector') }}</th>
                                <th scope="col">{{ __('page.companies.th-website') }}</th>
                                <th scope="col">{{ __('page.companies.th-management') }}</th>
                            </tr>
                        </thead>
                        {{-- Table Body --}}
                        <tbody  class="text-center">
                            @foreach ($companies as $company)
                            <tr>
                                <td>{{ $company->company_name }}</td>
                                <td>{{ $company->companyTypes->type_name }}</td>
                                <td>{{ $company->sector }}</td>
                                <td><a href="{{ $company->website }}" target="_blank">{{ $company->website }}</a></td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-4 mb-1">
                                            {{-- Show Company --}}
                                            <a class="btn bg-gradient-success btn-sm" href="{{ url('/companies/show/'. $company->id) }}" role="button"
                                            data-toggle="tooltip" data-placement="bottom" title="{{ __('page.companies.tip-show-btn') }}">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb-1">
                                            {{-- Edit Company --}}
                                            <a class="btn bg-gradient-warning btn-sm" href="{{ url('/companies/edit/'. $company->id) }}" role="button"
                                            data-toggle="tooltip" data-placement="bottom" title="{{ __('page.companies.tip-edit-btn') }}">
                                                <i class="far fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-4 mb-1">
                                            {{-- Delete Company --}}
                                            <span data-toggle="modal" data-target="#deleteCompany-{{ $company->id }}">
                                                <button type="button" class="btn bg-gradient-danger btn-sm"
                                                    data-toggle="tooltip" data-placement="bottom" title="{{ __('page.companies.tip-delete-btn') }}">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    {{-- Delete Company Modal --}}
                                    <div class="modal fade" id="deleteCompany-{{ $company->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                {{-- Modal Header --}}
                                                <div class="modal-header bg-danger text-center">
                                                    <h5 class="modal-title w-100" id="deleteModalLabel">
                                                        <i class="far fa-trash-alt"></i>&nbsp;&nbsp;&nbsp;
                                                        {{ __('page.companies.delete-title') }}
                                                    </h5>
                                                </div>
                                                {{-- Modal Body --}}
                                                <div class="modal-body">
                                                    <div class="text-left">
                                                        <div class="row">
                                                            <i class="far fa-question-circle text-danger fa-lg"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="{{ __('page.companies.tip-delete') }}"></i>&nbsp;&nbsp;
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p>
                                                                <i class="far fa-building fa-lg text-danger"></i>&nbsp;
                                                                <strong>{{ __('page.companies.label-name') }}</strong>
                                                            </p>
                                                            <p>{{ $company->company_name }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p>
                                                                <i class="fas fa-briefcase fa-lg text-danger"></i>&nbsp;
                                                                <strong>{{ __('page.companies.label-sector') }}</strong>
                                                            </p>
                                                            <p>{{ $company->sector }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><i class="fas fa-phone-alt fa-lg text-danger"></i>&nbsp;
                                                                <strong>{{ __('page.companies.label-phone') }}</strong>
                                                            </p>
                                                            <p>{{ $company->company_phone }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><i class="fas fa-map-marked-alt fa-lg text-danger"></i>&nbsp;
                                                                <strong>{{ __('page.companies.label-headquarters') }}</strong>
                                                            </p>
                                                            <p>{{ $company->headquarters }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <p><i class="fas fa-desktop fa-lg text-danger"></i>&nbsp;
                                                                <strong>{{ __('page.companies.label-website') }}</strong>
                                                            </p>
                                                            <p>{{ $company->website }}</p>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <p><i class="far fa-handshake fa-lg text-danger"></i>&nbsp;
                                                                <strong>{{ __('page.companies.label-type') }} {{ $mainCompany->company_name }}</strong>
                                                            </p>
                                                            <p>{{ $company->companyTypes->type_name }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row" style="display:none">
                                                        <input type="text" class="form-control" name="company_description" value="{{ $company->company_description }}" id="">
                                                    </div>
                                                </div>
                                                {{-- Confirm/Cancel --}}
                                                <div class="modal-footer">
                                                    <a class="btn bg-gradient-success btn-sm mr-auto" href="{{ url('/companies/delete/'.$company->id) }}" role="button">
                                                        <i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;{{ __('page.generic.confirmBtn') }}
                                                    </a>

                                                    <button type="button" class="btn bg-gradient-danger btn-sm" data-dismiss="modal">
                                                        <i class="far fa-window-close fa-lg"></i>&nbsp;&nbsp;{{ __('page.generic.cancelBtn') }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        {{-- Table Footer --}}
                        <tfoot  class="text-center">
                            <tr>
                                <th>{{ __('page.companies.th-name') }}</th>
                                <th>{{ __('page.companies.th-type') }} {{ $mainCompany->company_name }}</th>
                                <th>{{ __('page.companies.th-sector') }}</th>
                                <th>{{ __('page.companies.th-website') }}</th>
                                <th>{{ __('page.companies.th-management') }}</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection

@section('css')
    <link rel="stylesheet" href="{{ url('/css/my_style.css') }}">
@endsection

@section('js')
    <script>
        $(document).ready( function () {
            $('#companiesTable').DataTable({
                // language:{
                //     url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_pt.json'
                // },
                columnDefs: [
                    { orderable: false, targets: 4 }
                ]
            });
        });
    </script>
@stop
