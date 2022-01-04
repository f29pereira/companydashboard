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
                        {{-- Return: Management --}}
                        <a href="{{ url('/management/menu') }}" data-toggle="tooltip" data-placement="right"
                        title="{{ __('page.link.management-menu') }}">
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

                    {{-- Table --}}
                    <table class="table table-hover table-responsive-md" id="occurrencesTable">
                        {{-- Table Head --}}
                        <thead class="text-center">
                            <th scope="col">{{ __('occurrences.th-user') }}</th>
                            <th scope="col">{{ __('occurrences.th-title') }}</th>
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
                                <td>{{ $occurrence->occurrence_title }}</td>
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
                    { orderable: false, targets: 3 }
                ]
            });
        });
    </script>
@stop
