@extends('layouts.dashboard.app')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <h1>@lang('site.clients')</h1>
        <ol class="breadcrumb"....>
            <li><a href="{{route('dashboard.index')}}"><i class="fa fa-dashboard"></i>@lang('site.dashboard')</a></li>
            <li><a href="{{route('dashboard.clients.index')}}">@lang('site.clients')</a></li>
            {{-- <li><a href="{{route('dashboard.orders')}}">@lang('site.orders')</a></li> --}}
            <li class="active">@lang('site.add')</li>
        </ol>
    </section>
    <section class="content">
        <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">@lang('site.add')</h3>
            </div>
              <div class="box-body">
                    
              </div>

          </div>
    </section>
</div>
@endsection
