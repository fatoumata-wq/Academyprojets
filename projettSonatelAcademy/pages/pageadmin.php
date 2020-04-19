
<?php
is_connect();

     echo @$_SESSION['user']['prenom'];
     echo @$_SESSION['user']['nom'];
     echo @$_SESSION['user']['login'];
     echo @$_SESSION['user']['profil'];
     echo @$_SESSION['user']['photo'];

?>



<div class="couvre">
    <div class="couvre-header">
        <div class="title1">créer et paramètrer vos quizz</div>
        <div>
        <div><button type="submit" class="btn1 deconnexion" name="btn_submit" id="" value=""><a href="index.php?statut=logout" class="dec">Deconnexion</a></button></div>
        </div>
    </div>
    <div class="couvre-body">
      <div class="menu">
          <div class="menu-header">
              <div class="photo-form">
             
              </div>
          </div>
          <div class="list">
              <nav class="list-form">
                <ul>
                <div class="liste-icon-form list1"></div>
                <li><a href="">Liste Questions</a></li>
                <div class="liste-icon-form list2"></div>
                <li><a href="index.php?lien=accueil&page=inscription">Créer Admin</a></li>
                <div class="liste-icon-form list3"></div>
                <li><a href="index.php?lien=accueil&page=joueur">Liste Joueurs</a></li>
                <div class="liste-icon-form list4"></div>
                <li><a href="">Créer Questions</a></li>  
                </ul>
              </nav> 
         </div>
      </div>
      
 </div>   
</div>

<?php

if ($_GET['page'] == 'joueur') 
    {
        include("pageJoueur.php");
    }
elseif ($_GET['page'] == 'inscription') 
    {
        include("Inscription.php");
    }    



?>