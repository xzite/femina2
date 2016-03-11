<section class="panel panel-default pos-rlt clearfix">

	<header class="panel-heading"> <i class="fa fa-list"></i> Carnets</header>
	
	<div class="row wrapper">
		<div class="col-md-12">
			<a href="admin.php?m=carnetsAgregar" class="pull-left btn btn-sm btn-success"><i class="fa fa-plus"></i> Nuevo</a>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-striped b-t b-light">
			<thead>
				<tr>
					<th width="120">Fecha</th>
					<th>Titulo</th>
					<th width="120"></th>
				</tr>
			</thead>
			<tbody>

				<tr>
					<td class="text-center">columna 1</td>
					<td>columna 2 </td>
					<td>
						<a href="admin.php?m=carnetsEditar&id=" class="btn btn-sm btn-default"> <i class="fa fa-pencil"></i> </a> &nbsp;&nbsp;&nbsp;
						<a href="admin.php?m=carnets&del=" class="btn btn-sm btn-danger"> <i class="fa fa-times"></i> </a>
					</td>
				</tr>
				
			</tbody>
		</table>
	</div>

</section>