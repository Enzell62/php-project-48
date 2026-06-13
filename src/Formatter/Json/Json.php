<?php

namespace Differ\Formatter\Json;

function format(array $diffTree): string
{
    return json_encode($diffTree, JSON_PRETTY_PRINT);
}
