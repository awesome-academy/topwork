@extends('clients.layouts.master')
@section('css_client')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/select2/dist/css/select2.min.css') }}" />
@endsection
@include('clients.jobs.partials.jsJob')
@section('content')
@section('breadcrumb_title')
    {{ __('Create Jobs') }}
@endsection
@section('breadcrumb_step')
    <ul>
        <li>&nbsp;&nbsp;&nbsp;&nbsp;{{ __('Create Jobs') }}</li>
    </ul>
@endsection
@include('clients.layouts.breadcrumb')
<div class="jp_adp_main_section_wrapper">
    <div class="container">
        <div class="row">
            {{ Form::open(['url' => route('jobs.store'), 'method' => 'POST', 'class' => 'form-horizontal form-label-left']) }}
            @include('clients.jobs.partials.form')
            {{ Form::close() }}
        </div>
    </div>
</div>
@endsection
