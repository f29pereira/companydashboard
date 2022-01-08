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
                                            <span data-toggle="modal" data-target="#showOccurrence-{{ $oc->id }}">
                                                <button type="button" class="btn bg-gradient-success btn-sm"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="{{ __('oc.auth.tip-show-btn') }}">
                                                    <i class="fas fa-info-circle"></i>
                                                </button>
                                            </span>
                                            {{-- /.Show Occurrence --}}
                                        </div>
                                    </div>

                                    {{-- Occurrence Details Modal --}}
                                    <div class="modal fade" id="showOccurrence-{{ $oc->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg" role="document">
                                            {{-- Modal Content --}}
                                            <div class="modal-content">
                                                {{-- Modal Header --}}
                                                <div class="modal-header bg-info text-center">
                                                    <h5 class="modal-title w-100" id="deleteModalLabel">
                                                        <i class="fas fa-info-circle"></i>&nbsp;&nbsp;&nbsp;
                                                        {{ __('oc.auth.show-title') }}
                                                    </h5>
                                                    {{-- Close Button --}}
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i class="fas fa-times text-white"></i>
                                                    </button>
                                                    {{-- /.Close Button --}}
                                                </div>
                                                {{-- /.Modal Header --}}

                                                {{-- Modal Body --}}
                                                <div class="modal-body">
                                                    {{-- Occurrence Data --}}
                                                    <div class="row">
                                                        {{-- Occurrence Title --}}
                                                        <div class="col-md-12">
                                                            <p>
                                                                <i class="fas fa-heading fa-lg text-info"></i>&nbsp;
                                                                <strong>{{ __('oc.auth.show-oc_title') }}</strong>
                                                            </p>
                                                            <p>{{ $oc->oc_title }}</p>
                                                        </div>
                                                        {{-- /.Occurrence Title --}}
                                                    </div>
                                                    <div class="row">
                                                        {{-- Occurrence Description --}}
                                                        <div class="col-md-12">
                                                            <p>
                                                                <i class="fas fa-align-justify fa-lg text-info"></i>&nbsp;
                                                                <strong>{{ __('oc.auth.show-description') }}</strong>
                                                            </p>
                                                            {!! $oc->oc_description !!}
                                                        </div>
                                                        {{-- /.Occurrence Description --}}
                                                    </div>
                                                    <div class="row">
                                                        {{-- Occurrence Send Date --}}
                                                        <div class="col-md-4">
                                                            <p>
                                                                <i class="far fa-calendar-alt fa-lg text-info"></i>&nbsp;
                                                                <strong>{{ __('oc.auth.show-created_at') }}</strong>
                                                            </p>
                                                            <p>{{ $oc->created_at }}</p>
                                                        </div>
                                                        {{-- /.Occurrence Send Date --}}

                                                        {{-- Occurrence Resolution State --}}
                                                        <div class="col-md-4">
                                                            <p>
                                                                <i class="fas fa-check fa-lg text-info"></i>&nbsp;
                                                                <strong>{{ __('oc.auth.show-state') }}</strong>
                                                            </p>
                                                            <p>{{ $oc->resolutionState->state_name }}</p>
                                                        </div>
                                                        {{-- /.Occurrence Resolution State --}}

                                                        {{-- Permission: Department Head --}}
                                                        @can('is_department_head')
                                                        <div class="col-md-4">
                                                            <p>
                                                                <i class="far fa-building fa-lg text-info"></i>&nbsp;
                                                                <strong>{{ __('oc.auth.show-client') }}</strong>
                                                            </p>
                                                            <p>{{ $oc->company->company_name }}</p>
                                                        </div>
                                                        @endcan
                                                        {{-- /.Permission: Department Head --}}
                                                    </div>
                                                    {{-- /.Occurrence Data --}}
                                                </div>
                                                {{-- /.Modal Body --}}
                                            </div>
                                            {{-- /.Modal Content --}}
                                        </div>
                                    </div>
                                    {{-- /.Occurrence Details Modal --}}
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
