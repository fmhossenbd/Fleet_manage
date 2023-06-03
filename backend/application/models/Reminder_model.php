<?php
class Reminder_model extends CI_Model
{
    public function list()
    {
        return $this->db->get('reminder')->result();
        // return $this->db->select('id,name')->get('vehicles')->result();
    }
    public function vehilelist()
    {
        return $this->db->get('vehicles')->result();
        // return $this->db->select('id,name')->get('vehicles')->result();
    }

    public function savereminder($data)
    {
        $this->db->insert('reminder',['vehicles_id'=>$data['vehicles_id'],'date'=>$data['date'],'message'=>$data['message']]);
        // $last_id=$this->db->insert_id();
        // $this->db->insert('customers',['admin_id'=>$last_id,'name'=>$data['name'],'email'=>$data['email'],'phone'=>$data['phone'],'address'=>$data['address'],'status'=>$data['status']]);
    }
    public function deletecustomers($id)
    {
        $this->db->where('id',$id)->delete('admin');
        $this->db->where('admin_id',$id)->delete('customers');
    }

     public function getadmin()
    {
        return $this->db->get('admin')->result();
    }
}
