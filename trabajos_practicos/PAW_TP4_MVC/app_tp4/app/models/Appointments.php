<?php

namespace App\Models;

use App\Core\Model;

class Appointments extends Model
{
    protected $table = 'appointments';

    public function all()
    {
        return $this->db->selectAll($this->table);
    }

    public function get($id)
    {
        return $this->db->find($this->table, $id);
    }

    public function insert(array $appointment_params)
    {
        $this->db->insert($this->table, $appointment_params);
    }

    public function update($id, array $appointment_params)
    {
        $this->db->update($this->table, $id, $appointment_params);
    }

    public function destroy($id)
    {
        $this->db->destroy($this->table, $id);
    }
}
