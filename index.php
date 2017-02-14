
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
    <img id = "headshot" src="images/leo-web.jpg" alt="Picture of my dad's dog, Leo, when he was a puppy"/>
    
    <p>Hello. My name is Anne Hazel and I have a Bachelor's degree in Studio Art and Spanish from the University of Richmond and another Bachelor’s degree in Web Development from Colorado Technical University (CTU). The program I completed at CTU was not as beneficial as I would have liked, so I began a Masters program at the Harvard Extension School in 2015. I really enjoy learning the details of web development technologies and scripting languages, and my intent is to work as a web developer with my current employer.</p>
    
    <!-- start PHP random quote
    Quotes taken from http://spanish-phrases.com/spanish-quotes/
    -->
    <div id="quote">
        <h2>Quotes ~ Citas</h2>
        <?php
            $quoteArray = [
                    "'Hacer de tripas corazón.'",
                    "'El que algo quiere, algo le cuesta.'",
                    "'En los nidos de antaño, no hay pájaros hogaño.'",
                    "'El mejor halago es que lo imiten a uno.'",
                    "'A diario una manzana es cosa sana.'"
         ];
            $quote = $quoteArray[array_rand($quoteArray, 1)];
            echo $quote;
        ?>

    </div> <!--end of #quote-->
    <p class = "fineprint">Quotes from http://spanish-phrases.com/spanish-quotes/<p>
</div> <!--end of #main-->
    
</body>
</html>