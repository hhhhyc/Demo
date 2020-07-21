<?php
function show($status, $message='', $data=[])
{
    return [
        'status' => intval($status),
        'messgae' => $message,
        'data' => $data,
    ];
}