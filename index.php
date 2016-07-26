<?php require('_login.php'); ?>

<!DOCTYPE html>
<html lang="pl">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sample</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800" rel="stylesheet" type="text/css">
	<?php

	  $service_url = 'https://sample:5000/sample';
	  $curl = curl_init();
	  
	  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
	  curl_setopt($curl, CURLOPT_URL, $service_url);
	  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	  $curl_response = curl_exec($curl);
	  $result = json_decode($curl_response);
	  curl_close($curl);
	  //print_r (json_encode($curl_post_data));
	?>
	
	
  </head>
  <body>
  	
    <div class="container-fluid">
    	<div class="row">
  			<div class="col-xs-7 col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
        		<div id="logo">
        			<a href="http://sample.pl/"><img class="img-responsive" src="img/sample.png" alt="logo Sample"></a>
        		</div>
        	</div>
  			<div class="col-xs-5 col-sm-6 col-md-6 col-lg-4">
            	<div id="logout">
					<button class="button_start" onclick="location.href='index.php'">Strona startowa</button>
					<button class="button_logout" onclick="location.href='logout.php'">Wyloguj się</button>
				</div>
            </div>
		</div>
        <div class="row">
		  <div class="col-xs-10 col-sm-6 col-md-6 col-lg-8 col-lg-offset-2">
		  	<div id="heartbeat">

			</div>
		  </div>
		</div>
        <div class="row">
        	<div class="col-xs-10 col-sm-6 col-md-6 col-lg-4 col-lg-offset-2">
        		<div id="step">
        			Menu<br><span style="font-size: 13px; font-weight: 300;">Wybierz odpowiednią opcję, aby przejść dalej</span>
        		</div>
        	</div>
        </div>
        <div class="row">
        	<div class="text-center">
                <div id="buttons">
                        <button onclick="location.href = 'not_select.php'" class="button_type"><span class="glyphicon glyphicon-send" aria-hidden="true" style="font-size: 17px; margin-right: 15px;"></span>Wyślij notyfikację</button>
                        <button onclick="location.href = 'status_form.php'" class="button_type"><span class="glyphicon glyphicon-info-sign" aria-hidden="true" style="font-size: 17px; margin-right: 15px;"></span>Status notyfikacji</button>
                        <button onclick="location.href = 'list_form.php'" class="button_type"><span class="glyphicon glyphicon-list-alt" aria-hidden="true" style="font-size: 17px; margin-right: 15px;"></span>Lista notyfikacji</button>
             	</div>   
             </div>
        </div>
        <div class="row">
        	<div id="copyright">
                &copy; Sample | Design by <a href="http://sample.pl/" />Levsky</a>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/heartbeat.js"></script>
  </body>
</html>

<?php /*?> <?php */?>