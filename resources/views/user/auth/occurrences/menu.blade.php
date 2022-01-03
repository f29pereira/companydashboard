@extends('adminlte::page')

@section('title', '')

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
                            {{-- Return: Home --}}
                            <a href="{{ url('/home') }}" data-toggle="tooltip" data-placement="right"
                            title="{{ __('page.link.home') }}">
                                <i class="fas fa-home fa-lg"></i>
                            </a>
                            {{-- Card Title --}}
                            <h3 class="card-title">
                                <i class="fas fa-exclamation-triangle fa-lg"></i></i>&nbsp;&nbsp;&nbsp;
                                {{ __('occurrences.menu.card-title') }}
                            </h3>
                            <div></div>
                        </div>
                    </div>
                    {{-- /.Card Header --}}

                    {{-- Card Body --}}
                    <div class="card-body">
                        {{-- Add Ocurrence --}}
                        <div class="row">
                            <div class="col-md-3 mb-3">
                                <a class="btn bg-gradient-success btn-sm" href="" role="button"
                                data-toggle="tooltip" data-placement="right" title="{{ __('occurrences.tip-add') }}">
                                    <i class="far fa-plus-square fa-lg"></i>&nbsp;&nbsp;
                                    {{ __('occurrences.add-title') }}
                                </a>
                            </div>
                        </div>
                        {{-- /.Add Ocurrence --}}

                        {{-- Occurrences --}}
                        <div class="row">
                            {{-- Not solved --}}
                            <div class="col">
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h3>0</h3>
                                        <p>{{ __('occurrences.auth-menu.registered-not_solved') }}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                    <a href="{{ url('/occurrences/index') }}" class="small-box-footer">
                                        {{ __('page.generic.moreInfo') }}
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            {{-- /.Not solved --}}

                            {{-- Solving --}}
                            <div class="col">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h3>0</h3>
                                        <p>{{ __('occurrences.auth-menu.registered-solving') }}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                    <a href="{{ url('/occurrences/index') }}" class="small-box-footer">
                                        {{ __('page.generic.moreInfo') }}
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            {{-- /.Solving --}}

                            {{-- Solved --}}
                            <div class="col">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h3>0</h3>
                                        <p>{{ __('occurrences.auth-menu.registered-solved') }}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                    <a href="{{ url('/occurrences/index') }}" class="small-box-footer">
                                        {{ __('page.generic.moreInfo') }}
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            {{-- /.Solved --}}
                        </div>
                        {{-- /.Occurrences --}}
                    </div>
                    {{-- /.Card Body --}}
                </div>
                {{-- /.Card --}}
            </div>
        </div>
    @endcan
    {{-- Permission: Registered User (Company) --}}
@endsection
