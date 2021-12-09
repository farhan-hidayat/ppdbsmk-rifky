<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Web extends CI_Controller
{

	public function index()
	{
		// $data['web_ppdb']	 = $this->db->get('tbl_web')->row();
		// $data['web_ppdb']	 = $this->db->query("SELECT status_ppdb FROM tbl_web")->result();
		$tgl = $this->db->query("SELECT * FROM tbl_web")->row();
		// $a = strtotime("2017-03-10");
		// $b = strtotime("2017-03-09");
		// $c= round(abs($a - $b) / 60,2);
		$start = $tgl->tgl_diubah;
		$end = $tgl->tgl_tutup;
		$data = array(
			'start' => strtotime($start),
			'end' => strtotime($end),
			'now' => strtotime(date('Y-m-d'))
		);
		// $data['selisi']	 = $this->db->query("SELECT tgl_tutup FROM tbl_web")->result();
		// $data	 = array (
		// 	'selisih' => $this->db->query("SELECT tgl_tutup FROM tbl_web")->result(),
		// 	'web' => $this->db->query("SELECT status_ppdb FROM tbl_web")->result()
		// );
		$this->load->view('web/index', $data);
	}

	public function pendaftaran()
	{
		$data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}
		$data['kuota']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		if ($data['web_ppdb']->status_ppdb == 'tutup') {
			redirect('404');
		}

		$this->db->order_by('id_pdd', 'ASC');
		$data['v_pdd'] = $this->db->get('tbl_pdd')->result();

		$this->db->order_by('id_jurusan', 'ASC');
		$data['v_jurusan'] = $this->db->get('tbl_jurusan')->result();

		$this->db->order_by('id_penghasilan', 'ASC');
		$data['v_penghasilan'] = $this->db->get('tbl_penghasilan')->result();

		$this->db->where('ket_pekerjaan', 'ayah');
		$this->db->order_by('id_pekerjaan', 'ASC');
		$data['v_pekerjaan_ayah'] = $this->db->get('tbl_pekerjaan')->result();

		$this->db->where('ket_pekerjaan', 'ibu');
		$this->db->order_by('id_pekerjaan', 'ASC');
		$data['v_pekerjaan_ibu'] = $this->db->get('tbl_pekerjaan')->result();

		$this->db->order_by('id_pekerjaan', 'ASC');
		$this->db->group_by('nama_pekerjaan');
		$data['v_pekerjaan_wali'] = $this->db->get('tbl_pekerjaan')->result();

		$this->load->view('web/pendaftaran', $data);

		if (isset($_POST['btndaftar'])) {
			$this->db->order_by('id_siswa', 'DESC');
			$sql 		= $this->db->get('tbl_siswa');
			if ($sql->num_rows() == 0) {
				$no_pendaftaran   = "PSB" . date('Y-m') . "001";
			} else {
				$noUrut 	 	= substr($sql->row()->no_pendaftaran, 12, 3);
				$noUrut++;
				$no_pendaftaran	  = "PSB" . date('Y-m') . sprintf("%03s", $noUrut);
			}

			$jurusan						= $this->input->post('jurusan');
			$nis							= $this->input->post('nis');
			$nisn							= $this->input->post('nisn');
			$nik							= $this->input->post('nik');
			$nama_lengkap			= $this->input->post('nama_lengkap');
			$jk								= $this->input->post('jk');
			$tempat_lahir			= $this->input->post('tempat_lahir');
			$tgl_lahir				= $this->input->post('tgl_lahir') . "-" . $this->input->post('bln_lahir') . "-" . $this->input->post('thn_lahir');
			$agama						= $this->input->post('agama');
			$status_keluarga	= $this->input->post('status_keluarga');
			$alamat_siswa			= $this->input->post('alamat_siswa');
			$no_hp_siswa			= $this->input->post('no_hp_siswa');
			$nama_ayah				= $this->input->post('nama_ayah');
			$pdd_ayah					= $this->input->post('pdd_ayah');
			$pekerjaan_ayah		= $this->input->post('pekerjaan_ayah');
			$penghasilan_ayah	= $this->input->post('penghasilan_ayah');
			$no_hp_ayah				= $this->input->post('no_hp_ayah');
			$nama_ibu					= $this->input->post('nama_ibu');
			$pdd_ibu					= $this->input->post('pdd_ibu');
			$pekerjaan_ibu		= $this->input->post('pekerjaan_ibu');
			$penghasilan_ibu	= $this->input->post('penghasilan_ibu');
			$no_hp_ibu				= $this->input->post('no_hp_ibu');
			$nama_wali				= $this->input->post('nama_wali');
			$pdd_wali					= $this->input->post('pdd_wali');
			$pekerjaan_wali		= $this->input->post('pekerjaan_wali');
			$penghasilan_wali	= $this->input->post('penghasilan_wali');
			$no_hp_wali				= $this->input->post('no_hp_wali');
			$npsn							= $this->input->post('npsn');
			$nama_sekolah			= $this->input->post('nama_sekolah');
			$status_sekolah		= $this->input->post('status_sekolah');
			$model_un					= $this->input->post('model_un');
			$alamat_sekolah		= $this->input->post('alamat_sekolah');
			$thn_lulus				= $this->input->post('thn_lulus');
			$tgl_siswa				= $this->Model_data->date('waktu_default');

			// if ($_POST['total_nilai'] < 50) {
			// 	$this->session->set_flashdata(
			// 		'msg',
			// 		'
			// 		<div class="alert alert-warning alert-dismissible" role="alert">
			// 			 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			// 				 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
			// 			 </button>
			// 			 <strong>Gagal Mendaftar PPDB Online!</strong> Maaf <b>' . $nama_lengkap . '</b> tidak bisa mendaftar PPDB dikarenakan Total nilai Rata-Rata Rapor kurang dari 75. Terimakasih.
			// 		</div>'
			// 	);
			// 	redirect('pendaftaran');
			// }

			$data = array(
				'no_pendaftaran'		=> $no_pendaftaran,
				'password'				  => $nisn,
				'jurusan'					  		=> $jurusan,
				'nis'					  		=> $nis,
				'nisn'				  		=> $nisn,
				'nik'				  			=> $nik,
				'nama_lengkap'			=> $nama_lengkap,
				'jk'				  			=> $jk,
				'tempat_lahir'			=> $tempat_lahir,
				'tgl_lahir'				  => $tgl_lahir,
				'agama'				  	  => $agama,
				'status_keluarga'		=> $status_keluarga,
				'alamat_siswa'			=> $alamat_siswa,
				'no_hp_siswa'				=> $no_hp_siswa,
				'nama_ayah'				  => $nama_ayah,
				'pdd_ayah'				  => $pdd_ayah,
				'pekerjaan_ayah'		=> $pekerjaan_ayah,
				'penghasilan_ayah'	=> $penghasilan_ayah,
				'no_hp_ayah'				=> $no_hp_ayah,
				'nama_ibu'				  => $nama_ibu,
				'pdd_ibu'				  	=> $pdd_ibu,
				'pekerjaan_ibu'			=> $pekerjaan_ibu,
				'penghasilan_ibu'		=> $penghasilan_ibu,
				'no_hp_ibu'				  => $no_hp_ibu,
				'nama_wali'				  => $nama_wali,
				'pdd_wali'				  => $pdd_wali,
				'pekerjaan_wali'		=> $pekerjaan_wali,
				'penghasilan_wali'	=> $penghasilan_wali,
				'no_hp_wali'				=> $no_hp_wali,
				'npsn_sekolah'  	  => $npsn,
				'nama_sekolah'			=> $nama_sekolah,
				'status_sekolah'		=> $status_sekolah,
				'model_un'				  => $model_un,
				'alamat_sekolah'		=> $alamat_sekolah,
				'thn_lulus'				  => $thn_lulus,
				'tgl_siswa'				  => $tgl_siswa
			);
			$this->db->insert('tbl_siswa', $data);

			$data2 = array(
				'siswa'	=> $no_pendaftaran,
				's_akte'	=> "Belum Upload",
				's_kk'	=> "Belum Upload",
				's_fk'	=> "Belum Upload",
				's_skl'	=> "Belum Upload",
				's_ijazah'	=> "Belum Upload",
				's_pernyataan'	=> "Belum Upload"
			);
			$this->db->insert('tbl_berkas', $data2);

			

			// $this->session->set_flashdata('msg',
			// 	'
			// 	<div class="alert alert-success alert-dismissible" role="alert">
			// 		 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
			// 			 <span aria-hidden="true">&times;&nbsp; &nbsp;</span>
			// 		 </button>
			// 		 <strong>Sukses!</strong> Berhasil ditambahkan.
			// 	</div>'
			// );
			$this->session->set_userdata('no_pendaftaran', "$no_pendaftaran");
			redirect('panel_siswa');
		}
	}

	public function logcs()
	{
		$tgl = $this->db->query("SELECT * FROM tbl_web")->row();
		$start = $tgl->tgl_diubah;
		$end = $tgl->tgl_tutup;
		$data = array(
			'start' => strtotime($start),
			'end' => strtotime($end),
			'now' => strtotime(date('Y-m-d'))
		);
		// $data['web_ppdb']	 = $this->db->get_where('tbl_web', "id_web='1'")->row();
		// if ($data['web_ppdb']->status_ppdb == 'tutup') {
		// 	redirect('404');
		// }
		$ceks = $this->session->userdata('no_pendaftaran');
		if (isset($ceks)) {
			redirect('panel_siswa');
		} else {
			$this->load->view('web/index', $data);

			if (isset($_POST['btnlogin'])) {
				$username = $_POST['username'];
				$pass	   = $_POST['password'];

				$this->db->like('tgl_siswa', date('Y'), "after");
				$query  = $this->db->get_where('tbl_siswa', "no_pendaftaran='$username'");
				$cek    = $query->result();
				$cekun  = $cek[0]->no_pendaftaran;
				$jumlah = $query->num_rows();

				if ($jumlah == 0) {
					$this->session->set_flashdata(
						'msg',
						'
									 <div class="alert alert-danger alert-dismissible" role="alert">
									 		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;&nbsp;</span>
											</button>
											<strong>No. Pendaftaran "' . $username . '"</strong> belum terdaftar.
									 </div>'
					);
					redirect('logcs');
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
															<strong>No. Pendaftaran atau NISN Salah!</strong>.
													 </div>'
						);
						redirect('logcs');
					} else {

						$this->session->set_userdata('no_pendaftaran', "$cekun");

						redirect('panel_siswa');
					}
				}
			}
		}
	}


	function error_not_found()
	{
		$this->load->view('404_content');
	}
}
