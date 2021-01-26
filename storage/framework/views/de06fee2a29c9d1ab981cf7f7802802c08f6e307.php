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
    <a href='/tambah'>+TAMBAH PEGAWAI </a>
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

   <?php $__currentLoopData = $pegawai; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($p->id); ?></td>
            <td><?php echo e($p->nama); ?></td>
            <td><?php echo e($p->kode_pegawai); ?></td>
            <td><?php echo e($p->bagian); ?></td>
            <td><?php echo e($p->jabatan); ?></td>
            <td><?php echo e($p->tempat_tinggal); ?></td>
            <td><?php echo e($p->umur); ?></td>
            <td><?php echo e($p->tanggal_masuk); ?></td>
            <td><?php echo e($p->tanggal_keluar); ?></td>
            <td><?php echo e($p->gaji); ?></td>
            <td><a href='/delete/<?php echo e($p->id); ?>'> Hapus </a>| 
                <a href='/update/<?php echo e($p->id); ?>'>Update</a></td>
            
            </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <a class="class-button" href="/home">Keluar</a>
    </body>
</html>