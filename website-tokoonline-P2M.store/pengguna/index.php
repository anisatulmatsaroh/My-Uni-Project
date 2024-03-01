<?php session_start();
if(empty($_SESSION['nama'])){ ?>
    <script> window.location.href='../index.php' </script>
<?php }
$nama = $_SESSION['nama'];
if($_SESSION['hak'] == 'pengguna'){}else{ ?> <script> alert('Anda Bukan Pengguna!'); window.location.href='logout.php' </script> <?php } 
include "koneksi.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<!-- start: Meta -->
	<meta charset="utf-8">
    <meta name="description" content="Admin Online Shop P2M.store">
    <meta name="author" content="Layli Anisa Fitriani">
    <link rel="icon" href="../../favicon.ico">
	<!-- end: Meta -->

    <title>Admin Online Shop P2M.store</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
     <script src="dist/js/jquery-1.9.1.js"></script>
    <script src="dist/js/bootstrap.js"></script>

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body background="image/banner-bg.jpg">

    <div class="container">
<!-- role="form" -->
      <form class="form-signin" method="post" action="proseslogin.php">
        <h2 class="form-signin-heading"><center><span class="glyphicon glyphicon-th-large"></span> Welcome Admin</center></h2>
        <h5 class="baru">Login To Admin P2M.store</h5>
        <input name="P2M.store" id="P2M.store" type="P2M.store" class="form-control" placeholder="Username" required autofocus>
        <input name="onlineshop" id="onlineshop" type="onlineshop" class="form-control" placeholder="Password" required>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>
        <button class="btn btn-lg btn-danger btn-block" type="submit">Sign in</button>
      </form>

    </div> <!-- /container -->
    
    <!-- Modal Dialog Contact -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Contact Us</h4>
      </div>
      <div class="modal-body">
      Aplikasi ini masih dalam pengembangan, 
      dan masih dikembangkan oleh Layli Anisa Fitriani yang dapat di hubungi di 
      <table>
      <tr>
      <td>No Telepon</td> <td>:</td> <td>0896 4959 2946</td>
      </tr>
      <br />
      <tr>
      <td>E-mail</td><td>:</td> <td><a href="mailto:laylihasanah.nlh@gmail.com">laylihasanah.nlh@gmail.com</a>
      </tr> 
       </table>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- end dialog modal -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <center><h5 class="form-signin">Copyright &copy; <a href="#" data-toggle="modal" data-target="#contact">Layli Anisa Fitriani</a></h5></center>       
  </body>
</html>