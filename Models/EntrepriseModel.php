<?php

namespace Models;

use Entities\Entreprise as EntitiesEntreprise;
use Entreprise;

require_once 'Database.php';

class EntrepriseModel extends Database
{
    private $db;

    public function __construct()
    {
        // Instenciation de la classe Database
        $this->db = new Database();
    }
    public function insert($nomEntreprise, $nombre, $siege, $datecreation, $idCommune, $idStatut, $idDomaine, $page, $registre)
    {

        $this->getConnexion();
        // Preparation de la requete
        $queryPrepare = $this->pdo->prepare("INSERT INTO Entreprise(nomentreprise,nombreEmploye,siegeSocial,dateCreation,id_commune,idStatut,id_domaine, page_web, registreCommercial) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?) ");

        // Excécution de la requete
        return $queryPrepare->execute(array($nomEntreprise, $nombre, $siege, $datecreation, $idCommune, $idStatut, $idDomaine, $page, $registre));
    }

    public function edit($nomEntreprise, $nombre, $siege, $datecreation, $idCommune, $idStatut, $idDomaine, $page, $registre)
    {

    }

    public function delete($idEntreprise)
    {
        $this->getConnexion();
        $queryPrepare = $this->pdo->prepare("DELETE FROM Entreprise WHERE idEntreprise=?");
        return $queryPrepare->execute(array($idEntreprise));
    }

    // Lister les entreprises
    public function list()
    {
        $entreprises = [];

        $t = $this->executeSelect('Select * from Entreprise')->fetchAll();

        foreach ($t as $key) 
        {

            $entreprise = new EntitiesEntreprise();

            $entreprise->setIdEntreprise($key['idEntreprise']);

            $entreprise->setNomentreprise($key['nomentreprise']);

            $entreprise->setNombreEmployes($key['nombreEmploye']);

            $entreprise->setSiegeSocial($key['siegeSocial']);

            $entreprise->setDateCreation($key['dateCreation']);
            
            $entreprise->setId_domaine($key['id_domaine']);

            $entreprise->setIdStatut($key['idStatut']);

            $entreprise->setId_commune($key['id_commune']);

            $entreprise->setPage($key['page_web']);

            $entreprise->setRegistre($key['registreCommercial']);

            $entreprises[] = $entreprise;
        }

        return $entreprises;
    }
}
