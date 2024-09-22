<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap core CSS -->
        <!-- <link href="{{url('cssAc/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- Custom fonts for this template -->
        <!-- <link href="{{url('cssAc/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"> -->
        <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->

        <!-- Plugin CSS -->
        <!-- <link href="{{url('cssAc/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet"> -->

        <!-- Custom styles for this template -->
        <!-- <link href="{{url('cssAc/css/creative.min.css')}}" rel="stylesheet"> --> 
        <title>Industrie </title>
    </head>
    <body>
        @extends('entete')

        @section('title', 'Industrie')
       <div class=" container my-6">
            <h1 class="my-5">Listes des industries du congo</h1>
            <div>
                <table class="collapse" >
                    <tr class="">
                        <th>Numero</th>
                        <th>Departement</th>
                        <th class="pl-2">Etablissement</th>
                        <th class="pl-2" >Promoteur</th>
                       <th class="pl-2">Nom de l'industrie</th>
                        <th>date de creation</th>
                        <th class="pl-2">nombre de salarié</th>
                        <th class="pl-2" >Montant du capital hors taxe</th>
                        <th>numero d'autorisation</th>
                        <th class="pl-2" >site web de l'industrie</th>
                        <th>email de l'industrie</th>
                        <th>capacite de production</th>                     
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>Brazzaville</td>
                        <td>Mougali</td>
                        <td>MALOUR</td>
                        <td>Don'G</td>
                        <td>23/02/20</td>
                        <td>65</td>
                        <td>500000</td>
                        <td>OO38</td>
                        <td>www.don'g.com</td>
                        <td>don'@gmail.com</td>
                        <td>Grande</td>
                    </tr>
                </table>
            </div>
       </div>
    </body>
</html>