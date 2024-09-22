<!DOCTYPE html>
<html lang="fr">
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
        <title>@yield('PAIC')|Ajouter un Departement</title>
    </head>
    <body>
        <h1>Enregistrer une nouveau Departement</h1>
            @if(session('status'))
                <div class="alert alert-sucess">
                    {{session('status')}}
                </div>
            @endif
        <form class="form-control" method="POST" action="">
            @csrf
            <input class="" type="text" placeholder="Nom du departement">
            <input type="button" class=" btn btn-success" value="Ajouter un departement">
        </form>
    </body>
</html>