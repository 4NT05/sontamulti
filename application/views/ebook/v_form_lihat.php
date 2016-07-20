<h3> Kategori eBook </h3>
<?php 
echo anchor(base_url().'index.php/dashboard','Home'); 
?>
<table border="2">
    <tr>
        <th>NO</th>
        <th>Nama Ketegori</th>
        <th colspan="2">Operasi</th>
    </tr>

    <?php
    foreach ($kategori_ebook as $lihat) { 
    ?>
    <tr>
        <td><?php echo $lihat->kategori_ebook_id; ?></td>
        <td><?php echo $lihat->kategori_ebook_nm; ?></td>
        <td><?php echo anchor(base_url().'index.php/c_kategori_ebook/edit/'.$lihat->kategori_ebook_id,'edit') ?> <?php echo anchor(base_url().'index.php/c_kategori_ebook/hapus/'.$lihat->kategori_ebook_id,'delete') ?></td>
    </tr>  
        <?php 
         
    }
    ?>
    <tr>
    <td><?php echo anchor(base_url().'index.php/c_kategori_ebook/post','tambah'); ?></td>
    </tr>
</table>
