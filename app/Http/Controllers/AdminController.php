<?php

namespace App\Http\Controllers;


class AdminController extends Controller
{
    public function index()
    {
        return view('ViewAdmin.DashboardAdmin',['pageTitle' => 'Tableau de bord']);
    }

    public function gestion()
    {
        return view('ViewAdmin.GestionActeAdmin',['pageTitle' => 'Gestion des actes']);
    }

    public function agent()
    {
        return view('ViewAdmin.AgentAdmin',['pageTitle' => 'Gestion des agents']);
    }

    public function history()
    {
        return view('ViewAdmin.HistoryAdmin',['pageTitle' => 'Historique des actes']);
    }
    //Déclaration de naissane
    public function enfant()
    {
        return view('ViewAdmin.Declaration.Naissance',['pageTitle' => 'Enregistrement de naissance']);
    }
    public function showdeclarant()
    {
        return view("ViewAdmin.Declaration.Declarant",['pageTitle' => 'Informations du déclarant']);
    }
    public function motherDetail()
    {
        return view("ViewAdmin.Declaration.DetailMere",['pageTitle'=> 'Informations de la mère']);
    }
    public function fatherDetail()
    {
        return view("ViewAdmin.Declaration.DetailPere",['pageTitle'=> 'Informations du père']);
    }

}
