<?php
require_once 'Funcionario.php';

class FuncionarioCLT extends Funcionario {
    private float $salarioBase;

    public function __construct(string $nome, string $cpf, float $salarioBase) {
        parent::__construct($nome, $cpf);
        $this->salarioBase = $salarioBase;
    }

    #[Override]
    public function calcularPagamento(): float {
        // Exemplo: Salário com desconto padrão de 10% de imposto/benefícios
        return $this->salarioBase * 0.90;
    }
}
?>