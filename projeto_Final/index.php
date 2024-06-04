<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Final</title>
</head>

<body>
    <pre>
        <?php
        require_once "autoload.php";
        require_once "../espaco.php";
        $vetVideo = array();
        $vetVideo[0] = new Video("Video de PHP");
        $vetVideo[1] = new Video("Video de POO");
        $vetVideo[1]->setReproduzindo(true);

        print_r($vetVideo);
        espaco();

        $gafanhoto = new Gafanhoto("Maisson", 29, "M", true, 5000);
        $gafanhoto->viuMaisUm();
        $gafanhoto->ganharExperiencia();
        $gafanhoto2 = new Gafanhoto("Luciane", 31, "F", true, 0);
        print_r($gafanhoto);
        espaco();

        $view = array();


        $view[0] = new Visualizacao($gafanhoto, $vetVideo[1]);
        $view[0]->avaliarPorc(50);

        $view[1] = new Visualizacao($gafanhoto, $vetVideo[0]);
        $view[1]->avaliarPorc(90);

        print_r($view);

        ?>  
    </pre>

</body>

</html>