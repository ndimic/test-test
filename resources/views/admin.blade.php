<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <meta name="csrf-token"
        content="{{ csrf_token() }}">

  <title>{{ config( 'app.name') }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,600"
        rel="stylesheet"
        type="text/css">

  <!-- Default Styles -->
  <link href="{{ 'css/app.css' }}"
        rel="stylesheet">

  <!-- Styles Stack -->
  @stack('styles')
</head>
<body>

<div id="app">
  <admin-component></admin-component>
</div>

<script src="{{ '/js/app.js' }}"></script>

<!-- Stack Scripts -->
@stack('scripts')
</body>
</html>