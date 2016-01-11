<?php
    require_once('core/init.php');
?>
<!DOCTYPE html>
<html lang="<?=_("en")?>">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <meta name="robots" content="noindex,nofollow,noarchive,nosnippet,noodp,noydir,noimageindex,nomediaindex"/>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta http-equiv="Content-Language" content="<?=_("en-US")?>"/>
    <link rel="shortcut icon" href="<?= Config::get('favicon') ?>"/>
	<link href="css/flags.css" rel="stylesheet"/>
    <title><?= sprintf(_("%s Member Pages"),Config::get('assocname')) ?></title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet"/>
    <link href="css/loginpage.css" rel="stylesheet"/>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/sorttable.js"></script>
    
  </head>

  <body>

    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 loginbox">
                <div style="text-align:center">
                    <h1>Nede for vedlikehold</h1>
                    Nettstedet skal flyttes til ny server, og medlemssidene er stengt inntil det har skjedd. Prøv igjen litt senere.

            </div>
        </div>
    </div>
    <?php include "includes/footer.php"; ?>

  </body>
</html>
