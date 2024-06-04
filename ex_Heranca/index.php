<?php
function espaco()
{
    for ($i = 0; $i < 5; $i++) {
        echo "<br>";
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>

<body>
    <pre>
        <?php
        require_once "./autoload.php";

        $v1 = new Visitante("Pedro", 17, "M");
        $v1->setNome("João");
        print_r($v1);

        espaco();

        $p1 = new Professor("TI", 2500.00);
        $p1->setNome("Roger");
        $p1->setIdade(36);
        $p1->receberAumento(300);
        $p1->setSexo("M");
        print_r($p1);
        espaco();

        $a1 = new Aluno(123, "TI");
        $a1->setNome("Mateus");
        $a1->setIdade(15);
        $a1->pagarMensalidade();
        print_r($a1);
        espaco();

        $ab1 = new Bolsista(111, "Informatica");
        $ab1->setNome("Diogo");
        $ab1->setIdade(22);
        $ab1->fazerAniversario();
        $ab1->pagarMensalidade();
        print_r($ab1);
        espaco();


        $at1 = new Tecnico(171, "Infra");
        $at1->setNome("Goku");
        $at1->setIdade(32);
        $at1->fazerAniversario();
        $at1->praticar();
        print_r($at1)

        ?>
    </pre>
</body>

</html>