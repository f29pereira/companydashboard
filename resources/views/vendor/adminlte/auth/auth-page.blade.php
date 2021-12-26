@extends('adminlte::master')

@php( $dashboard_url = View::getSection('dashboard_url') ?? config('adminlte.dashboard_url', 'home') )

@if (config('adminlte.use_route_url', false))
    @php( $dashboard_url = $dashboard_url ? route($dashboard_url) : '' )
@else
    @php( $dashboard_url = $dashboard_url ? url($dashboard_url) : '' )
@endif

@section('adminlte_css')
    @stack('css')
    @yield('css')
@stop

@section('classes_body'){{ ($auth_type ?? 'login') . '-page' }}@stop

@section('body')
    <style>
        body {
            background-image: url('images/auth/business-meeting.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>

    {{-- Auth --}}
    <div class="{{ $auth_type ?? 'login' }}-box">
        {{-- Card Box --}}
        {{-- <div class="card {{ config('adminlte.classes_auth_card', 'card-outline card-info') }}"> --}}
        <div class="card card-info">
            {{-- Card Header --}}
            @hasSection('auth_header')
            {{-- <div class="card-header {{ config('adminlte.classes_auth_header', '') }}"> --}}
            <div class="card-header d-flex justify-content-center">
                {{-- Logo --}}
                {{-- <img src="{{ asset(config('adminlte.logo_img')) }}" height="50"> --}}
                <h3>{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</h3>
            </div>
            @endif
            {{-- /.Card Header --}}

            {{-- Card Body --}}
                <div class="card-body {{ $auth_type ?? 'login' }}-card-body {{ config('adminlte.classes_auth_body', '') }}">
                    <div class="row">
                        {{-- Language Dropdown --}}
                        <div class="dropdown">
                            @include('adminlte::partials.navbar.dropdown-languague')
                        </div>
                        {{-- /.Language Dropdown --}}

                        {{-- Auth Title --}}
                        <strong>
                            @yield('auth_header')
                        </strong>
                    </div>
                    @yield('auth_body')
                </div>
            {{-- /.Card Body --}}

            {{-- Card Footer --}}
            @hasSection('auth_footer')
                <div class="card-footer {{ config('adminlte.classes_auth_footer', '') }}">
                    @yield('auth_footer')
                </div>
            @endif
            {{-- /.Card Footer --}}
        </div>
    </div>
    {{-- /.Auth --}}
@stop

@section('adminlte_js')
    @stack('js')
    @yield('js')
@stop
