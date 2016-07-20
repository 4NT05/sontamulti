<h3> Daftar Penulis </h3>
<?php 
echo anchor(base_url().'index.php/dashboard','Home'); 
?>
<table border="2">
    <tr>
        <th>NO</th>
        <th>Nama Penulis</th>
        <th>Email</th>
        <th>No Telp</th>
        <th>blokir</th>
        <th colspan="2">Operasi</th>
    </tr>

    <?php
    foreach ($penulis as $lihat) { 
    ?>
    <tr>
        <td><?php echo $lihat->penulis_id; ?></td>
        <td><?php echo $lihat->penulis_nm; ?></td>
        <td><?php echo $lihat->penulis_email; ?></td>
        <td><?php echo $lihat->penulis_hp; ?></td>
        <td><?php echo $lihat->blokir; ?></td>
        <td><?php echo anchor(base_url().'index.php/c_penulis/edit/'.$lihat->penulis_id,'edit') ?> <?php echo anchor(base_url().'index.php/c_penulis/hapus/'.$lihat->penulis_id,'delete') ?></td>
    </tr>  
        <?php 
         
    }
    ?>
    <tr>
    <td><?php echo anchor(base_url().'index.php/c_penulis/post','tambah'); ?></td>
    </tr>
</table>
