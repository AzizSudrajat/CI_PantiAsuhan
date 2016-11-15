<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->model('m_admin');
    // $this->model = $this->m_admin;
    // $this->load->database();

    $this->load->model('m_panti');
    $this->load->helper(array('url')); //load helper url
    if (!$this->session->userdata('logged_in')) {
        redirect('admin/masuk');
		}
  }

  public function index(){
    $data['record'] = $this->m_admin->getAdmin();
    $this->load->view('admin/header');
    $this->load->view('admin/home');
    $this->load->view('admin/contenthome',$data);
  }

  public function tambah_admin(){
    $data['record'] = $this->m_admin->getAdmin();
    $this->load->view('admin/header');
    $this->load->view('admin/home');
    $this->load->view('admin/tambah_admin',$data);
  }

  public function profile_anak(){
    $data['record'] = $this->m_panti->getProfile();
    $this->load->view('admin/header');
    $this->load->view('admin/home');
    $this->load->view('admin/profile_anak',$data);
  }

  public function tambah_anak(){
    $data['record'] = $this->m_panti->getProfile();
    $this->load->view('admin/header');
    $this->load->view('admin/home');
    $this->load->view('admin/tambah_anak',$data);
  }

  function logout() {
    $this->session->unset_userdata('logged_in');
    redirect('admin/welcome', 'refresh');
  }

	public function insert_profile(){
  	$this->load->library('upload');
  	$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
    $config['upload_path'] = './uploads/profile/'; //path folder
    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
    $config['max_size'] = '200488'; //maksimum besar file 20M
    $config['file_name'] = $nmfile; //nama yang terupload nantinya
  	$this->upload->initialize($config);

    if($_FILES['profile']['name'])
    // // if (isset($_POST['submit']))
    {
      if (!$this->upload->do_upload('profile'))
      {
			     // $error = array('error' => $this->upload->display_errors());
           $this->load->view('admin/header');
           $this->load->view('admin/home');
           $this->load->view('admin/tambah_anak');
           // $this->load->view('admin/tambah_anak', $error);
			        //redirect('admin/welcome/tambahgambar'); //jika gagal maka akan ditampilkan form tambahgambar
            }else{
              $gbr = $this->upload->data();
              $data = array(
                'nama_profile' =>$this->input->post('nama_anak'),
                'deskripsi' =>$this->input->post('deskripsi'),
                'profile' =>$gbr['file_name']
              );

              // $gbr = $this->upload->data();
              // $data = array(
              //   'nama_profile' =>$this->input->post('nama_anak'),
              //   'deskripsi' =>$this->input->post('deskripsi'),
              //   'profile' =>$gbr['file_name']
              // );

      $this->m_panti->insert_profile($data); //akses model untuk menyimpan ke database
      redirect('admin/welcome/profile_anak'); //jika berhasil maka akan ditampilkan view gambar
        }
      }
    }

		//tampilkan halaman edit gambar
		public function editprofile($id) {
    // public function editprofile() {
			$data['record'] = $this->m_panti->getSingleProfile($id)->result();
			// $this->load->view('admin/edit_anak', $data);
      $this->load->view('admin/header');
      $this->load->view('admin/home');
      $this->load->view('admin/edit_anak', $data);
		}

		//melakukan edit gambar
		public function update_profile(){
			$this->load->library('upload');
			$nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
			$config['upload_path'] = './uploads/profile/'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['max_size'] = '20488'; //maksimum besar file 20M
			$config['file_name'] = $nmfile; //nama yang terupload nantinya
			$this->upload->initialize($config);

			if($_FILES['profile']['name'])
			{
				if (!$this->upload->do_upload('profile'))
				{

					redirect('admin/welcome/edit_anak'); //jika gagal maka akan ditampilkan form upload

				}else{
				$gbr = $this->upload->data();
				$data = array(
				'nama_profile' =>$this->input->post('nama_anak'),
				'deskripsi' =>$this->input->post('deskripsi'),
				'profile' =>$gbr['file_name']
				);
				$this->m_panti->update_profile($data, $this->input->post('id')); //akses model untuk menyimpan ke database
		    // redirect('admin/welcome/tambah_anak'); //jika berhasil maka akan ditampilkan view gambar
        redirect('admin/welcome/tambah_anak'); //jika berhasil maka akan ditampilkan view gambar

				}
			}

      $data = array(
      'nama_profile' =>$this->input->post('nama_anak'),
      'deskripsi' =>$this->input->post('deskripsi'),
      'profile' =>$gbr['file_name']
      );
			$this->m_panti->update_profile($data, $this->input->post('id')); //akses model untuk menyimpan ke database
			// redirect('admin/welcome/tambah_anak'); //jika berhasil maka akan ditampilkan view gambar
      redirect('admin/welcome/tambah_anak'); //jika berhasil maka akan ditampilkan view gambar

    }

		//melakukan hapus gambar
		function do_hapus_profile($id) {
			$this->m_panti->do_hapus_profile($id);
		}

    // insert akun admin
    public function insert_admin(){
      if(isset($_POST['btnSubmit'])){
				// $gbr = $this->upload->data();
				$data = array(
        'id' =>$this->input->post('id'),
				'username' =>$this->input->post('username'),
				'password' =>$this->input->post('password')
				// 'profile' =>$gbr['file_name']
				);
				$this->m_admin->insert_admin($data); //akses model untuk menyimpan ke database
		    // redirect('admin/welcome/tambah_anak'); //jika berhasil maka akan ditampilkan view gambar
        redirect('admin/welcome/tambah_admin'); //jika berhasil maka akan ditampilkan view gambar
      }else{
        redirect('admin/welcome'); //jika gagal maka akan ditampilkan form upload
			}
		}

    public function editadmin($id) {
    // public function editprofile() {
			$data['record'] = $this->m_admin->getSingleAdmin($id)->result();
			// $this->load->view('admin/edit_anak', $data);
      $this->load->view('admin/header');
      $this->load->view('admin/home');
      $this->load->view('admin/edit_admin', $data);
		}

    public function update_admin(){
      if(isset($_POST['btnSubmit'])){
				// $gbr = $this->upload->data();
				$data = array(
        'id' =>$this->input->post('id'),
				'username' =>$this->input->post('username'),
				'password' =>$this->input->post('password')
				// 'profile' =>$gbr['file_name']
				);
				$this->m_admin->update_admin($data, $this->input->post('id')); //akses model untuk menyimpan ke database
		    // redirect('admin/welcome/tambah_anak'); //jika berhasil maka akan ditampilkan view gambar
        redirect('admin/welcome'); //jika berhasil maka akan ditampilkan view gambar
      }else{
        redirect('admin/welcome/update_admin'); //jika gagal maka akan ditampilkan form upload
			}
    }

    //melakukan hapus gambar
		function do_hapus_admin($id) {
			$this->m_admin->do_hapus_admin($id);
		}
}
