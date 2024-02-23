<?php
defined('BASEPATH') or exit('No direct script access allowed');


class StudentController extends CI_Controller
{


	public function studentvar()
	{
		$this->load->model('student/Student_model');
		$student = $this->Student_model->student_data();
		echo "Student Name : "  . $student;
	}
}
