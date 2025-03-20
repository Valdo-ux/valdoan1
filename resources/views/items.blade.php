<!DOCTYPE html>
<html lang="en">
<head>
    <title>List Item</title>
</head>
<body>
    <h1>Daftar Item</h1>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Item</th>
                <th>Harga</th>
                <th>Stok</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($items as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                <td>{{ $item->stok }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>