<?php

namespace App\Helpers\Appointments;

class ValidationsHelper
{
    public static function valid_name($name)
    {
        return isset($name);
    }

    public static function valid_email($email)
    {
        return isset($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    public static function valid_phone($phone)
    {
        return isset($phone);
    }

    public static function valid_age($age)
    {
        return intval($age) >= 0 && intval($age) <= 110;
    }

    public static function valid_shoes_size($shoes_size)
    {
        if (!(empty($shoes_size))) {
            return intval($shoes_size) >= 20 && intval($shoes_size) <= 45;

        } else {
            return true;
        }
    }

    public static function valid_height($height)
    {
        if (!(empty($height))) {
            return intval($height) >= 30 && intval($height) <= 250;

        } else {
            return true;
        }
    }

    public static function valid_birth_date($birth_date)
    {
        return isset($birth_date) && $birth_date < date("Y-m-d");
    }

    public static function valid_date($date)
    {
        return isset($date) && $date >= date("Y-m-d");
    }

    public static function valid_time($time)
    {
        if (!(empty($time))) {
            $timeComplete = explode(":", $time);
            $minute = $timeComplete[1];
            return intval($minute) == 00 || intval($minute) == 15 || intval($minute) == 30 || intval($minute) == 45;
        } else {
            return true;
        }
    }

    public static function valid_params($mandatory_params)
    {
        if (empty($mandatory_params)) {
            return FALSE;
        } else {
            $flag = TRUE;
            foreach ($mandatory_params as $param => $value) {
                $method_name = "valid_" . $param;
                $flag = $flag && self::$method_name($value);
            }
            return $flag;
        }
    }

    public static function param_errors($mandatory_params)
    {
        if (empty($mandatory_params)) {
            return [];
        } else {
            $errors = [];
            foreach ($mandatory_params as $param => $value) {
                $method_name = "valid_" . $param;
                if (!self::$method_name($value)) {
                    $errors[] = $param;
                }
            }
            return $errors;
        }
    }

    public static function param_errors_message($mandatory_params)
    {
        $errors = self::param_errors($mandatory_params);
        if (empty($errors)) {
            return "";
        } else {
            return "Errors have been found on the following fields: " . implode($errors, ", ");
        }
    }
}