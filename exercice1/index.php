<?php
  $page = 'Exercice 1';//déclaration d'une variable pour l'exercice
  include '../header.php';//inclus le header et la navbar
  $number = 0;
?>
<div class="text-center d-flex flex-column" style="font-size: 25px">
  <?php
    while($number <= 10)//tant que $number est inférieur ou égale à 10
    {
      echo '<p>ceci est la ligne ' . $number . '</p>';//affiche les nombres
      $number++;//en incrémentant la valeur de la variable
    }
  ?>
</div>
<?php include '../footer.php' //inclus le footer?>
