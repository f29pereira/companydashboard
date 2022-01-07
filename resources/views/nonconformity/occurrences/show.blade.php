@extends('adminlte::page')

@section('title', __('page.titles.occurrences-show'))

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
                        {{-- Return: Occurrences List --}}
                        <a href="{{ url('/occurrences/index') }}" data-toggle="tooltip" data-placement="right"
                        title="{{ __('page.link.occurrence-index') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title">
                            <i class="fas fa-info-circle fa-lg"></i>&nbsp;&nbsp;&nbsp;
                            {{ __('oc.show-title') }}
                        </h3>
                        <div></div>
                    </div>
                </div>
                {{-- /.Card Header --}}

                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            {{-- Occurrence Title --}}
                            <div class="col mb-3">
                                <h4>
                                    <i class="fas fa-heading text-info"></i>&nbsp;
                                    <strong>{{ __('oc.show-occurrence_title') }}</strong>
                                </h4>
                                <p>{{ $occurrence->oc_title }}</p>
                            </div>
                            {{-- /.Occurrence Title --}}

                            {{-- Occurrence Description --}}
                            <div class="col mb-3">
                                <h4>
                                    <i class="fas fa-align-justify text-info"></i>&nbsp;
                                    <strong>{{ __('oc.show-description') }}</strong>
                                </h4>
                                {!! $occurrence->oc_description !!}
                            </div>
                            {{-- /.Occurrence Description --}}
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                {{-- Occurrence User --}}
                                <div class="col mb-3">
                                    <div class="text-center">
                                        <h4>
                                            <i class="fas fa-user text-info"></i>&nbsp;
                                            <strong>{{ __('oc.show-user') }}</strong>
                                        </h4>
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
                                </div>
                                {{-- /.Occurrence User --}}

                                {{-- Occurrence Creation Date --}}
                                <div class="col mb-3">
                                    <div class="text-center">
                                        <h4>
                                            <i class="far fa-calendar-alt text-info"></i>&nbsp;
                                            <strong>{{ __('oc.show-created_at') }}</strong>
                                        </h4>
                                        <p>{{ $occurrence->created_at }}</p>
                                    </div>
                                </div>
                                {{-- /.Occurrence Creation Date --}}
                            </div>

                            <div class="row">
                                {{-- Occurrence Resolution State --}}
                                <div class="col mb-3">
                                    <div class="text-center">
                                        <h4>
                                            <i class="fas fa-check text-info"></i>&nbsp;
                                            <strong>{{ __('oc.show-state') }}</strong>
                                        </h4>
                                        <p>{{ $occurrence->resolutionState->state_name }}</p>
                                    </div>
                                </div>
                                {{-- /.Occurrence Resolution State --}}

                                {{-- Occurrence Company --}}
                                @if ($occurrence->company_id != null)
                                <div class="col mb-3">
                                    <div class="text-center">
                                        <h4>
                                            <i class="far fa-building text-info"></i>&nbsp;
                                            <strong>{{ __('oc.show-client') }}</strong>
                                        </h4>
                                        <p>{{ $occurrence->company->company_name }}</p>
                                    </div>
                                </div>
                                @endif
                                {{-- /.Occurrence Company --}}
                            </div>
                        </div>
                    </div>
                </div>
                {{-- /.Card Body --}}
            </div>
            {{-- /.Card --}}
        </div>
    </div>
    @endcan
    {{-- /.Permisson: Administrator --}}
@stop
