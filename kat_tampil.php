<?php

$kat = new App\Kategori;
$rows = $kat->tampil();

?>

<h2>Kategori Penduduk</h2>

<a href="index.php?hal=kat_input" class="btn">(Tambah) Add Category Penduduk</a>

<table>
    <tr>
        <th>NO</th>
        <th>NAMA PENDUDUK</th>
        <th>KETERANGAN PENDUDUK</th>
        <th>JUMLAH KARTU KTP PENDUDUK</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['cat_id']; ?></td>
        <td><?php echo $row['cat_name']; ?></td>
        <td><?php echo $row['cat_text']; ?></td>
        <td><?php echo $row['cat_text']; ?></td>
        <td><a href="index.php?hal=kat_edit&id=<?php echo $row['cat_id']; ?>" class="btn">Edit</a></td>
        <td><a href="index.php?hal=kat_delete&id=<?php echo $row['cat_id']; ?>" class="btn">Delete</a></td>
    </tr>
    <?php } ?>
</table>
