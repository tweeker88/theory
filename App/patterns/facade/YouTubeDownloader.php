<?php

namespace App\patterns\facade;


use App\patterns\facade\Api\FFMpeg;
use App\patterns\facade\Api\YouTube;

class YouTubeDownloader
{
    protected $youtube;
    protected $ffmpeg;

    public function __construct(string $youtubeKey)
    {
        $this->youtube = new YouTube($youtubeKey);
        $this->ffmpeg = new FFMpeg();
    }

    public function downloadVideo(): void
    {
        $title = $this->youtube->fetchVideo();

        $this->youtube->saveAs($title);

        $this->ffmpeg->open('video.jpg');

    }


}