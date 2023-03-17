<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>A Books Table</h1>

<table id="customers">
    <thead>
        <tr>
            <th>No</th>
            <th>Cover</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Kategori</th>
            <th>Tahun Terbit</th>
            <th>Penerbit</th>
            <th>Penulis</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($books as $index => $book)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>
                    <img src="data:img/png;base64, {{ base64_encode($book->cover) }}"
                        alt="" style="width: 150px;">
                </td>
                <td>{{ $book->nama }}</td>
                <td>{{ $book->desc }}</td>
                <td>{{ $book->kategori }}</td>
                <td>{{ $book->tahunterbit }}</td>
                <td>{{ $book->penerbit }}</td>
                <td>{{ $book->penulis }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

</body>
</html>


