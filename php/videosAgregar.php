<?php

if ( isset($_POST['nombre']) ){

	$orden 	= mysql_real_escape_string($_POST['orden']);
	$nombre = mysql_real_escape_string($_POST['nombre']);
	$enlace = mysql_real_escape_string($_POST['enlace']);

	if ( mysql_query("INSERT INTO categorias SET orden='".$orden."',nombre='".$nombre."',enlace='".$enlace."'") ){
		$errorMsg = '<div class="alert alert-success">
				<i class="fa fa-check"></i> Categoria agregada correctamente.
			</div>';
	} else {
		$errorMsg = '<div class="alert alert-danger">
			<i class="fa fa-times"></i> Error, intenta nuevamente.
		</div>';
	}

}

?>
		<section class="panel panel-default">
			<header class="panel-heading">
				<i class="fa fa-plus icon"></i> Agregar Video
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-md-4 control-label">Enlace del Video</label>
								<div class="col-md-8"><input type="text" name="enlace" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label class="col-md-4 control-label">Categoria</label>
								<div class="col-md-8"><input type="text" name="nombre" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=videos" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
