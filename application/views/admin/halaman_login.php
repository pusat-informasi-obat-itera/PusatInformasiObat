<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap-4.0.0.css" rel="stylesheet" type="text/css">
<div class="container" style="padding-top:100px;  background:#fff;min-height:500px; box-shadow:0px -6px 22px 0px rgba(0, 0, 0, 0.2);"><div class="row">
  <div class="col-lg-6"><p>  &nbsp; &nbsp; &nbsp; &nbsp;Selamat datang di login KLINIK ITERA</p><p>&nbsp; &nbsp; &nbsp;<img src="<?=base_url()?>/assets/Logo PIO.png" width="333" height="228"></p></div>
  <div class="col-lg-4">
    <form>
      <div class="panel panel-default panel-login">
                  <div class="panel-heading">Login Admin</div>
                  <div class="panel-body">

      <form role="form" action="" method="POST">
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" placeholder="username" name="username">
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="password" name="password">
                      </div>
                      <?php if(isset($login_gagal)) { ?>
                      <div class="form-group alert alert-warning">
                          <p><i class="fa fa-warning"></i> <?php echo $login_gagal; ?></p>
                      </div>
                      <?php } ?>

        <button type="submit" name="login" class="btn btn-primary pull-right"><i class="fa fa-paper-plane"></i> Login</button>
      </form>

    </div>
                </div>
</div> 
</div>

