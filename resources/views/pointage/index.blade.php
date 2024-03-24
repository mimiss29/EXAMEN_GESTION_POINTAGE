<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-7osmf9uEMD0nDhWq7m63ydtSt9LHw9MVIw2tFJqDv/Adb5NF7ge53FAGrWxBG4zqoh/hfa81C1cCnXU3a+4lZA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <title>Liste des Pointages</title>
</head>

<body>
  <div class="container mt-5">
    <div class="row">
      <div class="col">
        @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div>
        @endif

        @if(session('error'))
        <div class="alert alert-danger">
          {{ session('error') }}
        </div>
        @endif
        <h2>Liste des Pointages</h2>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th scope="col">Heure d'arrivee </th>
              <th scope="col">Heure de depart</th>
              <th scope="col"> Date du jour</th>
              <th scope="col"> Employe</th>

            </tr>
          </thead>
          <tbody>
            @foreach ($pointages as $pointage)
            <tr>
              <td class="align-middle">{{ $pointage->HA }}</td>
              <td class="align-middle">{{ $pointage->HD }}</td>
              <td class="align-middle">{{ $pointage->dateJour }}</td>
              <td class="align-middle">
                @foreach ($users as $user)
                {{ $user->nom }} {{ $user->prenom }}
                @endforeach
              </td>
              <td>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{ route('pointages.create') }}" class="btn btn-success">Ajouter un Pointage</a>
      </div>
    </div>
  </div>
</body>

</html>