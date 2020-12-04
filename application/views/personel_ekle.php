<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Personel Ekle</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css");?>">
</head>
<body>

<div class="container">
   <div class="row">
       <div class="col-md-6">
           <br><br>
           <h3>Personel Ekle</h3>
           <form action="<?php echo base_url("personel/insert"); ?>" method="post">
               <div class="form-group">
                   <label for="">Personelin Adı</label>
                   <input type="text" class="form-control" name="personel_ad" >
               </div>

               <div class="form-group">
                   <label for="">E-mail</label>
                   <input type="text" class="form-control" name="email" >
               </div>

               <div class="form-group">
                   <label for="">Telefon</label>
                   <input type="text" class="form-control" name="telefon" >
               </div>

               <div class="form-group">
                   <label for="">Adres</label>
                   <input type="text" class="form-control" name="adres" >
               </div>
               <button type="submit" class="btn btn-sm btn-success">Kaydet</button>
               <a class="btn btn-sm btn-danger" href="<?php echo base_url(); ?>">iptal</a>



           </form>
       </div>

   </div>
</div>
</body>
</html>