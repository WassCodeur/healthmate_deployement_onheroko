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
        <div class="list-group">
            <div class="card">
                <h2><a href="{{ route('sujet.show', $sujet) }}" class="link2">{{ $sujet->title }}</a></h2>
                <p>{{ $sujet->content}}</p>
                <div class="d-flex justify-content-between align-items-center">
                    <small>posté le {{ $sujet->created_at->format('d/m/y à H:m') }}  </small>
                    <span class="badge-primary">posté par {{ $sujet->user->firstname }}</span>
                </div>
            </div>
            
        </div>
 
    </div>
</body>
</html>
