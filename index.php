<?php
require_once 'models/database.php';
require_once 'models/citiesModel.php';
require_once 'controllers/indexController.php';
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
    <div class="container">
        <form action="index.php" method="POST">
            <div class="row">
                <div class="col-md form-group">
                    <label for="zipcode">Code postal</label>
                    <input type="text" class="form-control" id="zipcode" placeholder="ex: 75000" />
                </div>
                <div class="col-md form-group">
                    <label for="city">Ville</label>
                    <select class="form-select" id="city">
                        <option selected disabled>Entrez votre code postal</option>
                    </select>
                </div>
            </div>
        </form>
    </div>

    <script src="assets/js/script.js"></script>
</body>

</html>