<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "stylesheet" type= "text/css" href= "stylesheets/style.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="home">
    <main>    
        <header>
            <img src="" alt="">
            <h1>Hello</h1>

        </header>
        <section>
            <ul>
                <li><a href="index.php?action=aboutMe" class="">Sobre mi</a></li>
                <li><a href="index.php?action=jobExperience" class="">Experiencia laboral</a></li>
                <li><a href="index.php?action=education" class="">Educacion</a></li>
                <li><a href="index.php?action=skills" class="">Skills</a></li>
                <li><a href="index.php?action=hobbies" class="">Hobbies</a></li>
            </ul>
        </section>
        <div>
            <div>
               <section>
                   <?php
                        $Mvc = new MvcController();
                        $Mvc -> viewLinkController();
                   ?>

               </section>
            </div>
        </div>   
    </main>
</body>
</html>