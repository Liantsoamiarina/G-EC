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
}
