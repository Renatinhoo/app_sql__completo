<?php
require_once("banco.php");

class Cadastro extends Banco {

    private $email;
    private $senha;
    private $endereco;
    private $bairro;
    private $cep;
    private $cidade;
    private $estado;

    //Metodos Set
    public function setId($int){
        $this->id = $int;
    }
    public function setEmail($string){
        $this->email = $string;
    }
    public function setSenha($string){
        $this->senha = $string;
    }
    public function setEndereco($string){
        $this->endereco = $string;
    }
    public function setBairro($string){
        $this->bairro = $string;
    }
    public function setCep($int){
        $this->cep = $int;
    }
    public function setCidade($string){
        $this->cidade =$string;
    }
    public function setEstado($string){
        $this->estado = $string;
    }

    //Metodos Get
    public function getId(){
        return $this->id;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
    public function getEndereco(){
        return $this->endereco;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getCep(){
        return $this->cep;
    }
    public function getCidade(){
        return $this->cidade;
    }
    public function getEstado(){
        return $this->estado;
    }

    public function incluir(){
        return $this->setCadastro($this->getEmail(),$this->getSenha(),$this->getEndereco(),$this->getBairro(),$this->getCep(),$this->getCidade(),$this->getEstado());
    }

    public function listar($id){
        return $this->getCadastro($id);
    }

    public function editar(){
        return $this->updateCadastro($this->getId(),$this->getEmail(),$this->getSenha(),$this->getEndereco(),$this->getBairro(),$this->getCep(),$this->getCidade(),$this->getEstado());
    }

    public function excluir($id){
        return $this->deleteCadastro($id);
    }

}
?>
