@extends('adminlte::page')

@section('title', __('page.titles.home'))

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    @can('is_user')
    <div class="row">
        <div class="col m-3">
            {{-- Card --}}
            {{-- /.Card --}}
        </div>
    </div>
    @endcan
@endsection

@section('css')
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@endsection

@section('js')
    {{-- <script> console.log('Hi!'); </script> --}}
@endsection
