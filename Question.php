
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
    <div id ="app container">  
        <div id="score-container">Quizzeo Score : 0</div>
    
       <h2 id=" app-title">Quizzeo application</h2>
       
      <?php

       $ans1 = $_POST[ans1];

       $ans2 = $_POST[ans2];

       $ans3 = $_POST[ans3];

       $ans4 = $_POST[ans4];

       $ans5 = $_POST[ans5];
                
       $correct= 0;

       if(!empty($_POST)){
       if ($ans1 == Masashi_Kashimoto)
       $correct++;
           }else{
                   echo "<p> will read manga, fake otakus</p>";
               }

               if($ans2 == "10"){
                   $correct++;else
               } else{
                echo "<p> You're not a real pirate </p>";
            }

            if($ans3 == "My_hero_academia" ){
                $correct++;
            } else{
             echo "<p> You don't have enough ultra .</p>";
            }
            
            if($ans4 == "Une légende dans le football camerounais" ){
                $correct++;
            } else{
             echo "<p> Eeehh, je wanda sur toi</p>";
            }

            if($ans5 == "Yes, broooohh"){
                $correct++;
            } else{
             echo "<p> So ,you don't know the famous all eyes on me...</p>";
            }

            
               ?>
            <form action ="Quizzeo.php" method=" post ">
             
            <p> Who is the author of naruto shippuden?</p>
              <input type="text" name="ans1">

            <p> How many albums has Booba released?</p>
              <input type="text" name="ans1">

            <p>What does M.H.A. mean? </p>
              <input type="text" name="ans1">

            <p> Who is Samuel Eto'o?</p>
              <input type="text" name="ans1">

            <p> Is Tupac a legend of hip-hop culture?</p>
              <input type="text" name="ans1">

            </form>
    </div>
</body>
</html>
