<html>
<head>
    <title>Biodata</title>
</head>
<body>
    @php
        $nama = 'Saima';
        $nim = '085261689013';
        $prodi = 'Sistem Inforasi';
        $angkatan = '2023';
    @endphp

    <h1>Biodata</h1>
    <p>Nama: {{ $nama }}</p>
    <p>NIM: {{ $nim }}</p>
    <p>Prodi: {{ $prodi }}</p>
    <p>Angkatan: {{ $angkatan }}</p>
</body>
</html>