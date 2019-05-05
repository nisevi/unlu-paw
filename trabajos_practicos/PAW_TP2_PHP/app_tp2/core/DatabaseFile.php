<?php

/**
 * Database generic object builder
 *
 * API:
 * $db = new DatabaseFile;
 * $db->put('new_data', 'something else to save');
 * $db->save();
 * $some_data = $db->get('new_data');
 */
class DatabaseFile
{
    private $data ;

    public function __construct($database_file = 'data.db', $database_dir = 'db')
    {
        global $app;

        $this->file = $database_file;
        $this->dir = $database_dir;
        $this->fullpath = join_paths($app->config->document_root, $this->dir, $this->file);
        if (!file_exists($this->fullpath)) {
            mkdir(dirname($this->fullpath), 0777, true);
            touch($this->fullpath);
            $this->data = new stdClass; // empty database
            $this->save(); // Genera el archivo vacio
        } else {
            $this->data = $this->load();
        }
    }

    private function load()
    {
        $contents = file_get_contents($this->fullpath);
        $contents = utf8_encode($contents);
        return json_decode($contents);
    }

    public function save()
    {
        $contents = json_encode($this->data);
        $contents = utf8_decode($contents);
        return file_put_contents($this->fullpath, $contents);
    }

    public function get($key = null)
    {
        if (is_null($key) || ! isset($this->data->$key)) {
            return null;
        }
        return $this->data->$key;
    }

    public function put($key, $data)
    {
        if (! $key || ! $data) {
            return null;
        }
        $this->data->$key = $data;
        return $key;
    }

    public function getLastId()
    {
        return count(get_object_vars($this->data));
    }
}
