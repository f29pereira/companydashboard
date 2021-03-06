@extends('adminlte::page')

@section('title', __('page.titles.company_types-index'))

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
                        {{-- Return: Management --}}
                        <a href="{{ url('/companies/menu') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.company-menu') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title">
                            <i class="far fa-handshake fa-lg"></i>&nbsp;&nbsp;&nbsp;
                            {{ __('page.company-types.index-title') }}
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
                            title="{{ __('page.company-types.tip-index') }}"></i>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <a class="btn bg-gradient-success btn-sm" href="{{ url('/company-types/create') }}" role="button"
                            data-toggle="tooltip" data-placement="right" title="{{ __('page.company-types.tip-add') }}">
                                <i class="far fa-plus-square fa-lg"></i>&nbsp;&nbsp;
                                {{ __('page.company-types.add-title') }}
                            </a>
                        </div>
                    </div>
                    {{-- Table --}}
                    <table class="table table-hover table-responsive-md" id="companyTypeTable">
                        {{-- Table Head --}}
                        <thead class="text-center">
                            <tr>
                                <th scope="col">{{ __('page.company-types.th-name') }}</th>
                                <th scope="col">{{ __('page.company-types.th-description') }}</th>
                                <th scope="col">{{ __('page.company-types.th-management') }}</th>
                            </tr>
                        </thead>
                        {{-- Table Body --}}
                        <tbody class="text-center">
                            @foreach ($companyTypes as $companyType)
                            <tr>
                                <td>{{ $companyType->type_name }}</td>
                                <td>{{ $companyType->type_description }}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-6 mb-1">
                                            {{-- Company Type Edit --}}
                                            <a class="btn bg-gradient-warning btn-sm" href="{{ url('/company-types/edit/'. $companyType->id) }}" role="button"
                                            data-toggle="tooltip" data-placement="bottom" title="{{ __('page.company-types.tip-edit-btn') }}">
                                                <i class="far fa-edit"></i>
                                            </a>
                                        </div>
                                        <div class="col-md-6 mb-1">
                                            {{-- Delete Company Type --}}
                                            <span data-toggle="modal" data-target="#deleteCompanyType-{{ $companyType->id }}">
                                                <button type="button" class="btn bg-gradient-danger btn-sm"
                                                    data-toggle="tooltip" data-placement="bottom" title="{{ __('page.company-types.tip-delete-btn') }}">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </span>
                                        </div>
                                    </div>

                                    {{-- Delete Company Type Modal --}}
                                    <div class="modal fade" id="deleteCompanyType-{{ $companyType->id }}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                {{-- Modal Header --}}
                                                <div class="modal-header bg-danger text-center">
                                                    <h5 class="modal-title w-100" id="deleteModalLabel">
                                                        <i class="far fa-trash-alt"></i>&nbsp;&nbsp;&nbsp;
                                                        {{ __('page.company-types.delete-title') }}
                                                    </h5>
                                                </div>
                                                {{-- Modal Body --}}
                                                <div class="modal-body">
                                                    <div class="text-left">
                                                        <div class="row">
                                                            <i class="far fa-question-circle text-danger fa-lg"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="{{ __('page.company-types.tip-delete') }}"></i>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <p><i class="fas fa-align-justify fa-lg text-danger"></i>&nbsp;<b>{{ __('page.company-types.label-name') }}</b></p>
                                                            <p>{{ $companyType->type_name }}</p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <p><i class="fas fa-align-justify fa-lg text-danger"></i>&nbsp;<b>{{ __('page.company-types.label-description') }}</b></p>
                                                            <p>{{ $companyType->type_description }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- Confirm/Cancel --}}
                                                <div class="modal-footer">
                                                    <a class="btn bg-gradient-success btn-sm mr-auto" href="{{ url('/company-types/delete/'.$companyType->id) }}" role="button">
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
                        <tfoot class="text-center">
                            <tr>
                                <th scope="col">{{ __('page.company-types.th-name') }}</th>
                                <th scope="col">{{ __('page.company-types.th-description') }}</th>
                                <th scope="col">{{ __('page.company-types.th-management') }}</th>
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
            $('#companyTypeTable').DataTable({
                language:{
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_pt.json'
                },
                columnDefs: [
                    { orderable: false, targets: 2 }
                ]
            });
        });
    </script>
@stop
