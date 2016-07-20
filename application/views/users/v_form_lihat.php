<h3> Daftar User </h3>
<?php 
echo anchor(base_url().'index.php/dashboard','Home'); 
?>
<table border="2">
    <tr>
        <th>NO</th>
        <th>Nama Lengkap</th>
        <th>Username</th>
        <th>Password</th>
        <th>alamat</th>
        <th>email</th>
        <th>pekerjaan</th>
        <th>Jenis Kelamin</th>
        <th>hp</th>
        <th>level</th>
        <th colspan="2">Operasi</th>
    </tr>

    <?php
    foreach ($users as $lihat) { 
    ?>
    <tr>
        <td><?php echo $lihat->users_id; ?></td>
        <td><?php echo $lihat->nama_lengkap; ?></td>
        <td><?php echo $lihat->username; ?></td>
        <td><?php echo $lihat->password; ?></td>
        <td><?php echo $lihat->alamat; ?></td>
        <td><?php echo $lihat->email; ?></td>
        <td><?php echo $lihat->pekerjaan; ?></td>
        <td><?php echo $lihat->j_kel; ?></td>
        <td><?php echo $lihat->hp; ?></td>
        <td><?php echo $lihat->level; ?></td>
        <td><?php echo anchor(base_url().'index.php/c_users/edit/'.$lihat->users_id,'edit') ?> <?php echo anchor(base_url().'index.php/c_users/hapus/'.$lihat->users_id,'delete') ?></td>
    </tr>  
        <?php 
         
    }
    ?>
    <tr>
    <td><?php echo anchor(base_url().'index.php/c_users/post','tambah'); ?></td>
    </tr>
</table>
