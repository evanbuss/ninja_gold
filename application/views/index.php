<?php 
// var_dump($this->session->userdata('message'));
// $this->session->sess_destroy();
 ?>

<html>
<head>
	<title>Ninja Gold</title>
	<link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="assets/css/skeleton.css">
   	<style type="text/css">

   	div h4 {
   		text-align: center;
   	}

   	input {
   		margin-left: 30px;
   		margin-top: 20px;
   		padding-top: 20px;
   	}

   	h6 {
   		margin-left: 30px;
   		font-family: Times;
   		font-size: 20px;
   		margin-bottom: -5px;
   	}
   	h4 {
   		padding-top: 10px;
   		margin-left: 10px auto;
   		font-family: 'Courier New';
   	}
   	h3 {
   		font-family: "Times New Roman";
   		margin-bottom: -3px;
   	}
   	.goldBox {
   		height:30px;
   		width: 100px;
   		border: 1px solid black;
   		border-radius: 10px;
		   display: inline-block;
		   vertical-align: top;
		   margin-bottom: 50px;
		   margin-left: 170px; 
		   margin-top: -35px;
		   text-align: center;
		   box-shadow: 5px 5px 5px #FFD700;
   	}
   	.box {
   		height: 200px;
   		width: 200px;
   		border: 1px solid black;
   		border-radius: 10px;
   		display: inline-block;
   		margin-left: 20px;
   		box-shadow: 10px 10px 5px #888888;
   	}
   	.box:hover {
   		color:gold;
   		box-shadow: 10px 10px 5px #FFD700;
   	}
   	.activ {
   		height:200px;
   		width: auto;
   		border: 1px black solid;
   		border-radius: 10px;
   		margin-left: 30px;
   		margin-right: 30px;
   		overflow: auto;
   		box-shadow: 10px 10px 5px #888888;
   	}
   	.green {
   		color: green;
   	}
   	.red {
   		color: red;
   	}
   	.reset {
   		vertical-align: top;
   		position: absolute;
   		left: 800px;
   		margin-top: -30px;
   		background-color: whitesmoke;
   	}
   	.reset:hover {
   		background-color: #7FFF00;
   	}
   	.shaddow {
   		box-shadow: 5px 5px 3px #FFD700;
   	}

   	.shaddow:hover {
   		background-color: lightgrey;
   	}

   	</style>

</head>



<body>

<div class="container">	
		<div class="row">

		<h3> Your Gold: </h3>
			<div class="goldBox"> 
            <?php  
				  echo $this->session->userdata('total');
            ?>
			</div>

		
			<a href="ninja_gold/logout"><button class="reset"> Reset</button></a>
		

			<br>
		<!-- farm -->
		<div class="box">
			<h4> Farm </h4>
			<form action="/process_money" method="post">
				<input type="hidden" name="building" value="farm" />
				<input class="shaddow" type="submit" value="Find Gold!"/>
			</form>
		</div>
		<!-- cave -->
		<div class="box">
			<h4> Cave </h4> 
			<form action="/process_money" method="post">
				<input type="hidden" name="building" value="cave" />
				<input class="shaddow" type="submit" value="Find Gold!"/>
			</form>
		</div>
		<!-- house -->
		<div class="box">
			<h4> House </h4>
			<form action="/process_money" method="post">
				<input type="hidden" name="building" value="house" />
				<input class="shaddow" type="submit" value="Find Gold!"/>
			</form>
		</div>
		<!-- casino -->
		<div class="box">
			<h4> Casino </h4>
			<form action="/process_money" method="post">
				<input type="hidden" name="building" value="casino" />
				<input class="shaddow" type="submit" value="Find Gold!"/>
			</form>
		</div>


		<br><br><br>


		<h6> Activities: </h6>
		<div class="activ">
            <?php 
               $messages = array_reverse($this->session->userdata('message'));

               foreach ($messages as $value) 
               {
                  echo $value . '<br>';      
               }

             ?>
		</div>



		<!-- end of row and container -->
	</div>
</div>

</body>


</html>