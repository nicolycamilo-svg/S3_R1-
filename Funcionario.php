<?php
class Funcionario {
    protected string $nome;
    protected string $cpf;

    public function __construct(string $nome, string $cpf) {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function calcularPagamento(): float {
        return 0.0;
    }
}
?>