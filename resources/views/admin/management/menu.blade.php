@extends('adminlte::page')

@section('title', 'Menu de Gestão')

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
                        <a href="{{ url('/home') }}" data-toggle="tooltip" data-placement="right" title="Home">
                            <i class="fas fa-home fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title"><i class="fas fa-th fa-lg"></i>&nbsp;&nbsp;&nbsp;{{ __('card.management.title-index') }}</h3>
                    </div>
                    {{-- Card Body --}}
                    <div class="card-body">
                        <div class="row">
                            {{-- Company --}}
                            <div class="col">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                      <h3>{{ $companies }}</h3>
                                      <p>{{ __('card.companies.registered') }}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="far fa-building text-white"></i>
                                    </div>
                                    <a href="{{ url('/companies/menu') }}" class="small-box-footer">
                                      Saber mais <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                  </div>
                            </div>
                            {{-- Departments --}}
                            <div class="col">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                      <h3>{{ $departments }}</h3>
                                      <p>{{ __('card.departments.registered') }}</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-user-tie text-white"></i>
                                    </div>
                                    <a href="{{ url('/departments/index') }}" class="small-box-footer">
                                        Saber mais <i class="fas fa-arrow-circle-right"></i>
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
