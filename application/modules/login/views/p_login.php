<!DOCTYPE html>
<html>
	<head>
		<title>Halaman Login</title>
		<link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.css" ?>" type="text/css"/>
		<link rel="stylesheet" href="<?php echo base_url()."assets//dist/css/AdminLTE.min.css" ?>" type="text/css"/>
		<style>
			.loginbox{
				margin: 180px auto;
				width: 450px;
				position: relative;
				border-radius: #ffffff;
			}
			body{
				background-color: rgb(209,209,209);
			}
		</style>
	</head>
	<body>
		 <div class="box box-info loginbox">
            <div class="box-header with-border">
              <h3 class="box-title">Form Login</h3>
            </div>
            <!-- /.box-header -->

            <?php
              if(isset($_POST['masuk'])){
              
                $u = $this->input->post('usr'); 
                $p = $this->input->post('pwd');
                $this->db_model->getlogindata($u,$p);
              }
            ?>

            
            <form class="form-horizontal" method="post" action="">
              <div class="box-body">
                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Username</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="usr" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="inputPassword3" class="col-sm-2 control-label">Password</label>

                  <div class="col-sm-10">
                    <input type="password" class="form-control" name="pwd" placeholder="Password">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Remember me
                      </label>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="reset" class="btn btn-default">Cancel</button>
                <button type="submit" name="masuk" class="btn btn-info pull-right">Sign in</button>
              </div>
              <!-- /.box-footer -->
            </form>


	</body>
</html>