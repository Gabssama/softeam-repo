<!DOCTYPE html>
<html>
  <head>
    <title>Softeam - test forms</title>
    <link rel="icon" href="img/eukles.jpg" sizes="32x32" type="image/png">
    <link href="/css/forms.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  </head>
  <body>
    <div class="flex-body">
    <div class="testbox">
      <form action="/">
        <h1>Ajouter un client</h1>
        <h4>Nom<span>*</span></h4>
        <div class="title-block">
          <input class="name" type="text" name="name" placeholder="Jean" />
          <input class="name" type="text" name="name" placeholder="Dupont" />
        </div>
        <h4>Email<span>*</span></h4>
        <input type="email" name="name" placeholder="jean.dupont@mail.com" />
        
        <div class="btn-block">
          <button type="submit" href="/">Valider</button>
        </div>
      </form>
    </div>
    <div class="testbox">
      <form action="/">
        <h1>Ajouter un matériel</h1>
        <h4>Titre<span>*</span></h4>
        <input type="text" name="name" />
        <h4>Prix<span>*</span></h4>
        <input type="text" name="name" />
        <div class="btn-block">
          <button type="submit" href="/">Valider</button>
        </div>
      </form>
    </div>
    <div class="testbox">
      <form action="/">
        <h1>Lier un matériel à un client</h1>
        <h4>Client<span>*</span></h4>
        <select>
            <option value="title" selected>Titre</option>
            <option value="ms">Mme</option>
            
          </select>
        <h4>Matériel<span>*</span></h4>
        <select>
            <option value="title" selected>Titre</option>
            <option value="ms">Mme</option>
            
          </select>
        <div class="btn-block">
          <button type="submit" href="/">Valider</button>
        </div>
      </form>
    </div>
  </div>
  <p><a href="{{route('getfirstquery')}}">Voir les clients qui ont plus de 30 matériels de valeur supérieure à 30 000€</a></p>
  </body>
</html>