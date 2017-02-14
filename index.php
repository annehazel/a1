
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <title>Anne Hazel - Assignment 1</title>
    <link rel="stylesheet" href="css/style.css" />
</head>

<body>

<div id="main">  
    <h1>Anne Hazel</h1>
    <img id = "headshot" src="images/hazel-anne.png" alt="picture of Anne Hazel"/>
    
    <p>Anne Hazel</p>

    <!-- start PHP random quote
    Quotes taken from http://spanish-phrases.com/spanish-quotes/
    -->
    <div>
        <?php
            $quoteArray = [
                    "Hacer de tripas corazón.",
                    "El que algo quiere, algo le cuesta.",
                    "En los nidos de antaño, no hay pájaros hogaño.",
                    "El mejor halago es que lo imiten a uno.",
                    "A diario una manzana es cosa sana."
         ];
        
        
        $quote = $quoteArray[array_rand($quoteArray, 1)];
        echo $quote;
    ?>
    
    </div>
</div> <!--end of #main-->
    
</body>
</html>