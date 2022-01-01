@extends('adminlte::page')

@section('title', __('page.titles.users-edit'))

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
                        {{-- Return: Users Management --}}
                        <a href="{{ url('/users/index') }}" data-toggle="tooltip" data-placement="right"
                        title="{{ __('page.link.user-index') }}">
                            <i class="far fa-arrow-alt-circle-left fa-lg"></i>
                        </a>
                        {{-- Card Title --}}
                        <h3 class="card-title">
                            <i class="fas fa-user-edit fa-lg"></i>&nbsp;&nbsp;&nbsp;
                            {{ __('users.edit-title') }}
                        </h3>
                        {{-- Return: Users Menu --}}
                        <a href="{{ url('/users/menu') }}" data-toggle="tooltip" data-placement="right"
                        title="{{ __('page.link.users-menu') }}">
                            <i class="fas fa-users fa-lg"></i>
                        </a>
                    </div>
                </div>
                {{-- /.Card Header --}}

                {{-- Card Body --}}
                <div class="card-body">
                    <div class="mb-3">
                        <i class="far fa-question-circle text-info fa-lg"
                         data-toggle="tooltip" data-placement="right" title="{{ __('page.users.tip-edit') }}"></i>
                    </div>
                    {{-- Edit User Form --}}
                    <form action="/users/update/{{ $user->id }}" method="POST" novalidate>
                        @csrf
                        <div class="row">
                            {{-- First Name --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userFirstName" class="form-label">
                                        {{ __('users.label-first_name') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="first_name" id="userFirstName" class="form-control @error('first_name') is-invalid @enderror"
                                        value="{{ $user->first_name }}" placeholder="{{ __('users.text-first_name') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="far fa-address-card fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- /.First Name --}}
                            {{-- Last Name --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userLastName" class="form-label">
                                        {{ __('users.label-last_name') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="last_name" id="userLastName" class="form-control @error('last_name') is-invalid @enderror"
                                        value="{{ $user->last_name }}" placeholder="{{ __('users.text-last_name') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="far fa-address-card fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- /.Last Name --}}
                        </div>
                        <div class="row">
                            {{-- Email --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userEmail" class="form-label">
                                        {{ __('users.label-email') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="email"  id="userEmail" class="form-control @error('email') is-invalid @enderror"
                                        value="{{ $user->email }}" placeholder="{{ __('users.text-email') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="fas fa-envelope fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- /.Email --}}
                            {{-- Phone --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userPhone" class="form-label">
                                        {{ __('users.label-phone') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="phone" id="userPhone" class="form-control @error('phone') is-invalid @enderror"
                                        value="{{ $user->phone }}" placeholder="{{ __('users.text-phone') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="fas fa-phone-alt fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- /.Phone --}}
                        </div>
                        <div class="row">
                            {{-- Department --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userDepartment" class="form-label">
                                        {{ __('users.label-department') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <select name="department_id" id="userDepartment" class="form-control @error('department_id') is-invalid @enderror">
                                            @if ($user->department_id == 1)
                                            {{-- Default User Department --}}
                                            <option value="">{{ __('users.text-department') }}</option>
                                            @else
                                            {{-- User Department --}}
                                            <option value="{{ $user->department_id }}">{{ $user->department->department_name }}</option>
                                            @endif
                                            @foreach ($departments as $department)
                                            <option value="{{ $department->id }}" {{ $user->department_id == $department->id ? 'selected' : '' }}>
                                                {{ $department->department_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="fas fa-user-tie fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('department_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- /.Department --}}
                            {{-- Profession --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userProfession" class="form-label">
                                        {{ __('users.label-profession') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <input type="text" name="profession" id="userProfession" class="form-control @error('profession') is-invalid @enderror"
                                        value="{{ $user->profession }}" placeholder="{{ __('users.text-profession') }}">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="fas fa-briefcase fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('profession')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- /.Profession --}}
                        </div>
                        <div class="row">
                            {{-- Role --}}
                            <div class="col-md-4 mb-3">
                                <div class="form-group">
                                    <label for="userRole" class="form-label">
                                        {{ __('users.label-role') }}&nbsp;&nbsp;
                                        <i class="fas fa-asterisk text-danger fa-sm"
                                        data-toggle="tooltip" data-placement="right" title="{{ __('page.generic.tip-required') }}"></i>
                                    </label>
                                    <div class="input-group">
                                        <select name="user_role_id" id="userRole" class="form-control @error('user_role_id') is-invalid @enderror">
                                            @foreach ($roles as $role)
                                            <option value="{{ $role->id }}" {{ $user->user_role_id == $role->id ? 'selected' : '' }}>
                                                {{ $role->role_name }}
                                            </option>
                                            @endforeach
                                        </select>
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span><i class="fas fa-users-cog fa-lg text-info"></i></span>
                                            </div>
                                        </div>
                                        {{-- Error Message --}}
                                        @error('user_role_id')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            {{-- /.Role --}}
                        </div>

                        {{-- Role, Department, Company --}}
                        <div class="row" style="display:none">
                            <input type="text" class="form-control" value="{{ $user->user_image_id }}" name="user_image_id" id="">
                            <input type="text" class="form-control" value="{{ $user->company_id }}" name="company_id" id="">
                        </div>

                        {{-- Confirm/Cancel --}}
                        <div class="row">
                            <div class="col-md-3">
                                <button type="submit" class="btn bg-gradient-success btn-sm mr-3">
                                    <i class="far fa-check-square fa-lg"></i>&nbsp;&nbsp;{{ __('page.generic.confirmBtn') }}
                                </button>
                                <button type="reset" class="btn bg-gradient-danger btn-sm">
                                    <i class="far fa-window-close fa-lg"></i>&nbsp;&nbsp;{{ __('page.generic.cancelBtn') }}
                                </button>
                            </div>
                        </div>
                        {{-- /.Confirm/Cancel --}}
                    </form>
                    {{-- /.Edit User Form --}}
                </div>
                {{-- /.Card Body --}}
            </div>
            {{-- /.Card --}}
        </div>
    </div>
    @endcan
    {{-- /.Permisson: Administrator --}}
@endsection
