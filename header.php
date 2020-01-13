<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Navigation -->
    <header>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#titre1">Présentation</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#titre2">Activités</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#titre3">Donations</a>
            </li>
        </ul>

        <div class="blog-header">
  <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
  <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
</div>

    </header>