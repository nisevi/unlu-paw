<?php

class Model
{
    private $fields ;
    private $db_handler ;
    private $data ;

    public function __construct(array $data)
    {
        $this->db_handler = DatabaseBuilder::getInstance();
        $this->build($data);
    }

    public function load(int $id)
    {

        $instance = $this->db_handler->get($id);
        $this->build($instance);
    }

    public function set(array $data = [])
    {
        $this->build($data);
        $this->save();
    }

    public function build(array $data = [])
    {
        $this->data = new stdClass ;
        foreach ($fields as $field) {
            $this->data->$field = $data[$field];
        }
    }

    private function save()
    {
        $last_id = $this->db_handler->getLastId();
        $instance = $this->db_handler->put($last_id, $this->data);
    }
}
