<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="lib/lib.css">
    <link rel="stylesheet" href="style.css">
    <script src="lib/lib.js"></script>
    <script src="main.js" defer></script>
    <title>Quizzeo</title>

</head>
<body>
        <form action ="action.php?action=AJOUTQUIZZ" method="post">
             
            <p> Intitulé du quizz</p>
               <input type="text" name="titre">
 
            <p> Difficulté</p>

               <input type="text" name="difficulté">

             <button type="submit">Valider</button>
        </form>

</body>
</html>