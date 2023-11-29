<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mon ecole</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">

  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 2rem;
      background-color:  #29d9d5;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
      background-color:  #f5f5f5;
      box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 15px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    tbody tr:hover {
      background-color: #f5f5f5;
    }


    footer {
      margin-top: 20px;
      padding: 10px;
      text-align: center;
      background-color: #333;
      color: #fff;
    }

    footer span {
      font-weight: bold;
    }
  </style>
</head>

<body >
  <div class=tt>
  <h1>Liste des inscriptions</h1>
  </div>
  <div class="table-responsive"> <table id="example" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th scope="col">Nom</th>
          <th>Prénom</th>
          <th>Genre</th>
          <th>Email</th>
          <th>Extrait de naissance</th>
          <th>Bulletin</th>
          <th>Tél du pere</th>
          <th>Statut</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($inscriptions as $inscription)
          <tr>
            <td>{{ $inscription->id }}</td>
            <td>{{ $inscription->nom_de_l_eleve }}</td>
            <td>{{ $inscription->prenom_de_l_eleve }}</td>
            <td>{{ $inscription->genre_de_l_eleve }}</td>
            <td>{{ $inscription->email_de_l_eleve }}</td>
            <td>{{ $inscription->extrait_de_naissance_de_l_eleve }}</td>
            <td>{{ $inscription->bulletin_de_l_eleve }}</td>
            <td>{{ $inscription->tel_du_pere }}</td>

                    <td>
                            <button type="button" class="btn btn-secondary">Approuvée</button>
                        </a>
                        </td>
          </tr>
        @endforeach
      </tbody>
    </table>

  </div>

  <footer>
    <p>Realisé par <span>My School</span> / Tous les droits sont reservés.</p>
  </footer>

  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.7
