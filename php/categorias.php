<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Categorias</header>
	
	<div class="row wrapper">
		<div class="col-md-12">
			<a href="admin.php?m=categoriasAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nueva Categoria</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th width="100">Orden</th>
					<th>Categoria</th>
					<th>URL</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>
<?php
			$query = mysql_query("SELECT * FROM categorias ORDER BY orden ASC");
			while($q = mysql_fetch_object($query)){
				echo '<tr>
					<td class="text-center">'.$q->orden.'</td>
					<td>'.$q->categoria.'</td>
					<td>'.$q->url.'</td>
					<td>
						<a href="admin.php?m=categoriasEditar&id='.$q->idcategorias.'" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=categorias&del='.$q->idcategorias.'" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>';
			}
?>				
			</tbody>
		</table>
	</div>

</section>