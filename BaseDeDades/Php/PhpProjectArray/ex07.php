<html>
    <head>
        <meta charset="UTF-8">
        <title>ex07</title>
    </head>
    <body>
        <?php
        //Crea un array que simule un tablero de ajedr ez. Los peones serán p, las torres t, los alfiles a, los caballos c, el rey r y la reina R. Donde no haya ninguna ficha debe de haber un punto (.). Muestra el array por pantalla.
        $peones["peones"] = "p";
        $torres["torres"] = "t";
        $alfiles["alfiles"] = "a";
        $caballos["caballos"] = "c";
        $rey["rey"] = "r";
        $reina["reina"] = "R";
        $punto["punto"] = ".";

        echo $torres["torres"];
        echo $caballos["caballos"];
        echo $alfiles["alfiles"];
        echo $rey["rey"];
        echo $reina["reina"];
        echo $torres["torres"];
        echo $caballos["caballos"];
        echo $alfiles["alfiles"] . "<br>";
        for ($i = 1; $i <= 8; $i++) {
            echo $peones["peones"];
            if ($i == 8) {
                echo "<br>";
            }
        } for ($i = 1; $i <= 32; $i++) {
            echo $punto["punto"] . "   ";
            if ($i == 8 || $i == 16 || $i == 24 || $i == 32) {
                echo "<br>";
            }
        }for ($i = 1; $i <= 8; $i++) {
            echo $peones["peones"];
            if ($i == 8) {
                echo "<br>";
            }
        }
        echo $torres["torres"];
        echo $caballos["caballos"];
        echo $alfiles["alfiles"];
        echo $rey["rey"];
        echo $reina["reina"];
        echo $torres["torres"];
        echo $caballos["caballos"];
        echo $alfiles["alfiles"];
        ?>
    </body>
</html>