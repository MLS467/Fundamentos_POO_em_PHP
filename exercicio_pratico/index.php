<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>ex</title>
</head>

<body>

    <pre>

        <?php
        require_once "./Pessoa.php";
        require_once "./Livro.php";

        $pes = new Pessoa("Maisson", 29, "Masculino");
        $livro = new Livro("Harry Potter", "JK Rolling", 560);
        print_r($pes);
        echo "<br><br><br>";

        echo "<br><br><br>";
        $livro->setLeitor($pes);
        $livro->abrir();
        $pes->fazerAniversario();
        print_r($livro);
        $livro->detalhes();



        ?>

</pre>
</body>

</html>