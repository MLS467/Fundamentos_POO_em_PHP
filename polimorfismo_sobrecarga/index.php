<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <pre>

        <?php
        require_once "autoload.php";
        require_once "../espaco.php";

        $c = new Mamifero();
        $c->emitirSom();
        $c->setIdade(4);
        $c->setPeso(4.5);
        $c->setMembros(4);
        $c->setCorPelo("Branco");

        print_r($c);
        espaco();

        $lobo = new Lobo();
        $lobo->emitirSom();
        $lobo->setCorPelo("Cinza");
        print_r($lobo);
        espaco();


        $cachorro = new Cachorro();

        $cachorro->reagirFrase("Olá");
        $cachorro->reagirFrase("Vai apanhar");
        $cachorro->reagirHora(11, 45);
        $cachorro->reagirHora(21, 00);
        $cachorro->reagirDono(true);
        $cachorro->reagirDono(false);
        $cachorro->reagirIdadePeso(2, "Pesado");
        $cachorro->reagirIdadePeso(17, "Leve");
        print_r($cachorro);

        ?>
    </pre>
</body>

</html>