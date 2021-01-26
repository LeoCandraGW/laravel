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

            .class-font{
            color: #fcaf45;  
        }
        </style>
    </head>
    <body>
    <img src="images/logo.png">
    <h2 class="class-font"> DAAFN COMPANY</h2>
    <br><br>
        <form method="post" action="ftambah">
        <?php echo e(csrf_field()); ?>

        <h2> Masukan Data Pegawai </h2>
        <table>
            <tr><td>nama</td>
                <td><input type='text' name='nama' required></td></tr>
                <td>kode pegawai</td>
                <td><input type='text' name='kode_pegawai' required></td></tr>
                <td>bagian</td>
                <td><input type='text' name='bagian' required></td></tr>
                <td>jabatan</td>
                <td><input type='text' name='jabatan' required></td></tr>
                <td>tempat tinggal</td>
                <td><input type='text' name='tempat_tinggal' required></td></tr>
                <td>umur</td>
                <td><input type='text' name='umur' required></td></tr>
                <td>tanggal masuk</td>
                <td><input type='text' name='tanggal_masuk' required></td></tr>
                <td>tanggal keluar</td>
                <td><input type='text' name='tanggal_keluar' required></td></tr>
                <td>gaji</td>
                <td><input type='text' name='gaji' required></td></tr>
                <td><input class="class-button" type='submit' value='submit' required></td></tr>
                <td><br><a class="class-button" href="/pegawai">Kembali</a></td>
        </table>
        </form>
    </body>
</html>