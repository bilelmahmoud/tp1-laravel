<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bare - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#">Maisonneuve</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><hr class="dropdown-divider" /></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <body style="background-color: #f8f9fa; color: #495057;">
    <div class="container mt-5">
        <h1 class="my-5 text-center" style="#2E294E">Liste des Étudiants</h1>
        <div class="row">
            @forelse($etudiants as $etudiant)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-primary">{{ $etudiant->nom }}</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong class="custom-text-black">Téléphone: </strong>{{ $etudiant->téléphone }}</li>
                            <li class="list-group-item"><strong class="custom-text-black">Email: </strong>{{ $etudiant->email }}</li>
                            <li class="list-group-item"><strong class="custom-text-black">Date de Naissance: </strong>{{ $etudiant->date_de_naissance }}</li>
                            <li class="list-group-item"><strong class="custom-text-black">Adresse: </strong>{{ $etudiant->adresse }}</li>
                            <li class="list-group-item"><strong class="custom-text-black">Ville ID: </strong>{{ $etudiant->ville_id }}</li>
                        </ul>
                        </div>
                <div class="card-footer">
                    <div class="d-flex justify-content-end">
                    <a href="{{ route('etudiant.show', $etudiant->id) }}" class="btn btn-sm btn-outline-primary">View</a>
                    </div>
                </div>
            </div>
        </div>
            @empty
            <div class="col-12">
                <div class="alert alert-danger">Il n'y a aucun étudiant à afficher!</div>
            </div>
            @endforelse
        </div>
    </div>






        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
