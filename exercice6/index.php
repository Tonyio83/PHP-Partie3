<?php
  $page = 'Exercice 6';//déclaration d'une variable pour l'exercice
  include '../header.php';//inclus le header et la navbar
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <?php
    for ($number = 20; $number >= 0; $number--)//boucle qui définit la valeur de la variable, sa condition , et son incrémentation
    {
      echo '<p>' .$number. '. C\'est presque bon</p>';//affiche le resultat dans une balise html
    }
   ?>
</div>
<? include '../footer.php' //inclus le footer dans le html?>
