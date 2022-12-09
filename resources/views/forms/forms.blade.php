<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Softeam - test forms</title>
    
    <link rel="icon" href="img/eukles.jpg" sizes="32x32" type="image/png">
    <link href="/css/forms.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  </head>
  <body>
    @if(session()->has('message'))
    <div class="flex-body message-success">{{session('message')}}</div>
    @endif
    @if(session()->has('error'))
    <div class="flex-body message-success">{{session('error')}}</div>
    @endif
    <div class="flex-body">
     
    <div class="testbox">
      <form action="{{route('newclient')}}" method="POST">
        @CSRF
        <h1>Ajouter un client</h1>
        <h4>Nom et Prénom<span>*</span></h4>
        <div class="title-block">
          <div class="block">
          <input required class="name input-text-validate" type="text" name="lastName" placeholder="Dupont" value="{{old('lastName')}}"/>
          <small class="input-text-validate-msg"><span>La saisie n'est pas correcte</span></small>
          @if($errors->has('lastName'))
           <div>
            <small><span>{{$errors->first('lastName')}}</span></small>
          </div>
          @endif
          </div>
          <div class="block">
          <input  required class="name input-text-validate" type="text" name="firstName" placeholder="Jean" value="{{old('firstName')}}" />
          <small class="input-text-validate-msg"><span>La saisie n'est pas correcte</span></small>
          @if($errors->has('firstName'))
            <div class="">
              <small><span>{{$errors->first('firstName')}}</span></small>

            </div>
          @endif
        </div>
      </div>
        <h4>Email<span>*</span></h4>
        <div class="block">
        <input required type="email" name="email" placeholder="jean.dupont@mail.com" value="{{old('email')}}"/>
        @if($errors->has('email'))
            <div>
              <small><span>{{$errors->first('email')}}</span></small>
            </div>
          @endif
        </div>
        <div class="btn-block">
          <button type="submit" class="button" >Valider</button>
        </div>
        <small><span class="small">* Ces champs sont obligatoires</span></small>
        
      </form>
    </div>
    <div class="testbox">
      <form action="{{route('newmateriel')}}" method="POST">
        @CSRF
        <h1>Ajouter un matériel</h1>
        <div class="block">
        <h4>Titre<span>*</span></h4>
        <input required type="text" name="title" value="{{old('title')}}" class="input-title-validate" />
        <small class="input-text-validate-msg"><span>La saisie n'est pas correcte</span></small>
        @if($errors->has('title'))
            <div>
              <small><span>{{$errors->first('title')}}</span></small>
            </div>
          @endif
          </div>
        <h4>Prix<span>*</span></h4>
        <div class="block">
        <input required type="text" name="price" value="{{old('price')}}" class="input-price-validate" />
        <small class="input-text-validate-msg"><span>La saisie n'est pas correcte</span></small>

        @if($errors->has('price'))
          <div>
          <small><span>{{$errors->first('price')}}</span></small>
          </div>
        @endif
        </div>
        <div class="btn-block">
          <button type="submit" class="button">Valider</button>
        </div>
        <small><span class="small">* Ces champs sont obligatoires</span></small>
      </form>
    </div>
    
  </div>
  <div class="flex-body">
  <div class="testbox2">
    <form action="{{route('updatemateriels')}}" method="POST">
      @CSRF
      <h1>Lier un matériel à un client</h1>
      <h4>Client<span>*</span></h4>
      <div class="block">
      <select required name="client" class="select-client" id="select-client">
          <option disabled selected>Sélectionner un client </option>
          @foreach($clients as $client)
            <option value="{{$client['id']}}" class="option-client" {{ old('client') == $client['id'] ? "selected" : ""}}>{{$client['firstName']." ".$client['lastName']}}</option>
          @endforeach
        </select>
        @if($errors->has('client'))
          <div>
            <small><span>{{$errors->first('client')}}</span></small>
          </div>
        @endif
      </div>
      <h4>Matériel<span>*</span></h4>
      <div class="block">
      <select required  name="materiel[]" multiple="multiple" required class="select-materiel" id="materiel">
        @foreach($materiels as $materiel)
          <option value="{{$materiel['id']}}" >{{$materiel['title']}}</option>
        @endforeach
      </select>
        @if($errors->has('materiel'))
          <div>
            <small><span>{{$errors->first('materiel')}}</span></small>
          </div>
        @endif
        </div>
        
      <div class="btn-block">
        <button type="submit" class="button">Valider</button>
      </div>
      <small><span class="small">* Ces champs sont obligatoires</span></small>

    </form>
  </div>
</div>
  <p class="flex-body"><a href="{{route('getfirstquery')}}">Voir les clients qui ont plus de 30 matériels de valeur supérieure à 30 000€</a></p>

  <p class="flex-body"><a href="{{route('clientstotalsells')}}">Voir toutes les ventes des clients avec le plus rentable en premier</a></p>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  
  <script src="{{asset('js/softeam.js')}}" defer></script>
   
 
  </body>
</html>