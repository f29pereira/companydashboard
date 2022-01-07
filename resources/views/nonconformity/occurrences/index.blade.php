@extends('adminlte::page')

@section('title', __('page.titles.occurrences-index'))

@section('content_header')
@stop

@section('content')
    {{-- Permission: Administrator --}}
    @can('is_admin')
    <div class="row">
        <div class="col m-3">
            {{-- Card --}}
            <div class="card card-info">
                {{-- Card Header --}}
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        {{-- Return: Ncs/Occurrences Menu --}}
                        <a href="{{ url('/ncs-occurrences/menu') }}" data-toggle="tooltip" data-placement="right"
                        title="{{ __('page.link.ncs-occurrences-menu') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title">
                            <i class="fas fa-exclamation-triangle fa-lg"></i>&nbsp;&nbsp;&nbsp;
                            {{ __('occurrences.index-title') }}
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
                            title="{{ __('occurrences.tip-index') }}"></i>
                        </div>
                    </div>
                    {{-- /.Page Tooltip --}}

                    {{-- Add Occurrence --}}
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <a class="btn bg-gradient-success btn-sm" href="{{ url('/occurrences/create') }}" role="button"
                            data-toggle="tooltip" data-placement="right" title="{{ __('occurrences.tip-add') }}">
                                <i class="far fa-plus-square fa-lg"></i>&nbsp;&nbsp;{{ __('occurrences.add-title') }}
                            </a>
                        </div>
                    </div>
                    {{-- /.Add Occurrence --}}

                    {{-- Table --}}
                    <table class="table table-hover table-responsive-md" id="occurrencesTable">
                        {{-- Table Head --}}
                        <thead class="text-center">
                            <th scope="col">{{ __('occurrences.th-user') }}</th>
                            <th scope="col">{{ __('occurrences.th-title') }}</th>
                            <th scope="col">{{ __('occurrences.th-company') }}</th>
                            <th scope="col">{{ __('occurrences.th-resolution') }}</th>
                            <th scope="col">{{ __('occurrences.th-management') }}</th>
                        </thead>
                        {{-- /.Table Head --}}

                        {{-- Table Body --}}
                        <tbody class="text-center">
                            @foreach ($occurrences as $occurrence)
                            <tr>
                                <td>
                                    @if ($occurrence->user->user_image_id == 1)
                                    {{-- Default User Image --}}
                                    <img src="{{ asset('images/default/'. $occurrence->user->userImage->image_name) }}"
                                        class="user-image img-circle elevation-2"
                                        alt="{{ __('users.alt-picture') }}" width="35" height="35">
                                    {{-- /.Default User Image --}}
                                    @else
                                    {{-- Custom User Image --}}
                                    <img src="{{ asset('storage/users/'. $occurrence->user->userImage->image_name) }}"
                                        class="user-image img-circle elevation-2"
                                        alt="{{ __('users.alt-picture') }}" width="35" height="35">
                                    {{-- /.Custom User Image --}}
                                    @endif
                                    &nbsp;&nbsp;
                                    {{ $occurrence->user->first_name }} {{ $occurrence->user->last_name }}
                                </td>
                                <td>{{ $occurrence->oc_title }}</td>
                                <td>{{ $occurrence->company->company_name }}</td>
                                <td>{{ $occurrence->resolutionState->state_name }}</td>
                                {{-- Occurrence Management --}}
                                <td>
                                    <div class="row">
                                        <div class="col-md-4 mb-1">
                                            {{-- Show Occurrence --}}
                                            <a class="btn bg-gradient-success btn-sm" href="{{ url('/occurrences/show/'.$occurrence->id) }}"
                                                role="button" data-toggle="tooltip" data-placement="bottom"
                                                title="{{ __('occurrences.tip-show-btn') }}">
                                                <i class="fas fa-info-circle"></i>
                                            </a>
                                            {{-- /.Show Occurrence --}}
                                        </div>
                                        <div class="col-md-4 mb-1">
                                            {{-- Edit Occurrence --}}
                                            <a class="btn bg-gradient-warning btn-sm" href="{{ url('/occurrences/edit/'.$occurrence->id) }}"
                                                role="button" data-toggle="tooltip" data-placement="bottom"
                                                title="{{ __('occurrences.tip-edit-btn') }}">
                                                <i class="far fa-edit"></i>
                                            </a>
                                            {{-- /.Edit Occurrence --}}
                                        </div>
                                        <div class="col-md-4 mb-1">
                                            {{-- Delete Occurrence --}}
                                            <span data-toggle="modal" data-target="#deleteOccurrence-{{ $occurrence->id }}">
                                                <button type="button" class="btn bg-gradient-danger btn-sm"
                                                    data-toggle="tooltip" data-placement="bottom"
                                                    title="{{ __('occurrences.tip-delete-btn') }}">
                                                    <i class="far fa-trash-alt"></i>
                                                </button>
                                            </span>
                                            {{-- /.Delete Occurrence --}}
                                        </div>
                                    </div>

                                    {{-- Delete Occurrence Modal  --}}
                                    <div class="modal fade" id="deleteOccurrence-{{ $occurrence->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                {{-- Modal Header --}}
                                                <div class="modal-header bg-danger text-center">
                                                    <h5 class="modal-title w-100" id="deleteModalLabel">
                                                        <i class="far fa-trash-alt"></i>&nbsp;&nbsp;&nbsp;
                                                        {{ __('occurrences.delete-title') }}
                                                    </h5>
                                                </div>
                                                {{-- /.Modal Header --}}

                                                {{-- Modal Body --}}
                                                <div class="modal-body">
                                                    {{-- Modal Tooltip --}}
                                                    <div class="text-left">
                                                        <div class="row">
                                                            <i class="far fa-question-circle text-danger fa-lg"
                                                            data-toggle="tooltip" data-placement="right"
                                                            title="{{ __('occurrences.tip-delete') }}"></i>&nbsp;&nbsp;
                                                        </div>
                                                    </div>
                                                    {{-- /.Modal Tooltip --}}

                                                    {{-- Occurrence Data --}}
                                                    <div class="row">
                                                        {{-- Occurrence Title --}}
                                                        <div class="col-md-6">
                                                            <p>
                                                                <i class="fas fa-heading fa-lg text-danger"></i>&nbsp;
                                                                <strong>{{ __('occurrences.th-title') }}</strong>
                                                            </p>
                                                            <p>{{ $occurrence->oc_title }}</p>
                                                        </div>
                                                        {{-- /.Occurrence Title --}}

                                                        {{-- Occurrence Resolution State --}}
                                                        <div class="col-md-6">
                                                            <p>
                                                                <i class="fas fa-check fa-lg text-danger"></i>&nbsp;
                                                                <strong>{{ __('occurrences.th-resolution') }}</strong>
                                                            </p>
                                                            <p>{{ $occurrence->resolutionState->state_name }}</p>
                                                        </div>
                                                        {{-- /.Occurrence Resolution State --}}
                                                    </div>
                                                    <div class="row">
                                                        {{-- Occurrence User --}}
                                                        <div class="col-md-6">
                                                            <p>
                                                                <i class="fas fa-user fa-lg text-danger"></i>&nbsp;
                                                                <strong>{{ __('occurrences.th-user') }}</strong>
                                                            </p>
                                                            <p>
                                                                @if ($occurrence->user->user_image_id == 1)
                                                                {{-- Default User Image --}}
                                                                <img src="{{ asset('images/default/'. $occurrence->user->userImage->image_name) }}"
                                                                    class="user-image img-circle elevation-2"
                                                                    alt="{{ __('users.alt-picture') }}" width="35" height="35">
                                                                {{-- /.Default User Image --}}
                                                                @else
                                                                {{-- Custom User Image --}}
                                                                <img src="{{ asset('storage/users/'. $occurrence->user->userImage->image_name) }}"
                                                                    class="user-image img-circle elevation-2"
                                                                    alt="{{ __('users.alt-picture') }}" width="35" height="35">
                                                                {{-- /.Custom User Image --}}
                                                                @endif
                                                                &nbsp;&nbsp;
                                                                {{ $occurrence->user->first_name }} {{ $occurrence->user->last_name }}
                                                            </p>
                                                        </div>
                                                        {{-- Occurrence User --}}

                                                        {{-- Occurrence Send Date --}}
                                                        <div class="col-md-6">
                                                            <p>
                                                                <i class="far fa-calendar-alt fa-lg text-danger"></i>&nbsp;
                                                                <strong>{{ __('occurrences.th-title') }}</strong>
                                                            </p>
                                                            <p>{{ $occurrence->created_at }}</p>
                                                        </div>
                                                        {{-- /.Occurrence Send Date --}}


                                                    </div>
                                                    {{-- /.Occurrence Data --}}
                                                </div>
                                                {{-- /.Modal Body --}}

                                                {{-- Confirm/Cancel --}}
                                                <div class="modal-footer">
                                                    <a class="btn bg-gradient-success btn-sm mr-auto" href="{{ url('/occurrences/delete/'.$occurrence->id) }}" role="button">
                                                        <i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;{{ __('page.generic.confirmBtn') }}
                                                    </a>
                                                    <button type="button" class="btn bg-gradient-danger btn-sm" data-dismiss="modal">
                                                        <i class="far fa-window-close fa-lg"></i>&nbsp;&nbsp;{{ __('page.generic.cancelBtn') }}
                                                    </button>
                                                </div>
                                                {{-- /.Confirm/Cancel --}}
                                            </div>
                                        </div>
                                    </div>
                                    {{-- /.Delete Occurrence Modal  --}}
                                </td>
                                {{-- /.Occurrence Management --}}
                            </tr>
                            @endforeach
                        </tbody>
                        {{-- /.Table Body --}}

                        {{-- Table Foot --}}
                        <tfoot class="text-center">
                            <th>{{ __('occurrences.th-user') }}</th>
                            <th>{{ __('occurrences.th-title') }}</th>
                            <th>{{ __('occurrences.th-company') }}</th>
                            <th>{{ __('occurrences.th-resolution') }}</th>
                            <th>{{ __('occurrences.th-management') }}</th>
                        </tfoot>
                        {{-- /.Table Foot --}}
                    </table>
                    {{-- /.Table --}}
                </div>
                {{-- /.Card Body --}}
            </div>
            {{-- /.Card --}}
        </div>
    </div>
    @endcan
    {{-- Permission: Administrator --}}
@stop

@section('css')
    <link rel="stylesheet" href="{{ url('/css/my_style.css') }}">
@stop

@section('js')
    <script>
        $(document).ready( function () {
            $('#occurrencesTable').DataTable({
                /*
                language:{
                    url: '//cdn.datatables.net/plug-ins/1.11.3/i18n/pt_pt.json'
                },*/
                columnDefs: [
                    { orderable: false, targets: 4 }
                ]
            });
        });
    </script>
@stop
