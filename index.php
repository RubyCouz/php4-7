<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8" />
  <title>Exercice 7</title>
</head>
<body>
  <p>
    <?php
    //défintion de la fonction
    function string($gender, $age)
    {
      //conditon
      if ($gender == 'homme' && $age >= 18)
      {
        echo 'Vous êtes un homme et vous êtes majeur';
      }
      elseif ($gender == 'homme' && $age < 18)
      {
        echo 'Vous êtes un homme et vous êtes mineur';
      }
      elseif ($gender == 'femme' && $age >= 18)
      {
        echo 'Vous êtes une femme et vous êtes majeur';
      }
      elseif ($gender == 'femme' && $age < 18)
      {
        echo 'Vous êtes une femme et vous êtes mineur';
      }
    }
    //appel de la fonction et indication des paramètres
    string('femme', 56);
    ?>
  </p>
</body>
</html>
