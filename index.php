
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="utf-8" />
        <title>php part8 exe4</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"/>
        <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css" />
        <link href="https://fonts.googleapis.com/css?family=Charm" rel="stylesheet"/> 
        <link rel="stylesheet" href="style.css" />
    </head>
    <body>
        <h1>EXERCICE 4 PARTIE 8</h1>
        <p class="text-muted">Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les affiches.</p>
                <div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <!-- affichage des infos du cookies créé a l exo3
  si le cookie est vide on affiche rien('')sinon on affiche la valeur du cookie 'login'-->
             <p>votre identifiant est:   <?= (empty($_COOKIE ['login'])) ? '' : $_COOKIE ['login'] ?></p>  
            <p>  et votre mot de passe est:  <?= (empty($_COOKIE ['password'])) ? '' : $_COOKIE ['password'] ?></p>
            </div>
        </div>
      
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>
</html>