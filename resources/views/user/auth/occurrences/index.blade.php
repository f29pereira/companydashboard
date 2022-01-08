@extends('adminlte::page')

@section('title', __('page.titles.auth-oc-index'))

@section('content_header')
@stop

@section('content')
    {{-- Permission: Registered User (Company) --}}
    @can('is_user_company')
    <div class="row">
        <div class="col m-3">
            {{-- Card --}}
            <div class="card card-info">
                {{-- Card Header --}}
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        {{-- Return: Occurrences Menu --}}
                        <a href="{{ url('/user/occurrence-menu') }}" data-toggle="tooltip" data-placement="right"
                        title="{{ __('page.link.auth-occurrence-menu') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title">
                            <i class="fas fa-exclamation-triangle fa-lg"></i>&nbsp;&nbsp;&nbsp;
                            {{ $title }}
                        </h3>
                        <div></div>
                    </div>
                </div>
                {{-- /.Card Header --}}

                {{-- Card Body --}}
                <div class="card-body">
                    {{-- Page Tooltip --}}
                    <div class="row">
                        <div class="col mb-3">
                            <i class="far fa-question-circle text-info fa-lg"
                            data-toggle="tooltip" data-placement="right"
                            title="{{ $tooltip }}"></i>
                        </div>
                    </div>
                    {{-- Page Tooltip --}}

                    {{-- Table --}}
                    <table class="table table-hover table-responsive-md" id="authOccurrencesTable">
                        {{-- Table Header --}}
                        <thead class="text-center">
                            <th scope="col">{{ __('oc.auth.th-title') }}</th>
                            <th scope="col">{{ __('oc.auth.th-created_at') }}</th>
                            {{-- Permission: Department Head --}}
                            @can('is_department_head')
                            <th scope="col">{{ __('oc.auth.th-company') }}</th>
                            @endcan
                            {{-- /.Permission: Department Head --}}
                            <th class="no-sort" scope="col">{{ __('oc.auth.th-management') }}</th>
                        </thead>
                        {{-- /.Table Header --}}

                        {{-- Table Body --}}
                        <tbody class="text-center">
                            @foreach ($occurrences as $oc)
                            <tr>
                                <td>{{ $oc->oc_title }}</td>
                                <td>{{ $oc->created_at }}</td>
                                {{-- Permission: Department Head --}}
                                @can('is_department_head')
                                <td>{{ $oc->company->company_name }}</td>
                                @endcan
                                {{-- /.Permission: Department Head --}}
                                <td>
                                    <div class="row">
                                        <div class="col-md-12 mb-1">
                                            {{-- Show Occurrence --}}
                                            <a class="btn bg-gradient-success btn-sm" href="{{ url('/user/occurrences/show/'.$oc->id) }}"
                                                role="button" data-toggle="tooltip" data-placement="bottom"
                                                title="{{ __('oc.auth.tip-show-btn') }}">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                            {{-- /.Show Occurrence --}}
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        {{-- /.Table Body --}}

                        {{-- Table Footer --}}
                        <tfoot class="text-center">
                            <th>{{ __('oc.auth.th-title') }}</th>
                            <th>{{ __('oc.auth.th-created_at') }}</th>
                            {{-- Permission: Department Head --}}
                            @can('is_department_head')
                            <th>{{ __('oc.auth.th-company') }}</th>
                            @endcan
                            {{-- /.Permission: Department Head --}}
                            <th>{{ __('oc.auth.th-management') }}</th>
                        </tfoot>
                        {{-- /.Table Footer --}}
                    </table>
                    {{-- /.Table --}}
                </div>
                {{-- /.Card Body --}}
            </div>
            {{-- /.Card --}}
        </div>
    </div>
    @endcan
    {{-- Permission: Registered User (Company) --}}
@stop

@section('css')
    <link rel="stylesheet" href="{{ url('/css/my_style.css') }}">
@stop

@section('js')
    <script>
        $(document).ready( function () {
            $('#authOccurrencesTable').DataTable({
                /*
                language:{
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_pt.json'
                },*/
                columnDefs: [
                    //{ orderable: false, targets: 2 }
                    { orderable: false, targets: 'no-sort' }
                ]
            });
        });
    </script>
@stop
