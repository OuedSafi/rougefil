<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <title>MySchool</title>
</head>
<body>
    <header>
        <div class="logo">
            <a href="accueil.blade"> <span>My</span>School</a>
        </div>
        <ul class="menu">
             <li><a href="/accueil">Accueil</a></li>
           <li><a href="/niveaux">Niveaux</a></li>
           <li><a href="">Inscription</a></li> 
           <li><a href="/contact">Contacts</a></li>
        </ul>
        <a href="/ecole" class="btn-reservation ">Reserver maintenant</a>
    </header>
<section class="home">
    <h4>Votre application de reservation en ligne</h4>
</section>

@if(session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
</body>
</html>