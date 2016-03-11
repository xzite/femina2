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
				<i class="fa fa-pencil icon"></i> Editar Portada
			</header>
			<div class="panel-body">
				<form class="bs-example form-horizontal" action="" method="post">
					<?php echo $errorMsg; ?>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-3 control-label">Fecha</label>
								<div class="col-md-9"><input type="text" name="fecha" class="form-control" placeholder=""></div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="col-md-3 control-label">Categoria</label>
								<div class="col-md-9"><input type="text" name="categoria" class="form-control" placeholder=""></div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5">
							imagen de posiciones
						</div>
						<div class="col-md-7">
							listado de posiciones
						</div>
					</div>
					<div class="line line-dashed line-lg pull-in"></div>
					<div class="form-group text-right">
						<div class="col-lg-12"> 
							<button type="submit" class="btn btn-sm btn-success"><i class="fa fa-check icon"></i> Agregar</button>
							<a href="admin.php?m=carnets" class="btn btn-sm btn-danger"><i class="fa fa-times icon"></i> Cancelar</a>
						</div>
					</div>
				</form>
			</div>
		</section>
