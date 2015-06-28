<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dreaming? : Am I dreaming?</title>

    <meta name="description" content="Assists in reality checks for those who practice lucid dreaming">
    <meta name="author" content="DragonStuff">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2 align="center">
					Dreaming?
				</h2>
				<h3 align="center">
					This is a simple web page app designed to assist in the performing of reality checks for those who practice lucid dreaming.
				</h3>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2 align="center">
				When am I?
			</h2>
			<h3 align="center">
        <?php
          date_default_timezone_set('Australia/Sydney');
          $date = date('d/m/Y h:i:s a', time());
          echo $date;
        ?>
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2 align="center">
				Daily Number for <?php $date = date('d/m/Y'); echo $date; ?>
			</h2>
			<h3 align="center">
        <?php
          $date = date('d') * 3;
          echo $date;
        ?>
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<h2 align="center">
				Random Number
			</h2>
			<h3 align="center">
        <?php $randnumberis = rand(1, 999); echo $randnumberis; ?>
			</h3>
		</div>
	</div>
  <div class="row">
		<div class="col-md-12">
			<h2 align="center">
				Confirmation of Random Number
			</h2>
			<h3 align="center">
        <?php echo $randnumberis; ?>
			</h3>
		</div>
	</div>
  <div class="row">
		<div class="col-md-12">
			<h2 align="center">
				Sum of Random Numbers
			</h2>
			<h3 align="center">
        <?php $totalrand = $randnumberis * 2; echo $totalrand; ?>
			</h3>
		</div>
	</div>
  <div class="row">
		<div class="col-md-12">
			<h2 align="center">
				Sum of Random Number and Daily Number
			</h2>
			<h3 align="center">
        <?php
          $sumRandDaily = date('d') + $randnumberis;
          echo $sumRandDaily;
        ?>
			</h3>
		</div>
	</div>
  <div class="row">
    <div class="col-md-12">
      <h2 align="center">
        Sum of Random Number and Daily Number
      </h2>
      <h3 align="center">
        <a align="center" href="index.php" class="btn btn-primary">I'm not sure.</a>
        <input type="hidden" value="0" id="theValue" />
        <a align="center" href="javascript:;" onclick="addElement();" class="btn btn-success">I am awake.</a>
        <div id="myDiv"> </div>
      </h3>
    </div>
  </div>

</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
