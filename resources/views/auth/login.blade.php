<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="{{ asset('style/font-awesome/css/all.css') }}">
    <title>Document</title>
</head>
<body>
<header>
        <div class="logo">
            <a href="accueil.blade"> <span>My</span>School</a>
        </div>
        <a href="#" class="btn-reservation ">Reserver maintenant</a>
    </header>
</br></br>
<div class="container">
	<div class="row align-center">
		<div class="col-4">
			<img src="{{ asset('images/undraw_Sign_up_n6im.png') }}" width="400" height="380" alt="">
		</div>
		<div class="col-7 offset-1">
			<div class="row bg-dark">
				<p class="text-white fw-bold mt-3 fs-3 mx-auto text-center">Connexion</p>
			</div></br>
			<div class="row">
				<div class="container bloc">
						<!-- Session Status -->
						<x-auth-session-status class="mb-4" :status="session('status')" />

						<form method="POST" action="{{ route('login') }}">
							@csrf

							<!-- Email Address -->
							<div class="mt-4">
								<x-text-input id="email" class="form-control block mt-1 w-full" type="email" placeholder="EMAIL" name="email" :value="old('email')" required autofocus autocomplete="username" />
								<x-input-error :messages="$errors->get('email')" class="mt-2" />
							</div>

							<!-- Password -->
							<div class="mt-4 relat">

								<x-text-input id="password" class="form-control block mt-1 w-full" type="password" placeholder="MOT DE PASSE" name="password" required autocomplete="current-password" />

								<x-input-error :messages="$errors->get('password')" class="mt-2" />
								<div class="password-icon">
									<i id="fa-eye" class="fas fa-eye"></i>
									<i id="fa-eye-slash" class="fas fa-eye-slash"></i>
                            	</div>							
							</div>

							<!-- Remember Me -->
							<div class="block mt-4">
								<label for="remember_me" class="inline-flex items-center">
									<input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
									<span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
								</label>
							</div>

							<div class="flex items-center justify-end mt-4">
								@if (Route::has('password.request'))
									<a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
										{{ __('Forgot your password?') }}
									</a>
								@endif

								<button class="ml-3 btn btn-primary">
								<i class="fas fa-sign-in"></i> {{ __('Log in') }}
								</button>
							</div>
						</form>
				</div>
			</div>
		</div>
	</div>
</div></br></br></br>
<footer>
        <p>Realisé par <span>My School</span> / Tous les droits sont reservés.</p>
    </footer>
<script src="{{ asset('js/script.js') }}"></script></body>
</body>
</html>