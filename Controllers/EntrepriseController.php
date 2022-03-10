<?php

namespace Controllers;


use Models\DomaineDb;
use Models\EntrepriseModel;
use Models\StatutJuridique;

require 'Models/EntrepriseModel.php';
require 'Models/DomaineDb.php';
require 'Models/StatutJuridique.php';

    class EntrepriseController
    {

        public function __construct()
        {
            $this->entrepriseModel = new EntrepriseModel();
        }
        // Afficher une vieuw 
        public function viewManager()
        {

            $db = new EntrepriseModel;

            $view = isset($_GET['view']) ? $_GET['view'] : NULL;
            switch ($view) 
            {
                case 'ajoutEntreprise':
                    $this->add();
                    break;
                case 'modification':
                    $this->add();
                default:
                $entreprise = $this->entrepriseModel->list();
                $this->liste();
                    break;
            }
            
            $action = isset($_GET['action']) ? $_GET['action'] : NULL;
            if ($action == 'add') {
                
               if (isset($_POST['add'])) {
                   extract($_POST);
                   $this->entrepriseModel->insert('ssejj',111,'eeeee','18-05-2020',1,1,);}
            }
        }
       
        public function liste()
        {
            $db = new EntrepriseModel;
           
            $entreprises = $db->list();
            require_once('Views/Entreprises/listeEnrteprise.php');
        }

        // La fonction permet d'afficher ajout.php  
        public function add()
        {
            if(isset($_POST['add'])){

                extract($_POST);
                $db = new EntrepriseModel();
                //var_dump($idDomaine);
                $a = $db->insert($nomEntreprise, $nombre, $siege, $datecreation, null, $idStatut, $idDomaine);
                $this->liste();

            } else {
                try {
                    $statut = new StatutJuridique();
                    $statuts = $statut->listeStatut();  
                } catch (\Throwable $th) {
                    die($th->getMessage());
                }
                try {
                    $domaine = new DomaineDb();
                    $domaines = $domaine->listeDomaine();  
                } catch (\Throwable $th) {
                    die($th->getMessage());
                }
                include 'Views/Entreprises/ajoutEntreprise.php';
            }
            
        }
    }
?>