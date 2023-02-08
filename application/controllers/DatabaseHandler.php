<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DatabaseHandler extends CI_Controller {
    
    public function search(){
        $criteria=$_GET['search'];
        $categorie=$_GET['category'];
        $this->load->model('DatabaseAcces','access');
        $row=$this->access->search($criteria,$categorie);       
        $data['produits']=$row;
        $data['content']='search';
        $this->load->view('templates/template',$data);
    }
    public function insertProduit()
    {
        $nom=$_POST['nom'];
        $descri=$_POST['description'];
        $prix=$_POST['prix'];
        $categorie=$_POST['categorie'];
        $this->load->model('DatabaseAcces','access');
        $this->access->insertProduit($nom,$descri,$prix,$categorie,$_FILES,$_SESSION['id']);
        redirect('RoutesController/produit');
    }
}