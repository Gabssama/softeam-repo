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

    <table>
      <thead>
        <th>#</th>
        <th>Prénom</th>
        <th>Nom</th>
        <th>Email</th>
        <th>Qté Matériels</th>
        <th>Total</th>
      </thead>
      <tbody>
        @foreach($clients as $key => $client)
        <tr>
          <td>{{$key +1}}</td>
          <td>{{$client['lastname']}}</td>
          <td>{{$client['firstname']}}</td>
          <td>{{$client['email']}}</td>
          <td>{{$client['NbOfMateriel']}}</td>
          <td>{{$client['TotalMateriel']}}€</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </body>
</html>