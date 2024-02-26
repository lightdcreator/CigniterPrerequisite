<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Employee_model extends CI_Model
{

	public function getemployee()
	{
		$query = $this->db->get('employee');
		return $query->result();
	}


	public function insertemployee($data)
	{
		return $this->db->insert('employee	', $data);
	}


	public function editEmployee($id)
	{


		$query = $this->db->get_where('employee', ['id' => $id]);
		return $query->row();
	}
}


/* End of file Employee_model.php and path \application\models\employee\Employee_model.php */
