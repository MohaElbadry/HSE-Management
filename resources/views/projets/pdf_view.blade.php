<!DOCTYPE html>
<html>

<head>
	<title>Risk PDF Template</title>
	<style>
		table {
			border-collapse: collapse;
			width: 100%;
		}

		table,
		th,
		td {
			border: 1px solid black;
		}

		th {
			background-color: #337ab7;
			color: white;
		}

		th,
		td {
			padding: 8px;
			text-align: left;
		}

		h1 {
			color: #337ab7;
		}

		.container {
			text-align: center;
		}

		.signature-container {
			text-align: right;
		}
	</style>
</head>

<body>
	<div class="container">
		<h1>Risk Report</h1>
	</div>
	</br>
	</br>
	</br>
	<table>
		<thead>
			<tr>
				<th>#Num</th>
				<th>Lib</th>
				<th>Description</th>
				<th>ADMIN</th>
				<th>SITE</th>
				<th>Projet start at</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($projets as $item)
			<tr>
				<td>{{ $item->id }}</td>
				<td>{{ $item->name }}</td>
				<td>{{ $item->description }}</td>
				<td>{{ $item->user_name }}</td>
				<td>{{ $item->site_name }}</td>
				<td>{{ $item->proj_start }}</td>

			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	</br>
	</br>
	</br>
	<p>
		Lieu : <br>
		Date: {{ date('Y-m-d') }}<br>
		Heure: {{ date('H:i:s') }}
	</p>
	<div class="signature-container">
		<h6>Signature</h6>
	</div>
</body>

</html>