@extends('adminlte::page')

@section('title', __('page.titles.user_profile-index'))

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
                    <a href="{{ url('/home') }}" data-toggle="tooltip" data-placement="right" title="{{ __('page.link.home') }}">
                        <i class="fas fa-home fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title">
                        <i class="fas fa-user-circle fa-lg"></i>&nbsp;&nbsp;&nbsp;
                        {{ __('page.users.index-profile-title') }}
                    </h3>
                </div>
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        {{-- User Photo --}}
                        <div class="col-md-6">
                            {{-- User Photo --}}
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    @if ($user->image === '')
                                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/users/default-user.png') }}"
                                    alt="{{ __('page.users.alt-picture-default') }}">
                                    @else
                                    <img class="profile-user-img img-fluid img-circle" src="{{ asset('images/users/registered/' . $user->image) }}"
                                    alt="{{ __('page.users.alt-picture') }}">
                                    @endif
                                </div>

                                <h3 class="profile-username text-center">
                                    <i class="far fa-address-card text-info"></i>
                                    {{ $user->name }}
                                </h3>

                                <p class="text-muted text-center">Inserir cargo na empresa</p>
                            </div>
                            {{-- /.User Photo --}}
                        </div>
                        {{-- User Data --}}
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="text-center">
                                        <h4><i class="fas fa-envelope text-info"></i>&nbsp;<strong>{{ __('page.users.label-email') }}</strong></h4>
                                        <p>{{ $user->email }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="text-center">
                                        <h4><i class="fas fa-phone-alt text-info"></i>&nbsp;<strong>{{ __('page.users.label-phone') }}</strong></h4>
                                        <p>{{ $user->phone }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="text-center">
                                        <h4><i class="far fa-building text-info"></i>&nbsp;<strong>{{ __('page.users.label-company') }}</strong></h4>
                                        <p>{{ $user->company->company_name }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="text-center">
                                        <h4><i class="fas fa-user-tie text-info"></i>&nbsp;<strong>{{ __('page.users.label-department') }}</strong></h4>
                                        <p>{{ $user->department->department_name }}</p>
                                    </div>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <div class="text-center">
                                        <h4><i class="fas fa-users-cog text-info"></i>&nbsp;<strong>{{ __('page.users.label-role') }}</strong></h4>
                                        <p>{{ $user->userRole->role_name }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- /.User Data --}}
                    </div>
                    {{-- User Profile Edit Buttons --}}
                    <div class="d-flex justify-content-between">
                        {{-- Edit User Photo --}}
                        <div class="">
                            <a class="btn bg-gradient-info btn-sm" href="{{ url('/user/edit-profile-pic/'.$user->id) }}"
                            role="button" data-toggle="tooltip" data-placement="right" title="{{ __('page.users.tip-edit-profile_pic-btn') }}">
                                <i class="fas fa-camera fa-lg"></i>
                            </a>
                        </div>
                        {{-- /.Edit Profile Photo --}}
                        {{-- Edit User Data --}}
                        <div class="">
                            <a class="btn bg-gradient-info btn-sm" href="{{ url('/user/edit-profile/'.$user->id) }}"
                            role="button" data-toggle="tooltip" data-placement="right" title="{{ __('page.users.tip-edit-profile-btn') }}">
                                <i class="fas fa-user-edit fa-lg"></i>
                            </a>
                        </div>
                        {{-- /.Edit User Data --}}
                    </div>
                    {{-- /.User Profile Edit Buttons --}}
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection
