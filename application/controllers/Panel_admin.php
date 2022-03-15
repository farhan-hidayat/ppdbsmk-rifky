<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Panel_admin extends CI_Controller
{

	public function index()
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		$tgl = $this->db->query("SELECT * FROM tbl_web")->row();
		$start = $tgl->tgl_diubah;
		$end = $tgl->tgl_tutup;
		$data = array(
			'start' => strtotime($start),
			'end' => strtotime($end),
			'now' => strtotime(date('Y-m-d'))
		);
		if (!isset($ceks)) {
			$this->load->view('404_content');
		} else {
			$data['user']   	 = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
			$data['judul_web'] = "Dashboard";


			$thn							 = date('Y');
			$data['v_thn']		 = $thn;
			foreach ($this->Model_data->statistik($thn)->result_array() as $row) {
				$data['grafik'][] = (float)$row['Januari'];
				$data['grafik'][] = (float)$row['Februari'];
				$data['grafik'][] = (float)$row['Maret'];
				$data['grafik'][] = (float)$row['April'];
				$data['grafik'][] = (float)$row['Mei'];
				$data['grafik'][] = (float)$row['Juni'];
				$data['grafik'][] = (float)$row['Juli'];
				$data['grafik'][] = (float)$row['Agustus'];
				$data['grafik'][] = (float)$row['September'];
				$data['grafik'][] = (float)$row['Oktober'];
				$data['grafik'][] = (float)$row['Nopember'];
				$data['grafik'][] = (float)$row['Desember'];
			}

			$this->load->view('admin/header', $data);
			$this->load->view('admin/dashboard', $data);
			$this->load->view('admin/footer');

			if (isset($_POST['btnnonaktif'])) {
				$data = array(
					'status_ppdb'	=> 'tutup',
					'tgl_tutup'  => $this->Model_data->date('waktu_default'),
					'tgl_diubah'  => $this->Model_data->date('waktu_default')
				);
				$this->db->update('tbl_web', $data, array('id_web' => '1'));
				redirect('panel_admin');
			}
			if (isset($_POST['btnaktif'])) {
				$data = array(
					'status_ppdb'	=> 'buka',
					'tgl_tutup'	=> $this->input->post('tutup'),
					'tgl_diubah'  => $this->Model_data->date('waktu_default')
				);
				$this->db->update('tbl_web', $data, array('id_web' => '1'));
				redirect('panel_admin');
			}
		}
	}

	public function log_in()
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (isset($ceks)) {
			$this->load->view('404_content');
		} else {
			$this->load->view('admin/login/header');
			$this->load->view('admin/login/login');
			$this->load->view('admin/login/footer');

			if (isset($_POST['btnlogin'])) {
				$username = $_POST['username'];
				$pass	   = $_POST['password'];

				$query  = $this->db->get_where('tbl_user', "username='$username'");
				$cek    = $query->result();
				$cekun  = $cek[0]->username;
				$level    = $query->level;
				$jumlah = $query->num_rows();

				if ($jumlah == 0) {
					$this->session->set_flashdata(
						'msg',
						'
									 <div class="alert alert-danger alert-dismissible" role="alert">
									 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;&nbsp;</span>
											</button>
											<strong>Username "' . $username . '"</strong> belum terdaftar.
									 </div>'
					);
					redirect('panel_admin/log_in');
				} else {
					$row = $query->row();
					$cekpass = $row->password;
					if ($cekpass <> $pass) {
						$this->session->set_flashdata(
							'msg',
							'<div class="alert alert-warning alert-dismissible" role="alert">
													 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
																<span aria-hidden="true">&times;&nbsp;</span>
															</button>
															<strong>Username atau Password Salah!</strong>.
													 </div>'
						);
						redirect('panel_admin/log_in');
					} else {

						$this->session->set_userdata('un@sman1_belitang', "$cekun");
						$this->session->set_userdata('level', "$level");
						$this->session->set_userdata('id_user@sman1_belitang', "$row->id_user");

						redirect('panel_admin');
					}
				}
			}
		}
	}

	public function jurusan()
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Jurusan";

			$this->db->order_by('id_jurusan', 'DESC');
			$data['v_jurusan']  		= $this->db->get('tbl_jurusan');

			$this->load->view('admin/header', $data);
			$this->load->view('admin/jurusan/jurusan', $data);
			$this->load->view('admin/footer');
		}
	}
	public function tambah_jurusan()
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Tambah Jurusan";

			$this->load->view('admin/header', $data);
			$this->load->view('admin/jurusan/tambah_jurusan');
			$this->load->view('admin/footer');

			if (isset($_POST['btnupdate2'])) {
				$nama_jurusan 	= $this->input->post('nama_jurusan');
				$kuota 	= $this->input->post('kuota');


				$data = array(
					'nama_jurusan'	=> $nama_jurusan,
					'kuota'			=> $kuota
				);
				$this->db->insert('tbl_jurusan', $data);

				$this->session->set_flashdata(
					'msg2',
					'
										<div class="alert alert-success alert-dismissible" role="alert">
											 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
											 </button>
											 <strong>Sukses!</strong> Jurusan berhasil ditambah.
										</div>'
				);

				redirect('panel_admin/jurusan');
			}
		}
	}
	public function edit_jurusan($id)
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Edit Jurusan";
			$id = $this->uri->segment(3);
			$data['v_jurusan']  		= $this->db->get_where('tbl_jurusan', "id_jurusan= $id ")->row();

			$this->load->view('admin/header', $data);
			$this->load->view('admin/jurusan/edit_jurusan', $data);
			$this->load->view('admin/footer');

			if (isset($_POST['btnupdate2'])) {
				$nama_jurusan 	= $this->input->post('nama_jurusan');
				$kuota 	= $this->input->post('kuota');


				$data = array(
					'nama_jurusan'	=> $nama_jurusan,
					'kuota'			=> $kuota
				);
				$this->db->update('tbl_jurusan', $data, array('id_jurusan' => $id));

				$this->session->set_flashdata(
					'msg2',
					'
										<div class="alert alert-success alert-dismissible" role="alert">
											 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
											 </button>
											 <strong>Sukses!</strong> Jurusan berhasil diperbaharui.
										</div>'
				);

				redirect('panel_admin/jurusan');
			}
		}
	}
	public function hapus_jurusan($id)
	{
		$where = array(
			'id_jurusan' => $id
		);

		$this->db->delete('tbl_jurusan', $where);
		$this->session->set_flashdata(
			'msg2',
			'
		<div class="alert alert-success alert-dismissible" role="alert">
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
			 </button>
			 <strong>Sukses!</strong> Jurusan berhasil dihapus.
		</div>'
		);
		redirect('panel_admin/jurusan');
	}

	public function user()
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Pengguna";

			$this->db->order_by('id_user', 'DESC');
			$data['v_user']  		= $this->db->get('tbl_user');

			$this->load->view('admin/header', $data);
			$this->load->view('admin/user/user', $data);
			$this->load->view('admin/footer');
		}
	}
	public function tambah_user()
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Tambah Pengguna";

			$this->load->view('admin/header', $data);
			$this->load->view('admin/user/tambah_user');
			$this->load->view('admin/footer');

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
				$this->db->insert('tbl_user', $data);

				$this->session->set_flashdata(
					'msg2',
					'
										<div class="alert alert-success alert-dismissible" role="alert">
											 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
											 </button>
											 <strong>Sukses!</strong> Pengguna berhasil ditambah.
										</div>'
				);

				redirect('panel_admin/user');
			}
		}
	}
	public function edit_user($id)
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Edit Pengguna";
			$id = $this->uri->segment(3);
			$data['v_user']  		= $this->db->get_where('tbl_user', "id_user= $id ")->row();

			$this->load->view('admin/header', $data);
			$this->load->view('admin/user/edit_user', $data);
			$this->load->view('admin/footer');

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
	public function hapus_user($id)
	{
		$where = array(
			'id_user' => $id
		);

		$this->db->delete('tbl_user', $where);
		$this->session->set_flashdata(
			'msg2',
			'
		<div class="alert alert-success alert-dismissible" role="alert">
			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
			 </button>
			 <strong>Sukses!</strong> Pengguna berhasil dihapus.
		</div>'
		);
		redirect('panel_admin/user');
	}

	public function profile()
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Profile";

			$this->load->view('admin/header', $data);
			$this->load->view('admin/profile', $data);
			$this->load->view('admin/footer');

			if (isset($_POST['btnupdate'])) {
				$username	 		= $this->input->post('username');
				$nama_lengkap	= $this->input->post('nama_lengkap');

				$data = array(
					'username'	   => $username,
					'nama_lengkap' => $nama_lengkap
				);
				$this->db->update('tbl_user', $data, array('username' => $ceks));

				$this->session->has_userdata('un@sman1_belitang');
				$this->session->set_userdata('un@sman1_belitang', "$username");

				$this->session->set_flashdata(
					'msg',
					'
										<div class="alert alert-success alert-dismissible" role="alert">
											 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
											 </button>
											 <strong>Sukses!</strong> Profile berhasil diperbarui.
										</div>'
				);

				redirect('panel_admin/profile');
			}
		}
	}

	public function ubah_pass()
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Ubah Password";

			$this->load->view('admin/header', $data);
			$this->load->view('admin/ubah_pass', $data);
			$this->load->view('admin/footer');

			if (isset($_POST['btnupdate2'])) {
				$password_lama 	= $this->input->post('password_lama');
				$password 	= $this->input->post('password');
				$password2 	= $this->input->post('password2');

				if ($data['user']->row()->password != $password_lama) {
					$this->session->set_flashdata(
						'msg2',
						'
								<div class="alert alert-warning alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
									 </button>
									 <strong>Gagal!</strong> Password Lama tidak cocok.
								</div>'
					);
				} elseif ($password != $password2) {
					$this->session->set_flashdata(
						'msg2',
						'
									<div class="alert alert-warning alert-dismissible" role="alert">
										 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
										 </button>
										 <strong>Gagal!</strong> Password Baru & Ulangi Password Baru tidak cocok.
									</div>'
					);
				} else {
					$data = array(
						'password'	=> $password
					);
					$this->db->update('tbl_user', $data, array('username' => $ceks));

					$this->session->set_flashdata(
						'msg2',
						'
										<div class="alert alert-success alert-dismissible" role="alert">
											 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
											 </button>
											 <strong>Sukses!</strong> Password berhasil diperbarui.
										</div>'
					);
				}
				redirect('panel_admin/ubah_pass');
			}
		}
	}


	public function verifikasi($aksi = '', $id = '')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Verifikasi";

			$config = array(
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_user' => 'akundummysaya01@gmail.com',  // Email gmail
				'smtp_pass'   => 'Passwordnyadummyjuga',  // Password gmail
				'smtp_port'   => 465,
				'smtp_timeout'=> 5,
				'newline' => "\r\n"
			);

			if ($aksi == 'verif') {
				$data = array(
					'status_verifikasi'	=> 1
				);
				$this->db->update('tbl_siswa', $data, array('no_pendaftaran' => "$id"));
				
				$em = $this->db->get_where('tbl_siswa', "no_pendaftaran='$id'")->row();
				$berkas= $this->db->get_where('tbl_berkas', "siswa='$id'")->row();
				$email = $em->email; 
					$isi = $this->db->get_where('tbl_verifikasi', "id_verifikasi='1'")->row();
					$message = $isi->isi;//ini adalah isi/body email
					$this->email->initialize($config);
					$this->email->from($config['smtp_user']);
					$this->email->to($email);//email penerima
					$this->email->subject('Pengumuman Berkas');//subjek email
					$this->email->message($message.$berkas->tgl.' Pukul '.$berkas->jam);
				
				//proses kirim email
				if($this->email->send()){
					$this->session->set_flashdata(
						'msg2',
						'
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Berhasil Mengirim Email.
								</div>'
					);
				}
				else{
					$this->session->set_flashdata('msg2', $this->email->print_debugger());
				}

			}if ($aksi == 'tdk_lengkap') {
					$data = array(
						'status_verifikasi'	=> 2
					);
					$this->db->update('tbl_siswa', $data, array('no_pendaftaran' => "$id"));
					
					$em = $this->db->get_where('tbl_siswa', "no_pendaftaran='$id'")->row();
					$email = $em->email; 
						$isi = $this->db->get_where('tbl_verifikasi', "id_verifikasi='2'")->row();
						$message = $isi->isi;//ini adalah isi/body email
						$this->email->initialize($config);
						$this->email->from($config['smtp_user']);
						$this->email->to($email);//email penerima
						$this->email->subject('Pengumuman Berkas');//subjek email
						$this->email->message($message);
					
					//proses kirim email
					if($this->email->send()){
						$this->session->set_flashdata(
							'msg2',
							'
									<div class="alert alert-success alert-dismissible" role="alert">
										 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
											 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
										 </button>
										 <strong>Sukses!</strong> Berhasil Mengirim Email.
									</div>'
						);
					}
					else{
						$this->session->set_flashdata('msg2', $this->email->print_debugger());
					}

				redirect('panel_admin/verifikasi');
			} elseif ($aksi == 'batal') {
				$data = array(
					'status_verifikasi'	=> null
				);
				$this->db->update('tbl_siswa', $data, array('no_pendaftaran' => "$id"));
				
				redirect('panel_admin/verifikasi');
			} elseif ($aksi == 'thn') {
				$thn = $id;
			} else {
				$thn = date('Y');
			}
			$this->db->like('tgl_siswa', "$thn", 'after');
			$this->db->order_by('id_siswa', 'DESC');
			$data['v_siswa']  		= $this->db->query("SELECT * FROM tbl_siswa,tbl_jurusan WHERE jurusan=id_jurusan order by id_siswa desc");
			$data['v_thn']				= $thn;

			$this->load->view('admin/header', $data);
			$this->load->view('admin/verifikasi/verifikasi', $data);
			$this->load->view('admin/footer');
		}
	}


	public function edit_materi($aksi = '', $id = '')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Edit Materi & Jadwal Ujian";

			$data['v_materi']  		= $this->db->get_where('tbl_verifikasi', "id_verifikasi='1'")->row();

			$this->load->view('admin/header', $data);
			$this->load->view('admin/verifikasi/verifikasi_edit_materi&jadwal', $data);
			$this->load->view('admin/footer');

			if (isset($_POST['btnupdate'])) {
				$data = array(
					'isi'	=> $this->input->post('isi')
				);
				$this->db->update('tbl_verifikasi', $data, array('id_verifikasi' => "1"));

				$this->session->set_flashdata(
					'msg',
					'
							<div class="alert alert-success alert-dismissible" role="alert">
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
								 </button>
								 <strong>Sukses!</strong> Jadwal Wawancara Berhasil diperbarui.
							</div>'
				);
				redirect('panel_admin/verifikasi');
			}
		}
	}

	public function edit_materi1($aksi = '', $id = '')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Edit Materi & Jadwal Ujian";

			$data['v_materi']  		= $this->db->get_where('tbl_verifikasi', "id_verifikasi='2'")->row();

			$this->load->view('admin/header', $data);
			$this->load->view('admin/verifikasi/verifikasi_edit_materi&jadwal', $data);
			$this->load->view('admin/footer');

			if (isset($_POST['btnupdate'])) {
				$data = array(
					'isi'	=> $this->input->post('isi')
				);
				$this->db->update('tbl_verifikasi', $data, array('id_verifikasi' => "2"));

				$this->session->set_flashdata(
					'msg',
					'
							<div class="alert alert-success alert-dismissible" role="alert">
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
								 </button>
								 <strong>Sukses!</strong> Jadwal Wawancara Berhasil diperbarui.
							</div>'
				);
				redirect('panel_admin/verifikasi');
			}
		}
	}

	public function verifikasi_peserta($id)
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		}
		$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
		$data['siswa']		= $this->db->get_where('tbl_siswa', "no_pendaftaran='$id'");
		$data['berkas']			= $this->db->get_where('tbl_berkas', "siswa='$id'");
		$data['judul_web']	= "Biodata " . ucwords($data['siswa']->row()->nama_lengkap);

		$this->load->view('admin/header', $data);
		$this->load->view('admin/verifikasi/verif', $data);
		$this->load->view('admin/footer');

		if (isset($_POST['btn-simpan'])) {

			$file = array(
				's_akte'	=> $this->input->post('s_akte'),
				's_kk'		=> $this->input->post('s_kk'),
				's_fk'		=> $this->input->post('s_fk'),
				's_skl'		=> $this->input->post('s_skl'),
				's_ijazah'	=> $this->input->post('s_ijazah'),
				'tgl'		=> $this->input->post('tgl'),
				'jam'		=> $this->input->post('jam')
			);

			$this->db->update('tbl_berkas', $file, array('siswa' => $id));
			$this->session->set_flashdata(
				'msg2',
				'
											<div class="alert alert-success alert-dismissible" role="alert">
												 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
													 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
												 </button>
												 <strong>Sukses!</strong> Verifikasi berhasil diperbaharui.
											</div>'
			);
			redirect('panel_admin/verifikasi');
		} else {
			$this->session->set_flashdata(
				'msg2',
				'
										<div class="alert alert-warning alert-dismissible" role="alert">
											 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
												 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
											 </button>
											 <strong>Gagal!</strong> Verifikasi gagal diperbaharui.
										</div>'
			);
		}
	}

	public function verifikasi_cetak($id = '')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		}
		$data['user'] 			= $this->db->get_where('tbl_siswa', "no_pendaftaran='$id'")->row();
		$data['judul_web'] 	= "Cetak HASIL VERIFIKASI PENDAFTARAN PPDB " . ucwords($data['user']->nama_lengkap);

		$data['thn_ppdb'] 	= date('Y', strtotime($data['user']->tgl_siswa));

		$this->db->select_sum('rata_rata_nilai');
		$data['nilai_rapor'] 	= $this->db->get_where('tbl_rapor', "no_pendaftaran='$id'")->row()->rata_rata_nilai / 5;

		$this->db->select_sum('nilai_usbn');
		$data['nilai_usbn'] 	= $this->db->get_where('tbl_nilai_usbn', "no_pendaftaran='$id'")->row()->nilai_usbn / 7;

		$this->db->select_sum('nilai_unbk');
		$data['nilai_unbk'] 	= $this->db->get_where('tbl_nilai_unbk', "no_pendaftaran='$id'")->row()->nilai_unbk / 4;

		$data['v_materi']  		= $this->db->get_where('tbl_verifikasi', "id_verifikasi='1'")->row();

		$this->load->view('admin/verifikasi/cetak', $data);
	}

	public function export($aksi = '', $id = '')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "EXPORT KE EXEL HASIL FORMULIR PENDAFTARAN SISWA (BIODATA SISWA, NILAI RAPOR, NIALI USBN, NILAI UNBK)";

			if ($aksi == 'thn') {
				$thn = $id;
			} else {
				$thn = date('Y');
			}
			$this->db->like('tgl_siswa', "$thn", 'after');
			$this->db->order_by('id_siswa', 'DESC');
			$data['v_siswa']  		= $this->db->query("SELECT * FROM tbl_siswa,tbl_jurusan, tbl_berkas WHERE jurusan=id_jurusan AND siswa=no_pendaftaran order by id_siswa desc");
			$data['v_thn']				= $thn;

			$this->load->view('admin/export', $data);
		}
	}

	public function export1($aksi = '', $id = '')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "EXPORT KE EXEL HASIL FORMULIR PENDAFTARAN SISWA (BIODATA SISWA, NILAI RAPOR, NIALI USBN, NILAI UNBK)";

			if ($aksi == 'thn') {
				$thn = $id;
			} else {
				$thn = date('Y');
			}
			$this->db->like('tgl_siswa', "$thn", 'after');
			$this->db->order_by('id_siswa', 'DESC');
			$data['v_siswa']  		= $this->db->query("SELECT * FROM tbl_siswa,tbl_jurusan, tbl_berkas WHERE jurusan=id_jurusan AND siswa=no_pendaftaran AND status_pendaftaran='lulus' order by nama_jurusan desc");
			$data['v_thn']				= $thn;

			$this->load->view('admin/export1', $data);
		}
	}

	public function set_pengumuman($aksi = '', $id = '')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Setting Pengumuman";

			$config = array(
				'mailtype'  => 'html',
				'charset'   => 'utf-8',
				'protocol'  => 'smtp',
				'smtp_host' => 'ssl://smtp.googlemail.com',
				'smtp_user' => 'akundummysaya01@gmail.com',  // Email gmail
				'smtp_pass'   => 'Passwordnyadummyjuga',  // Password gmail
				'smtp_port'   => 465,
				'smtp_timeout'=> 5,
				'newline' => "\r\n"
			);
			if ($aksi == 'lulus') {
				$data = array(
					'status_pendaftaran'	=> 'lulus',
				);
				$this->db->update('tbl_siswa', $data, array('no_pendaftaran' => "$id"));
				$data1 = array(
					's_pernyataan'	=> 'Terverifikasi'
				);
				$this->db->update('tbl_berkas', $data1, array('siswa' => "$id"));

				$em = $this->db->get_where('tbl_siswa', "no_pendaftaran='$id'")->row();
				$email = $em->email; 
					$isi = $this->db->get_where('tbl_pengumuman', "id_pengumuman='1'")->row();
					$message = $isi->ket_pengumuman;//ini adalah isi/body email
					$this->email->initialize($config);
					$this->email->from($config['smtp_user']);
					$this->email->to($email);//email penerima
					$this->email->subject('Pengumuman Kelulusan');//subjek email
					$this->email->message($message);
				
				//proses kirim email
				if($this->email->send()){
					$this->session->set_flashdata(
						'msg',
						'
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Berhasil Mengirim Email.
								</div>'
					);
				}
				else{
					$this->session->set_flashdata('msg', $this->email->print_debugger());
				}

				redirect('panel_admin/set_pengumuman');
			} elseif ($aksi == 'tdk_lulus') {
				$data = array(
					'status_pendaftaran'	=> 'tidak lulus'
				);
				$this->db->update('tbl_siswa', $data, array('no_pendaftaran' => "$id"));
				$data1 = array(
					's_pernyataan'	=> 'Tidak Sesuai'
				);
				$this->db->update('tbl_berkas', $data1, array('siswa' => "$id"));

				$em = $this->db->get_where('tbl_siswa', "no_pendaftaran='$id'")->row();
				$email = $em->email; 
				$isi2 = $this->db->get_where('tbl_pengumuman', "id_pengumuman='2'")->row();
				$message2 = $isi2->ket_pengumuman;//ini adalah isi/body email
				$this->email->initialize($config);
				$this->email->from($config['smtp_user']);
				$this->email->to($email);//email penerima
				$this->email->subject('Pengumuman Kelulusan');//subjek email
				$this->email->message($message2);
				
				
				//proses kirim email
				if($this->email->send()){
					$this->session->set_flashdata(
						'msg',
						'
								<div class="alert alert-success alert-dismissible" role="alert">
									 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
										 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
									 </button>
									 <strong>Sukses!</strong> Berhasil Mengirim Email.
								</div>'
					);
				}
				else{
					$this->session->set_flashdata('msg', $this->email->print_debugger());
				}
		
				redirect('panel_admin/set_pengumuman');
			} elseif ($aksi == 'batal') {
				$data = array(
					'status_pendaftaran'	=> null
				);
				$this->db->update('tbl_siswa', $data, array('no_pendaftaran' => "$id"));
				$data1 = array(
					's_pernyataan'	=> 'Sedang Diproses'
				);
				$this->db->update('tbl_berkas', $data1, array('siswa' => "$id"));
				redirect('panel_admin/set_pengumuman');
			} elseif ($aksi == 'thn') {
				$thn = $id;
			} else {
				$thn = date('Y');
			}
			$this->db->like('tgl_siswa', "$thn", 'after');
			$this->db->order_by('id_siswa', 'DESC');
			$data['v_siswa']  		= $this->db->query("SELECT * FROM tbl_siswa,tbl_jurusan, tbl_berkas WHERE jurusan=id_jurusan AND siswa=no_pendaftaran order by id_siswa desc");
			$data['v_thn']				= $thn;

			$this->load->view('admin/header', $data);
			$this->load->view('admin/set_pengumuman/set_pengumuman', $data);
			$this->load->view('admin/footer');
		}
	}

	public function edit_ket($aksi = '', $id = '')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Edit Keterangan Lulus";

			$data['v_ket']	  		= $this->db->get_where('tbl_pengumuman', "id_pengumuman='1'")->row();

			$this->load->view('admin/header', $data);
			$this->load->view('admin/set_pengumuman/set_keterangan', $data);
			$this->load->view('admin/footer');

			if (isset($_POST['btnupdate'])) {
				$data = array(
					'ket_pengumuman'	=> $this->input->post('ket_pengumuman')
				);
				$this->db->update('tbl_pengumuman', $data, array('id_pengumuman' => "1"));

				$this->session->set_flashdata(
					'msg',
					'
							<div class="alert alert-success alert-dismissible" role="alert">
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
								 </button>
								 <strong>Sukses!</strong> Keterangan Pengumuman berhasil diperbarui.
							</div>'
				);
				redirect('panel_admin/set_pengumuman');
			}
		}
	}

	public function edit_ket2($aksi = '', $id = '')
	{
		$ceks = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			  = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web'] 		= "Edit Keterangan Tidak Lulus";

			$data['v_ket']	  		= $this->db->get_where('tbl_pengumuman', "id_pengumuman='2'")->row();

			$this->load->view('admin/header', $data);
			$this->load->view('admin/set_pengumuman/set_keterangan', $data);
			$this->load->view('admin/footer');

			if (isset($_POST['btnupdate'])) {
				$data = array(
					'ket_pengumuman'	=> $this->input->post('ket_pengumuman')
				);
				$this->db->update('tbl_pengumuman', $data, array('id_pengumuman' => "2"));

				$this->session->set_flashdata(
					'msg',
					'
							<div class="alert alert-success alert-dismissible" role="alert">
								 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
									 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
								 </button>
								 <strong>Sukses!</strong> Keterangan Pengumuman berhasil diperbarui.
							</div>'
				);
				redirect('panel_admin/set_pengumuman');
			}
		}
	}

	public function statistik($aksi = '', $id = '')
	{
		$ceks 	 = $this->session->userdata('un@sman1_belitang');
		if (!isset($ceks)) {
			redirect('panel_admin/log_in');
		} else {
			$data['user']  			    = $this->db->get_where('tbl_user', "username='$ceks'");
			$data['judul_web']			= "Statistik Pendaftaran Siswa";

			if ($aksi == 'thn') {
				$thn = $id;
			} else {
				$thn = date('Y');
			}
			$data['v_thn']				= $thn;

			foreach ($this->Model_data->statistik($thn)->result_array() as $row) {
				$data['grafik'][] = (float)$row['Januari'];
				$data['grafik'][] = (float)$row['Februari'];
				$data['grafik'][] = (float)$row['Maret'];
				$data['grafik'][] = (float)$row['April'];
				$data['grafik'][] = (float)$row['Mei'];
				$data['grafik'][] = (float)$row['Juni'];
				$data['grafik'][] = (float)$row['Juli'];
				$data['grafik'][] = (float)$row['Agustus'];
				$data['grafik'][] = (float)$row['September'];
				$data['grafik'][] = (float)$row['Oktober'];
				$data['grafik'][] = (float)$row['Nopember'];
				$data['grafik'][] = (float)$row['Desember'];
			}

			foreach ($this->Model_data->statistik($thn, 'diverifikasi')->result_array() as $row) {
				$data['grafik2'][] = (float)$row['Januari'];
				$data['grafik2'][] = (float)$row['Februari'];
				$data['grafik2'][] = (float)$row['Maret'];
				$data['grafik2'][] = (float)$row['April'];
				$data['grafik2'][] = (float)$row['Mei'];
				$data['grafik2'][] = (float)$row['Juni'];
				$data['grafik2'][] = (float)$row['Juli'];
				$data['grafik2'][] = (float)$row['Agustus'];
				$data['grafik2'][] = (float)$row['September'];
				$data['grafik2'][] = (float)$row['Oktober'];
				$data['grafik2'][] = (float)$row['Nopember'];
				$data['grafik2'][] = (float)$row['Desember'];
			}

			foreach ($this->Model_data->statistik($thn, 'diterima')->result_array() as $row) {
				$data['grafik3'][] = (float)$row['Januari'];
				$data['grafik3'][] = (float)$row['Februari'];
				$data['grafik3'][] = (float)$row['Maret'];
				$data['grafik3'][] = (float)$row['April'];
				$data['grafik3'][] = (float)$row['Mei'];
				$data['grafik3'][] = (float)$row['Juni'];
				$data['grafik3'][] = (float)$row['Juli'];
				$data['grafik3'][] = (float)$row['Agustus'];
				$data['grafik3'][] = (float)$row['September'];
				$data['grafik3'][] = (float)$row['Oktober'];
				$data['grafik3'][] = (float)$row['Nopember'];
				$data['grafik3'][] = (float)$row['Desember'];
			}

			foreach ($this->Model_data->statistik($thn, 'tidak diterima')->result_array() as $row) {
				$data['grafik4'][] = (float)$row['Januari'];
				$data['grafik4'][] = (float)$row['Februari'];
				$data['grafik4'][] = (float)$row['Maret'];
				$data['grafik4'][] = (float)$row['April'];
				$data['grafik4'][] = (float)$row['Mei'];
				$data['grafik4'][] = (float)$row['Juni'];
				$data['grafik4'][] = (float)$row['Juli'];
				$data['grafik4'][] = (float)$row['Agustus'];
				$data['grafik4'][] = (float)$row['September'];
				$data['grafik4'][] = (float)$row['Oktober'];
				$data['grafik4'][] = (float)$row['Nopember'];
				$data['grafik4'][] = (float)$row['Desember'];
			}

			$this->db->like('tgl_siswa', "$thn", 'after');
			$data['total_pendaftar'] 		 = $this->db->get("tbl_siswa")->num_rows();

			$this->db->like('tgl_siswa', "$thn", 'after');
			$data['total_diverifikasi'] 	 = $this->db->get_where("tbl_siswa", "status_verifikasi='1'")->num_rows();

			$this->db->like('tgl_siswa', "$thn", 'after');
			$data['total_diterima'] 			 = $this->db->get_where("tbl_siswa", "status_pendaftaran='lulus'")->num_rows();

			$this->db->like('tgl_siswa', "$thn", 'after');
			$data['total_tidak_diterima'] = $this->db->get_where("tbl_siswa", "status_pendaftaran='tidak lulus'")->num_rows();

			$this->load->view('admin/header', $data);
			$this->load->view('admin/statistik/index', $data);
			$this->load->view('admin/footer');
		}
	}


	public function logout()
	{
		if ($this->session->has_userdata('un@sman1_belitang') != '' and $this->session->has_userdata('id_user@sman1_belitang') != '') {
			$this->session->sess_destroy();
		}
		redirect('panel_admin/log_in');
	}
}
