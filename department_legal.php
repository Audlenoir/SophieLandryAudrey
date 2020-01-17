<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
    <title>Company |Contact </title>
</head>
<body>
    

<form class="container text-align-center col-8">
  <form action="insert_company.php" id="insert_company" method="post">
    <div class="form-group row ">
      <div class="card text-white bg-info mb-3" style="max-width: 20rem;">
        <div class="card-header">
          <h2>Ajout d'un salarié à l'entreprise dans le département légal</h2>
        </div>
        <div class="card-body">
          <div class="form-group">
            <label class="col-form-label" for="inputDefault">Firstname</label>
            <input type="text" class="form-control" placeholder="Prenom" id="fistname">
          </div>
          <div class="form-group">
            <label class="col-form-label" for="inputDefault">Lastname</label>
            <input type="text" class="form-control" placeholder="Nom de famille" id="Lastname">
          </div>
          <div class="form-group">
            <label for="Gender">Sexe</label>
            <select multiple="" class="form-control" id="gender">
              <option>Homme</option>
              <option>Femme</option>   
            </select>
              <div class="form-group">
                <label class="col-form-label" for="inputDefault">recruitment_date</label>
                <input type="date" class="form-control" placeholder="datederecrutement" id="recruitment_date">
              </div>
              <div class="form-group">
            <label class="col-form-label" for="inputDefault">Salaire</label>
            <input type="text" class="form-control" placeholder="Salaire" id="salary">
          </div>
          </div>
        </div>
        <p class="card-text">Etes vous sûr de vouloir ajouter cet employé dans ce département?</p>
        <button class=" btn btn-secondary" type="submit">Valider</button>

      </div>
    </div>
  </form>
</form>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>