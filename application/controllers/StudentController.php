<?php
defined('BASEPATH') or exit('No direct script access allowed');


class StudentController extends CI_Controller
{

	//Other ways to load data assign value and store
	public function studentvar()
	{
		//shorcut naming for model
		$this->load->model('student/Student_model', 'stud');
		//$student = $this->Student_model->student_data();

		// $student = new Student_model;
		// $student = $student->student_data();

		$student = $this->stud->student_data();

		echo "Student Name : "  . $student;
	}



	//Acessing the parameter
	public function execute($id)
	{

		$this->load->model('student/Student_model', 'stud');
		$select_user = $this->stud->execute_user($id);
		echo $select_user;
	}
}
