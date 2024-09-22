
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
    <title>PAIC | Region</title>
</head>
    <body>
        @extends('entete')

        @section('title', 'Region')
        <div class="container text-center my-5">
            <div class="row">
                <div class="col s12">
                    <h1 class="bold my-4">Liste de différente région</h1>                    
                    <table class="table table-hover table-responsive">
                        <tr class="warning">
                            <th>numero</th>
                            <th>Region</th>
                        </tr>
                        @foreach($tb_regions as $tb_region)
                            <tr>
                                <td>{{$tb_region->id}}</td>
                                <td>{{$tb_region->tb_libelle_reg}}</td>
                                <td class="col-3">
                                    <a class="btn btn-success" href="/ajouter">ajouter une region</a>
                                    <a class="btn btn-success my-1" href="http://">modifier une region</a>
                                </td>
                            
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
        @section('content')
        @endsection

        
    </body>
</html>