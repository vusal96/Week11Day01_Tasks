<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		input{
			display:block;
			padding:5px 10px;
			margin:5px;
		}
		input[type="radio"]{
			display:inline-block;
		}
		
	</style>
</head>
<body>

<form method="post" attribute="post" action="calculator.php">
<p>First Value:<br/>
<input type="number" id="first" name="first"></p>
<p>Second Value:<br/>
<input type="number" id="second" name="second"></p>
<input type="radio" name="group1" value="add" checked="true"><span>+</span>
<input type="radio" name="group1" value="subtract"><span>-</span>
<input type="radio" name="group1" value="times"><span>*</span>
<input type="radio" name="group1" value="divide"><span>/</span>
<p></p>
<button type="submit" >Calculate</button>
</form>

</body>
</html>