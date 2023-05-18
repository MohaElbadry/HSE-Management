<!DOCTYPE html>
<html>

<head>
	<title>Risk PDF Report</title>
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
		<h1>Projets Report</h1>
	</div>
	</br>
	</br>
	<h5>This report provides a brief overview of a list of projects undertaken within a specific timeframe. It offers a
		concise
		summary of the initiatives, their progress, and their relevance to the organization/company/team.<br />
		Its purpose is to offer an informative and insightful overview of the organization's/project team's activities
		and their
		contribution to strategic goals.</h5>

	</br>
	<table>
		<thead>
			<tr>
				<th>#Num</th>
				<th>Lib</th>
				<th>Description</th>
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
		Lieu : SAFI/Maroc<br>
		Date: {{ date('Y-m-d') }}<br>
		Heure: {{ date('H:i:s') }}
	</p>
	<div class="signature-container">
		<h4>Signature</h4>
	</div>
</body>

</html>