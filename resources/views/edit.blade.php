<html>
    <head>
    <style>
            body{
            width: 1200px;
                margin: 20px auto;
                box-shadow: 2px 3px 3px 2px #888888;
                padding: 10px;
        }
        table{
            width: 50%;
            height: 100px;
        }
        .class-button{
                background: black;
                color: white;
                padding: 3px;
                border-radius: 3px;
                width: 100%;
                height: 30px;
                border: 1px solid black;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
    
        <form method="post" action="/pegawai/fedit">
        {{csrf_field()}}
        <h2>Update Data Pegawai </h2>
        <table>
        @foreach($hasil as $h)
         <input type="hidden" name="id" value="{{$h->id}}">
            <tr>
                <td>nama</td>
                <td><input type='text' name='nama' value='{{$h->nama}} edited' required></td></tr>
                <tr><td>kode pegawai</td>
                <td><input type='text' name='kode_pegawai' value='{{$h->kode_pegawai}}' required></td></tr>
                <tr><td>bagian</td>
                <td><input type='text' name='bagian' value='{{$h->bagian}}' required></td></tr>
                <tr><td>jabatan</td>
                <td><input type='text' name='jabatan' value='{{$h->jabatan}}' required></td></tr>
                <tr><td>tempat tinggal</td>
                <td><input type='text' name='tempat_tinggal' value='{{$h->tempat_tinggal}}' required></td></tr>
                <tr><td>umur</td>
                <td><input type='text' name='umur' value='{{$h->umur}}' required></td></tr>
                <tr><td>tanggal masuk</td>
                <td><input type='date' name='tanggal_masuk' value='{{$h->tanggal_masuk}}' required></td></tr>
                <tr><td>tanggal keluar</td>
                <td><input type='date' name='tanggal_keluar' value='{{$h->tanggal_keluar}}' required></td></tr>
                <tr><td>gaji</td>
                <td><input type='text' name='gaji' value='{{$h->gaji}}' required></td></tr>
                <td><input class="class-button" type='submit' value='submit' required></td>
                </tr>
        @endforeach
        </table>
        </form>
    </body>
</html>