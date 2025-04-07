<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil | Produit</title>

    <!-- Bootstrap CSS -->
    <link href="{{ url('cssAc/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ url('cssAc/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!-- Magnific Popup -->
    <link href="{{ url('cssAc/vendor/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <!-- Custom Styles -->
    <link href="{{ url('cssAc/css/creative.min.css') }}" rel="stylesheet">

    <style>
        .card-produit {
            background: #fff;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            text-align: center;
            transition: transform 0.3s ease;
            height: 100%;
        }

        .card-produit:hover {
            transform: scale(1.03);
        }

        .produit-icon {
            font-size: 40px;
            color: #17a2b8;
            margin-bottom: 15px;
        }

        .produit-title {
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .fade-in {
            animation: fadeInUp 0.8s ease-in-out;
        }

        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(20px); }
            100% { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    @extends('entete')

    @section('title', 'Produit')
    <hr class="my-4">
    <hr class="my-4">
    <div class="container my-5 fade-in">
        <hr class="my-4">
        <h1 class="text-center mb-5">Liste des Produits</h1>

        <div class="row">
            @foreach($produits as $produit)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex">
                    <div class="card-produit w-100">
                        <!-- Remplacer par une image ronde si nécessaire -->
                        <img src="{{ url('cssAc/img/citech.jpg') }}" alt="Produit" style="width: 70px; height: 70px; border-radius: 50%; object-fit: cover; margin-bottom: 15px;">

                        <!-- <i class="fa fa-cube produit-icon"></i> -->

                        <div class="text-muted mb-2">ID : {{ $produit->id }}</div>
                        <div class="text-muted">Code : {{ $produit->CODE_PROD }}</div>
                        <div class="produit-title">{{ $produit->TXT_LIB_PROD }}</div>

                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <a href="/modifier/{{ $produit->id }}" class="btn btn-warning btn-sm me-2">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="/delete/{{ $produit->id }}" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex">
                    <div class="card-produit w-100">
                        <!-- Remplacer par une image ronde si nécessaire -->
                        <i class="fa fa-cube produit-icon"></i>

                        <div class="text-muted mb-2">ID : {{ $produit->id }}</div>
                        <div class="text-muted">Code : {{ $produit->CODE_PROD }}</div>
                        <div class="produit-title">{{ $produit->TXT_LIB_PROD }}</div>

                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <a href="/modifier/{{ $produit->id }}" class="btn btn-warning btn-sm me-2">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="/delete/{{ $produit->id }}" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex">
                    <div class="card-produit w-100">
                        <!-- Remplacer par une image ronde si nécessaire -->
                        <i class="fa fa-cube produit-icon"></i>

                        <div class="text-muted mb-2">ID : {{ $produit->id }}</div>
                        <div class="text-muted">Code : {{ $produit->CODE_PROD }}</div>
                        <div class="produit-title">{{ $produit->TXT_LIB_PROD }}</div>

                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <a href="/modifier/{{ $produit->id }}" class="btn btn-warning btn-sm me-2">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="/delete/{{ $produit->id }}" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex">
                    <div class="card-produit w-100">
                        <!-- Remplacer par une image ronde si nécessaire -->
                        <i class="fa fa-cube produit-icon"></i>

                        <div class="text-muted mb-2">ID : {{ $produit->id }}</div>
                        <div class="text-muted">Code : {{ $produit->CODE_PROD }}</div>
                        <div class="produit-title">{{ $produit->TXT_LIB_PROD }}</div>

                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <a href="/modifier/{{ $produit->id }}" class="btn btn-warning btn-sm me-2">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="/delete/{{ $produit->id }}" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 d-flex">
                    <div class="card-produit w-100">
                        <!-- Remplacer par une image ronde si nécessaire -->
                        <i class="fa fa-cube produit-icon"></i>

                        <div class="text-muted mb-2">ID : {{ $produit->id }}</div>
                        <div class="text-muted">Code : {{ $produit->CODE_PROD }}</div>
                        <div class="produit-title">{{ $produit->TXT_LIB_PROD }}</div>
                        

                        <div class="d-flex justify-content-center gap-2 mt-3">
                            <a href="/modifier/{{ $produit->id }}" class="btn btn-warning btn-sm me-2">
                                <i class="fa fa-edit"></i>
                            </a>
                            <a href="/delete/{{ $produit->id }}" class="btn btn-danger btn-sm">
                                <i class="fa fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
