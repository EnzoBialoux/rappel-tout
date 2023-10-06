<?php
    
    session_start();
            
?>
            
     <!DOCTYPE HTML>
    
    <html>
    
        <head>
            <meta charset="utf-8">
            <title>Connexion</title>
            <link rel="stylesheet" href="style.css">
        </head>
    
    
        <body>

        <div class=entete>
        <a href="rappel.php"><img src = "images/Rappel.png" alt="rappel" /></a>
            <center><h1>RAPPEL</h1></center> <hr></div>
        
            <br><br>
            <form method="post" action='rappel.php'>

                <h2>Login :</h2>    <input type="text" placeholder="Entrez votre login" class="form-control" id="login" name="login"> <br>
                <h2>Mot de passe :</h2> <input type="password" placeholder="Entrez votre mot de passe" class="form-control" id="mdp" name="mdp">
                <INPUT TYPE="submit" NAME="submit" VALUE="Continuer" >
                
                <?php
                    if(isset($_GET['erreur']))
                    {
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                    echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                    }
                ?>
            </form>
            <div id='footer'></div>
                    
        </body>
    
    </html>

   