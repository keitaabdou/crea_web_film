<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>Premiere page web</title>
</head>
<body>
    <nav>
        <div class="logo"><a href="../index.php">Première page</a></div>
        <input type="checkbox" id="click">
        <label for="click" class="menu-btn">
          <i class="fas fa-bars"></i>
        </label>
        <ul>
            <li><a class="active" href="../index.php">Accueil</a></li>
            <li><a href="prison_breack.php">Prison breack</a></li>
            <li><a href="chronos.php">24heure chronos</a></li>
            <li><a href="donias.php">Donia</a></li>
            <li><a href="inscription.php">Inscription</a></li>
        </ul>
  </nav>

  <p>Dans le formulaire précédent, vous avez fourni les
    informations suivantes :</p>
    
    <?php
        echo 'Nom : '.$_POST["nom"].'<br>';
        echo 'Prénom : '.$_POST["prenom"].'<br>';
        echo 'Email : ' .$_POST["mail"].'<br>';
        echo 'date : ' .$_POST["date"].'<br>';
        echo 'Sexe : ' .$_POST["sexe"].'<br>';
    ?>
  
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>    
</body>
</html>