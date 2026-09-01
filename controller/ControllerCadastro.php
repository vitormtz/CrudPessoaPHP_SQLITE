<?php

require_once("../model/Pessoa.php");

class cadastroController {

    private $cadastro;

    public function __construct() {
        $this->cadastro = new Pessoa();
        $this->incluir();
    }

    private function incluir() {
        $this->cadastro->setNome($_POST['nome']);
        $this->cadastro->setSobrenome($_POST['sobrenome']);
        $this->cadastro->setIdade($_POST['idade']);
        $this->cadastro->setCpf($_POST['cpf']);
        $result = $this->cadastro->incluir();
        error_log("00000000000000000000000000000000000000000000000000000000000000000000000000000000000");
        if ($result >= 1) {
            error_log("11111111111111111111111111111111111111111111111111111111111111111111111111111111111");
            echo "<script>alert('Registro incluído com sucesso!');document.location='cadastro.php'</script>";
        } else {
            error_log("22222222222222222222222222222222222222222222222222222222222222222222222222222222222");
            echo "<script>alert('Erro ao gravar registro!, verifique se a pessoa não está duplicada');history.back()</script>";
        }
        error_log("3333333333333333333333333333333333333333333333333333333333333333333333333333333333");
    }

}

if (isset($_POST['submit'])) {
    new cadastroController();
}

