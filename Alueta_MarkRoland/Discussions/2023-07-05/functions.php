<?php

function createResponse($status, $description, $title, $data = array()) {
    $response = array();
    $response['status'] = $status;
    $response['description'] = $description;
    $response['title'] = $title;
    $response['data'] = $data;
    return $response;
}