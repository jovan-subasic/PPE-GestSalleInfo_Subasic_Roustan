
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <style>
         *{
            font-family:arial;
         }
         body{
            margin:20px;
         }
         input{
            border:solid 1px #2222AA;
            margin-bottom:10px;
            padding:16px;
            outline:none;
            border-radius:6px;
         }
         .erreur{
            color:#CC0000;
            margin-bottom:10px;
         }
         a{
            font-size:12pt;
            color:#EE6600;
            text-decoration:none;
            font-weight:normal;
         }
         a:hover{
            text-decoration:underline;
         }
      </style>
   </head>
  
      <h1>Authentification</h1>

      <form action="./?action=connexion" method="POST">
        <input type="text" name="pseudoU" placeholder="nom d'utilisateur" /><br />
        <input type="password" name="mdpU" placeholder="Mot de passe"  /><br />
        <input type="submit" />
      </form>

</html>