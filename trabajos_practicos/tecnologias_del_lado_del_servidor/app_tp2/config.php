<?php

//namespace paw\mvc;

class Config
{
    public function __construct()
    {
        $this->document_root = __DIR__;
        $this->database_engine = 'mysql';
    }

    public function getStaticPath($static_name)
    {
        $ext = pathinfo($static_name, PATHINFO_EXTENSION);
        return join_paths("/statics/", $ext, $static_name);
    }
}
