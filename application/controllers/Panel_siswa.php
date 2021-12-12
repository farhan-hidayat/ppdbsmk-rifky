<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panel_siswa extends CI_Controller
{

	public function index()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('');
		} else {
			$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['judul_web'] = "Dashboard";

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/dashboard', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function pengumuman()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('');
		} else {
			$data['user']   	 = $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['judul_web'] = "Pengumuman";

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/pengumuman', $data);
			$this->load->view('siswa/footer');
		}
	}

	public function biodata()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		// $id = $this->db->query("SELECT id_berkas FROM tbl_berkas WHERE siswa='$ceks'")->row();
		if (!isset($ceks)) {
			redirect('logcs');
		} else {
			$data['user']			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['berkas']			= $this->db->get_where('tbl_berkas', "siswa='$ceks'");
			$data['judul_web']		= "Biodata " . ucwords($data['user']->row()->nama_lengkap);

			$this->load->view('siswa/header', $data);
			$this->load->view('siswa/biodata', $data);
			$this->load->view('siswa/footer');

			if (isset($_POST['btnupdate2'])) {
				$config['upload_path']   = './files/';
				$config['allowed_types'] = 'jpg|png|jpeg';
				$config['max_size']      = 5120;
				$config['file_name']     = $ceks . 'Foto';
				$config['overwrite']	 = true;

				$this->load->library('upload', $config);

				if ($this->upload->do_upload('foto')) {
					$foto = $this->upload->data();
					$file = array(
						'foto'	=> $foto['file_name']
					);

					$this->db->update('tbl_berkas', $file, array('siswa' => $ceks));
					$this->session->set_flashdata(
						'msg2',
						'
												<div class="alert alert-success alert-dismissible" role="alert">
													 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
														 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
													 </button>
													 <strong>Sukses!</strong> Foto berhasil diperbaharui.
												</div>'
					);
					$this->db->last_query();
					redirect('panel_siswa/biodata');
				} else {
					$this->session->set_flashdata(
						'msg2',
						'
												<div class="alert alert-warning alert-dismissible" role="alert">
													 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
														 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
													 </button>
													 <strong>Gagal!</strong> Foto gagal diperbaharui.
												</div>'
					);
					redirect('panel_siswa/biodata');
				}
			}
		}
	}
	public function upload_berkas()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		$id = $this->db->query("SELECT id_berkas FROM tbl_berkas WHERE siswa=$ceks")->result();
		if (!isset($ceks)) {
			redirect('logcs');
		} else {
			$data['user']			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'");
			$data['berkas']			= $this->db->get_where('tbl_berkas', "siswa='$ceks'");
			$data['judul_web']		= "Biodata " . ucwords($data['user']->row()->nama_lengkap);

			$config['upload_path']   = './files/';
			$config['allowed_types'] = 'pdf|jpg|png|jpeg';
			$config['max_size']      = 5120;
			$config['file_name']     = $this->input->post('judul');

			$this->load->library('upload', $config);

			if (isset($_POST['btnupdate2'])) {
				$username 	= $this->input->post('username');
				$password 	= $this->input->post('password');
				$nama_lengkap 	= $this->input->post('nama_lengkap');
				$level 	= $this->input->post('level');


				$data = array(
					'username'	=> $username,
					'password'	=> $password,
					'nama_lengkap'	=> $nama_lengkap,
					'level'	=> $level
				);
				$this->db->update('tbl_user', $data, array('id_user' => $id));

				$this->session->set_flashdata(
					'msg2',
					'
												<div class="alert alert-success alert-dismissible" role="alert">
													 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
														 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
													 </button>
													 <strong>Sukses!</strong> Pengguna berhasil diperbaharui.
												</div>'
				);

				redirect('panel_admin/user');
			}
		}
	}


	public function cetak()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('logcs');
		}
		$data['user'] 			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'")->row();
		$data['judul_web'] 	= "Cetak Bukti Pendaftaran " . ucwords($data['user']->nama_lengkap);

		$data['thn_ppdb'] 	= date('Y', strtotime($data['user']->tgl_siswa));

		$this->db->select_sum('rata_rata_nilai');
		$data['nilai_rapor'] 	= $this->db->get_where('tbl_rapor', "no_pendaftaran='$ceks'")->row()->rata_rata_nilai / 5;

		$this->db->select_sum('nilai_usbn');
		$data['nilai_usbn'] 	= $this->db->get_where('tbl_nilai_usbn', "no_pendaftaran='$ceks'")->row()->nilai_usbn / 7;

		$this->db->select_sum('nilai_unbk');
		$data['nilai_unbk'] 	= $this->db->get_where('tbl_nilai_unbk', "no_pendaftaran='$ceks'")->row()->nilai_unbk / 4;

		$this->load->view('siswa/cetak', $data);
	}


	public function rekap_nilai()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('logcs');
		}
		$data['user'] 			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'")->row();
		$data['judul_web'] 	= "Cetak Rekap Nilai " . ucwords($data['user']->nama_lengkap);

		$data['thn_ppdb'] 	= date('Y', strtotime($data['user']->tgl_siswa));

		$this->db->select_sum('rata_rata_nilai');
		$data['nilai_rapor'] 	= $this->db->get_where('tbl_rapor', "no_pendaftaran='$ceks'")->row()->rata_rata_nilai;

		$this->db->select_sum('nilai_usbn');
		$data['nilai_usbn'] 	= $this->db->get_where('tbl_nilai_usbn', "no_pendaftaran='$ceks'")->row()->nilai_usbn;

		$this->db->select_sum('nilai_unbk');
		$data['nilai_unbk'] 	= $this->db->get_where('tbl_nilai_unbk', "no_pendaftaran='$ceks'")->row()->nilai_unbk;

		$this->load->view('siswa/rekap_nilai', $data);
	}

	public function cetak_lulus()
	{
		$ceks = $this->session->userdata('no_pendaftaran');
		if (!isset($ceks)) {
			redirect('logcs');
		}
		$this->db->like('tgl_siswa', date('Y'), 'after');
		$data['user'] 			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$ceks'")->row();
		$data['judul_web'] 	= "Cetak Bukti Lulus " . ucwords($data['user']->nama_lengkap);

		if ($data['user']->status_pendaftaran != 'lulus') {
			redirect('404');
		}

		$data['thn_ppdb'] 	= date('Y', strtotime($data['user']->tgl_siswa));
		$data['v_ket'] 			= $this->db->get_where('tbl_pengumuman', "id_pengumuman='1'")->row();

		$this->load->view('siswa/cetak_lulus', $data);
	}

	public function logout()
	{
		if ($this->session->userdata('no_pendaftaran') != '') {
			$this->session->sess_destroy();
		}
		redirect('');
	}
}
