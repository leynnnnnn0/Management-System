<?php

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function urlIs($uri)
{
    return $uri === parse_url($_SERVER['REQUEST_URI'])['path'];
}