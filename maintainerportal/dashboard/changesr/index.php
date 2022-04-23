<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="../../../css.css">
	<link href="https://fonts.googleapis.com/css?family=Product+Sans:500,700&display=swap" rel="stylesheet">
	<link rel="icon" type="image/png" href="../../../images/logo.png">
	<title>FeedMe | Edit Star Rating</title>

  <style>
.header{
  background-color: red;
}
</style>
</head>

<body>
	<?php
       session_start();

       if (!isset($_SESSION["ma_username"])){
         sleep(1);
         header('Location: ../');
       }

       if (!empty($_POST)){
        include('update.php');
       }
  ?>
		<div class="header">
			<div><a href="../"><img src="../../../images/back.svg" class="home"></a></div>
			<img src="../../../images/logo.svg" class="logo" />
			<div class="title">Feedie</div>
			<a href="../../?logout=1">
				<div class="logout">Logout</div>
			</a>
		</div>
		<div class="wrapper">
			<div class="container">
				<form class="myform" action="" method="post">
					<div class="heading">Edit Star Rating</div>
					<?php
 
        include('../../../db_config.php');
        $sql = "SELECT r_value FROM ratings ORDER BY r_no ASC ";
        $result = $conn->query($sql);
        $i = 1;
        if ($result->num_rows > 0){
          while ($row = $result->fetch_assoc()){
    ?>
						<?php echo $i; ?> Star = <input type="text" class="inputvalue" name="r[]" placeholder="<?php echo $i; ?> points" value="<?php echo $row["r_value"]; ++$i; ?>" />
						<?php

         } //Closing while loop
        } //Closing if condn

    ?>
							<div class="phpr" style="color:red">
								<label>
    <?php   

      if ( !empty($_POST) ) {
        //To update contents of questions
        echo "Ratings updated";
      }
      elseif ( isset($_POST) ) {
      	;
      }
      else{
        echo "Please fill all the rating fields";
      }

    ?>
    </label>
							</div>
							<button class="button">Change Star Rating</button>
				</form>
			</div>
		</div>
</body>

</html>
