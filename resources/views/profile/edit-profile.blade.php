@extends('adminlte::page')

@section('title', 'Editar Perfil')

@section('content_header')

@stop

@section('content')
    @can('is_user')
    <div class="row">
        <div class="col m-3">
            {{-- Card --}}
            <div class="card card-info">
                {{-- Card Header --}}
                <div class="card-header d-flex justify-content-between">
                    {{-- Return: Home --}}
                    <a href="{{ url('/user/profile') }}" data-toggle="tooltip" data-placement="right" title="Meu perfil">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title"><i class="fas fa-user-edit fa-lg"></i></i>&nbsp;&nbsp;&nbsp;Editar Meu Perfil</h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="mb-3">
                        <i class="far fa-question-circle text-info fa-lg"
                        data-toggle="tooltip" data-placement="right" title="Editar dados do meu perfil"></i>
                    </div>
                    {{-- Edit User Form --}}
                    <form action="/user/update-profile/{{ $user->id }}" method="POST">
                        @csrf
                        <div class="row">
                            {{-- Name --}}
                            <div class="col-md-4 mb-3">
                                <label for="userName" class="form-label">Nome</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{ $user->name }}" name="name" id="userName">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-user text-info"></i></span>
                                    </div>
                                </div>
                                {{-- Error Message --}}
                                @error('name')
                                    <div><p class="text-danger">{{ $message }}</p></div>
                                @enderror
                            </div>
                            {{-- Email --}}
                            <div class="col-md-4 mb-3">
                                <label for="userEmail" class="form-label">Email</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{ $user->email }}" name="email" id="userEmail">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-envelope text-info"></i></span>
                                    </div>
                                </div>
                                {{-- Error Message --}}
                                @error('email')
                                    <div><p class="text-danger">{{ $message }}</p></div>
                                @enderror
                            </div>
                            {{-- Phone --}}
                            <div class="col-md-4 mb-3">
                                <label for="userPhone" class="form-label">Telefone</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" value="{{ $user->phone }}" name="phone" id="userPhone">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="fas fa-phone text-info"></i></span>
                                    </div>
                                </div>
                                {{-- Error Message --}}
                                @error('phone')
                                    <div><p class="text-danger">{{ $message }}</p></div>
                                @enderror
                            </div>
                        </div>
                        {{-- Role, Department, Company --}}
                        <div class="row" style="display:none">
                            <input type="text" class="form-control" value="{{ $user->user_role_id }}" name="user_role_id" id="">
                            <input type="text" class="form-control" value="{{ $user->department_id }}" name="department_id" id="">
                            <input type="text" class="form-control" value="{{ $user->company_id }}" name="company_id" id="">
                        </div>
                        {{-- Confirm/Cancel --}}
                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn bg-gradient-success btn-sm mr-3"><i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;Confirmar</button>
                                <button type="reset" class="btn bg-gradient-danger btn-sm"><i class="far fa-window-close fa-lg"></i>&nbsp;&nbsp;Cancelar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection