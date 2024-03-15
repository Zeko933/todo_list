<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public\css\page.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <title>Document</title>
</head>

<body>
    <!-- <nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand mt-2 mt-lg-0" href="/">
                <img src="public/img/logo.png" height="60" />
            </a> -->
            <nav class="navbar navbar-expand-lg navbar-light bg-secondary-subtle class= form-control border-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Projet PHP Serveur</a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="/">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/article">Article</a>
                </li>
                <?php if (!isset($_SESSION['user'])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/register">Register</a>
                    </li>
                    <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

                <?php } else { ?>

                    <li class="nav-item">
                        <a class="nav-link" href="/logout">logout</a>
                    </li>

                    <?php if ($_SESSION['user']['admin'] == true) { ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/product-create">create product</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="/admin">admin</a>
                        </li>
              
                     
                <?php }
                } ?>
            </ul>
        </div>
    </nav>