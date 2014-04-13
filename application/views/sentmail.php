
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
    <title>Email spoofer</title>

    <!-- Bootstrap core CSS -->
    <link href="http://getbootstrap.com/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="http://getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">


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
          <a class="navbar-brand" href="#">CI Login</a>
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
.form-group.last { margin-bottom:0px; }    </style>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script type="text/javascript">window.alert = function(){}</script>
</head>
<body>
	<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <span class="glyphicon glyphicon-lock"></span> Sign up!</div>
                <div class="panel-body">
                    <div class="form-group">
                    
                    <!-- Start of form -->
                    
<?php
$formData = array('class' => 'form-horizontal', 'role' => 'form');

echo form_open('main/email_validation', $formData);
echo validation_errors();
?><fieldset>

<!-- Form Name -->
<legend>Email spoofer</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="from_mail">Address to receive from</label>  
  <div class="col-md-6">
        <?php 
    $nameData = array(
        'id'=>'from_mail',
        'name' => 'from_mail',
        'type' => 'text',
        'placeholder' => 'anything@email.com',
        'class' => 'form-control input-md'
        );
    echo form_input($nameData);
    ?>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="name_from">Name to receive from</label>  
  <div class="col-md-6">
    <?php 
    $nameData = array(
        'id'=>'name_from',
        'name' => 'name_from',
        'type' => 'text',
        'placeholder' => 'John Smith',
        'class' => 'form-control input-md'
        );
    echo form_input($nameData);
    ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="to_email">Address to sent to</label>  
  <div class="col-md-6">
    <?php 
    $toEData = array(
        'id'=>'to_email',
        'name' => 'to_email',
        'type' => 'text',
        'placeholder' => 'blank@joeco.com',
        'class' => 'form-control input-md'
        );
    echo form_input($toEData);
    ?>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="the_subject">Email's Subject</label>  
  <div class="col-md-6">
  
        <?php 
    $toEData = array(
        'id'=>'the_subject',
        'name' => 'the_subject',
        'type' => 'text',
        'placeholder' => 'Dear John',
        'class' => 'form-control input-md'
        );
    echo form_input($toEData);
    ?>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="the_message">Email's text</label>
  <div class="col-md-6">                     
    <textarea class="form-control" id="the_message" name="the_message"></textarea>
  </div>
</div>
<div class="form-group">
<?php
$buttonData = array("type" => "submit", "class" => "btn btn-success btn-sm col-md-12", "value" => "Submit", 'name' => 'email_submit');
echo form_submit($buttonData, 'Submit');

echo form_close(); 
                                ?>
        </div>
                                </fieldset>
                    </div>
                    </div>
                </div>
        </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="http://joeobrien.kd.io/joeobrienme/js/bootstrap.js"></script>
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
  </body>
</html>