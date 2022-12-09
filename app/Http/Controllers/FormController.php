<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Materiel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function index(){
       
        $clients = Client::all();
       
       
       $materiels = Materiel::all();
        $clientId = null;
        return view('forms.forms', compact('clients', 'materiels', 'clientId'));
    }
}
