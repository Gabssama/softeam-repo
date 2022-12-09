<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SellsController extends Controller
{
    public function clientsThirtyMateriel(){
       
        $clients = Client::join('client_materiel', 'clients.id', '=', 'client_materiel.client_id')
            ->join('materiels', 'materiels.id', '=', 'client_materiel.materiel_id')
            ->select('firstname', 'lastname', 'email',DB::raw('COUNT(client_materiel.client_id) as NbOfMateriel'), DB::raw('SUM(materiels.price) as TotalMateriel'))
            ->groupBy('client_id')
            ->having('NbOfMateriel', '>=', 30)
            ->having('TotalMateriel', '>', 30000)
            ->get(); 
            
        return view('clients.clients-thirty', compact('clients'));
    }


    public function clientsTotalSells(){
       
            
        $clients = Client::has('materiels')->withSum('materiels as TotalMateriel','price')->orderBy('TotalMateriel', 'desc')->get();
     
        return view('clients.clients-total-sells', compact('clients'));
    }
}
