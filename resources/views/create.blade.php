<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets\css\index.css" >
    <link rel="stylesheet" href="assets\css\rendezvous.css">
    <link rel="stylesheet" href="assets\css\medecins.css">
    <link href="assets\css\bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets\fonts\fontawesome-free\css\all.min.css">
    <link rel="icon" type="image/svg" sizes="16x16" href="assets\icons\medical-sign.svg">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h2>Faire un poste</h2>
    <hr>
    <form action="{{ route('sujet.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Titre</label>
            <input type="text" name="title" id="title" class="form-control" placeholder="Titre" aria-describedby="helpId" required>
            <span class="text-danger">@error('title') {{$message}} @enderror</span>
        </div>
        <div class="form-group">
            <label for="content">Contenu</label>
            <textarea class="form-control" name="content" id="content" rows="5"></textarea>
            <span class="text-danger">@error('content') {{$message}} @enderror</span>
        </div>
        <button type="submit" class="btn btn-primary">Poster</button>
    
</div>

</body>
</html>