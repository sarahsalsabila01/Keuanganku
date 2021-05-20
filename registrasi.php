<!DOCTYPE html>
<html>
<head>
    <title>Registrasi Keuanganku</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="panel-registrasi">
            <div class="panel-judul">
                <div class="row">
                    <div class="col-xs-12">
                        <a href="#" class="active" id="registrasi-form-link">Registrasi</a>
                    </div>
                </div>
                <hr>
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                    <form id="registasi-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" role="form" style="display: block;">
									<div class="form-group">
										<input type="text" name="nama" id="nama" tabindex="1" class="form-control" placeholder="Nama" value="">
									</div>
									<div class="form-group">
										<input type="text" name="Email" id="Email" tabindex="2" class="form-control" placeholder="Email">
									</div>  
                                    <div class="form-group">
										<input type="text" name="username" id="username" tabindex="3" class="form-control" placeholder="Username" value="">
									</div>
									<div class="form-group">
										<input type="password" name="password" id="password" tabindex="4" class="form-control" placeholder="Password">
									</div>
                                    <div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Masuk">
											</div>
										</div>
									</div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>    



</body>
<style>
body{
background-color:#565966;
background-image:url(piggybank.jpg);
right: -50px;
}
</style>

</html>

