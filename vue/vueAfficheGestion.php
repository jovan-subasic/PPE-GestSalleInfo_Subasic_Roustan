<pre>
    <?php var_dump($_POST)?>
</pre>

<h3>Ajouter un poste:</h3>

<form action="vue/vueAfficheGestion.php" method="POST">

<p>
    
    <input type="text" name="Enter_nPoste" placeholder="Numéro du poste" />
    
    <input type="text" name="Enter_nomPoste" placeholder="Nom de poste" />
    
    <input type="text" name="Enter_indIP" placeholder="indIP" />
    
    <input type="text" name="Enter_ad" placeholder="ad" />
    
    <input type="text" name="Enter_typePoste" placeholder="Type de poste" />
    
    <?php
    /*Combo Box*/
    /*<input type=text list=browsers >
        <datalist id=browsers >
            <option> BeOs
            <option> NC
            <option> PCNT
            <option> PCWS
            <option> TX
            <option> UNIX
    </datalist>*/ ?>
   
    <input type="text" name="Enter_nSalle" placeholder="Numéro salle où sera situé le Poste" />
    
    <input type="number" name="Enter_nbLog" placeholder="Nombre de logiciel" />
    
    <button type="submit"> Créer le Poste </button>

</p>

</form>

