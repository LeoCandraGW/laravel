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
        <?php echo e(csrf_field()); ?>

        <h2>Update Data Pegawai </h2>
        <table>
        <?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $h): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <input type="hidden" name="id" value="<?php echo e($h->id); ?>">
            <tr>
                <td>nama</td>
                <td><input type='text' name='nama' value='<?php echo e($h->nama); ?>' required></td></tr>
                <tr><td>kode pegawai</td>
                <td><input type='text' name='kode_pegawai' value='<?php echo e($h->kode_pegawai); ?>' required></td></tr>
                <tr><td>bagian</td>
                <td><input type='text' name='bagian' value='<?php echo e($h->bagian); ?>' required></td></tr>
                <tr><td>jabatan</td>
                <td><input type='text' name='jabatan' value='<?php echo e($h->jabatan); ?>' required></td></tr>
                <tr><td>tempat tinggal</td>
                <td><input type='text' name='tempat_tinggal' value='<?php echo e($h->tempat_tinggal); ?>' required></td></tr>
                <tr><td>umur</td>
                <td><input type='text' name='umur' value='<?php echo e($h->umur); ?>' required></td></tr>
                <tr><td>tanggal masuk</td>
                <td><input type='text' name='tanggal_masuk' value='<?php echo e($h->tanggal_masuk); ?>' required></td></tr>
                <tr><td>tanggal keluar</td>
                <td><input type='text' name='tanggal_keluar' value='<?php echo e($h->tanggal_keluar); ?>' required></td></tr>
                <tr><td>gaji</td>
                <td><input type='text' name='gaji' value='<?php echo e($h->gaji); ?>' required></td></tr>
                <td><input class="class-button" type='submit' value='submit' required></td>
                </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
        </form>
    </body>
</html>