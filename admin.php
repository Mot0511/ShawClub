<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ShawClub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <style media="screen">
    .loginBt{
      width: 201px;
      background-color: #CE0000;
      transition: background-color 0.3s;
      border: 0px;
      border-radius: 20px;
      color: white;
      font-size: 24px;
    }
    .loginBt:hover{
      background-color: #870000;
    }
    .shawarma{
      margin-top: 95px;
    }
    .product{
      background: #3F1A00;
      border-radius: 20px;
      width: 297px;
      padding-bottom: 20px;
      margin-top: 25px;
    }

    .orderNow{
      width: 134px;
      height: 55px;
      border: 5px solid #CE0000;
      border-radius: 20px;
      background: none;
      color: white;
      font-size: 18px;
      transition: background-color 0.3s;
    }
    .orderNow:hover{
      background-color: #CE0000;
    }
    .addToCart{
      width: 134px;
      height: 55px;
      background: #CE0000;
      border-radius: 20px;
      border: 0px;
      margin-left: 10px;
      margin-top: 10px;
      color: white;
      font-size: 20px;
      transition: background-color 0.2s;
    }
    .addToCart:hover{
      background-color: #870000;
    }
    .imageProduct{
      margin-top: 20px;
      width: 80%;
      border-radius: 20px;
    }
    .product p{
      font-size: 20px;
    }
    .heading{
      font-size: 36px;
      color: white;
      margin-top: 50px;
    }
    .remove{
      width: 95%;
      height: 55px;
      border: 5px solid #CE0000;
      border-radius: 20px;
      background: none;
      color: white;
      font-size: 18px;
      transition: background-color 0.3s;
      margin-top: 20px;
    }
    .remove:hover{
      background-color: #CE0000;
    }
    .edit{
      width: 95%;
      height: 55px;
      background: #CE0000;
      border-radius: 20px;
      border: 0px;
      margin-left: 10px;
      margin-top: 10px;
      color: white;
      font-size: 20px;
      transition: background-color 0.2s;
      margin-top: 20px;
      margin-left: 0px;
    }
    .edit:hover{
      background-color: #870000;
    }
    .editBlock{
      width: 462px;
      height: 550px;
      background: #CE0000;
      border-radius: 20px;
      position: fixed;
      left: 35%;
      display: none;
    }
    .editBlock p{
      font-size: 36px;
    }
    .editLabel{
      color: white;
      font-size: 24px;
    }
    .input{
      width: 95%;
      background-color: #3F1A00;
      height: 55px;
      border: 0px;
      border-radius: 10px;
      font-size: 24px;
      color: white;
    }
    .button{
      width: 95%;
      background-color: #562400;
      height: 55px;
      border: 0px;
      border-radius: 10px;
      font-size: 24px;
      color: white;
      margin-top: 20px;
      transition: background-color 0.2s;
    }
    .button:hover{
      background-color: #3F1A00;
    }

    </style>
  </head>
  <body>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Добавить товар</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" name="button"></button>
          </div>
          <div class="modal-body">
            <form class="" action="addProduct.php" method="post" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="inputEmail" class="col-sm-2 col-form-label">Название</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" required id="inputName" name="name" value="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPass" class="col-sm-2 col-form-label">Состав</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" required id="inputCompound" name="compound" value="">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPass" class="col-sm-2 col-form-label">Картинка</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" required id="inputImage" name="image" value="">
                </div>
              </div>
              <input type="submit" class="btn btn-primary " name="button" value="Добавить товар">
            </form>

          </div>
        </div>
      </div>
    </div>

    <?php require 'header.html'; ?>
    <!-- <center><div class="editBlock" id="editBlock">
      <p>Изменить товар</p>
      <form class="editForm" action="editProduct" method="post">
        <label for="name" class="editLabel">Название</label> <br>
         <input id="name" type="text" class="input" name="editName" id="editName" value="name"><br>
        <label for="name" class="editLabel">Состав</label> <br>
         <input id="name" type="text" class="input" name="editCompound" id="editCompound"  value="name"><br>
      <label for="name" class="editLabel">Картинка</label> <br>
       <input id="name" type="text" class="input" name="editImage"  value="name"><br>
       <input type="submit" name="" class="button" value="Изменить продукт" id="editImage">
      <input type="button" onclick="closeEditBlock" class="button" value="Закрыть">
      </form>
    </div></center> -->
  <div class="shawarma" id="shawarma">
    <div class="container">
      <button type="button" class="loginBt" name="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Добавить товар</button>
      <p class="heading">Шаурма</p>
      <div class="row">

<?php
    $link = mysqli_connect('localhost', 'root', '', 'shawclub');
    if ($link == false){
      print(mysqli_connect_error());
    }
    mysqli_set_charset($link, 'utf8');
    $res = mysqli_query($link, "SELECT * FROM products");
    for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);
    for ($i = 0; $i < count($data); $i++){
      echo '
        <div class="col-lg-4">
        <a href="product.php?name='.$data[$i]['name'].'&compound='.$data[$i]['compound'].'&image='.$data[$i]['image'].'"><div class="product">
            <center>
              <div class="orderBts">
              <img src="img/products/'.$data[$i]['image'].'" class="imageProduct" alt="">
              <p>'.$data[$i]['name'].'</p>
              <a href="removeProduct.php?id='.$data[$i]['id'].'"><button type="button" class="remove" name="button">Удалить товар</button></a>
            </div>
          </center>
          </div></a>
        </div>
      ';
    }

    $link->close();
  ?>
  <!-- <a href="javascript:edit(\''.$data[$i]['name'].'\', \''.$data[$i]['compound'].'\', \''.$data[$i]['image'].'\')"><button type="button" class="edit" name="button">Изменить товар</button></a> -->

  <!-- <script type="text/javascript">
    var editBlock = document.getElementById('editBlock');
    var editName = document.getElementById('editName');
    var editCompound = document.getElementById('editCompound');
    var editImage = document.getElementById('editImage');
    function edit(name, compound, image) {
      editBlock.style = 'display: block;';
      console.log(editName);
      // editName = name;
      // editCompound = compound;
      // editImage = image;
    }
    function closeEditBlock() {
      editBlock.style = 'display: none;';
    }
  </script> -->
</div>

</div>
</div>
</body>
</html>
