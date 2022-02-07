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
        <p class="heading">Шаурма</p>
        <div class="row">
          <div class="col-lg-4">
            <div class="product">
              <center>
                <div class="orderBts">
                <img src="img/products/_1.jpg" class="imageProduct" alt="">
                <p>Классическая</p>
                <button type="button" class="orderNow" name="button">Сразу купить</button>
                <button type="button" class="addToCart" name="button">В корзину</button>
              </div>
            </center>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product">
              <center>
              <img src="img/products/_2.jpg" class="imageProduct" alt="">
              <p>Сырная</p>
              <div class="orderBts">
              <button type="button" class="orderNow" name="button">Сразу купить</button>
              <button type="button" class="addToCart" name="button">В корзину</button>
            </div>
              </center>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product">
              <center>
              <img src="img/products/_3.jpg" class="imageProduct" alt="">
              <p>Домашняя</p>
              <div class="orderBts">
              <button type="button" class="orderNow" name="button">Сразу купить</button>
              <button type="button" class="addToCart" name="button">В корзину</button>
            </div>
              </center>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="drinks" id="drinks">
      <div class="container">
        <p class="heading">Напитки</p>
        <div class="row">
          <div class="col-lg-4">
            <div class="product">
              <center>
                <div class="orderBts">
                <img src="img/products/4.jpg" class="imageProduct" alt="">
                <p>Кофе "Американо"</p>
                <button type="button" class="orderNow" name="button">Сразу купить</button>
                <button type="button" class="addToCart" name="button">В корзину</button>
              </div>
            </center>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product">
              <center>
              <img src="img/products/5.jpg" class="imageProduct" alt="">
              <p>Чай</p>
              <div class="orderBts">
              <button type="button" class="orderNow" name="button">Сразу купить</button>
              <button type="button" class="addToCart" name="button">В корзину</button>
            </div>
              </center>
            </div>
          </div>

        </div>

      </div>
    </div>
<?php require 'footer.html'; ?>
  </body>
</html>
