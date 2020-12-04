<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Personel Listesi</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css");?>">
</head>
<body>


<div class="container">
    <br><br>
    <h3 class="text-center">Personel listesi</h3>
    <hr>

    <a href="<?php echo base_url("personel/insert_form");?>" class="btn btn-primary btn-sm">Yeni Ekle</a>
    <br><br>


    <table class="table table-bordered table-hover table-striped">
        <thead>
        <th>#id</th>
        <th>Personel Adı <a href="<?php echo base_url ("personel/order/personel_ad/ASC"); ?>">[a-Z]</a> <a href="<?php echo base_url ("personel/order/personel_ad/DESC"); ?>">[Z-a]</a> </th>
        <th>E-mail </th>
        <th>Telefon</th>
        <th>Adres</th>
        <th>İşlemler</th>
        </thead>
        <?php foreach ($list as $row) { ?>
            <tr>
                <td><?php echo $row->id; ?></td>
                <td><?php echo $row->personel_ad; ?></td>
                <td><?php echo $row->email; ?></td>
                <td><?php echo $row->telefon; ?></td>
                <td><?php echo $row->adres; ?></td>
                <td>
                    <a class="btn btn-xs btn-warning" href="<?php echo base_url("personel/update_form/$row->id"); ?>">Düzenle</a>
                    <a class="btn btn-xs btn-danger" href="<?php echo base_url("personel/delete/$row->id"); ?>">Sil</a>

                </td>
            </tr>

        <?php } ?>
    </table>
</div>


</body>
</html>
