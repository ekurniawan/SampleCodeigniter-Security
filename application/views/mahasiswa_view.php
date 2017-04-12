<br>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>IPK</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($mhs as $m) { ?>
            <tr>
                <td><?php echo $m->Nim; ?></td>
                <td><?php echo $m->Nama; ?></td>
                <td><?php echo $m->Alamat; ?></td>
                <td><?php echo $m->IPK; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<br><br>
