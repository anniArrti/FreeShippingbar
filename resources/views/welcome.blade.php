@extends('shopify-app::layouts.default')
@section('styles')
<meta name="csrf-token" content="{{ csrf_token() }}">
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link
  rel="stylesheet"
  href="https://unpkg.com/@shopify/polaris@5.1.0/dist/styles.css"
/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  .form-control:focus {
    color: #495057;
    background-color: #fff;
    border-color: #80bdff;
    outline: 0;
    box-shadow: 0 0 0 0 rgba(0,123,255,.25);
  }
  label {
    font-size: 1.3rem;
  }
  .form-control {
    font-size: 1.5rem;
  }
  .images_C{
    width: 100%;
  }
  </style>
@endsection
@section('content')
<div id="app">
    <router-view></router-view>
</div>
@endsection

@section('scripts')
    @parent
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript"  src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">
        var AppBridge = window['app-bridge'];
        var actions = AppBridge.actions;
        var TitleBar = actions.TitleBar;
        var Button = actions.Button;
        var Redirect = actions.Redirect;
        var titleBarOptions = {
            title: 'Welcome',
        };
        var myTitleBar = TitleBar.create(app, titleBarOptions);
    </script>
@endsection