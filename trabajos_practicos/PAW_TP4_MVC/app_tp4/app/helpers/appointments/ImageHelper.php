<?php

namespace App\Helpers\Appointments;

Class ImageHelper
{
    public static function valid_image_extension($extension)
    {
        $valid_extensions = ["png", "jpg"];
        if (in_array($extension, $valid_extensions)) {
            return TRUE;
        }
        return FALSE;
    }

    public static function valid_image_basename($basename)
    {
        if (isset($basename) && $basename != "") {
            return TRUE;
        }
        return FALSE;
    }

    public static function valid_image_size($size)
    {
        if ($size <= 10000000) {
            return TRUE;
        }
        return FALSE;
    }

    public static function valid_image($extension, $basename, $size)
    {
        return ImageHelper::valid_image_extension($extension) &&
            ImageHelper::valid_image_basename($basename) &&
            ImageHelper::valid_image_size($size);
    }

    public static function image_basename($files)
    {
        return basename($files["diagnostic"]["name"]);
    }

    public static function image_extension($image_basename)
    {
        return strtolower(pathinfo($image_basename, PATHINFO_EXTENSION));
    }

    public static function image_size($files)
    {
        return $files["diagnostic"]["size"];
    }

    public static function image_data($files)
    {
        return file_get_contents($files['diagnostic']['tmp_name']);
    }
}
