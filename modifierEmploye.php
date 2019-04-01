<?PHP
include "../config.php";
include "../entities/employe.php";
include "../core/employeC.php";
if (isset($_GET['id'])){
  $ReclamationRendezvousC=new ReclamationRendezvousC();
    $result=$ReclamationRendezvousC->recupererReclamationRendezvous($_GET['id']);
  foreach($result as $row){
    $Nom=$row['Nom'];
    $Prenom=$row['Prenom'];
    $Email=$row['Email'];
    $Adresse=$row['Adresse'];
    $Gouvernorat=$row['Gouvernorat'];
    $Ville=$row['Ville'];
        $CodePostal=$row['CodePostal'];
        $Telephone=$row['Telephone'];


?>
<html lang="en"><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashboard JTS</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="lib/gritter/css/jquery.gritter.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">
  <script src="lib/chart-master/Chart.js"></script>

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;display: block;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;padding: 5px 5px 8px 5px;font: 10px arial, san serif;text-align: left;}</style></head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        
      </div>
      
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <aside>
      <div id="sidebar" class="nav-collapse " tabindex="5000" style="overflow: hidden; outline: none;">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
        
          <li class="sub-menu dcjq-parent-li">
            <a href="javascript:;" class="dcjq-parent">
              <i class="fa fa-desktop"></i>
              <span>Commmandes</span>
              <span class="dcjq-icon"></span></a>
            <ul class="sub" style="display: none;">
              <li><a href="commandes.html">Commandes</a></li>
              <li><a href="factures.html">Factures</a></li>
              <li><a href="panier.html">Panier</a></li>
              
            </ul>
          </li>
          <li class="sub-menu dcjq-parent-li">
            <a href="javascript:;" class="dcjq-parent">
              <i class="fa fa-cogs"></i>
              <span>Produits</span>
              <span class="dcjq-icon"></span></a>
            <ul class="sub" style="display: none;">
              <li><a href="stock.html">Stock</a></li>
              <li><a href="services.html">Services</a></li>
              <li><a href="catalogue.html">Catalogue</a></li>
            </ul>
          </li>
          <li class="sub-menu dcjq-parent-li">
            <a href="javascript:;" class="dcjq-parent">
              <i class="fa fa-book"></i>
              <span>SAV</span>
              <span class="dcjq-icon"></span></a>
            <ul class="sub" style="display: none;">
              <li><a href="sav.html">SAV</a></li>
              <li><a href="reclamation.php">Reclamations</a></li>
              <li><a href="rendezvous.php">Rendez-vous</a></li>
              
            </ul>
          </li>
          <li class="sub-menu dcjq-parent-li">
            <a href="javascript:;" class="dcjq-parent">
              <i class="fa fa-tasks"></i>
              <span>Clients</span>
              <span class="dcjq-icon"></span></a>
            <ul class="sub" style="display: none;">
              <li><a href="clients.html">Clients</a></li>
              <li><a href="clientsf.html">Clients fidèles</a></li>
              <li><a href="historique.html">Historique</a></li>
              
            </ul>
          </li>
          <li class="sub-menu dcjq-parent-li">
            <a href="javascript:;" class="dcjq-parent">
              <i class="fa fa-th"></i>
              <span>Livraisons</span>
              <span class="dcjq-icon"></span></a>
            <ul class="sub" style="display: none;">
              <li><a href="livdispo.html">Livraisons disponibles</a></li>
              <li><a href="livreurs.html">Livreurs</a></li>
              <li><a href="suivi.html">Suivi</a></li>
            </ul>
          </li>
           <li class="sub-menu dcjq-parent-li">
            <a href="javascript:;" class="dcjq-parent">
              <i class="fa fa-desktop"></i>
              <span>Paiement</span>
              <span class="dcjq-icon"></span></a>
            <ul class="sub" style="display: none;">
              <li><a href="commandes.html">Paiement par carte bancaire</a></li>
              <li><a href="factures.html">Paiement par chèque</a></li>
              <li><a href="panier.html">Paiement à la livraison</a></li>
              
            </ul>
          </li>
          <li class="sub-menu dcjq-parent-li">
            <a href="javascript:;" class="dcjq-parent">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Publicité</span>
              <span class="dcjq-icon"></span></a>
            <ul class="sub" style="display: none;">
              <li><a href="pub.html">Publicité</a></li>
              
              
            </ul>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-9 main-chart">
            <!--CUSTOM CHART START -->
            <div class="border-head">
              <h3>Modification du Rendez-vous</h3>
            </div>
            
              
            <!--custom chart end-->
            
                  
                <!-- /grey-panel -->
              
              <!-- /col-md-4-->
              
              <!-- /col-md-4-->
              <!-- DIRECT MESSAGE PANEL -->
              
              <!-- /col-md-4 -->
              
            <!-- /row -->
            
              </div>
              <!-- /col-md-4 -->
              <!--  PROFILE 02 PANEL -->
              
                  
                <!-- /panel -->
              </div>
              <!--/ col-md-4 -->
             
          <!-- /col-lg-9 END SECTION MIDDLE -->
          <!-- **********************************************************************************************************************************************************
              RIGHT SIDEBAR CONTENT
              *********************************************************************************************************************************************************** -->
          <div class="col-lg ds">
            <!--COMPLETED ACTIONS DONUTS CHART-->
            <div class="donut-main">
              
            <!--NEW EARNING STATS -->
            
            <!--new earning end-->
            <!-- RECENT ACTIVITIES SECTION -->
            
            <!-- USERS ONLINE SECTION -->
        
          <form method="post">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Nom</label>
      <input type="text" class="form-control" id="inputEmail4" value="<?PHP echo $Nom ?>" name="Nom" placeholder="Nom">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Prenom</label>
      <input type="text" class="form-control" id="inputPassword4" value="<?PHP echo $Prenom ?>" name="Prenom" placeholder="Prenom">
    </div>
  </div>
  <div class="form-group">
    <div class="form-group col-md-6">
    <label for="inputAddress">Telephone</label>
    <input type="text" class="form-control" id="inputAddress" value="<?PHP echo $Telephone ?>"  name="Telephone"placeholder="+216 22 333 444">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress">Adresse</label>
    <input type="text" class="form-control" id="inputAddress" value="<?PHP echo $Adresse ?>" name="Adresse" placeholder="1234 Main St">
  </div>
  </div>
  <div class="form-group">
        <div class="form-group col-md-12">
    <label for="inputAddress2">Email</label>
    <input type="Email" class="form-control" id="inputAddress2"value="<?PHP echo $Email ?>"  name="Email" placeholder="exemple@exemple.com">
  </div>

  </div>
  <div class="form-row">
    <div class="form-group col-md-4">
      <label for="inputCity">Gouvernorat</label>
      <input type="text" class="form-control"  value="<?PHP echo $Gouvernorat ?>"  name="Gouvernorat" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputCity">Ville</label>
      <input type="text" class="form-control" value="<?PHP echo $Ville ?>" name="Ville" id="inputCity">
    </div>
    <div class="form-group col-md-4">
      <label for="inputZip">CodePostal</label>
      <input type="text" class="form-control"value="<?PHP echo $CodePostal ?>" name="CodePostal"   id="inputZip">
    </div>
  </div>
  <div class="form-group">
  </div>
<input type="hidden" name="id" value="<?PHP echo $_GET['id'];?>">
  <button type="submit"   name="modifier" class="btn btn-success">Confirmer la Modification</button>
</form>

                <?PHP
  }
}
if (isset($_POST['modifier'])){
  $ReclamationRendezvous=new ReclamationRendezvous($_POST['Nom'],$_POST['Prenom'],$_POST['Email'],$_POST['Adresse'],$_POST['Gouvernorat'],$_POST['Ville'],$_POST['CodePostal'],$_POST['Telephone']);
  $ReclamationRendezvousC->modifierReclamationRendezvous($ReclamationRendezvous,$_POST['id']);
  echo $_POST['id'];
 echo ("<script LANGUAGE='JavaScript'>window.location.href='reclamation.php';</script>");
 // header('Location: rendezvous.php');
}
?> 
                
            
      </div></div></section>
    </section>
    <!--main content end-->
    <!--footer start-->
    
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="lib/jquery/jquery.min.js"></script>

  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="lib/jquery.scrollTo.min.js"></script>
  <script src="lib/jquery.nicescroll.js" type="text/javascript"></script>
  <script src="lib/jquery.sparkline.js"></script>
  <!--common script for all pages-->
  <script src="lib/common-scripts.js"></script><div id="ascrail2000" class="nicescroll-rails" style="width: 3px; z-index: auto; background: rgb(64, 64, 64); cursor: default; position: fixed; top: 0px; left: 207px; height: 659px; display: none; opacity: 0;"><div style="position: relative; top: 0px; float: right; width: 3px; height: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px;"></div></div><div id="ascrail2000-hr" class="nicescroll-rails" style="height: 3px; z-index: auto; background: rgb(64, 64, 64); top: 656px; left: 0px; position: fixed; cursor: default; display: none; opacity: 0;"><div style="position: relative; top: 0px; height: 3px; width: 0px; background-color: rgb(78, 205, 196); background-clip: padding-box; border-radius: 10px; left: 0px;"></div></div>
  <script type="text/javascript" src="lib/gritter/js/jquery.gritter.js"></script>
  <script type="text/javascript" src="lib/gritter-conf.js"></script>
  <!--script for this page-->
  <script src="lib/sparkline-chart.js"></script>
  <script src="lib/zabuto_calendar.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to Dashio!',
        // (string | mandatory) the text inside the notification
        text: 'Hover me to enable the Close Button. You can hide the left sidebar clicking on the button next to the logo.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>



</body></html>