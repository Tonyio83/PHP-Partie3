<?php
  $page = 'Exercice 2';//déclaration d'une variable pour le numéro d'exercice
  $firstNumber = 0;//déclaration d'une variable pour le premier nombre
  $secondNumber = 50;//déclaration d'une variable le second nombre
  include '../header.php';//inclus le header et la navbar
  ?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <?php
    while ($firstNumber <= 20)//tant que $firstNumber est inférieur ou égale à 20
    {
      echo '<p>le résultat est ' . $firstNumber * $secondNumber . '</p>';//affiche le résultat de l'opération
      $firstNumber++;//incrémente le premier nombre
    }
  ?>
</div>
<? include '../footer.php' //inclus le footer?>
