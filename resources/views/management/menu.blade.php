@extends('adminlte::page')

@section('title', __('page.titles.management-menu'))

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
                            {{-- Return: Home --}}
                            <a href="{{ url('/home') }}" data-toggle="tooltip"
                            data-placement="right" title="{{ __('page.link.home') }}">
                                <i class="fas fa-home fa-lg"></i>
                            </a>
                            {{-- Card Title --}}
                            <h3 class="card-title">
                                <i class="fas fa-th fa-lg"></i>&nbsp;&nbsp;&nbsp;
                                {{ __('page.management-menu.index-title') }}
                            </h3>
                            <div></div>
                        </div>
                    </div>
                    {{-- /.Card Header --}}

                    {{-- Card Body --}}
                    <div class="card-body">
                        <div class="row">
                            {{-- Company --}}
                            <div class="col">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                      <h3>{{ $companies }}</h3>
                                      <p>{{ __('page.management-menu.registered-companies') }}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="far fa-building text-white"></i>
                                    </div>
                                    <a href="{{ url('/companies/menu') }}" class="small-box-footer">
                                      {{ __('page.generic.moreInfo') }} <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                  </div>
                            </div>
                            {{-- /.Company --}}

                            {{-- Departments --}}
                            <div class="col">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                      <h3>{{ $departments }}</h3>
                                      <p>{{ __('page.management-menu.registered-departments') }}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-user-tie text-white"></i>
                                    </div>
                                    <a href="{{ url('/departments/index') }}" class="small-box-footer">
                                        {{ __('page.generic.moreInfo') }} <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                  </div>
                            </div>
                            {{-- /.Departments --}}

                            {{-- Occurrences --}}
                            <div class="col">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h3>{{ $occurrences }}</h3>
                                        <p>{{ __('page.management-menu.registered-occurrences') }}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-exclamation-triangle text-white"></i>
                                    </div>
                                    <a href="{{ url('/occurrences/index') }}" class="small-box-footer">
                                        {{ __('page.generic.moreInfo') }} <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            {{-- /.Occurrences --}}
                        </div>
                    </div>
                    {{-- /.Card Body --}}
                </div>
                {{-- /.Card --}}
            </div>
        </div>
    @endcan
    {{-- /.Permisson: Administrator --}}
@endsection
