<?php
class main extends Controller{
    public function index()
    {
        $data['orang'] = $this->model('user_model')->getAllPerson(); 
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
        $data['ariyani'] = $this->model('user_model')->get('2');
        $this->view('header',$data);
        $this->view('main/ariyani',$data);
        $this->view('footer');
    }

    public function agil() {
        $data['judul'] = 'Agil';
        $data['agil'] = $this->model('user_model')->get('3');
        $this->view('header',$data);
        $this->view('main/agil',$data);
        $this->view('footer');
    }

    public function lord() {
        $data['judul'] = 'Wahid';
        $data['lord'] = $this->model('user_model')->get('4');
        $this->view('header',$data);
        $this->view('main/lord',$data);
        $this->view('footer');
    }
}