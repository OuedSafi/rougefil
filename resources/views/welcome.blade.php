<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('styles/font-awesome/css/all.css') }}">
    <title>Document</title>
</head>


<body style="background-color: #29d9d5;">
    
<header>
        <div class="logo">
            <a href="accueil.blade"> <span>Mon</span>ecole</a>
        </div>
        <a href="#" class="btn-reservation ">Reserver maintenant</a>
    </header>
 </br></br>
<div class="container">
	<div class="row align-center">
		<div class="col-6 offset-1">
			<div class="row bg-dark">
			</div></br></br>
			<div class="row">
				<h3 class="fs-5 fw-bold blacktext mt-3">Application de reservation en ligne</h3>
			</div>
			<div class="text-center row">
				<div class="text-center pt-4 mt-5">
				@if (Route::has('login'))
					<div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
						@auth
							<a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
								<button class="btn btn-primary"><span class="fw-bold">Dashboard</span></button>
							</a>
							@else
							<a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
								<button class="btn btn-primary"><span class="fw-bold">Connexion</span></button>
							</a>
							@if (Route::has('register'))
							<a href="{{ route('register') }}" class="p-5 ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
								<button class="btn btn-primary"><span class="fw-bold">Inscription</span></button>
							</a>
							@endif
						@endauth
					</div>
				@endif
				</div>
			</div>
		</div>
	</div>
</div></br></br></br>
</div>
<br><br><br><br><br><br><br><br><br><br>

<footer>
        <p>Realisé par <span>My School</span> / Tous les droits sont reservés.</p>
    </footer>
</body>

</html>