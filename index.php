<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ShawClub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <style media="screen">
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
      .heading{
        font-size: 36px;
        color: white;
        position: relative;
        top: 30px;
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
    </style>
  </head>
  <body>
    <?php require 'header.html'; ?>
    <div class="shawarma" id="shawarma">
      <div class="container">
        <div class="row">
          <?php
          if (! function_exists("array_key_last")) {
              function array_key_last($array) {
                  if (!is_array($array) || empty($array)) {
                      return NULL;
                  }

                  return array_keys($array)[count($array)-1];
              }
          }
            $groups = [];
            $groups2 = [];
            mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
            $link = mysqli_connect('localhost', 'root', '', 'shawclub');
            if ($link == false){
              print(mysqli_connect_error());
            }
            mysqli_set_charset($link, 'utf8');

            $group = mysqli_query($link, "SELECT * FROM products");
            for ($cater = []; $row = mysqli_fetch_assoc($group); $cater[] = $row);

            for ($l = 0; $l < count($cater); $l++){
              array_push($groups2, $cater[$l]['category']);
            }
            $groups2 = array_unique($groups2);

            foreach ($groups2 as $i){
              array_push($groups, $i);
            }



            foreach ($groups as $i){
              $res = mysqli_query($link, "SELECT * FROM products WHERE category = '".$i."'");
              for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row);

              echo '<p class="heading">'.$i.'</p>';
              foreach ($data as $j){
                echo '
                  <div class="col-lg-4">
                  <a href="product.php?name='.$j['name'].'&compound='.$j[$i]['compound'].'&image='.$j['image'].'"><div class="product">
                      <center>
                        <div class="orderBts">
                        <img src="img/products/'.$j['image'].'" class="imageProduct" alt="">
                        <p>'.$j['name'].'</p>
                        <button type="button" class="orderNow" name="button">Сразу купить</button>
                        <button type="button" class="addToCart" name="button">В корзину</button>
                      </div>
                    </center>
                    </div></a>
                  </div>
                ';

              }

            }


            $link->close();
          ?>
          <!-- <?php
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
                      <button type="button" class="orderNow" name="button">Сразу купить</button>
                      <button type="button" class="addToCart" name="button">В корзину</button>
                    </div>
                  </center>
                  </div></a>
                </div>
              ';
            }

            $link->close();
          ?> -->
        </div>

      </div>
    </div>
    <!-- <div class="drinks" id="drinks">
      <div class="container">
        <p class="heading">Напитки</p>
        <div class="row">
          <div class="col-lg-4">
          <a href="product.php">  <div class="product">
              <center>
                <div class="orderBts">
                <img src="img/products/4.jpg" class="imageProduct" alt="">
                <p>Кофе "Американо"</p>
                <button type="button" class="orderNow" name="button">Сразу купить</button>
                <button type="button" class="addToCart" name="button">В корзину</button>
              </div>
            </center>
            </div></a>
          </div>
          <div class="col-lg-4">
          <a href="product.php">  <div class="product">
              <center>
              <img src="img/products/5.jpg" class="imageProduct" alt="">
              <p>Чай</p>
              <div class="orderBts">
              <button type="button" class="orderNow" name="button">Сразу купить</button>
              <button type="button" class="addToCart" name="button">В корзину</button>
            </div>
              </center>
            </div></a>
          </div>

        </div>

      </div>юэжэжэбд
    </div> -->
<?php require 'footer.html'; ?>
  </body>
</html>
