<?php
  $page = 'Exercice 8';//déclaration d'une variable pour afficher le numéro d'exercice sur la page
  include '../header.php';//inclus le fichier dans le html
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <?php
    for ($number = 200; $number >= 0; $number-=12)//boucle qui définit la valeur de la variable, sa condition , et sa décrémentation de 12
    {
      echo '<p>'.$number. '. Enfin !!!</p>';//affiche le resultat dans une balise html
    }
   ?>
</div>

<? include '../footer.php' //inclus le fichier dans le html?>
