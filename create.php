<?php
include 'create_mvc' . DIRECTORY_SEPARATOR . 'config.php';

use create_mvc\array\arr_to_json_for_mvc;
use create_mvc\mvc\class_mvc;

// create structure
$array['app']['class_model'] = ['work_class', 'function', 'settings'];
$array['app']['page_view'] = ['page_class', 'template' => ['design' => ['css', 'js']]];
$array['app']['work_controller'] = ['work' => ['user', 'admin']];
$array['app']['work_controller']['work']['auth'] = [];
$array['app']['work_controller']['test'] = [];
$array['images'] = [];
$array['css'] = [];
$array['js'] = [];

// only example now
$json_sorce = '
{
    "app": {
        "class_model": [
            "work_class",
            "function",
            "setings"
        ],
        "page_view": {
            "0": "page_class",
            "template": {
                "design": [
                    "css",
                    "js"
                ]
            }
        },
        "work_controller": {
            "work": {
                "0": "user",
                "1": "admin",
                "auth": []
            },
            "test": []
        }
    },
    "images": [],
    "css": [],
    "js": []
}
';

// create dirs
$json = new arr_to_json_for_mvc($array);
$mvc = new class_mvc($json->json, $path);
