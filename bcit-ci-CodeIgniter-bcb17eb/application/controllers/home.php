<?php
class home extends CI_Controller{

    public function rumah()
{

    echo 'Belajar WEB Framework';
}
public function tampil()
{
    return $this->view('v_tampil');
}

} 