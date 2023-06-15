<?php

header('Content-type: application/json');
http_response_code(200);

echo json_encode(
    array(
        "message" => "Hello World from Wordpress"
    )
);