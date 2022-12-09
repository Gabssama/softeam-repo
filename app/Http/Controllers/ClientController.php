<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\NewClientRequest;
use Symfony\Component\Console\Input\Input;
use App\Http\Requests\UpdateMaterielClientRequest;

class ClientController extends Controller
{
    public function store(NewClientRequest $request)
    {
    
            $inputs = $request->validated();
       try{
            $client = new Client;
            $client->firstname = $inputs['firstName'];
            $client->lastname = $inputs['lastName'];
            $client->email = $inputs['email'];

            $client->save();

            return back()->with('message', 'Nouveau client ajouté. ');
       }catch(\Exception $e){
        
            return back()->with('errors', $e->getMessage());
       }
        
    }

    public function getMateriels($id)
    {

          $client = Client::find($id);
          $materiels = $client->materiels()->get();

          return response($materiels, 200);
    }

    public function updateMateriels(UpdateMaterielClientRequest $request)
    {
          $inputs = $request->validated();
          $clientId = $inputs['client'];
          $materielsId = $inputs['materiel'];
          $client = Client::find($clientId);

          $client->materiels()->sync($materielsId);

          return back()->with('message', 'Matériels du client mis à jour')->withInput();
      
    }
}
