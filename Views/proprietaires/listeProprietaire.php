<?php

require_once('./Views/template/header.php');

require_once('./Views/template/sidebar.php');

?>
    <div class="container-fluid" style="padding: 10px 90px;">
        <div class="row mt-5 container-fluid">
        <div class="alert alert-secondary h1 text-center" >
           LISTES DES PROPRIETAIRE
        </div>
    </div>
            <div class="row mt-4">
                <table class="table table-bordered table-striped">
                <div class="jsgrid-grid-header jsgrid-header-scrollbar">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom Proprietaire</th>
                            <th>Prenom Proprietaire</th>
                            <th>Adresse</th>
                            <th>Email</th>
                            <th>Civilites</th>
                            <th>Telephone</th>
                            <th>Sexe</th>
                            <th>Date de Naissance</th>
                            <th>Lieu de Naissance</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                </div>
                    <tbody>

                        <?php
                        
                            foreach ($proprietaires as $proprietaire) {
                        ?>
                            <tr>
                                <td><?= $proprietaire->getIdProprietaire(); ?></td>
                                <td><?= $proprietaire->getNom(); ?></td>
                                <td><?= $proprietaire->getPrenom(); ?></td>
                                <td><?= $proprietaire->getAdresse(); ?></td>
                                <td><?= $proprietaire->getEmail(); ?></td>
                                <td><?= $proprietaire->getCivilites(); ?></td>
                                <td><?= $proprietaire->getTelephone(); ?></td>
                                <td><?= $proprietaire->getSexe(); ?></td>
                                <td><?= $proprietaire->getDate_naissance(); ?></td>
                                <td><?= $proprietaire->getLieu_naissance(); ?></td>
                                <td>
                                    <a href="/testDoctrine/Proprietaire/edit/<?=$proprietaire->getIdProprietaire()?>" class="btn btn-primary"><i class="bi bi-pen-fill"></i></a>
                                    <a href="/testDoctrine/Proprietaire/delete/<?=$proprietaire->getIdProprietaire()?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                                    
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php

require_once('./Views/template/footer.php');

?>