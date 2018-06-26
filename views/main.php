<html>
<head>
	<title>Shareboard</title>
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo ROOT_PATH; ?>assets/css/style.css">
<<<<<<< HEAD
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="assets/js/bootstrap.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
=======
</head>
<body>
	<nav class="navbar navbar-default">
>>>>>>> 38489ae786620d1e98d1f3d9fb3f1db17a32b11a
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Shareboard</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo ROOT_URL; ?>">Home</a></li>
            <li><a href="<?php echo ROOT_URL; ?>shares">Shares</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
						<?php if(isset($_SESSION['is_logged_in'])) : ?>
            <li><a href="<?php echo ROOT_URL; ?>">Welcome <?php echo $_SESSION['user_data']['name']; ?></a></li>
            <li><a href="<?php echo ROOT_URL; ?>users/logout">Logout</a></li>
					<?php else : ?>
						<li><a href="<?php echo ROOT_URL; ?>users/login">Login</a></li>
						<li><a href="<?php echo ROOT_URL; ?>users/register">Register</a></li>
					<?php endif; ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

     <div class="row">
			 <?php Messages::display(); ?>
     	<?php require($view); ?>
     </div>

    </div><!-- /.container -->
</body>
</html>
