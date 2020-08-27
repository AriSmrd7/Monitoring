<!DOCTYPE html>
<html>
<head>
    <title>Kantor</title>
</head>
<body>
    <h3>Daftar Kantor</h3>
    <table border="1">
        <tr>
            <th>No.</th>
            <th width="200px">Cabang</th>
        </tr>
        @php
            $no = 1;    
        @endphp
        @foreach($offices as $data)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->nama_kantor }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>