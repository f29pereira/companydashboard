@extends('adminlte::page')

@section('title', 'Utilizadores')

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
                    <div class="card-header d-flex justify-content-between">
                        {{-- Return: Home --}}
                        <a href="{{ url('/home') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.home') }}">
                            <i class="fas fa-home fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title">
                            <i class="fas fa-users fa-lg"></i></i>&nbsp;&nbsp;&nbsp;
                            {{ __('page.users-menu.card-title') }}
                        </h3>
                    </div>
                    {{-- Card Body --}}
                    <div class="card-body">
                        <div class="row">
                            {{-- Registed Users --}}
                            <div class="col">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                      <h3>{{ $users }}</h3>
                                      <p>{{ __('page.users-menu.registered-users') }}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-users text-white"></i>
                                    </div>
                                    <a href="{{ url('/users/index') }}" class="small-box-footer">
                                        {{ __('page.generic.moreInfo') }}
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            {{-- User Roles --}}
                            <div class="col">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                      <h3>{{ $roles }}</h3>
                                      <p>{{ __('page.users-menu.registered-roles') }}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-users-cog text-white"></i>
                                    </div>
                                    <a href="{{ url('/roles/index') }}" class="small-box-footer">
                                        {{ __('page.generic.moreInfo') }}
                                        <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan
@endsection
