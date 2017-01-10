<html>
<head>
	<?php
		if(!isset($_GET['type']))
			header('location: magazzino.php');
		else {
			$type=$_GET['type'];
		}

		if(!isset($_GET['id']) && $type=="modifica"){
			header('location: magazzino.php');
		}
	?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php if($type=="modifica") echo "Modifica prodotto - Simulimpresa"; else echo "Aggiungi prodotto - Simulimpresa";?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

	<?php
		$page=1;
		include 'header.php';
	?>

	<div id="wrapper">

	<div class="container">

    	<div class="page-header">
    	<h3><?php if($type == "modifica") echo "Modifica"; else echo "Aggiungi"; ?></h3>
    	</div>

         <form method="post" <?php if($type=="modifica") echo 'action="modificaProdottiScript.php"'; else echo 'action="eliminaProdottiScript.php"'; ?> autocomplete="off">

    	<div class="col-md-12">

        	<div class="form-group">
            	<hr />
            </div>


            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-barcode"></span></span>
            	<input type="integer" name="codice" class="form-control" placeholder="Codice prodotto"/>
                </div>
            </div>

            <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></span>
            	<input type="text" name="descrizione" class="form-control" placeholder="Descrizione del prodotto" maxlength="150" />
                </div>
            </div>

             <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicons-sheriffs-star"></span></span>
            	<input type="text" name="iva" class="form-control" placeholder="Iva del prodotto" maxlength="150" />
                </div>
            </div>

             <div class="form-group">
            	<div class="input-group">
                <span class="input-group-addon"><span class="glyphicon glyphicon-euro"></span></span>
            	<input type="text" name="prezzo" class="form-control" placeholder="Prezzo unitario del prodotto" maxlength="150" />
                </div>
            </div>

            <div class="form-group">
            	<hr />
            </div>

            <div class="form-group">
            	<button type="submit" class="btn btn-block btn-primary" name="btn-login"><?php if($type=="modifica") echo "Modifica"; else echo "Aggiungi"; ?></button>
            </div>


        </div>

    </form>

    </div>

    </div>

    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
