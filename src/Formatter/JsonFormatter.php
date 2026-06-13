<?php

namespace Differ\Formatter\Json;

function json(array $diff): string
{
    $json = json_encode($diff, JSON_PRETTY_PRINT);
    if ($json === false) {
        throw new \Exception("Failed to encode to JSON: " . json_last_error_msg());
    }
    return $json;
}
