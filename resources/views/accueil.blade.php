<!DOCTYPE html>
<html lang="fr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <META NAME="TITLE" CONTENT="PAIC">
    <META NAME="AUTHOR" CONTENT="Doni MATSIONA">
    <META NAME="DESCRIPTION" CONTENT="Plateforme Annuaire des Industries du Congo">
    <META NAME="KEYWORDS" CONTENT="Brazzaville, BRAZZAVILLE, Congo, DGDI, PAIC, Industrie, , Développement industriel, , Autorisation d'implantation, Autorisation d'exercice, Plateforme Annuaire des Industries du Congo">
    <META NAME="OWNER" CONTENT="PAIC">
    <META NAME="ROBOTS" CONTENT="index,nofollow">
    <META NAME="Reply-to" CONTENT="donimatsiona@gmail.com">
    <META NAME="REVISIT-AFTER" CONTENT="5">
    <meta name="google-site-verification" content="mb1MuI_9lbb_hmDK5YEtUu3o7tN3Pcoda4UPiS16WSU" />
    
    <link rel="shortcut icon" type="image/x-icon" href="{{url('cssAc/img/log.png')}}">

    <title>PAIC</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('cssAc/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{url('cssAc/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->

    <!-- Plugin CSS -->
    <link href="{{url('cssAc/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('cssAc/css/creative.min.css')}}" rel="stylesheet">
    <style>
      .input-s{
        max-width:100%;
      }
      .input-pd{
        padding:6px;
      }
      .input-wd{
        width:50%;
      }
      .btn-hover{
        cursor: pointer;
      }
    </style>
  </head>

  <body id="page-top">
    <!-- Navigation -->
     @yield("content")
    <nav class="navbar navbar-expand-lg  bg-success fixed-top" id="mainNav">
      <div class="container">
      	<div class="navbar-brand js-scroll-trigger">
        <a class="js-scroll-trigger" href="#page-top"><img src="{{url('cssAc/img/PAIC.png')}}">PAIC</a>
        </div>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="http://127.0.0.1:8000/accueil">Accueil</a>
            </li>
            <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="/industrie">Liste des Industries</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/departement">Departement</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/region">Region</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="/promoteur">Promoteur</a>
            </li>
            <li class="nav-item dropdown">
              <a class="" href="http://127.0.0.1:8000/"><input type="button" class="btn-primary btn" value="Se connecter"></a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header class="masthead text-center text-white d-flex">
      <div class="container my-auto">
        <div class="check-box">
          <label class="text-white bold mr-1" for="">Secteur</label><input type="checkbox" name=""  id="">
          <label class="text-white bold mr-1" for="">Département</label><input type="checkbox" name=""  id="">
          <label class="text-white bold mr-1" for="">Region</label><input type="checkbox" name=""  id="">
        </div>
        <div class="input-s">
          <input class="input-s input-wd input-pd" type="search" name="" placeholder="rechercher une industrie par" id=""><input type="button"  class=" input-pd btn-success btn-hover" value="rechercher">
        </div>
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong> PLATEFORME ANNUAIRE DES INDUSTRIES DU CONGO</strong>
            </h1>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-2">Mise en Place nouvellement par la direction des systemes d'informations et de la communication au sein du 
              Ministere du developpement industriel et de la promotion du secteur Privé.</p>
            <p class="text-faded mb-1"><img src="{{url('cssAc/img/cg.png')}}"> Rép. du Congo</p>
            <p class="text-faded mb-1"> <i class="fa fa-phone fa-1x mb-3 sr-contact"></i><a data-lbl="Call" href="#">(+242) 06 560 46 70</a></p>
            <a class="btn btn-success btn-xl sr-button js-scroll-trigger" href="#about">En savoir plus</a>
          </div>
        </div>
      </div>
    </header>
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center maman">
            <h2 class="section-heading">Quelques Industries Far du Congo</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
          <div class="row offs3 center767">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <img class="" src="{{url('cssAc/img/bralico.jpg')}}" alt="" width="100%">
                <div class="caption bg3 capt_hover1">
                  <h4>BRALICO  </h4>
                  <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.0720222782707!2d15.945646378988474!3d-1.108214932549246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a74838857971f65%3A0x694cb458c0d54b7e!2sBralico!5e0!3m2!1sfr!2scg!4v1724925564056!5m2!1sfr!2scg" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      
                    <!-- <a href="-4.274608178482185, 15.17809056625835"></a>   maps de toutes les industrie du congo-->
                </div> 
             </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <img class="" src="{{url('cssAc/img/sonoc.jpg')}}" alt="" width="100%">
                <div class="caption bg3 capt_hover1">
                  <h4> INDUCO </h4>
                  <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.532650267212!2d15.191664479091921!3d-4.310495235205676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a2d0e1534f3cd%3A0xdddea003687f496a!2sINDUCO!5e0!3m2!1sfr!2scg!4v1724924624622!5m2!1sfr!2scg" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>  
             </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <img class="" src="{{url('cssAc/img/bralico.jpg')}}" alt="" width="100%">
                <div class="caption bg3 capt_hover1">
                  <h4> SONOC </h4>
                  <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.7526939654717!2d15.28775657502436!3d-4.268246546156682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a337932d0b84d%3A0x5fa11b1b30ad55f7!2sSONOCC!5e0!3m2!1sfr!2scg!4v1724924420066!5m2!1sfr!2scg" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">voir</iframe>
                </div>  
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="thumbnail thumb-shadow">
                <img class="" src="{{url('cssAc/img/ragec.jpg')}}" alt="" width="100%">
                <div class="caption bg3 capt_hover1">
                  <h4> Ragec </h4>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3978.7026318054923!2d15.240716975024489!3d-4.277895146214358!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a6a33fea6f08431%3A0xbca84b0965968d01!2sRagec!5e0!3m2!1sfr!2scg!4v1724924539461!5m2!1sfr!2scg" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>  
             </div>
            </div>
          </div>
      </div>
    </section>

    <!-- Section contact  -->
    
    <footer id="contact" class="bg-success text-white">
     <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-12">
            <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
            <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
            <!-- <form role="form" method="POST">
              <div class="control-group">
                <label class="text-primary">Ecrivez-nous</label>
                <div class="form-group floating-label-form-group controls mb-0 pb-1">
                    <label>Votre nom complet</label>
                    <input class="form-control" id="name" type="text" placeholder="Saisissez votre" data-validation-required-message="Saisissez votre nom" required="required">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Adresse e-mail</label>
                    <input class="form-control" id="email" type="email" placeholder="Saisissez votre adresse e-mail" data-error="Le pr&eacute;nom est obligatoire !" required="required">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Objet du message</label>
                    <input class="form-control" id="object" name="object" placeholder="Saisissez l'objet du message" required="required" data-validation-required-message="Saisissez l'objet">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="control-group">
                  <div class="form-group floating-label-form-group controls mb-0 pb-2">
                    <label>Message</label>
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <br>
                <div id="success"></div>
                <div class="form-group">
                  <button class="btn btn-primary btn-xl" id="sendMessageButton" onclick="msgcontact()">Envoyez</button>
                </div>
            </form> -->
          </div>
          <!-- <div id="gpsacsi" class="col-md-6 col-sm-12">
            <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1CbLdjCADMVwzirxyq4ydlQ8mIUYImLjH" width="100%" height="550" frameborder="0"></iframe>
          </div> -->
        </div>
        <div class="copyright py-2 bg-success text-center text-white">
          <div class="container">
            <small>Copyright &copy; Plateforme Annuaire des industries du Congo</small><img src="{{('cssAc/img/log.png')}}" width="27" height="25">
          </div>
        </div>
      </div>
    </footer>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content olis">
          <div class="container">
            <h5 class="modal-title" id="exampleModalLabel" style="">Inscrivez-vous à notre newsletter</h5>
            <br>            
            <form action="index.php" method="POST">      
              <input class="form-control" id="emailNewsletter" name="emailNewsletter" type="email" placeholder="Saisissez votre adresse e-mail" data-error="Le pr&eacute;nom est obligatoire !" required="required">
              <br>
              <div class="footer">
                <button name="" class="btn btn-primary"  type="submit" >S'incrire</button>
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
                <br>
                <p class="text-faded">Merci de nous choisir comme votre prestataire</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <!-- Bootstrap core JavaScript -->
    <script src="{{('cssAc/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{('cssAc/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- Plugin JavaScript -->
    <script src="{{('cssAc/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{('cssAc/vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{url('cssAc/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
    <!-- Custom scripts for this template -->
    <script src="{{url('cssAc/js/creative.min.js')}}"></script>
    
  </body>
</html>
