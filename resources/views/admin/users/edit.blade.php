@extends('adminlte::page')

@section('title', 'Editar Utilizador')

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
                    {{-- Return: Users Management --}}
                    <a href="{{ url('/users/index') }}" data-toggle="tooltip" data-placement="right" title="{{ __('tooltip.goTo.user-index') }}">
                        <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                    </a>
                     {{-- Card Title --}}
                     <h3 class="card-title"><i class="fas fa-user-edit fa-lg"></i>&nbsp;&nbsp;&nbsp;{{ __('card.users.title-edit') }}</h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="mb-3">
                        <i class="far fa-question-circle text-info fa-lg"
                         data-toggle="tooltip" data-placement="right" title="{{ __('tooltip.users.edit') }}"></i>
                    </div>
                    {{-- Edit User Form --}}
                    <form action="/users/update/{{ $user->id }}" method="POST">
                        @csrf
                        <div class="row">
                            {{-- Name --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userName" class="form-label">Nome</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $user->name }}" name="name" id="userName">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="far fa-address-card fa-lg text-info"></i></span>
                                        </div>
                                    </div>
                                    {{-- Error Message --}}
                                    @error('name')
                                        <div><p class="text-danger">{{ $message }}</p></div>
                                    @enderror
                                </div>
                            </div>
                            {{-- Email --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userEmail" class="form-label">Email</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $user->email }}" name="email" id="userEmail">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-envelope fa-lg text-info"></i></span>
                                        </div>
                                    </div>
                                    {{-- Error Message --}}
                                    @error('email')
                                        <div><p class="text-danger">{{ $message }}</p></div>
                                    @enderror
                                </div>
                            </div>
                            {{-- Phone --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userPhone" class="form-label">Telefone</label>
                                    <div class="input-group">
                                        <input type="text" class="form-control" value="{{ $user->phone }}" name="phone" id="userPhone">
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-phone-alt fa-lg text-info"></i></span>
                                        </div>
                                    </div>
                                    {{-- Error Message --}}
                                    @error('phone')
                                        <div><p class="text-danger">{{ $message }}</p></div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            {{-- Department --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userDepartment" class="form-label">Departamento</label>
                                    <div class="input-group">
                                        <select class="form-control" name="department_id" id="userDepartment">
                                            @foreach ($departments as $department)
                                            <option value="{{ $department->id }}" {{ $user->department_id == $department->id ? 'selected' : '' }}>
                                                {{ $department->department_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-user-tie fa-lg text-info"></i></span>
                                        </div>
                                    </div>
                                    {{-- Error Message --}}
                                    @error('department_id')
                                        <div><p class="text-danger">{{ $message }}</p></div>
                                    @enderror
                                </div>
                            </div>
                            {{-- Role --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userRole" class="form-label">Role de Utilizador</label>
                                    <div class="input-group">
                                        <select class="form-control" name="user_role_id" id="userRole">
                                            @foreach ($roles as $role)
                                            <option value="{{ $role->id }}" {{ $user->user_role_id == $role->id ? 'selected' : '' }}>
                                                {{ $role->role_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <span class="input-group-text"><i class="fas fa-users-cog fa-lg text-info"></i></span>
                                        </div>
                                    </div>
                                    {{-- Error Message --}}
                                    @error('user_role_id')
                                        <div><p class="text-danger">{{ $message }}</p></div>
                                    @enderror
                                </div>
                            </div>
                            {{-- Company --}}
                            <div style="display: none">
                                <input type="text" class="form-control" value="{{ $user->company_id }}" name="company_id" id="userCompany">
                            </div>
                        </div>
                        {{-- Confirm/Cancel --}}
                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn bg-gradient-success btn-sm mr-3">
                                    <i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;{{ __('form.generic.confirmBtn') }}
                                </button>
                                <button type="reset" class="btn bg-gradient-danger btn-sm">
                                    <i class="far fa-window-close fa-lg"></i>&nbsp;&nbsp;{{ __('form.generic.cancelBtn') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection
