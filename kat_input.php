<h2>Add Category Penduduk</h2>

<form action="kat_proses.php" method="post">
    <table>
        <tr>
            <td>NAMA PENDUDUK</td>
            <td><input type="text" name="cat_name"></td>
        </tr>
        <tr>
            <td>KETERANGAN PENDUDUK</td>
            <td><textarea name="cat_text" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <tr>
                <td>JUMLAH KARTU KTP PENDUDUK</td>
                <td><textarea name="cat_number" id="" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_simpan" value="SIMPAN"></td>
        </tr>
    </table>
</form>