<?php

require_once '_include/authenticate-user.php';

?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8" />
    <title>FaaSter</title>
    <link href="style.css" rel="stylesheet" />
  </head>

  <body>
    <header>
      <h1>FaaSter</h1>
    </header>

    <hr />

    <nav>
      <ul>
        <li><a href="functions.php?my_token=<?php echo $user['token']; ?>">Mes fonctions</a></li>
        <li><a href="payment-history.php?my_token=<?php echo $user['token']; ?>">Historique des paiements</a></li>
        <li><a href="logout.php?my_token=<?php echo $user['token']; ?>">Se déconnecter</a></li>
      </ul>
    </nav>

    <hr />

    <article>
      <h2>Nouvelle fonction</h2>

      <form action="function_new-post.php?my_token=<?php echo $user['token']; ?>" method="post">
        <div>
          <label>
            Titre<br />
            <input id="title" name="title" type="text" placeholder="Titre" required>
          </label>
        </div>

        <div>
          <label>
            Code PHP<br />
            <textarea name="code" placeholder="Code PHP" rows="10"></textarea>
          </label>
        </div>

        <div>
          <input type="submit" value="Créer la fonction">
        </div>
      </form>
    </article>
  </body>
</html>
