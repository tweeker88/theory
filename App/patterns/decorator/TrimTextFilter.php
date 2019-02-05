<?php

namespace App\patterns\decorator;


class TrimTextFilter extends TextFormat
{
    public function formatText(string $text): string
    {
        $text = parent::formatText($text);

        return trim($text);
    }
}