<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>musicbox</title>
    <link rel="stylesheet" type="text/css" href="assets/css/musicbox.css"/>
  </head>
  <body>
    <button id="play">Play</button>
    <div class="container">
      <div class="input" data-key-code="65">
        A
      </div>
      <div class="input" data-key-code="90">
        Z
      </div>
    </div>
    <div class="samples">
      <audio data-key-code="65" src="assets/samples/kick.mp3"/>
      <audio data-key-code="90" src="assets/samples/saxo.mp3"/>
    </div>
  </body>
  <script type="text/javascript" src="assets/js/musicbox.js"></script>
</html>
