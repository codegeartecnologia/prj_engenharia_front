<?php require_once("funcoes.php");?>

<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>Administração ACAD</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,100,300,700,900" rel="stylesheet" type="text/css">
	<link href="assets/css/login.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="assets/jquery.js"></script>
</head>
<body>
	<div class="container">
  		<form id="admin_form" name="admin_form" method="post" class="xform">
    	<header>
      		<div> <img src="images/logo.png" alt="" class="logo"/></div>
      		Administração ACAD E & T
      	</header>
    	<div class="row">
      		<input type="text" placeholder="E-mail" name="email">
      		<input type="password" placeholder="Senha" name="senha">
    	</div>
    		<input type="submit" name="logar" value="Login">
    		<footer> Copyright &copy;<?php echo date('Y') . ' ' . 'CodeGear Tecnologia' . ' v' . '1.0'?> </footer>
  		</form>
  		<div id="message-box"><?php print Filter::$showMsg;?></div>
	</div>
</body>
</html>

