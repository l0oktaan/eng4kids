<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>ต้นน้ำ ต้นหอม</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    <link rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css"
      integrity="sha384-OHBBOqpYHNsIqQy8hL1U+8OXf9hH6QRxi0+EODezv82DfnZoV7qoHAZDwMwEJvSw"
      crossorigin="anonymous">
    <style>
    #app{
      height: 100%;
    }
    </style>
  </head>
  <body>
    
    <div id="app">
      <app></app>
    </div>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/responsive-voice.js')}}"></script>
    <script type="text/javascript">
    speakThai = function(text){
      responsiveVoice.speak("" + text +"", "Thai Female", {rate: 0.8, volume: 1});
    }
    speakEng = function(text){
      responsiveVoice.speak("" + text +"", "US English Female", {rate: 0.5, volume: 1});
    }
    </script>
    
  </body>
</html>