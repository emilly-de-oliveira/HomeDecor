<?php
include "../model/BD.class.php";

class OuvidoriaController {

    private $model;
    private $table = "ouvidoria";

    public function __construct(){
        $this->model = new BD();
    }

    public function salvar($dados){
        try {   
            if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
                throw new Exception(" Formato de e-mail inválido. ");
            }
            $this->model->inserir($this->table, $dados);

            $_SESSION['url'] ="ouvidoriaList.php";
            $_SESSION['msg'] ="Registro Salvo com sucesso!";
    
        } catch (Exception $e){
            $_SESSION['dados'] = $dados;
            $_SESSION['url'] = 'ouvidoria.php';
            $_SESSION['msg'] = $e->getMessage();
        }
    }
    public function atualizar($dados){     
        try {            
            if (!filter_var($dados['email'], FILTER_VALIDATE_EMAIL)) {
                throw new Exception(" Formato de e-mail inválido. ");
            }
          
            $this->model->atualizar($this->table, $dados);
          
            $_SESSION['url'] ="ouvidoriaList.php";
            $_SESSION['msg'] ="Registro atualizado com sucesso!";
    
        } catch (Exception $e){
            $_SESSION['dados'] = $dados;
            $_SESSION['url'] = 'ouvidoria.php?id='.$dados['id'];
            $_SESSION['msg'] = $e->getMessage();
    
        }
    }
    public function carregar(){    
       return $this->model->select($this->table);
    }
    public function pesquisar($dados){
        
        return $this->model->pesquisar($this->table, $dados);
    }
    public function deletar($id){
        
        $this->model->deletar($this->table, $id);
    }
    public function buscar($id){
        
        return $this->model->buscar($this->table, $id);
    }
}