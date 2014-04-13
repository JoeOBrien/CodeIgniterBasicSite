
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <title>Members Area</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">
    <script src="http://joeobrien.kd.io/joeobrienme/js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">CI Members</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">Page</a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </div>
    
    <!-- start of main page -->

    <style type="text/css">


.panel-default {
opacity: 0.9;
margin-top:30px;
}
.form-group.last { margin-bottom:0px; }  

body{padding-top:30px;}

.glyphicon {  margin-bottom: 10px;margin-right: 10px;}

small {
display: block;
line-height: 1.428571429;
color: #999;
}
</style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">window.alert = function(){}</script>
</head>

<br><br>
<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6">
            <div class="well well-sm">
                <div class="row">
                    <div class="col-sm-6 col-md-4">
                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                    </div>
                    <div class="col-sm-6 col-md-8">
                        <h4>Your Profile</h4>
                        <small><div id="demo">Your coordinates will show here hopefully:</div></small>
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i><?php print_r($this->session->userdata('email')) ?>
                            <br />
                            <i class="glyphicon glyphicon-globe"></i><a href="#">www.yourwebsite.com</a>
                            <br />
                            <i class="glyphicon glyphicon-gift"></i>Jan 1, 1984</p>
                            <br />
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Social</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Social</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Google +</a></li>
                                <li><a href="#">Facebook</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Github</a></li>
                            </ul>
                        </div>
                        <a href='<?php echo base_url()."main/logout" ?>' class="btn btn-sm btn-danger"><span class="glyphicon glyphicon-off"></span> Logout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


</body>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->

        <script type="text/javascript">
        $(document).ready(function(){
            the_num = Math.floor(Math.random() * 5);
            switch(the_num){
                case 0:
                    imageUrl = 'http://static.simpledesktops.com/uploads/desktops/2014/01/07/splat2.png';
                    break;
                case 1:
                    imageUrl = 'http://static.simpledesktops.com/uploads/desktops/2014/01/08/Orbit.png';
                    break;
                case 2:
                    imageUrl = 'http://static.simpledesktops.com/uploads/desktops/2013/08/09/space-RGB-01.png';
                    break;
                case 3:
                    imageUrl = 'http://static.simpledesktops.com/uploads/desktops/2013/07/23/the-whale.png';
                    break;
                case 4:
                    imageUrl = 'http://static.simpledesktops.com/uploads/desktops/2013/08/01/stratigraphy.png';
                    break;
                case 5:
                    imageUrl = 'http://static.simpledesktops.com/uploads/desktops/2013/08/20/Rio2.png';
                    break;
            }
            
            
            
            $('body').css('background', 'url(' + imageUrl + ') no-repeat center center fixed');
            $('body').css('background-size:', 'cover');
            $('body').css('-webkit-background-size', 'cover');
            $('body').css('-moz-background-size', 'cover');
            $('body').css('-o-background-size' , 'cover');
        })
        </script>
<script>
var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
    navigator.geolocation.getCurrentPosition(showPosition);
    }
  else{x.innerHTML="Geolocation is not supported by this browser.";}
  }
function showPosition(position)
  {
  x.innerHTML="<i class='glyphicon glyphicon-map-marker'></i>Latitude: " + position.coords.latitude + 
  
  
  "<br><i class='glyphicon glyphicon-map-marker'></i>Longitude: " + position.coords.longitude;	
  }
  getLocation()
</script>
  </body>
</html>