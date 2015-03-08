<!DOCTYPE html>
<html>
  <head>
  <meta charset="utf-8">
  <title>STD-UNI-ATD</title>
  <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon.ico">
  <meta name="viewport" content="Width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap-min.css">
  <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>js/bootstrap-min.js"></script>
</head>



<div class="col-md-6" style="background-color: #e7e7e7; box-shadow: 1px 1px 2px #000000; margin-top:100px; margin-bottom:100px; margin-left:300px; margin-right:300px; min-width: 200px; padding-top:10px; border-radius: 20px;">
<div class="row">
  <div class="col-md-6">
    <img src="<?php echo base_url(); ?>images/logostd_640_480.png" class="img-circle img-responsive" />
  </div>
  <div class="col-md-6">
    <img src="<?php echo base_url(); ?>images/uni_640_480.jpg" class="img-rounded img-responsive" style="margin-top: 10px;float: right"/>
  </div>
</div>
<div class="row">
  <div class="col-md-6 col-md-offset-3">
    <h4 style="border-bottom: 1px solid #c5c5c5;color:#003472 !important;">
      <i class="glyphicon glyphicon-user" style="margin-bottom: 10px">
      </i style="color:#003472 !important;">
    <div style="margin: 5px">ACCESO STD-UNI-ATD</div>
      </h4>
        <div style="padding: 5px;" id="form-olvidado">
          <!-- <form accept-charset="UTF-8" role="form" id="login-form" method="post"> -->
          <?php echo validation_errors(); ?>
          <?php echo form_open('login/user'); ?>
            <fieldset>
              <div class="form-group input-group">
                <span class="input-group-addon">
                  @
                </span>
                <input class="form-control" placeholder="Email" name="email" type="text" required="" autofocus="">
              </div>
              <div class="form-group input-group">
                <span class="input-group-addon">
                  <i class="glyphicon glyphicon-lock">
                  </i>
                </span>
                <input class="form-control" placeholder="Password" name="password" type="password" value="" required="">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Acceder"/>
                <p class="help-block">
                  <a class="pull-right text-muted" href="#" id="olvidado"><small>Olvidaste tu contraseña?</small></a>
                </p>
              </div>
            </fieldset>
          <!-- </form> -->
        </div>
      </div>
	 </div>
</div>
</html>