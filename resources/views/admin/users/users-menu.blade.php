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
                        <a href="{{ url('/home') }}" data-toggle="tooltip" data-placement="right" title="Home">
                            <i class="fas fa-home fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title"><i class="fas fa-users fa-lg"></i></i>&nbsp;&nbsp;&nbsp;Utilizadores</h3>
                    </div>
                    {{-- Card Body --}}
                    <div class="card-body">
                        <div class="row">
                            {{-- Registed Users --}}
                            <div class="col">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                      <h3>{{ $users }}</h3>
                                      <p>Utilizadores registados</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-users"></i>
                                    </div>
                                    <a href="{{ url('/users/index') }}" class="small-box-footer">
                                      Saber mais <i class="fas fa-arrow-circle-right"></i>
                                    </a>
                                </div>
                            </div>
                            {{-- User Roles --}}
                            <div class="col">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                      <h3>{{ $roles }}</h3>
                                      <p>Roles de Utilizador</p>
                                    </div>
                                    <div class="icon">
                                        <i class="fas fa-users-cog"></i>
                                    </div>
                                    <a href="{{ url('/roles/index') }}" class="small-box-footer">
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
