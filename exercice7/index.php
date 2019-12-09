<?php
  $page = 'Exercice 7';//déclaration d'une variable pour afficher le numéro d'exercice sur la page
  include '../header.php';//inclus le header et la navbar dans le html
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <?php
    for ($number = 1; $number <= 100; $number+=15)//boucle qui définit la valeur de la variable, sa condition , et son incrémentation de 15
    {
      echo '<p>'.$number. '. On tient le bon bout.</p>';//affiche le resultat dans une balise html
    }
   ?>
</div>
<? include '../footer.php' //inclus le footer dans le html?>
