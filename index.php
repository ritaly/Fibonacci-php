<html>
<head>
	<title>Generowana tabela PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container">

<h1> Generowanie tabeli ciągu Fibonacciego</h1>

<form class="form-horizontal" action="process.php" method="post">
	<div class="form-group">
	 <label class="control-label col-sm-2" > Liczba kolumn: </label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="kol" placeholder="np. 3">
      </div>
     </div>
     <div class="form-group">
	  <label class="control-label col-sm-2" > Liczba wierszy: </label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="wie" placeholder="np. 3">
      </div>
     </div>
     <div class="form-group">
	  <label class="control-label col-sm-2" > Szukaj: </label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="szuk" placeholder="np. 3">
      </div>
     </div>

	  <div class="form-group">
      <div class="col-sm-offset-2 col-sm-3">
        <button type="submit" class="btn btn-default">Lecimy!</button>
      </div>
    </div>
</form>
</div>

</body>
</html>