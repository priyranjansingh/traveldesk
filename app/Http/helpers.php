<?php

function pre($data, $exit = false) {
    echo "<pre>";
    print_r($data);
    if ($exit) {
        exit;
    }
}