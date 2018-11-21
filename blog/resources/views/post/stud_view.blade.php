<!DOCTPE html>
<html>
<head>
<title>View Student Records</title>
</head>
<body>

<p>{{$message}}</p>
<table border = "1">
<tr>
<td>Descrition</td>
</tr>

@foreach ($posts as $post)
<tr>
<td>{{ $post['description'] }}</td>
</tr>
@endforeach
</table>

</body>
</html>