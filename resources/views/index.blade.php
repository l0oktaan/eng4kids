<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>CGD Phonebook</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
      integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
      crossorigin="anonymous">
  </head>
  <body>
    
    <div id="app">
      <app></app>
    </div>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/responsive-voice.js')}}"></script>
    
    
  </body>
</html>