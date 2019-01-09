<?php

if($_FILES){
	
	$foto = $_FILES['foto'];

	$nome_arquivo = "fotos/".uniqid().".jpg";

	if(move_uploaded_file($foto['tmp_name'][0], $nome_arquivo)){

	}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">


		<form enctype="multipart/form-data" method="post" action="fotos.php">
		  
		  <div class="form-group">
		    <label for="exampleInputFile">File input</label>
		    <input type="file" name="foto[]" id="exampleInputFile">
		    <p class="help-block">Example block-level help text here.</p>
		  </div>
		 
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>

		<?php
		$path = "fotos/";
		$diretorio = dir($path);
		 
		while($arquivo = $diretorio -> read()){
			if($arquivo!='.'&&$arquivo!='..'){
				echo "<div class=\"col-md-3\"><img class=\"img-responsive\" src='".$path.$arquivo."'></div>";
			}
		}
		$diretorio -> close();
		?>


	</div>
</body>
</html>