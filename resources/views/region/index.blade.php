<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAIC | Régions</title>

    <!-- Bootstrap CSS -->
    <link href="{{url('cssAc/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="{{url('cssAc/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{url('cssAc/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles -->
    <link href="{{url('cssAc/css/creative.min.css')}}" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }

        .region-card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;
            text-align: center;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .region-card:hover {
            transform: scale(1.05);
            background-color: #f1f1f1;
        }

        .region-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .region-name {
            font-size: 1.1rem;
            font-weight: bold;
            margin-bottom: 10px;
        }

        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 40px;
        }

        .btn-action {
            margin: 0 5px;
        }
    </style>
</head>

<body>
    @extends('entete')

    @section('title', 'Liste des Régions')
    <hr class="my-4">
    <hr class="my-3">
    <div class="container my-5">
        <hr class="my-5">
        <h1 class="my-2 text-primary">Liste des différentes régions</h1>
        <div class="row">
            @foreach($tb_regions as $tb_region)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="region-card">
                        <!-- Image de la région -->
                        <img src="{{ asset('images/regions/' . $tb_region->IMG_REG) }}" alt="Région" class="region-image">

                        <div class="region-name">{{ $tb_region->tb_libelle_reg }}</div>

                        <div class="d-flex justify-content-center">
                            <a href="/edit/{{$tb_region->id}}" class="btn btn-warning btn-sm btn-action">
                                <i class="fa fa-edit"></i> Modifier
                            </a>
                            <a href="/delete/{{$tb_region->id}}" class="btn btn-danger btn-sm btn-action">
                                <i class="fa fa-trash"></i> Supprimer
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="region-card">
                        <!-- Image de la région -->
                        <img src="{{ asset('images/regions/' . $tb_region->IMG_REG) }}" alt="Région" class="region-image">

                        <div class="region-name">{{ $tb_region->tb_libelle_reg }}</div>

                        <div class="d-flex justify-content-center">
                            <a href="/edit/{{$tb_region->id}}" class="btn btn-warning btn-sm btn-action">
                                <i class="fa fa-edit"></i> Modifier
                            </a>
                            <a href="/delete/{{$tb_region->id}}" class="btn btn-danger btn-sm btn-action">
                                <i class="fa fa-trash"></i> Supprimer
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="region-card">
                        <!-- Image de la région -->
                        <img src="{{ asset('images/regions/' . $tb_region->IMG_REG) }}" alt="Région" class="region-image">

                        <div class="region-name">{{ $tb_region->tb_libelle_reg }}</div>

                        <div class="d-flex justify-content-center">
                            <a href="/edit/{{$tb_region->id}}" class="btn btn-warning btn-sm btn-action">
                                <i class="fa fa-edit"></i> Modifier
                            </a>
                            <a href="/delete/{{$tb_region->id}}" class="btn btn-danger btn-sm btn-action">
                                <i class="fa fa-trash"></i> Supprimer
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="region-card">
                        <!-- Image de la région -->
                        <img src="{{ asset('images/regions/' . $tb_region->IMG_REG) }}" alt="Région" class="region-image">

                        <div class="region-name">{{ $tb_region->tb_libelle_reg }}</div>

                        <div class="d-flex justify-content-center">
                            <a href="/edit/{{$tb_region->id}}" class="btn btn-warning btn-sm btn-action">
                                <i class="fa fa-edit"></i> Modifier
                            </a>
                            <a href="/delete/{{$tb_region->id}}" class="btn btn-danger btn-sm btn-action">
                                <i class="fa fa-trash"></i> Supprimer
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="region-card">
                        <!-- Image de la région -->
                        <img src="{{ asset('images/regions/' . $tb_region->IMG_REG) }}" alt="Région" class="region-image">

                        <div class="region-name">{{ $tb_region->tb_libelle_reg }}</div>

                        <div class="d-flex justify-content-center">
                            <a href="/edit/{{$tb_region->id}}" class="btn btn-warning btn-sm btn-action">
                                <i class="fa fa-edit"></i> Modifier
                            </a>
                            <a href="/delete/{{$tb_region->id}}" class="btn btn-danger btn-sm btn-action">
                                <i class="fa fa-trash"></i> Supprimer
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
