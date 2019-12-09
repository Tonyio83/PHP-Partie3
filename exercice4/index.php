<?php
  $page = 'Exercice 4';//déclaration d'une variable pour afficher le numéro d'exercice dans le html
  include '../header.php';//inclus le header et la navbar dans le html
  ?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <?php
    for ($number = 1; $number <= 10; $number += 0.5)//boucle qui définit la valeur de la variable, sa condition , et son incrémentation
    {
      echo '<p>le résultat est ' .$number. '</p>';//affiche le resultat dans le html
    }
   ?>
</div>
<? include '../footer.php' //inclus le footer?>
