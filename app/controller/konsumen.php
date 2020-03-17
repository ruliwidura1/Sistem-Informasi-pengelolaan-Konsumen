<?php
class konsumen extends JI_Controller{

	public function __construct(){
    parent::__construct();
		$this->setTheme('front');
    $this->load('konsumen_model','km');
	}
	public function index(){
		$data = $this->__init(); //method from app/core/ji_controller



		//this config can be found on app/view/front/page/html/head.php
		$this->setTitle('Tentang ke Pasien '.$this->site_suffix);
		$this->setDescription('Silakan login terlebih dahulu sebelum ikut antrian di '.$this->site_name);
		$this->setKeyword('dr alfred');
    //Ambil data dari tabel
    $data["konsumen"] = $this->km->get();

		//sidebar left
		//this view can be found on app/view/front/page/html/sidebar_left.php
		$this->putThemeLeftContent("page/html/sidebar_left",$data); //pass data to view

		//sidebar right
		//this view can be found on app/view/front/page/html/sidebar_left.php
		$this->putThemeRightContent("page/html/sidebar_right",$data); //pass data to view

		//main content
		//this view can be found on app/view/front/home/home.php
		$this->putThemeContent("konsumen/home",$data); //pass data to view
		//this view for INPAGE JS Script can be found on app/view/front/page/home/home_bottom.php
		$this->putJsContent("konsumen/home_bottom",$data); //pass data to view

		$this->loadLayout("login",$data);
		$this->render();
	}
  public function tambah(){
		$data = $this->__init(); //method from app/core/ji_controller



		//this config can be found on app/view/front/page/html/head.php
		$this->setTitle('Tentang ke Pasien '.$this->site_suffix);
		$this->setDescription('Silakan login terlebih dahulu sebelum ikut antrian di '.$this->site_name);
		$this->setKeyword('dr alfred');

		//sidebar left
		//this view can be found on app/view/front/page/html/sidebar_left.php
		$this->putThemeLeftContent("page/html/sidebar_left",$data); //pass data to view

		//sidebar right
		//this view can be found on app/view/front/page/html/sidebar_left.php
		$this->putThemeRightContent("page/html/sidebar_right",$data); //pass data to view

		//main content
		//this view can be found on app/view/front/home/home.php
		$this->putThemeContent("konsumen/tambah",$data); //pass data to view
		//this view for INPAGE JS Script can be found on app/view/front/page/home/home_bottom.php
		$this->putJsContent("konsumen/tambah_bottom",$data); //pass data to view

		$this->loadLayout("login",$data);
		$this->render();
	}
  public function tambah_proses(){
    //Tangkap inputan  input handler
    $nama = $this->input->post("nama");
    $no_hp = $this->input->post("no_hp");
    $alamat = $this->input->post("alamat");

    //insert into konsumen table
    $this->km->set($nama,$no_hp,$alamat);
    echo $alamat;
    redir(base_url("konsumen"));

  }
  public function edit($id){
		$data = $this->__init(); //method from app/core/ji_controller
    //Ambil data dari tabel
    $data['konsumen'] = $this->km->getById($id);

    if(!isset($data['konsumen'][0])){
      redir(base_url("konsumen"));
      die;
    }
		//this config can be found on app/view/front/page/html/head.php
		$this->setTitle('Tentang ke Pasien '.$this->site_suffix);
		$this->setDescription('Silakan login terlebih dahulu sebelum ikut antrian di '.$this->site_name);
		$this->setKeyword('dr alfred');

		//sidebar left
		//this view can be found on app/view/front/page/html/sidebar_left.php
		$this->putThemeLeftContent("page/html/sidebar_left",$data); //pass data to view

		//sidebar right
		//this view can be found on app/view/front/page/html/sidebar_left.php
		$this->putThemeRightContent("page/html/sidebar_right",$data); //pass data to view

		//main content
		//this view can be found on app/view/front/home/home.php
		$this->putThemeContent("konsumen/edit",$data); //pass data to view
		//this view for INPAGE JS Script can be found on app/view/front/page/home/home_bottom.php
		$this->putJsContent("konsumen/edit_bottom",$data); //pass data to view

		$this->loadLayout("login",$data);
		$this->render();
	}
  public function edit_proses($id){
    //Tangkap inputan  input handler
    $nama = $this->input->post("nama");
    $no_hp = $this->input->post("no_hp");
    $alamat = $this->input->post("alamat");

    //insert into konsumen table
    $this->km->update($id,$nama,$no_hp,$alamat);
    echo $alamat;
    redir(base_url("konsumen"));
}
public function hapus($id){
  $data = $this->__init(); //method from app/core/ji_controller
  //Ambil data dari tabel
  $data['konsumen'] = $this->km->getById($id);

  if(!isset($data['konsumen'][0])){
    redir(base_url("konsumen"));
    die;
  }

  //this config can be found on app/view/front/page/html/head.php
  $this->setTitle('Tentang ke Pasien '.$this->site_suffix);
  $this->setDescription('Silakan login terlebih dahulu sebelum ikut antrian di '.$this->site_name);
  $this->setKeyword('dr alfred');

  //sidebar left
  //this view can be found on app/view/front/page/html/sidebar_left.php
  $this->putThemeLeftContent("page/html/sidebar_left",$data); //pass data to view

  //sidebar right
  //this view can be found on app/view/front/page/html/sidebar_left.php
  $this->putThemeRightContent("page/html/sidebar_right",$data); //pass data to view

  //main content
  //this view can be found on app/view/front/home/home.php
  $this->putThemeContent("konsumen/hapus",$data); //pass data to view
  //this view for INPAGE JS Script can be found on app/view/front/page/home/home_bottom.php
  $this->putJsContent("konsumen/hapus_bottom",$data); //pass data to view

  $this->loadLayout("login",$data);
  $this->render();
}
public function hapus_proses($id){
  //Tangkap inputan  input handler
  $konsumen = $this->km->del($id);
  redir(base_url("konsumen"));
}
}
