<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProdutoModel;

class Produto extends BaseController
{
    protected $produtoModel;
    protected $session;

    public function __construct()
    {
        $this->produtoModel = new ProdutoModel();
        $this->session = service('session');
    }

    public function index()
    {

        $data['titulo'] = "Gerir produtos";
        $data['produtos'] = $this->produtoModel->findAll();
        $data['msg'] = $this->session->getFlashdata('msg');
        $this->smartyView('produtos', $data);
    }

    public function adicionar()
    {
        $data['msg'] = '';
        $data['errors'] = [];
        $data['msgType'] = '';

        if ($this->request->getMethod() == 'post') {
            try {
                if ($this->produtoModel->insert($this->request->getPost())) {
                    $data['msg'] = 'Produto adicionado com sucesso.';
                    $data['msgType'] = 'primary';
                } else {
                    $data['msg'] = 'Erro ao adicionar o produto';
                    $data['errors'] = $this->produtoModel->errors();
                    $data['msgType'] = 'warning';
                }
            } catch (\Exception$e) {
                $data['msg'] = 'Erro ao adicionar o produto';
                $data['errors'] = $e->getMessage();
                $data['msgType'] = 'danger';
            }
        }
        $data['titulo'] = 'Gerir Produto';
        $data['subtitulo'] = 'Adicionar Produto';
        $this->smartyView('form_produtos', $data);
    }

    public function editar($id = null)
    {
        if (is_null($id)) {
            return redirect()->to('/produtos')->with('msg', '#ID invalido');
        }

        $data['msg'] = '';
        $data['errors'] = [];
        $data['msgType'] = '';

        if ($this->request->getMethod() == 'post') {
            try {
                if ($this->produtoModel->update($id,
                    $this->request->getPost())) {
                    $data['msg'] = 'Produto editado com sucesso.';
                    $data['msgType'] = 'primary';
                } else {
                    $data['msg'] = 'Erro ao editar o produto';
                    $data['errors'] = $this->produtoModel->errors();
                    $data['msgType'] = 'warning';
                }
            } catch (\Exception$e) {
                $data['msg'] = 'Erro ao editar o produto';
                $data['msgType'] = 'danger';
                $data['errors'][] = $e->getMessage();

            }
        }

        $produto = $this->produtoModel->find($id);
        $data['titulo'] = 'Gerir Produto';
        $data['subtitulo'] = 'Editar Produto';
        $data['produto'] = $produto;
        $this->smartyView('form_produtos', $data);

    }

    public function eliminar($id = null)
    {
        if (is_null($id)) {
            return redirect()->to('/produtos')->with('msg', '#ID invalido');
        }

        $msg = '';
        try {
            $this->produtoModel->delete($id);
            $msg = 'Produto eliminado com sucesso.';
        } catch (\Exception$e) {
            $msg = 'Erro ao eliminar o produto ' . $e->getMessage();
        }

        return redirect()->to('/produtos')->with('msg', $msg);

    }
}
