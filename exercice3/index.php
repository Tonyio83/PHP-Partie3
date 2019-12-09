<?php
  $page = 'Exercice 3';//déclaration d'une variable pour l'exercice
  include '../header.php';//inclus le header et la navbar
  $firstNumber = 100;//déclaration d'une variable pour le premier nombre
  $secondNumber = 20;//déclaration d'une variable le second nombre
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <?php
    while ($firstNumber >= 10)//tant que $firstNumber est supérieur ou égale à 10
    {
     echo '<p>le résultat est ' . $firstNumber * $secondNumber . '</p>';//affiche le résultat de l'opération
     $firstNumber--;//décrémente le premier nombre
    }
  ?>
</div>
<? include '../footer.php' //inclus le footer?>
