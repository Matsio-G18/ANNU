<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAIC | Départements</title>

    <!-- Bootstrap CSS -->
    <link href="{{url('cssAc/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Animate.css -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
        }

        .department-card {
            background-color: #ffffff;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;
            text-align: center;
            transition: transform 0.3s ease;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        .department-card:hover {
            transform: scale(1.05);
            background-color: #f1f1f1;
        }

        .department-image {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
        }

        .department-name {
            font-size: 1.2rem;
            font-weight: bold;
        }

        h1 {
            font-size: 3rem;
            font-weight: bold;
            text-align: center;
            margin-top: 40px;
            margin-bottom: 40px;
            color: #333;
        }
    </style>
</head>
<body>

    @extends('entete')

    @section('title', 'Départements')
        <hr class="my-5"> 
        <hr class="my-5">
        <h1>Liste des Départements</h1>
        
        <div class="container py-5">
            <div class="row">
                @foreach($tb_departements as $tb_departement)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 animate__animated animate__fadeInUp">
                        <div class="department-card">
                            <!-- Image du département -->
                            <img src="{{ asset('cssAc/img' . $tb_departement->IMG_DEP) }}" alt="Image Département" class="department-image">
                            
                            <div class="department-name">
                                {{ $tb_departement->TXT_LIB_DEP }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
       
    <!-- jQuery and Bootstrap Bundle -->
    <script src="{{url('cssAc/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('cssAc/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>
</html>

