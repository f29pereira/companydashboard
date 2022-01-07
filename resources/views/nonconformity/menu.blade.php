@extends('adminlte::page')

@section('title', __('page.titles.ncs_occurrences-menu'))

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
                        {{-- Return: Home --}}
                        <a href="{{ url('/home') }}" data-toggle="tooltip" data-placement="right"
                        title="{{ __('nonconformities.menu.registered-ncs') }}">
                            <i class="fas fa-home fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title">
                            <i class="fas fa-users fa-lg"></i></i>&nbsp;&nbsp;&nbsp;
                            {{ __('ncs.menu.card-title') }}
                        </h3>
                        <div></div>
                    </div>
                </div>
                {{-- /.Card Header --}}

                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        {{-- Registered Nonconformities --}}
                        <div class="col">
                            <div class="small-box bg-info">
                                <div class="inner">
                                  <h3>{{ $ncs }}</h3>
                                  <p>{{ __('ncs.menu.registered-ncs') }}</p>
                                </div>
                                <div class="icon">
                                    <i class="far fa-file-alt text-white"></i>
                                </div>
                                <a href="{{ url('/nonconformities/index') }}" class="small-box-footer">
                                    {{ __('page.generic.moreInfo') }}
                                    <i class="fas fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        {{-- /.Registered Nonconformities --}}

                        {{-- Registered Occurrences --}}
                        <div class="col">
                            <div class="small-box bg-info">
                                <div class="inner">
                                  <h3>{{ $occurrences }}</h3>
                                  <p>{{ __('ncs.menu.registered-occurrences') }}</p>
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
                        {{-- /.Registered Occurrences --}}
                    </div>
                </div>
                {{-- /.Card Body --}}
            </div>
            {{-- /.Card --}}
        </div>
    </div>
    @endcan
    {{-- /.Permission: Administrator --}}
@endsection
