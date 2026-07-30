<?php

if (! function_exists('template')) {
    function template(string $view, array $data = [], array $mergeData = [])
    {
        return view($view, $data, $mergeData);
    }
}
