<html>
<head>
	<title>Generator PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<h1> Generowanie tabeli ciągu Fibonacciego</h1>
<?php
	if($_POST["kol"])
	{
		$col = $_POST["kol"];
	}
	else
	{
		$col=3;
	}

	if($_POST["wie"])
	{
		$row = $_POST["wie"];
	}
	else
	{
		$row=3;
	}
	if($_POST["szuk"])
	{
		$search = $_POST["szuk"];
	}
	else 
	{
		$search = 4;
	}
	

	if($col and $row){
		echo "Liczba kolumn: " . $col . "<br/>";
		echo  "Liczba wierszy: " . $row . "<br/>";
		echo  "Aktualnie szukana wartość: " . $search . "<br/>";
		$num = $col * $row;

	} else {
		echo "<p>Czegoś  brakuje</p>";
	}

	$arr = array(0, 1);

	function Fib($n, &$arr)
	{
	   	if(!isset($arr[$n]))
	   	{
	      $arr[$n] = fib($n-1, $arr) + fib($n-2, $arr);
	   	}
	   	return $arr[$n];
	}
	Fib($num, $arr);

	
?>
<br/>
<!---
<div class="row">
<div class="form-group">
	  <label class="control-label col-sm-2" > Szukaj: </label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="szuk" placeholder="np. 3">
      </div>
</div>
</div>
-->
<div class="table-responsive">
	<table class="table">
	<?php 

		for ($r=0; $r<$row; $r++)
		{
			echo "<tr>";
			for ($c=0; $c<$col; $c++)
			{
			$temp = array_shift($arr);

				if ($temp == $search ) 
				{
					echo '<td class="alert alert-success"> '.$temp.'</td>';
				}
				else 
				{
					echo "<td>".$temp."</td>";
				}
			}
			echo "</tr>";
		}
	?>
	</table>
</div>


</div>

</body>
</html>