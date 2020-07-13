<!DOCTYPE html>
<html lang="en">

<head>
 <?php $this->load->view("admin/_teamplate/head.php") ?>
</head>

<body class="bg-dark">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
           <div class="card-header">Login</div>
              <div class="card-body">
                <form action="<?php echo site_url('admin/login/aksi_login'); ?>" method="post">
              <div class="form-group">
            <div class="form-label-group">
        <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required="required" autofocus="autofocus">
    <label for="inputEmail">Username or Email</label>
</div>
</div>
<div class="form-group">
    <div class="form-label-group">
        <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required="required">
        <label for="inputPassword">Password</label>
    </div>
</div>
<div class="form-group">
    <div class="checkbox">
        <label>
            <input type="checkbox" value="remember-me">
            Remember Me?
        </label>
        <label>
        <a class="d-block small mt-3" href="forgot-password.html">Forgot Accunt</a>
        </label>
   </div>
</div>
<button class="btn btn-primary btn-block" type="submit"><i class="fa fa-lock">&nbspLogin</i></botton>
<!--<a class="btn btn-primary btn-block" href="index.html">Login</a>-->
</form>
</div>
</div>

<?php $this->load->view("admin/_teamplate/modal.php") ?>
<?php $this->load->view("admin/_teamplate/js.php") ?>
</body>
</html>
