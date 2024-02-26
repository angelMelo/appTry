<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style type="text/css" media="print">
      @media print {
      #parte1 {display:none;}
      #parte2 {display:none;}
      #parte3 {display:none;}
      #parte4 {display:none;}
      }
    </style>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <title>{{ $title ?? 'App' }}</title>
      @livewireStyles
    </head>

    <body>

    <x-layouts.nav/>

    <div class="container">

      <x-layouts.alert/>

      {{ $slot }}

    </div>

    <x-layouts.footer/>
      
      <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>M.AutoInit();</script>
      @livewireScripts
    </body>
</html>