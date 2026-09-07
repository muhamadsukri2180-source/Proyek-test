<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi</title>
    <style>
        *{
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }
        body{
            font-family: 'Times New Roman', Times, serif;
        }
        .navbar{
            display: flex;
            justify-content: space-between;
            padding: 10px;
            align-items: center;
            background-color: skyblue;
            border: 2px solid black;
            border-radius: 1px;
        }
        .judul{
            font-size: 25px;
            padding-left: 20px;
        }
        .ul{
            display: flex;
            text-align: center;
            text-decoration: none;
            list-style: none;
            gap: 20px;
            padding: 5px;
        }
        .navbar li a{
            text-decoration: none;
            list-style: none;
            color: black;
            font-size: 15px;
        }
        .contain{
            display: flex;
            min-height: calc(100vh - 120px);
        }
        .sidebar{
            background-color: khaki;
            padding: 20px;
            text-decoration: none;
            align-items: flex-start;
            list-style: none;
            border: 1px solid black;
            border-radius: 1px;
            width: 200px;
        }
        .judul1{
            font-size: 25px;
            align-items: center;
            padding: 15px 0;
        }
        .ul2{
            text-decoration: none;
            list-style: none;
        }
        .sidebar li a{
            text-decoration: none;
            list-style: none;
            color: black;
            gap: 20px;
            padding: 10px 0;
            display: block;
        }
        .main-contain{
            padding: 20px;
            width: 100%;
        }
        .card{
            background-color: coral;
            border: 1px solid black;
            border-radius: 1px;
            padding: 20px;
            width: 100%;
        }
        .cardname{
            text-align: center;
            color: black;
            padding: 10px;
            align-items: center;
        }
        .form-grid{
            display: grid;
            grid-template-columns: repeat(1, minmax(350px, 1fr));
            gap: 15px;
        }
        .form{
            flex-direction: column;
            flex: 1;
            padding: 15px;
            border-radius: 1px;
            border: 1px solid black;
            margin-top: 10px;
            background-color: silver;
        }
        .form-contain{
            padding: 10px;
            margin: 10px;
        }
        .form-contain input[type="text"]{
            flex: 1;
            padding: 10px;
            border: 1px solid black;
            border-radius: 1px;
            width: 100%;
        }
        .form-contain label{
            display: block;
            margin-bottom: 5px;
        }
        .form-grid button, .btn-batal{
            padding: 10px 15px;
            background-color: skyblue;
            cursor: pointer;
            align-self: flex-start;
            border: 1px solid black;
            border-radius: 1px;
            margin-left: 20px;
            text-decoration: none;
            color: black;
            font-size: 13px;
        }
        .btn-danger {
            background-color: #ff4d4d;
            color: white;
            border: 1px solid black;
            padding: 5px 10px;
            cursor: pointer;
        }
        .btn-edit {
            color: blue;
            text-decoration: none;
            font-weight: bold;
        }
        .alert-success {
            padding: 10px;
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            margin-top: 10px;
        }
        .footer{
            display: flex;
            justify-content: space-between;
            padding: 10px;
            align-items: center;
            background-color: skyblue;
            border: 2px solid black;
            border-radius: 1px;
        }
        .footer li a {
            text-decoration: none;
            list-style: none;
            color: black;
            font-size: 15px;
            gap: 20px;
        }
        .table-contain{
            padding-top: 20px;
        }
        .tabel{
            width: 100%;
            background-color: salmon;
            border-collapse: collapse;
        }
        .tabel th, .tabel td {
            padding: 10px;
            border: 1px solid black;
        }
        .tr1{
            text-align: center;
            color: black;
            background-color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar">
        <h1 class="judul">Navbar</h1>
        <ul class="ul">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
        </ul>
    </nav>

    <div class="contain">
        <aside class="sidebar">
            <h1 class="judul1">Sidebar</h1>
            <ul class="ul2">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
            </ul>
        </aside>

        <main class="main-contain">
            <div class="card">
                <h2 class="cardname">Absensi</h2>
            </div>

            <div class="form-grid">
                <form class="form" action="{{ $itemEdit ? route('welcome.update', $itemEdit->id) : route('welcome.store') }}" method="POST">
                    @csrf
                    @if ($itemEdit)
                    @method('PUT')
                    @endif
                    <div class="form-contain">
                        <label for="nama">Mauskan Nama:</label>
                        <input type="text" name="nama" id="nama" placeholder="Masukan Nama:" value="{{ old('nama', $itemEdit->nama ?? '') }}" required>
                    </div>
                    <div class="form-contain">
                        <label for="nama">Mauskan Kelas:</label>
                        <input type="text" name="kelas" id="kelas" placeholder="Masukan Kelas:" value="{{ old('kelas', $itemEdit->kelas ?? '') }}"required>
                    </div>
                    <div class="form-contain">
                        <label for="nama">Mauskan No:</label>
                        <input type="text" name="no" id="no" placeholder="Masukan Nomor:" value="{{ old('no', $itemEdit->no ?? '') }}"required>
                    </div>
                    <button type="submit">{{ $itemEdit ? 'Update' :'Kirim' }}</button>
                    @if ($itemEdit)
                    <a href="{{ route('welcome.index') }}" class="btn-batal">Batal</a>
                    
                    @endif
                </form>
            </div>

            <div class="table-contain">
                <table class="tabel">
                    <thead>
                        <tr>
                            <th>nama</th>
                            <th>Kelas</th>
                            <th>No</th>
                            <th>aski</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($absen as $item)
                        <tr class="tr1">
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->kelas }}</td>
                            <td>{{ $item->no }}</td>
                            <td><a href="{{ route('welcome.index', [$edit => $item->id]) }}" class="btn-edit">Edit</a></td>
                            <form action="{{ route('welcome.destroy', $item->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Hapus</button>
                            </form>
                        </tr>
                    </tbody>
                </table>

            </div>
        </main>
    </div>
    <table>
        <h1>
    
        </h1>
    </table>

    <footer class="footer">
        <h1 class="judul">Footer</h1>
        <ul class="ul">
            <li><a href="#">Kontak</a></li>
            <li><a href="#">Maps</a></li>
        </ul>
    </footer>
</body>
</html>