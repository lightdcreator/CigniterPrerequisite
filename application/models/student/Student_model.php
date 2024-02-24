<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Student_model extends CI_Model
{
	public function student_data()
	{
		$student_course = $this->students_course();
		return $stud_name = "Mark" .  " Course :" . $student_course;
	}

	private function students_course()
	{
		return $student_course = "CSS";
	}

	public function execute_user($id)
	{
		if ($id == '1') {
			return $result = "User 1";
		} elseif ($id == '2') {
			return $result = "User 2";
		}
	}
}


/* End of file Student_model.php and path \application\models\student\Student_model.php */
