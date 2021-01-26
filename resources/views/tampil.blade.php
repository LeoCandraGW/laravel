<html>
    <head>
    <style>
        body{
            width: 1200px;
                margin: 20px auto;
                box-shadow: 2px 3px 3px 2px #888888;
                padding: 10px;
        }
        .class-form{
            margin-top: 20px;
        }
        table{
            width: 100%;
            height: 100px;
        }
        th, td{
            border-bottom: 1px solid #ddd;
            padding: 5px;
            text-align: left;
        }
        th{
            height: 50px;
            background-color: #47bc00; 
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2;}

        .class-button{
                background: #f2f2f2;
                color: black;
                padding: 3px;
                border-radius: 3px;
                width: 100%;
                height: 30px;
                border: 1px solid black;
                margin-top: 20px;
            }

        .class-font{
            color: #fcaf45;  
        }
    </style>
    </head>
    <body>

    <img src="images/logo.png">
    <h2 class="class-font"> DAAFN COMPANY</h2>
    <br><br>
    <a class="class-button"href='/tambah'>+TAMBAH PEGAWAI </a>
    <table class="class-form">
    <tr>
            <th>ID</th>
            <th>nama</th>
            <th>kode pegawai</th>
            <th>bagian</th>
            <th>jabatan</th>
            <th>tempat tinggal</th>
            <th>umur</th>
            <th>tanggal masuk</th>
            <th>tanggal keluar</th>
            <th>gaji</th>
            <th>Action</th>
          </tr>

   @foreach($pegawai as $p)
        <tr>
            <td>{{$p->id}}</td>
            <td>{{$p->nama}}</td>
            <td>{{$p->kode_pegawai}}</td>
            <td>{{$p->bagian}}</td>
            <td>{{$p->jabatan}}</td>
            <td>{{$p->tempat_tinggal}}</td>
            <td>{{$p->umur}}</td>
            <td>{{$p->tanggal_masuk}}</td>
            <td>{{$p->tanggal_keluar}}</td>
            <td>{{$p->gaji}}</td>
            <td><a href='/delete/{{$p->id}}'> Hapus </a>| 
                <a href='/update/{{$p->id}}'>Update</a></td>
            
            </tr>
    @endforeach
    </table>
    <a class="class-button" href="/daafn">Keluar</a>
    </body>
</html>