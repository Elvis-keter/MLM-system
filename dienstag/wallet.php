
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="st15.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>

	<title>WALLET</title>
</head>
<body>
	<?php require('includes/functions.php');
        $data['ref_code']=$user['user_code'];
        $reflist = getRefList($data);
    ?>
	<h1>WALLET </h1>
	<h2>Total money in account: </h2>
	<h1>Kshs: <?=count($reflist)*5?></h1>
	<p id="demo"></p>

	<div class="parent">
	    <label class="label1">Fund income </label>
	    <label class="label2">Agent income </label>
	    <label class="label3">Daily income </label>
	</div>

	<div class="btn">
		<button class="firstbtn" onclick="" name="depo"><i class="fa fa-book" aria-hidden="true"></i> Deposit</button>
		<button class="secondbtn" onclick="" name="depo">Withdraw</button>
	</div>

	<div class="child">	
		<button onclick="location.href='activation.php';" class="bill"><i class="fa fa-money fa-2x" aria-hidden="true" id="circle1"></i> Activate <i class="fa fa-angle-right" aria-hidden="true"></i></button href="activation.php">

		<button onclick="location.href='https://google.com';" class="agent"><i class="fa fa-user-circle fa-2x" aria-hidden="true" id="circle2"></i> Agent<i class="fa fa-angle-right" aria-hidden="true"></i></button>

		<button onclick="location.href='https://google.com';" class="draw"><i class="fa fa-user-circle fa-2x" aria-hidden="true" id="circle3"></i> Withdawal account<i class="fa fa-angle-right" aria-hidden="true"></i></button>

	</div>
</body>

<script type="text/javascript">
</script>
</html>