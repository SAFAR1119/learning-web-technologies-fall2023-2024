<!DOCTYPE html>
<html>
<head>
<title>FeedbacK Engine</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body class="agileits_w3layouts">
<form method="post" action="../controller/feedbackcheck.php" enctype="">
    <h1 class="agile_head text-center">Feedback Form</h1>
	<fieldset>
                Username: <input type="text" name="username" value="" required/> <br>
                Password: <input type="password" name="password" value="" required /> <br>                     
            </fieldset>
    
	
	
	<div class="w3layouts_main wrap">
	  <h3>Please help us to serve you better by taking a couple of minutes. </h3>
	    <form action="feedback.php" method="post" class="agile_form">
		  <h2>How satisfied were you with our Service?</h2>
			 <ul class="agile_info_select">
				 <li><input type="radio" name="view" value="excellent" id="excellent" required> 
				 	  <label for="excellent">excellent</label>
				      <div class="check w3"></div>
				 </li>
				 <li><input type="radio" name="view" value="good" id="good"> 
					  <label for="good"> good</label>
				      <div class="check w3ls"></div>
				 </li>
				 <li><input type="radio" name="view" value="neutral" id="neutral">
					 <label for="neutral">neutral</label>
				     <div class="check wthree"></div>
				 </li>
				 <li><input type="radio" name="view" value="poor" id="poor"> 
					  <label for="poor">poor</label>
				      <div class="check w3_agileits"></div>
				 </li>
			 </ul>	  
			<h2>If you have specific feedback, please write to us...</h2>
			<textarea placeholder="Additional comments" class="w3l_summary" name="comments" required=""></textarea>
			<center><input type="submit" value="submit Feedback" class="agileinfo" /></center>
	  </form>
	</div>
</body>
</html>

