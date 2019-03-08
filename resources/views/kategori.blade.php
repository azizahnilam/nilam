<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body><center>
<table border=5>

        <tr>
            <th> ID </th>
            <th> Kategori </th>
            <th> Aksi </th>
           
        @foreach($kategori as $row)
        <tr>
            
                <th>{{ $row->id }}</th>
                <th>{{ $row->nama_kategori }}</th>
             
                <th> 
                    <a href="/id/edit/{{$row->id}}">Edit</a>
                    <a href="/id/hapus/{{$row->id}}">Hapus</a>
        </tr>
        @endforeach
</table>
</center>
</body>
</html>
