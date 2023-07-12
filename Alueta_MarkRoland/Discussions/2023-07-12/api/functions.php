<?php

function createResponse($status, $title, $description)
{
    return array(
        'status' => $status,
        'title' => $title,
        'description' => $description
    );
}