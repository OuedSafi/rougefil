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
           <!-- <li><a href="#">Accueil</a></li>  -->
        </ul>
        <a href="#" class="btn-reservation ">Reserver maintenant</a>
    </header>
        
@if(session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
    <section id="contact">
        <h1 class="title">Veuillez remplir le formulaire</h1>
        <form method="POST" action="">
        @csrf
<div class="left-right">
<div class="left"> 
            <label>Nom de l'eleve</label>
            <input type="text" name="nom_de_l_eleve" required autofocus autocomplete="text">
            <label>Genre de l'eleve</label>
            <input type="text" name="genre_de_l_eleve" required autofocus autocomplete="text">
            <label>Extrait de naissance de l'eleve</label>
            <input type="file" name="extrait_de_naissance_de_l_eleve" required autofocus autocomplete="image">
            <label>Tel du pere</label>
            <input type="text" name="tel_du_pere" required autofocus autocomplete="text">
</div>
<div class="right">
           <label>prenom de l'eleve</label>
            <input type="text" name="prenom_de_l_eleve" required autofocus autocomplete="text">
            <label>Email de l'eleve</label>
            <input type="text" name="email_de_l_eleve" required autofocus autocomplete="text">
            <label>Bulletin de l'eleve</label>
            <input type="file" name="bulletin_de_l_eleve" required autofocus autocomplete="image">     
</div>
</div>
<button>Envoyer</button>
        </form>

    <footer>
        <p>Realisé par <span>My School</span> / Tous les droits sont reservés.</p>
    </footer>
</body>
</html>