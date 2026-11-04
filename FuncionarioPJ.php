<?php
require_once 'Funcionario.php';

class FuncionarioPJ extends Funcionario {
    private float $horasTrabalhadas;
    private float $valorHora;

    public function __construct(string $nome, string $cpf, float $horasTrabalhadas, float $valorHora) {
        parent::__construct($nome, $cpf);
        $this->horasTrabalhadas = $horasTrabalhadas;
        $this->valorHora = $valorHora;
    }

    #[Override]
    public function calcularPagamento(): float {
        // Pagamento bruto por horas prestadas
        return $this->horasTrabalhadas * $this->valorHora;
    }
}
?>