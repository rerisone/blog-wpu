<!DOCTYPE html>
<html>
<head>
    <title>Input Data</title>
</head>
<body>
    <form method="POST" action="{{ url('/submit') }}">
        @csrf
        <input type="text" name="data" placeholder="Masukkan Nama, Kota, Nomor Telepon" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>