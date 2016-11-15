<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Welcome extends CI_Controller {
  function __construct(){
    parent::__construct();
    $this->load->model('m_panti');
  }

  public function index(){
    $this->load->view('header');
    $this->load->view('slider');
    $this->load->view('home');
    $this->load->view('footer');
  }

  public function tentangkami(){
    $this->load->view('header');
    $this->load->view('tentangkami');
    $this->load->view('footer');
  }

  public function zakat(){
    $this->load->view('header');
    $this->load->view('menuzakat');
    $this->load->view('zakat');
    $this->load->view('footer');
  }

  public function profileanak(){
    $data['record'] = $this->m_panti->getProfile();
    $this->load->view('header');
    $this->load->view('profileanak',$data);
    $this->load->view('footer');
  }

  public function kontak(){
    $this->load->view('header');
    $this->load->view('kontak');
    $this->load->view('footer');
  }

  public function zakat_uang(){
    $this->load->view('header');
    $this->load->view('menuzakat');
    $this->load->view('zakatuang');
    $this->load->view('footer');
  }

  public function zakat_per(){
    $this->load->view('header');
    $this->load->view('menuzakat');
    $this->load->view('zakatperdagangan');
    $this->load->view('footer');
  }

  public function zakat_pertanian(){
    $this->load->view('header');
    $this->load->view('menuzakat');
    $this->load->view('zakatpertanian');
    $this->load->view('footer');
  }

  public function zakat_ternak(){
    $this->load->view('header');
    $this->load->view('menuzakat');
    $this->load->view('zakatternak');
    $this->load->view('footer');
  }

  public function zakat_temuan(){
    $this->load->view('header');
    $this->load->view('menuzakat');
    $this->load->view('zakattemuan');
    $this->load->view('footer');
  }
}
