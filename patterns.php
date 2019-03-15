<?php
include __DIR__ . '/vendor/autoload.php';

// -------------Decorator pattern-------------

echo '<br><h2>-------------Decorator pattern-------------</h2><br>';

function displayText(\App\patterns\decorator\InputFormat $inputFormat, string $text)
{
    echo $inputFormat->formatText($text);
}

$input = new \App\patterns\decorator\TextInput();
displayText(new \App\patterns\decorator\TrimTextFilter($input), '<b>Hello</b>');


// -------------Factory pattern-------------

echo '<br><h2>-------------Factory pattern-------------</h2><br>';

$client = new \App\patterns\factory\ClientClass(new \App\patterns\factory\Posters\LinkedInPoster('loginMax', 1234));

$client->post('This is Post');