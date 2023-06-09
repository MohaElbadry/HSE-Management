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
		{{-- <img src="1.png" /> --}}
	</div>
	<table>
		<thead>
			<tr>
				<th>#Num</th>
				<th>Lib</th>
				<th>Description</th>
				<th>Projet</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($risks as $i=>$item)
			<tr>
				<td>{{ $i+1 }}</td>
				<td>{{ $item->lib }}</td>
				<td>{{ $item->description }}</td>
				<td>{{ $item->projet_name }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	<p>
		Lieu : SAFI <br>
		Date: {{ date('Y-m-d') }}<br>
		Heure: {{ date('H:i:s') }}
	</p>
	<div class="signature-container">
		<h4>Signature</h4>
	</div>
</body>

</html>