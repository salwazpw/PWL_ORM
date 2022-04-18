<!DOCTYPE html>
<html>

<head>
    <title>LAPORAN KARTU HASIL STUDI {{ $mahasiswa->Nama}} {{ $mahasiswa->Nim}}</title>
</head>

<body>
    <center>
        <h2>KARTU HASIL STUDI (KHS)</h2>
    </center>
    <br>
        <b>Nama:</b> {{ $mahasiswa->Nama}}<br>
        <b>NIM: </b>{{ $mahasiswa->Nim}}<br>
        <b>Kelas: </b> {{ $mahasiswa->kelas->nama_kelas}}<br>

        <br><br><br>
        <table class="table table-bordered" width="700px">
            <tr>
                <th>Matakuliah</th>
                <th>SKS</th>
                <th>Semester</th>
                <th>Nilai</th>
            </tr>
            <br>
                @foreach ($mahasiswa -> matakuliah as $nilai)
                <tr>
                    <td>{{ $nilai->nama_matkul }}</td>
                    <td align="center">{{ $nilai->sks }}</td>
                    <td align="center">{{ $nilai->semester }}</td>
                    <td align="center">{{ $nilai->pivot->nilai }}</td>
                </tr>
            @endforeach
    </table>
</body>

</html>
