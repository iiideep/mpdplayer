<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>vidstack Live</title>
  <link rel="stylesheet" href="https://cdn.vidstack.io/player/theme.css" />
  <link rel="stylesheet" href="https://cdn.vidstack.io/player/video.css" />
  <style>
   html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      background-color: #000;
      overflow: hidden;
    }
  
   #target {
      width: 100vw;
      height: 100vh;
    }

   #target video {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

  </style>
</head>

<body>
<div id="target"></div>
<script type="module">
import { VidstackPlayer, VidstackPlayerLayout } from 'https://cdn.vidstack.io/player.core';

async function initPlayer() {
  const layout = new VidstackPlayerLayout({
    thumbnails: 'https://files.vidstack.io/sprite-fight/thumbnails.vtt',
  });

  const player = await VidstackPlayer.create({
    target: '#target',
    viewType: 'video',
    streamType: 'on-demand',
    logLevel: 'warn',
    crossOrigin: true,
    playsInline: true,
    title: 'Sprite Fight',
    src: 'https://files.vidstack.io/sprite-fight/hls/stream.m3u8',
    layout,
  });
}
initPlayer();
</script>
</body>
</html>
