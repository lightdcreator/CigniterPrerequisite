<?php
defined('BASEPATH') or exit('No direct script access allowed');


class SampleController extends CI_Controller
{


	//creating function with method name
	public function index()
	{

		echo "I am index located SampleController";
	}


	//creating function with method name
	public function about()
	{

		echo "I am about located @ SampleController";
	}
}
