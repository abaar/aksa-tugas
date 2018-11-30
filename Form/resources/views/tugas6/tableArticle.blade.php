<!DOCTYPE html>
<html>
<head>
	<title>Aksa Academy - Tugas 6</title>
	<link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
	<style>
		table {
		    font-family: arial, sans-serif;
		    border-collapse: collapse;
		    width: 100%;
		}

		td, th {
		    border: 1px solid #dddddd;
		    text-align: left;
		    padding: 8px;
		}

		tr:nth-child(even) {
		    background-color: #dddddd;
		}
	</style>
</head>
<body>
	<div class="container-fluid" style="margin-top:1%">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div>
					<h1>Article's Data!</h1>
					<br>
				</div>
				<div class="col-md-offset-10" style="float:right; margin-bottom: 2%" >
					<button class="btn btn-primary" onclick="redirect('{{Route('tugas6.show.form')}}')">Back</button>
				</div>
				<div style="margin-top:2%">
					<table>
						<tr>
							<th>Article Id</th>
							<th>Title</th>
							<th>Category</th>
							<th>Body</th>
							<th width="80">Edit</th>
							<th width="80">Delete</th>
						</tr>
						@foreach ($datas as $data)
								<tr>
									<td>
										{{ $data->id }}
									</td>
									<td>
										{{ $data->title }}
									</td>
									<td>
									@for($i=0;$i<sizeof($data->category);$i++)
										@if($i>0)
											,
										@endif
										{{ $data->category[$i]->name }}

									@endfor
									</td>
									<td>
										
										@if(empty($data->body))
											-
										@else
											{{ $data->body }}
										@endif
									</td>
									<td>
										
										<button class="btn btn-warning col-md-12" onclick="redirect('{{ Route('tugas6.edit.article',['id'=>$data->id]) }}')">Edit</button>

									</td>
									<td>
										<button class="btn btn-danger col-md-12" onclick="redirect('{{ Route('tugas6.delete.article',['id'=>$data->id]) }}')">Delete</button>
									</td>
								</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>		
	</div>
	<script type="text/javascript" src="/js/bootstrap.min.js"></script>
	<script type="text/javascript">
		function redirect(to){
			window.location.href=to;
		}

	</script>
</body>
</html>