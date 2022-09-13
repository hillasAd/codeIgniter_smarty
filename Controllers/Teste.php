<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Teste extends BaseController
{
    public function index()
    {
       $data['titulo']='Smarty funcionando';
       $data['subtitulo']='Lets gooooo';
       $this->smartyView('teste',$data);
    }
}
