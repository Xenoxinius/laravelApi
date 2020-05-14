<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> MarvelApi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/app.css">
</head>

<nav class="navbar navbar-expand-md navbar-dark bg-danger fixed-top">
    <a class="navbar-brand" href="#">MARVEL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link {{Request::is('/') ? 'active' : ''}}" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('characters') ? 'active' : ''}}" href="/index.php/characters">Search Character</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('charactersbyname') ? 'active' : ''}}" href="/index.php/charactersbyname">Alphabetically</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{Request::is('contact') ? 'active' : ''}}" href="/index.php/contact">Contact us</a>
            </li>

        </ul>
    </div>
</nav>
