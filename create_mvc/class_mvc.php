<?php

namespace create_mvc\mvc;

class class_mvc
{

    protected $json;
    protected $array;
    protected $path;
    protected $separator;

    function __construct($json, $path)
    {
        $this->path = $path;
        $this->separator = defined('DS') ? DS : DIRECTORY_SEPARATOR;
        $this->set_parm($json); // set json
        $this->parse_resource(); // decode json to array for next work
        $str = $this->create_dir($this->array, $this->path);
        print_r($str);
    }

    protected function parse_resource()
    {
        $json = $this->json;
        $array = json_decode($json, true);
        $this->array = $array;
    }

    protected function set_parm($json)
    {
        $this->json = $json;
    }

    // method create directorys
    protected function create_dir($array, $path = "")
    {
        $str = "";
        foreach ($array as $key => $value) {
            if (is_array($value) && $value) {
                $str .= "\n" . $path . '/' . $key . ' (a)';
                $this->ensure_directory($path . $this->separator . $key);

                // if arr to parse for foreach
                foreach ($value as $key2 => $value2) {

                    // don't array
                    if (!is_array($value2) && $value2) {
                        $str .= "\n" . $path . '/' . $key . '/' . $value2 . ' (b)';
                        $this->ensure_directory($path . $this->separator . $key . $this->separator . $value2);
                    } else {

                        // repost this function
                        $str .= "\n" . $path . '/' . $key . '/' . $key2 . ' (c) - "restart function" ';
                        $this->ensure_directory($path . $this->separator . $key . $this->separator . $key2);
                        $str .= $this->create_dir($value2, $path . '/' . $key . '/' . $key2);
                    }
                }
            } else {
                if ($value) {
                    $str .= "\n" . $path . '/' . $value . ' (d)';
                    $this->ensure_directory($path . $this->separator . $value);
                } else {
                    $str .= "\n" . $path . '/' . $key . ' (e)';
                    $this->ensure_directory($path . $this->separator . $key);
                }
            }
        }
        return $str;
    }

    protected function ensure_directory($directory)
    {
        if (!is_dir($directory)) {
            mkdir($directory, 0755, true);
        }
    }
}
