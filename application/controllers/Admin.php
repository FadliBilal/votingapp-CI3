<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{
	public function index()
	{
		if (isset($_POST['login'])) {

			$user 	= strip_tags($this->input->post('user'));
			$pass 	= md5(strip_tags($this->input->post('pass')));

			$check 	= $this->db->get_where('usersadm', array('username' => $user, 'password' => $pass));

			if ($check->num_rows() == 1) {
				$data = $check->row_array();
				$this->session->set_userdata(array(
					'status_login'	=> 'Oke',
					'id_login'		=> $data['id_login'],
					'username'		=> $data['username'],
					'nama_lengkap'	=> $data['nama_lengkap'],
					'level'			=> $data['level'],
				));
				if ($this->session->level == 'voter') {
					redirect('dashboard/pilihkandidat');
				} else {
					redirect('dashboard');
				}
			} else {
				$this->session->set_flashdata('message', 'Wrong Username or Password');
				redirect('admin');
			}
		} else {

			$this->load->view('_login');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}
}
