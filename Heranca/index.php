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
    require_once "Pessoa.php";
    require_once "Aluno.php";
    require_once "Funcionario.php";
    require_once "./Professor.php";

    // Criando o vetor de objetos
    $vet = array();

    // Criando instâncias das subclasses

    $aluno = new Aluno(4455, "Tech");
    $prof = new Professor("Informática", 3200.00);

    $vet[0] = new Funcionario("Secretária", true);
    $vet[1] = new Pessoas();  // Adicionando uma instância de Pessoa




    // Definindo nomes para os objetos
    $aluno->Teste();
    $aluno->setNome("João Silva");
    // Chamando o método cancelarMatricula

    $vet[1]->setNome("Pedro");

    $prof->setNome("Pedroso");
    $prof->receberAumento(1000);

    $vet[0]->setNome("Creusa");

    // Imprimindo os objetos
    var_dump($prof);
    ?>
    </pre>
</body>

</html>