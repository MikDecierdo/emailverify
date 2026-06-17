<!DOCTYPE html>
<html>
<head>
<title>Simple Application to view the pdf</title>
<style type="text/css">
table td, table th{
border:1px solid black;
}
</style>
</head>
<body>
<div class="container">
<a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
<table>
<tr>
<th>No</th>
<th>Name</th>
<th>Email</th>
</tr>
@foreach ($items as $key => $item)
<tr>
<td>{{ ++$key }}</td>
<td>{{ $item->name }}</td>
<td>{{ $item->email }}</td>
</tr>
@endforeach
</table>
</div>
</body>
</html>
