<?php 
require_once("pessoa.class.php");

class Teste{
    private $pessoa;

    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setEmail($_POST['Email']);
        echo "Email:" . $pessoa->getEmail();
        echo "<br>";

        $pessoa->setSenha($_POST['Senha']);
        echo "Senha: " . $pessoa->getSenha();
        echo "<br>";        
    }
}new Teste();

?>