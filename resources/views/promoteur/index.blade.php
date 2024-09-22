<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{url('cssAc/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{url('cssAc/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->

    <!-- Plugin CSS -->
    <link href="{{url('cssAc/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('cssAc/css/creative.min.css')}}" rel="stylesheet">
    <title>Accueil |Promoteur </title>
</head>
<body>
    @extends('entete')

    @section('title', 'Region')

    <div class="container">
        <div class="row">
            <div class="col my-3">
                <h1 class="my-5">Listes des Promoteurs de Chaque Industries du Congo</h1>
                <table class="table table-responsive">
                    <tr class="warning">
                        <th>ID</th>
                        <th>Promoteur</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>OKO</td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
</body>
</html>