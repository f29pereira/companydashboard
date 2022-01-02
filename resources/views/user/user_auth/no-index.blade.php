@extends('adminlte::page')

@section('title', __('page.titles.users-index'))

@section('content_header')
@stop

@section('content')
    {{-- Permisson: Registered User (Company) --}}
    @can('is_user_company')
    <div class="row">
        <div class="col m-3">
            {{-- Card --}}
            <div class="card card-info">
                {{-- Card Header --}}
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        {{-- Return: Home --}}
                        <a href="{{ url('/home') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.home') }}">
                            <i class="fas fa-home fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title">
                            <i class="fas fa-users fa-lg"></i></i>&nbsp;&nbsp;&nbsp;
                            {{ __('users.index-dep-title') }}
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
                            <i class="far fa-question-circle text-info fa-lg" data-toggle="tooltip"
                            data-placement="right" title="{{ __('users.tip-index-dep') }}"></i>
                        </div>
                    </div>
                    {{-- /.Page Tooltip --}}

                    {{-- Message --}}
                    <div>
                        <h4>{{ __('users.no-dep-msg') }}</h4>
                    </div>
                    {{-- /.Message --}}
                </div>
                {{-- /.Card Body --}}
            </div>
            {{-- /.Card --}}
        </div>
    </div>
    @endcan
    {{-- /.Permisson: Registered User (Company) --}}
@endsection
