@extends('adminlte::page')

@section('title', 'Perfil Utilizador')

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
                    <a href="{{ url('/home') }}" data-toggle="tooltip" data-placement="right" title="{{ __('tooltip.goTo.home') }}">
                        <i class="fas fa-home fa-lg"></i>
                    </a>
                    {{-- Card Title --}}
                    <h3 class="card-title"><i class="fas fa-user-circle fa-lg"></i></i>&nbsp;&nbsp;&nbsp;{{ __('card.users.title-profile') }}</h3>
                </div>
                {{-- Card Image --}}
                {{-- <img src="{{ asset('images/cards/officeBanner.jpg') }}" class="card-img-top" alt="Office desk" width="300" height="200"> --}}

                {{-- Smal photo example --}}
                {{-- <img src="{{ asset('images/cards/officeBanner.jpg') }}" class="img-circle elevation-2" alt="Office desk" width="34px" height="34px"> --}}

                {{-- Card Body --}}
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="text-center">
                                <h4><i class="far fa-address-card text-info"></i>&nbsp;<strong>{{ __('form.user.name_label') }}</strong></h4>
                                <p>{{ $user->name }}</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="text-center">
                                <h4><i class="fas fa-envelope text-info"></i>&nbsp;<strong>{{ __('form.user.email_label') }}</strong></h4>
                                <p>{{ $user->email }}</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="text-center">
                                <h4><i class="fas fa-phone-alt text-info"></i>&nbsp;<strong>{{ __('form.user.phone_label') }}</strong></h4>
                                <p>{{ $user->phone }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <div class="text-center">
                                <h4><i class="far fa-building text-info"></i>&nbsp;<strong>{{ __('form.user.company_label') }}</strong></h4>
                                <p>{{ $user->company->company_name }}</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="text-center">
                                <h4><i class="fas fa-user-tie text-info"></i>&nbsp;<strong>{{ __('form.user.department_label') }}</strong></h4>
                                <p>{{ $user->department->department_name }}</p>
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <div class="text-center">
                                <h4><i class="fas fa-users-cog text-info"></i>&nbsp;<strong>{{ __('form.user.role_label') }}</strong></h4>
                                <p>{{ $user->userRole->role_name }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            {{-- Edit Profile --}}
                            <a class="btn bg-gradient-info btn-sm" href="{{ url('/user/edit-profile/'.$user->id) }}"
                            role="button" data-toggle="tooltip" data-placement="right" title="{{ __('tooltip.users.edit-profile-btn') }}">
                                <i class="fas fa-user-edit fa-lg"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan
@endsection
