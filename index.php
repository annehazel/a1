
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
    
    <p>Hello. My name is Anne Hazel and I have a Bachelor's degree in Studio Art and Spanish from the University of Richmond and another Bachelor’s' degree in Web Development from Colorado Technical Institute (CTU). The program I completed at CTU was not as beneficial as I would have liked, and so I began a Masters program at the Harvard Extension School in 2015. I really enjoy learning the details of web development technologies and scripting languages, and my intent is to work as a web developer with my current employer.</p>
    <p>I currently work at the Lincoln Institute of Land Policy (in Cambridge, MA) as the Program Coordinator for the Program on Latin America and the Caribbean. I help organize courses, events and research programs, traveling to several week-long courses in Latin America throughout the year. The Institute has overhauled its website over the past year and I have been part of the in-house team working on the content specifications for this project. I am working towards a position as a web developer or an administrator of our Learning Management System.</p>
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