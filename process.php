<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censorship results</title>
</head>
<body>
    <?php 

    //prendi i parametry query
    $paragraph = $_GET["paragraph"];
    $wordToCensor = [ 'Lorem' , 'ipsum', 'sed', 'magna'];

    //mostra il paragrafo originale e la sua lunghezza
    //quando il paragrafo è multilinea, si usa nl2br per preservare i line breaks

    /*$string = "This is a
    multi-line
    string.";

    Applying nl2br
    echo nl2br($string);*/  

    echo "<h2>Paragrafo originale:</h2>";
    echo "<p>" . nl2br($paragraph) . "</p>";
    echo "<p><strong>Lunghezza:</strong> " . strlen($paragraph) . "<br><br>";

    //parole censurate

    $censoredParagraph = str_ireplace($wordToCensor, '***', $paragraph);

    //mostra il paragrafo censurato e la sua lunghezza

    echo "<h2>Paragrafo Censurato: </h2>";
    echo nl2br($censoredParagraph) . "<br>";
    echo "<p><strong>Lunghezza:</strong> "  . strlen($censoredParagraph) . "<br><br>";
    ?>
    
</body>
</html>