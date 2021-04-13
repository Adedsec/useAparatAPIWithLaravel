<?php

return [
    'mostViewedVideosUrl' => 'https://www.aparat.com//etc/api/mostviewedvideos',
    'loginUrl' => 'https://www.aparat.com/etc/api/login/luser/{user}/lpass/{password}',
    'user' => env('APARAT_USER', ''),
    'password' => env('APARAT_PASSWORD', ''),
    'formUploadUrl' => 'https://www.aparat.com/etc/api/upload%E2%80%8Bform/luser/{user}/ltoken/{token}',
    'deleteVideoUrl' => 'https://www.aparat.com/etc/api/deletevideolink/videohash/{uid}/luser/{user}/ltoken/{token}',
    'showVideoUrl' => 'https://www.aparat.com/etc/api/video/videohash/{uid}'

];
