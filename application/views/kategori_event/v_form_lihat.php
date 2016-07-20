<h3> Kategori Event </h3>
<?php 
echo anchor(base_url().'index.php/dashboard','Home'); 
?>
<table border="2">
    <tr>
        <th>NO</th>
        <th>Nama Event</th>
        <th colspan="2">Operasi</th>
    </tr>

    <?php
    foreach ($kategori_event as $lihat) { 
    ?>
    <tr>
        <td><?php echo $lihat->kategori_event_id; ?></td>
        <td><?php echo $lihat->kategori_event_nm; ?></td>
        <td><?php echo anchor(base_url().'index.php/c_kategori_event/edit/'.$lihat->kategori_event_id,'edit') ?> <?php echo anchor(base_url().'index.php/c_kategori_event/hapus/'.$lihat->kategori_event_id,'delete') ?></td>
    </tr>  
        <?php 
         
    }
    ?>
    <tr>
    <td><?php echo anchor(base_url().'index.php/c_kategori_event/post','tambah'); ?></td>
    </tr>
</table>
