<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"
    />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="icon" href="./img/icon.png" />
    <title>Sign Up</title>
</head>

<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top"> <a class="navbar-brand" href="index.html">Sign Up</a>
    <button class="navbar-toggler"
            type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item"> <a class="nav-link" href="about.html">Login</a>
            </li>
        </ul>
    </div>
</nav>
<main role="main" class="container mt-5">
    <div class="row">
        <div class="col-8">
            <div class="card p-3 ">
                <h1 class="card-title">Login</h1>
                <div class="card-body text-justify">
                    <form>
                        Email:<br>
                        <input type="text" id="email" name="email"><br>
                        <errors id="errorE"></errors><br>
                        Password:<br>
                        <input type="text" id="pass" name="pass"><br>
                        <errors id="errorP"></errors><br>
                        <button>Cancel </button>
                        <input type="button" value="Login" onclick="signUpCheck();">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card mb-5 shadow-sm bg-white rounded p-3">
                <div class="card-body">
                    <h3><a class="nav-link" href="index.html">Sign Up Here</h3>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- /.container -->
<footer class="footer">
    <div class="container col text-center"> <span class="text-muted">© 2020 Denis Smirnov</span>
    </div>
</footer>