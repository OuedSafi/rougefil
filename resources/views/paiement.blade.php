<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Réservation</title>
</head>
<body>
    <h1>Réservation</h1>

    <form action="/reservations" method="post">
        @csrf

        <div class="form-group">
            <label for="user_id">ID utilisateur</label>
            <input type="text" name="user_id" id="user_id" class="form-control">
        </div>

        <div class="form-group">
            <label for="establishment_id">ID établissement</label>
            <input type="text" name="establishment_id" id="establishment_id" class="form-control">
        </div>
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" id="date" class="form-control">
        </div>

        <div class="form-group">
            <label for="time">Heure</label>
            <input type="time" name="time" id="time" class="form-control">
        </div>

        <div class="form-group">
            <label for="number_of_people">Nombre de personnes</label>
            <input type="number" name="number_of_people" id="number_of_people" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Réserver</button> 
    </form>
    <div class="list-group">
        <a href="#" class="list-group-item">Établissement 1</a>
        <a href="#" class="list-group-item">Établissement 2</a>
        <a href="#" class="list-group-item">Établissement 3</a>
    </div>
</body>
</html>