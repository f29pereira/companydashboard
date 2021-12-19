@extends('adminlte::page')

@section('title', __('page.titles.user_profile-index'))

@section('content_header')

@stop

@section('content')
    <style>
        .border-width-px {
    border-width:3px !important;
}
    </style>

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
                {{-- /.Card Header --}}
                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        {{-- User Profile Picture --}}
                        <div class="col-md-6 mb-3 p-2">
                            <div class="text-center">
                                @if ($user->user_image_id === 1)
                                {{-- Default Image --}}
                                <img class="rounded-circle border border-width-px border-info"
                                    id="{{ $user->user_image_id }}"
                                    src="{{ asset('images/default/'. $user->userImage->image_name) }}"
                                    alt="{{ __('page.users.alt-picture') }}" width="250" height="250">
                                {{-- /.Default Image --}}
                                @else
                                {{-- Custom Image --}}
                                <img class="rounded-circle border border-width-px border-info"
                                    id="{{ $user->user_image_id }}"
                                    src="{{ asset('storage/users/'. $user->userImage->image_name) }}"
                                    alt="{{ __('page.users.alt-picture') }}" width="250" height="250">
                                {{-- /.Custom Image --}}
                                @endif
                            </div>
                        </div>
                        {{-- /.User Profile Picture --}}
                        {{-- User Data --}}
                        <div class="col-md-6 mb-3 p-2">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    {{-- User Name --}}
                                    <div class="text-center">
                                        <h4><i class="far fa-address-card text-info"></i>&nbsp;<strong>{{ __('page.users.label-name') }}</strong></h4>
                                        <p>{{ $user->first_name . ' ' . $user->last_name }} </p>
                                    </div>
                                    {{-- /.User Name --}}
                                </div>
                                <div class="col-md-4 mb-3">
                                    {{-- User Email --}}
                                    <div class="text-center">
                                        <h4><i class="fas fa-envelope text-info"></i>&nbsp;<strong>{{ __('page.users.label-email') }}</strong></h4>
                                        <p>{{ $user->email }}</p>
                                    </div>
                                    {{-- /.User Email --}}
                                </div>
                                <div class="col-md-4 mb-3">
                                    {{-- User Phone --}}
                                    <div class="text-center">
                                        <h4><i class="fas fa-phone-alt text-info"></i>&nbsp;<strong>{{ __('page.users.label-phone') }}</strong></h4>
                                        <p>{{ $user->phone }}</p>
                                    </div>
                                    {{-- /.User Phone --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    {{-- Company --}}
                                    <div class="text-center">
                                        <h4><i class="far fa-building text-info"></i>&nbsp;<strong>{{ __('page.users.label-company') }}</strong></h4>
                                        <p>{{ $user->company->company_name }}</p>
                                    </div>
                                    {{-- /.Company --}}
                                </div>
                                <div class="col-md-4 mb-3">
                                    {{-- Department --}}
                                    <div class="text-center">
                                        <h4><i class="fas fa-user-tie text-info"></i>&nbsp;<strong>{{ __('page.users.label-department') }}</strong></h4>
                                        <p>{{ $user->department->department_name }}</p>
                                    </div>
                                    {{-- /.Department --}}
                                </div>
                                <div class="col-md-4 mb-3">
                                    {{-- User Profession --}}
                                    <div class="text-center">
                                        <h4><i class="fas fa-briefcase text-info"></i>&nbsp;<strong>{{ __('page.users.label-profession') }}</strong></h4>
                                        <p>{{ $user->profession }}</p>
                                    </div>
                                    {{-- /.User Profession --}}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    {{-- User Role --}}
                                    <div class="text-center">
                                        <h4><i class="fas fa-users-cog text-info"></i>&nbsp;<strong>{{ __('page.users.label-role') }}</strong></h4>
                                        <p>{{ $user->userRole->role_name }}</p>
                                    </div>
                                    {{-- /.User Role --}}
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

@section('css')
    <link rel="stylesheet" href="{{ url('/css/my_style.css') }}">
@stop

@section('js')

@stop
