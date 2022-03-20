<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="row">
    <div class="card mt-4">
        <div class="card-header">
            <span class="h2">Formulaire d'ajout de Repondant</span>
        </div>
        <div class="card-body">
            <form action="/NousLesFemmes/Repondant/add" class="row mt-4" method="post">
                <div class="form-group col-md-6">
                    <label for="">Nom Repondant</label>
                    <input type="text" name="nomRepondant" class="form-control" required> 
                </div>
                <div class="form-group col-md-6">
                    <label for="">Prenom Repondant</label>
                    <input type="text" name="prenomRepondant" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Email Repondant</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="">Telephone Repondant</label>
                    <input type="text" name="telephone" class="form-control" required>
                </div>

                <div class="form-group col-md-6" id="idEntreprise">
                        <label for="idEntreprise" class="control-label">Entrepris</label>
                        <select name="idEntreprise" id="idEntreprise" class="form-control">
                            <option value="0">--Entreprise--</option>
                            <?php
                                foreach ($entreprises as $entreprise) {
                            ?>
                                <option value="<?php echo $entreprise['idEntreprise']; ?>"><?php echo $entreprise['nomentreprise']; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                </div>
                <div class="mt-4">
                   <input type="submit" value="Enregistrer" class="btn btn-primary" name="add">
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>