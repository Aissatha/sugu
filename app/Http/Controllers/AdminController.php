<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller; // Utiliser cette classe

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('role:admin'); // Ajoute le middleware ici
    }

    public function index()
    {
        // Logique de ton action
        return view('admin.dashboard');
    }

        // Formulaire de création
        public function create()
        {
            return view('admin.create'); // Assure-toi que la vue 'admin.create' existe
        }
}
