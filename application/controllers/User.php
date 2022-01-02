<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// echo 'test';
		$this->load->view('frontend/index.html');
	}

	public function test()
	{
		$this->load->database();

		$query = $this->db->query('SELECT * FROM users');
		
		$resArray = [];

		foreach ($query->result() as $row)
		{
				$tempRow['id'] = $row->id;
				$tempRow['name'] = $row->name;
				$tempRow['age'] = $row->age;

				array_push($resArray, $tempRow);
		}

		$this->response($resArray, 200);
		// $data = $this->security->xss_clean($data);

		// $res = array('status' => $data);

		// $this->response($res, 200);
	}

	public function getUserInfo($userId)
	{
		$data = array('id' => $userId, 'name' => 'choikt', 'age' => 27);

		$this->response($data, 200);
	}

	public function putUser($userId)
	{
		$data = array(
			'method' => 'put',
			'userId' => $userId
		);

		$this->response($data, 200);
	}

	public function getUserBoardList($userId)
	{
		$data = array('userId' => $userId, 'boardList' => []);

		$this->response($data, 200);
	}

	public function getUserBoardInfo($userId, $boardId)
	{
		$data = array('id' => $userId, 'boardId' => $boardId);

		$this->response($data, 200);
	}
}
