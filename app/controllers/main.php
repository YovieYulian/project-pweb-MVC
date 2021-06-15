<?php
class main extends Controller{
    public function index()
    {
        $nama = 'najmi';
        $data['judul'] = 'BagiDarah.com - Setetes Darah Anda Sangat Berarti Bagi Mereka.';
        $this->view('header',$data);
        $this->view('main/index',$data);
        $this->view('footer');
    }

    public function najmi() {
        $data['judul'] = 'Najmi';
        $data['najmi'] = $this->model('user_model')->get('1');
        $this->view('header',$data);
        $this->view('main/najmi',$data);
        $this->view('footer');
    }

    public function ariyani() {
        $data['judul'] = 'Ariyani';
        $this->view('header',$data);
        $this->view('main/ariyani',$data);
        $this->view('footer');
    }

    public function agil() {
        $data['judul'] = 'Agil';
        $this->view('header',$data);
        $this->view('main/agil',$data);
        $this->view('footer');
    }

    public function lord() {
        $data['judul'] = 'Wahid';
        $this->view('header',$data);
        $this->view('main/lord',$data);
        $this->view('footer');
    }
}