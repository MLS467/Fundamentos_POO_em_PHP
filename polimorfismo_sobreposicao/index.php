<!DOCTYPE html>
<html lang="pt-br">

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

        $canguru = new Canguru();
        $cachorro = new Cachorro();
        $arara = new Arara();
        $goldfish = new GoldFish();
        $tartaruga = new Tartaruga();
        $cobra = new Cobra();


        $canguru->locomover();
        $canguru->setPeso(54.7);
        $canguru->setIdade(5);
        $canguru->setCorPelo("Amarelo");
        $canguru->usarBolsa();

        print_r($canguru);
        espaco();
        espaco();
        $cachorro->locomover();
        $arara->locomover();
        $goldfish->locomover();
        $tartaruga->locomover();
        $cobra->locomover();
















        // $mamifero = new Mamifero();
        // $mamifero->setCorPelo("Preto");
        // $mamifero->emitirSom();
        // $mamifero->locomover();
        // $mamifero->setPeso(25.3);
        // $mamifero->setMembros(4);
        // $mamifero->setIdade(5);
        // print_r($mamifero);
        // espaco();

        // $reptil = new Reptil();
        // $reptil->setPeso(8.4);
        // $reptil->setIdade(1);
        // $reptil->setMembros(4);
        // $reptil->emitirSom();
        // $reptil->locomover();
        // print_r($reptil);
        // espaco();


        // $peixe = new Peixe();
        // $peixe->setPeso(5.350);
        // $peixe->setIdade(1);
        // $peixe->setMembros(0);
        // $peixe->setCorEscama("Colorido");
        // $peixe->locomover();
        // $peixe->soltaBolhas();

        // print_r($peixe);
        // espaco();

        // $ave = new Ave();
        // $ave->setCorPena("Preta");
        // $ave->setPeso(5.784);
        // $ave->locomover();
        // $ave->setMembros(2);
        // $ave->emitirSom();

        // print_r($ave);

        ?>
    </pre>
</body>

</html>