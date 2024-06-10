<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __Construct()
	{
		parent::__Construct();
		$this->load->helper('login');
		cek_login();
		$this->load->library('Tanggalkonversi');
		$this->load->library('Seo_1');
		$this->load->library('encrypt');
	}
	// Halaman Index Back End
	public function index()
	{
		$this->db->limit(1);
		$set = $this->db->get('seting')->row_array();
		$seting = $set['periode'];

		$data['kandidat']	= 	$this->db->get_where('kandidat', array('periode' => $seting))->result();
		$this->template->load('back-end/_template', 'back-end/_dashboard', $data);
	}
	// End Back end

	public function hasil()
	{
		$this->db->limit(1);
		$set = $this->db->get('seting')->row_array();
		$seting = $set['periode'];
		$tampil = $set['tampil'];
		$data['tampil']		= $tampil;
		$data['kandidat']	= $this->db->get_where('v_hasil_vote', array('periode' => $seting))->result();
		$data['jmlpilih']	= $this->db->get('pilih')->num_rows();

		$this->template->load('back-end/_template', 'back-end/_hasil', $data);
	}

	public function browser()
	{
		$this->db->limit(1);
		$set = $this->db->get('seting')->row_array();
		$seting = $set['periode'];
		$tampil = $set['tampil'];
		if ($tampil == 2 && $this->session->level == 'voter') {

			$browser = $this->db->query('SELECT count(browser) as jumlah, browser as nama from pilih where periode = ' . $seting . ' group by browser')->result();
			echo json_encode($browser);
		} else if ($this->session->level == 'admin') {
			$browser = $this->db->query('SELECT count(browser) as jumlah, browser as nama from pilih where periode = ' . $seting . '  group by browser')->result();
			echo json_encode($browser);
		}
	}

	public function donutkandidat()
	{
		$this->db->limit(1);
		$set = $this->db->get('seting')->row_array();
		$seting = $set['periode'];
		$tampil = $set['tampil'];
		if ($tampil == 2 && $this->session->level == 'voter') {
			$dk = $this->db->query('SELECT totalsuara as jumlah,  nama from v_hasil_vote where periode = ' . $seting . '  group by id_kandidat')->result();
			echo json_encode($dk);
		} else if ($this->session->level == 'admin') {
			$dk = $this->db->query('SELECT totalsuara as jumlah,  nama from v_hasil_vote where periode = ' . $seting . '  group by id_kandidat')->result();
			echo json_encode($dk);
		}
	}

	public function platform()
	{
		$this->db->limit(1);
		$set = $this->db->get('seting')->row_array();
		$seting = $set['periode'];
		$tampil = $set['tampil'];
		if ($tampil == 2 && $this->session->level == 'voter') {
			$pl = $this->db->query('SELECT count(platform) as jumlah, platform as nama from pilih where periode = ' . $seting . '  group by platform')->result();
			echo json_encode($pl);
		} else if ($this->session->level == 'admin') {
			$pl = $this->db->query('SELECT count(platform) as jumlah, platform as nama from pilih where periode = ' . $seting . '  group by platform')->result();
			echo json_encode($pl);
		}
	}

	public function resizeImage($path, $filename)
	{
		$source_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $path . '/' . $filename;
		$target_path = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . $path . '/';
		//var_dump($source_path);
		$config_manip = array(
			'image_library' 	=> 'gd2',
			'source_image'		=> $source_path,
			'new_image' 		=> $target_path,
			'maintain_ratio' 	=> TRUE,
			'width' 			=> 300,
			'height' 			=> 400,
		);

		$this->load->library('image_lib', $config_manip);
		//$this->image_lib->initialize($config_manip);
		if (!$this->image_lib->resize()) {
			echo $this->image_lib->display_errors();
		}
		$this->image_lib->clear();
		return $filename;
	}

	// Banner
	public function kandidat()
	{
		if ($this->session->level == 'admin') {

			$seting = $this->db->get('seting')->row_array();
			$set = $seting['periode'];


			if ($this->session->level == 'admin') {
				if (isset($_POST['simpan'])) {
					if ($_FILES['gambar']['error'] <> 4) {

						$config['upload_path'] = './uploads/kandidat';
						$config['allowed_types'] = 'jpg|png|gif|bmp|jpeg';
						$config['remove_space'] = TRUE;
						//$config['max_size']      = 1024;
						$this->load->library('upload', $config);

						if (!$this->upload->do_upload('gambar')) {

							$this->session->set_flashdata('error', "(File anda bermasalah, terlalu besar atau anda mengupload file selain JPG/PNG/GIF/BMP.) ");
							redirect('dashboard/kandidat');
						} else {
							$hasil 	= $this->upload->data();
							$data = array(
								'nama'			=> $this->input->post('nama'),
								'ket'			=> $this->input->post('ket'),
								'gambar'		=> $this->resizeImage('kandidat', $hasil['file_name']),
								't_time'		=> date('Y-m-d H:i:s'),
								't_user'		=> $this->session->id_login,
								'periode'		=> $set,

							); //var_dump($data);
							$error = array('error' => $this->upload->display_errors());
							$this->db->insert('kandidat', $data);
							$this->session->set_flashdata('success', "(File anda telah berhasil ditambahkan.) " . $error['error']);
							redirect('dashboard/kandidat');
						}
					} else {
						$data = array(
							'nama'			=> $this->input->post('nama'),
							'ket'			=> $this->input->post('ket'),
							't_time'		=> date('Y-m-d H:i:s'),
							't_user'		=> $this->session->id_login,
							'periode'		=> $set,
						); //var_dump($data);
						$this->db->insert('kandidat', $data);
						$this->session->set_flashdata('success', "(File anda telah berhasil ditambahkan.) ");
						redirect('dashboard/kandidat');
					}
				} else if (isset($_POST['update'])) {

					if ($_FILES['gambar']['error'] <> 4) {
						$config['upload_path'] = './uploads/kandidat';
						$config['allowed_types'] = 'jpg|png|gif|bmp|jpeg';
						$config['remove_space'] = TRUE;
						$this->load->library('upload', $config);

						if (!$this->upload->do_upload('gambar')) {
							$error = array('error' => $this->upload->display_errors());
							$this->session->set_flashdata('error', "(File anda bermasalah, terlalu besar atau anda mengupload file selain JPG/PNG/GIF/BMP.)" . $error['error']);
							redirect('dashboard/kandidat');
						} else {
							$hasil 	= $this->upload->data();
							$data = array(
								'nama'			=> $this->input->post('nama'),
								'ket'			=> $this->input->post('ket'),
								'gambar'		=> $this->resizeImage('kandidat', $hasil['file_name']),
								't_time'		=> date('Y-m-d H:i:s'),
								't_user'		=> $this->session->id_login,
								'periode'		=> $set,

							); //var_dump($data);exit;

							$id 	= $this->input->post('id_kandidat');
							$query 	= $this->db->get_where('kandidat', array('id_kandidat' => $id))->row_array();
							if (!empty($query['gambar'])) {
								unlink("./uploads/kandidat/" . $query['gambar']);
							}
							$this->db->where('id_kandidat', $id);
							$this->db->update('kandidat', $data);
							$this->session->set_flashdata('success', "(File anda telah berhasil diganti.) ");
							redirect('dashboard/kandidat');
						}
					} else {
						$data = array(
							'nama'			=> $this->input->post('nama'),
							'ket'			=> $this->input->post('ket'),
							't_time'		=> date('Y-m-d H:i:s'),
							't_user'		=> $this->session->id_login,
							'periode'		=> $set,

						);
						$this->db->where('id_kandidat', $this->input->post('id_kandidat'));
						$this->db->update('kandidat', $data);
						$this->session->set_flashdata('success', "(File anda telah berhasil diganti.) ");
						redirect('dashboard/kandidat');
					}
				} else {

					$this->db->select('*');
					$this->db->where('periode', $set);
					$this->db->order_by('id_kandidat', 'DESC');
					$data['sl'] = $this->db->get('kandidat');
					$this->template->load('back-end/_template', 'back-end/_kandidat', $data);
				}
			} else {
				$this->template->load('back-end/_template', 'back-end/_no_modul');
			}
		} else {
			$this->template->load('back-end/_template', 'back-end/_no_modul');
		}
	}

	public function kandidat_tambah()
	{
		if ($this->session->level == 'admin') {
			$data['sl'] = $this->db->get('kandidat');
			$this->template->load('back-end/_template', 'back-end/_kandidat_tambah', $data);
		} else {
			$this->template->load('back-end/_template', 'back-end/_no_modul');
		}
	}


	public function kandidat_edit($ids)
	{
		if ($this->session->level == 'admin') {
			$id = $this->encrypt->decode($ids);
			$data['sl'] = $this->db->get_where('kandidat', array('id_kandidat' => $id))->row_array();
			$this->template->load('back-end/_template', 'back-end/_kandidat_edit', $data);
		} else {
			$this->template->load('back-end/_template', 'back-end/_no_modul');
		}
	}

	public function kandidat_delete($ids)
	{
		if ($this->session->level == 'admin') {
			$id = $this->encrypt->decode($ids);
			$sl = $this->db->get_where('kandidat', array('id_kandidat' => $id))->row_array();
			if (!empty($sl['gambar'])) {
				unlink("./uploads/kandidat/" . $sl['gambar']);
			}
			$this->db->delete('kandidat', array('id_kandidat' => $id));
			redirect('dashboard/kandidat');
		} else {
			$this->template->load('back-end/_template', 'back-end/_no_modul');
		}
	}



	public function pilihKandidat()
	{
		$this->load->library('user_agent');
		$seting = $this->db->get('seting')->row_array();
		$set  = $seting['periode'];
		$buka = $seting['buka'];

		if (isset($_POST['TpilihKandidat'])) {

			$dt = array(
				'id_kandidat' 	=> $this->input->post('id_kandidat'),
				'periode'		=> $this->input->post('periode'),
				'browser'		=> $this->agent->browser(),
				'browser_version' => $this->agent->version(),
				'platform'		=> $this->agent->platform(),
				'ip_address'	=> $this->input->ip_address(),
				't_time'		=> date('Y-m-d H:i:s'),
				't_user'		=> $this->session->id_login,

			);

			$qr = $this->db->get_where('pilih', array('t_user' => $this->session->id_login, 'periode' => $this->input->post('periode')))->num_rows();

			if ($qr > 0) {
				$this->session->set_flashdata('error', "(Anda Udah Memilih) ");
			} else {
				$this->db->insert('pilih', $dt);
				$this->session->set_flashdata('success', "(Terima kasih atas partisipasi Anda)");
			}
			redirect('dashboard');
		}

		$data['buka'] = $buka;
		$cek = $this->db->get_where('pilih', array('t_user' => $this->session->id_login))->num_rows();

		if ($cek > 0) {
			$data['kandidat'] = 1;
		} else {

			$this->db->select('*');
			$this->db->where('periode', $set);
			$this->db->order_by('id_kandidat', 'DESC');
			$data['kandidat'] = $this->db->get('kandidat')->result();
		}

		$title = 'Pilih kandidat';
		$this->template->load('back-end/_template', 'back-end/_pilih', $data);
	}


	// Profil	
	public function profil()
	{
		if ($this->session->level == 'admin') {
			if (isset($_POST['update'])) {
				$data = array(
					'nama_pemilik'			=> $this->input->post('nama_pemilik'),
					'judul_website'			=> $this->input->post('judul_website'),
					'alamat_website'		=> $this->input->post('alamat_website'),
					'meta_deskripsi'		=> $this->input->post('meta_deskripsi'),
					'meta_keyword'			=> $this->input->post('meta_keyword'),
					'email_admin'			=> $this->input->post('email_admin'),
					'password_email'		=> $this->input->post('password_email'),
					'email_cc'				=> $this->input->post('email_cc'),
					'facebook'				=> $this->input->post('facebook'),
					'twitter'				=> $this->input->post('twitter'),
					'twitter_widget'		=> $this->input->post('twitter_widget'),
					'googleplus'			=> $this->input->post('googleplus'),
					'googlemap'				=> $this->input->post('googlemap'),


				); //var_dump($data);
				$this->db->where('id_identitas', $this->input->post('id'));
				$this->db->update('identitas', $data);
				redirect('dashboard/profil');
			} else {
				$data['p'] = $this->db->get_where('identitas', array('id_identitas' => 1))->row_array();
				$this->template->load('back-end/_template', 'back-end/_profil', $data);
			}
		} else {
			$this->template->load('back-end/_template', 'back-end/_no_modul');
		}
	}
	// End Profil	


	public function seting()
	{
		if ($this->session->level == 'admin') {
			if (isset($_POST['update'])) {
				$data = array(
					'periode'			=> $this->input->post('periode'),
					'buka'				=> $this->input->post('buka'),
					'tampil'			=> $this->input->post('tampil'),
					't_time'			=> date('Y-m-d H:i:s'),
					't_user'			=> $this->session->id_login,



				); //var_dump($data);
				$this->db->where('id_seting', $this->input->post('id'));
				$this->db->update('seting', $data);
				$this->session->set_flashdata('success', "(Data sukses diupdate)");
				redirect('dashboard/seting');
			} else {
				$data['pe'] 	= $this->db->get('periode')->result();
				$data['opsi']	= $this->db->get('opsi')->result();
				$data['l'] = $this->db->get_where('seting', array('id_seting' => 1))->row_array();
				$this->template->load('back-end/_template', 'back-end/_seting', $data);
			}
		} else {
			$this->template->load('back-end/_template', 'back-end/_no_modul');
		}
	}


	// User manajamen
	public function usermanajemen()
	{
		if (isset($_POST['simpan'])) {
			if ($_FILES['gambar']['error'] <> 4) {

				$config['upload_path'] = './uploads/administrator';
				$config['allowed_types'] = 'jpg|png|gif|bmp';
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar')) {
					$this->session->set_flashdata('wrong', "(File anda bermasalah atau anda mengupload file selain JPG/PNG/GIF/BMP.) ");
				} else {
					$hasil 	= $this->upload->data();
					$idsession = preg_replace('/[^a-zA-Z]+/', '', trim($this->input->post('nama_lengkap')));
					$data = array(
						'username'			=> $this->input->post('username'),
						'password'			=> md5($this->input->post('password')),
						'nama_lengkap'		=> $this->input->post('nama_lengkap'),
						'email'				=> $this->input->post('email'),
						'level'				=> $this->input->post('level'),
						'blokir'			=> $this->input->post('blokir'),
						'id_session'		=> $idsession,
						'tanggal'			=> date('Y-m-d'),
						'gambar'			=> $hasil['file_name'],
					); //var_dump($data);
					$this->db->insert('usersadm', $data);
				}
			} else {
				$idsession = preg_replace('/[^a-zA-Z]+/', '', trim($this->input->post('nama_lengkap')));
				$data = array(
					'username'			=> $this->input->post('username'),
					'password'			=> md5($this->input->post('password')),
					'nama_lengkap'		=> $this->input->post('nama_lengkap'),
					'email'				=> $this->input->post('email'),
					'level'				=> $this->input->post('level'),
					'blokir'			=> $this->input->post('blokir'),
					'id_session'		=> $idsession,
					'tanggal'			=> date('Y-m-d'),

				); //var_dump($data);
				$this->db->insert('usersadm', $data);



				redirect('dashboard/usermanajemen');
			}
		} elseif (isset($_POST['update'])) {
			if ($_FILES['gambar']['error'] <> 4) {

				$config['upload_path'] = './uploads/administrator';
				$config['allowed_types'] = 'jpg|png|gif|bmp';
				$this->load->library('upload', $config);

				if (!$this->upload->do_upload('gambar')) {
					$this->session->set_flashdata('wrong', "(File anda bermasalah atau anda mengupload file selain JPG/PNG/GIF/BMP.) ");
				} else {
					$inputpass = $this->input->post('password');
					if (!empty($inputpass)) {
						$hasil 	= $this->upload->data();
						$idsession = preg_replace('/[^a-zA-Z]+/', '', trim($this->input->post('nama_lengkap')));
						$data = array(
							'username'			=> $this->input->post('username'),
							'password'			=> md5($this->input->post('password')),
							'nama_lengkap'		=> $this->input->post('nama_lengkap'),
							'email'				=> $this->input->post('email'),
							'level'				=> $this->input->post('level'),
							'blokir'			=> $this->input->post('blokir'),
							'id_session'		=> $idsession,
							'tanggal'			=> date('Y-m-d'),
							'gambar'			=> $hasil['file_name'],

						);
					} else {
						$hasil 	= $this->upload->data();
						$data = array(
							'username'			=> $this->input->post('username'),
							'nama_lengkap'		=> $this->input->post('nama_lengkap'),
							'email'				=> $this->input->post('email'),
							'level'				=> $this->input->post('level'),
							'blokir'			=> $this->input->post('blokir'),
							'tanggal'			=> date('Y-m-d'),
							'gambar'			=> $hasil['file_name'],
						);
					}
					//var_dump($data);
					$id 	= $this->input->post('username');
					$query 	= $this->db->get_where('usersadm', array('username' => $id))->row_array();
					if (!empty($query['gambar'])) {
						unlink("./uploads/administrator/" . $query['gambar']);
					}
					$this->db->where('username', $id);
					$this->db->update('usersadm', $data);
					redirect('dashboard/usermanajemen');
				}
			} else {
				$inputpass = $this->input->post('password');
				if (!empty($inputpass)) {
					$idsession = preg_replace('/[^a-zA-Z]+/', '', trim($this->input->post('nama_lengkap')));
					$data = array(
						'username'			=> $this->input->post('username'),
						'password'			=> md5($this->input->post('password')),
						'nama_lengkap'		=> $this->input->post('nama_lengkap'),
						'email'				=> $this->input->post('email'),
						'level'				=> $this->input->post('level'),
						'blokir'			=> $this->input->post('blokir'),
						'id_session'		=> $idsession,
						'tanggal'			=> date('Y-m-d'),


					); //var_dump($data);
				} else {
					$idsession = preg_replace('/[^a-zA-Z]+/', '', trim($this->input->post('nama_lengkap')));
					$data = array(
						'username'			=> $this->input->post('username'),
						'nama_lengkap'		=> $this->input->post('nama_lengkap'),
						'email'				=> $this->input->post('email'),
						'level'				=> $this->input->post('level'),
						'blokir'			=> $this->input->post('blokir'),
						'id_session'		=> $idsession,
						'tanggal'			=> date('Y-m-d'),


					); //var_dump($data);
				}
				$this->db->where('username', $this->input->post('username'));
				$this->db->update('usersadm', $data);
				redirect('dashboard/usermanajemen');
			}
		} else {
			if ($this->session->level == 'admin') {
				$this->db->select('*');

				$this->db->order_by('username', 'DESC');
				$data['um'] = $this->db->get('usersadm');
				$this->template->load('back-end/_template', 'back-end/_usermanajemen', $data);
			} else {
				$this->db->select('*');
				$this->db->where('username', $this->session->username);
				$this->db->order_by('username', 'DESC');
				$data['um'] = $this->db->get('usersadm');
				$this->template->load('back-end/_template', 'back-end/_usermanajemen', $data);
			}
		}
	}

	public function usermanajemen_tambah()
	{
		$this->db->order_by('id_level', 'DESC');
		$data['lvl'] = $this->db->get('level');
		$data['opt'] = $this->db->get('opsi');
		$data['umt'] = $this->db->get('usersadm');
		$this->template->load('back-end/_template', 'back-end/_usermanajemen_tambah', $data);
	}

	public function usermanajemen_edit($id)
	{
		$ids = $this->encrypt->decode($id);
		//var_dump($ids);
		$this->db->order_by('id_level', 'DESC');
		$data['lvl'] = $this->db->get('level');
		$data['opt'] = $this->db->get('opsi');
		$data['ume'] = $this->db->get_where('usersadm', array('username' => $ids))->row_array();
		$this->template->load('back-end/_template', 'back-end/_usermanajemen_edit', $data);
	}

	public function usermanajemen_delete($id)
	{
		/*$r = $this->db->get_where('usersadm',array('id_login'=>$id))->row_array();
	    
	    unlink("./uploads/usermanajemen/".$r['gambar']);
	    
	    $this->db->delete('usersadm', array('id_login' => $id));
		redirect('dashboard/usermanajemen');*/
		$ids = $this->encrypt->decode($id);
		$data = array(
			'blokir' => 'Y',
		);
		$this->db->where('username', $ids);
		$this->db->update('usersadm', $data);

		redirect('dashboard/usermanajemen');
	}
}
