<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta name="csrf-token" content="{{ csrf_token() }}">
       <title>Pensjonat Bakster</title>
       <link rel="icon" type="image/x-icon" href="/logo.ico">
       <link rel="shortcut icon" href="/logo.ico">
       @vite(['resources/css/app.css', 'resources/js/app.js'])
   </head>

   <body class="">
       <div id="app" >
       </div>
   </body>
</html>
