	<?php 
	//variables
	$playerfolder = '../data/player/';
	?>
    <style>
      p { clear: both; }
    </style>
    <?php echo '<script src="'.$playerfolder.'/audio.min.js"></script>'; ?>
    <script>
      audiojs.events.ready(function() {
        var audios = document.getElementsByTagName('audio');

        var a1 = audiojs.create(audios[0], {
          css: false,
          createPlayer: {
            markup: false,
            playPauseClass: 'play-pauseZ',
            scrubberClass: 'scrubberZ',
            progressClass: 'progressZ',
            loaderClass: 'loadedZ',
            timeClass: 'timeZ',
            durationClass: 'durationZ',
            playedClass: 'playedZ',
            errorMessageClass: 'error-messageZ',
            playingClass: 'playingZ',
            loadingClass: 'loadingZ',
            errorClass: 'errorZ'
          }
        });

        var a2 = audiojs.create(audios[1]);
/*
        var a3 = audiojs.create(audios[2], {
          createPlayer: {
            markup: '\
              <div class="play-pause"> \
                <p class="play"></p> \
                <p class="pause"></p> \
                <p class="loading"></p> \
                <p class="error"></p> \
              </div> \
              <div class="scrubber"> \
                <div class="progress"></div> \
                <div class="loaded"></div> \
              </div> \
              <div class="time"> \
                <em class="played">00:00</em>/<strong class="duration">00:00</strong> \
              </div> \
              <div class="error-message"></div>',
            playPauseClass: 'play-pause',
            scrubberClass: 'scrubber',
            progressClass: 'progress',
            loaderClass: 'loaded',
            timeClass: 'time',
            durationClass: 'duration',
            playedClass: 'played',
            errorMessageClass: 'error-message',
            playingClass: 'playing',
            loadingClass: 'loading',
            errorClass: 'error'
          });
*/
      });
    </script>
  </head>
  <body>
    <style>
      .audiojsZ audio { position: absolute; left: -1px; }
      .audiojsZ {
position: absolute;
width: 460px;
height: 36px;
overflow: hidden;
font-family: monospace;
font-size: 12px;
bottom: -1px;
left: -10px;
}
      .audiojsZ .play-pauseZ { width: 25px; height: 40px; padding: 4px 6px; margin: 0px; float: left; overflow: hidden; }
      .audiojsZ p { display: none; width: 25px; height: 40px; margin: 0px; cursor: pointer; }
      .audiojsZ .playZ { display: block; }
      .audiojsZ .scrubberZ { position: relative; float: left; width: 160px; background: rgba(255, 255, 255, 0.2); height: 14px; margin: 10px; border-left: 0px; border-bottom: 0px; overflow: hidden; }
      .audiojsZ .progressZ { position: absolute; top: 0px; left: 0px; height: 14px; width: 0px; background: #FF6B00; z-index: 1; }
      .audiojsZ .loadedZ { position: absolute; top: 0px; left: 0px; height: 14px; width: 0px; background: rgba(0, 0, 0, 0.04); }
      .audiojsZ .timeZ {
float: left;
height: 36px;
line-height: 36px;
margin: 20px 0px 0px -135px;
padding: 0px 4px 0px 12px;
color: #FFF;
font-family: visit2;
font-size: 13px;
text-shadow: 0px 0px 2px #000000;
}
      .audiojsZ .timeZ em { padding: 0px 2px 0px 0px; color: #fff; font-style: normal; }
      .audiojsZ .timeZ strong { padding: 0px 0px 0px 2px; font-weight: normal; }
      .audiojsZ .error-messageZ { float: left; display: none; margin: 0px 10px; height: 36px; width: 400px; overflow: hidden; line-height: 36px; white-space: nowrap; color: #fff;
        text-overflow: ellipsis; -o-text-overflow: ellipsis; -icab-text-overflow: ellipsis; -khtml-text-overflow: ellipsis; -moz-text-overflow: ellipsis; -webkit-text-overflow: ellipsis; }
      .audiojsZ .error-messageZ a { color: #eee; text-decoration: none; padding-bottom: 1px; border-bottom: 1px solid #999; white-space: wrap; }

	<?php echo "
      .audiojsZ .playZ { background: url('$playerfolder/player-graphics.gif') -2px -1px no-repeat; }
      .audiojsZ .loadingZ { background: url('$playerfolder/player-graphics.gif') -2px -31px no-repeat; }
      .audiojsZ .errorZ { background: url('$playerfolder/player-graphics.gif') -2px -61px no-repeat; }
      .audiojsZ .pauseZ { background: url('$playerfolder/player-graphics.gif') -2px -91px no-repeat; }
	"; ?>
	  
      .playingZ .playZ, .playingZ .loadingZ, .playingZ .errorZ { display: none; }
      .playingZ .pauseZ { display: block; }

      .loadingZ .playZ, .loadingZ .pauseZ, .loadingZ .errorZ { display: none; }
      .loadingZ .loadingZ { display: block; }

      .errorZ .timeZ, .errorZ .playZ, .errorZ .pauseZ, .errorZ .scrubberZ, .errorZ .loadingZ { display: none; }
      .errorZ .errorZ { display: block; }
      .errorZ .play-pauseZ p { cursor: auto; }
      .errorZ .error-messageZ { display: block; }
    </style>
	  
    <div class="audiojsZ">
      <audio src="./mp3/test.mp3" preload="false"></audio>
      <div class="play-pauseZ">
        <p class="playZ"></p>
        <p class="pauseZ"></p>
        <p class="loadingZ"></p>
        <p class="errorZ"></p>
      </div>
      <div class="scrubberZ">
        <div class="progressZ"></div>
        <div class="loadedZ"></div>
      </div>
      <div class="timeZ">
        <em class="playedZ"></em>/<strong class="durationZ"></strong> 
      </div>
      <div class="error-messageZ"></div>
    </div>
  </body>
</html>
