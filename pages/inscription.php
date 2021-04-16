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
  <div class="container m-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card">
                <form action="formulaire.php" method="post"  class="p-3" >
                    <div class="form-group">
                      <label for="nom">Nom</label>
                      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Pérenom</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                      </div>
                      <div class="form-group">
                        <label for="email">email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" required>
                      </div>
                      <div class="form-group">
                        <label for="date">Date de naissance</label>
                        <input type="date" class="form-control" id="date" aria-describedby="emailHelp" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlTextarea2">Message </label>
                        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
                      </div>                
                      <div class="champ">
                        <input type="radio" id="h" name="sexe" value="homme">
                        <label for="h">Homme</label>
                        <input type="radio" id="f" name="sexe" value="femme">
                        <label for="f">Femme</label>
                       </div>
                    <button type="submit" class="btn btn-primary btn-block">Envoyez</button>
                  </form>
            </div>
          </div>          
  </div>              
  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>    
</body>
</html>