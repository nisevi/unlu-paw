<?php

namespace App\Core;

/**
 * Abstract class for handling models
 */
abstract class Model
{
    protected $db = null;

    public function __construct()
    {
        $this->db = App::get('database');
    }
}
