<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>CGD Phonebook</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
  </head>
  <body style="background-color: #333;">
    
    <div id="app">
      <app></app>
      <input type="text" name="text">
      <button id="gspeech" class="say">Say It</button>
      <audio id="player1" src="" class="speech" hidden></audio>
    </div>
    <script type="text/javascript" src="{{asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/responsive-voice.js')}}"></script>
    <script>
            $(document).ready(function(){  
              $('#gspeech').on('click', function(){                      
                  //var text = $('input[name="text"]').val();
                  var text = "ทดสอบ"
                  responsiveVoice.speak("" + text +"", "Thai Female", {volume: 1});
                  <!--  http://responsivevoice.org/ -->
              });            
            });
        </script>
    
  </body>
</html>