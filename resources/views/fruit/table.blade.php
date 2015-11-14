<table class="table table-striped">
	<thead>
		<tr>
			<th class="col-sm-1" align="center">ID</th>
			<th class="col-sm-3" >Name</th>
			<th class="col-sm-2" >Color</th>
			<th class="col-sm-2" >Taste</th>
			<th class="col-sm-1 span2" >Actions</th>
			
		</tr>
	</thead>
	<tbody>
		@foreach ( $fruits as $f )
			<tr>		
				<td> {{ $f->id }} </td>
				<td> {{ $f->name }} </td>
				<td> {{ $f->color }} </td>
				<td> {{ $f->taste }} </td>
				<td>
					<div class="btn-group">
						<a type="button" href="fruit/edit/{{$f->id}}" href="" class="btn btn-default"><i class="fa fa-pencil-square"></i> Edit</a>
					</div>
				</td>
				<td>
					<a type="button" href="fruit/delete/{{$f->id}}" data-toggle="modal" class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</a>
				</td>
			</tr>
		@endforeach
	</tbody>
</table>

<script type="text/javascript">
$(document).ready(function() {
	$('#confirm-delete').find('.modal-footer #confirm').on('click', function(){
		//$(this).data('form').submit();
		alert();
	});
});
</script>