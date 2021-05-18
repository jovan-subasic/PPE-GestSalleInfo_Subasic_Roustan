<?php if($UserManager->is_logged())
{?>
    <p>bienvenue <?php echo htmlspecialchars($_SESSION['pseudo']) ?> | <a href="./?action=logout"> se déconnecter</a> </p>
    
<?php 
}
else
{?>
    <div class="container">
    <h1>Authentification</h1>

    <form action="./?action=connexion" method="POST">

        <input type="text" name="pseudo" placeholder="nom d'utilisateur" /><br />
        <input type="password" name="mdp" placeholder="Mot de passe"  /><br />
        <input type="submit" value="Connexion" />
        
    </form>
    </div>
<?php
}
?>

</html>







<style>
    
form {
    width:100%;
    padding: 30px;
    border: 1px solid #f1f1f1;
    background: #fff;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
input[type=submit] {
    background-color: #53af57;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}
input[type=submit]:hover {
    background-color: white;
    color: #53af57;
    border: 1px solid #53af57;
}

</style>