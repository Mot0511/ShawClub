<!DOCTYPE html>
<html lang="en" dir="ltr">
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
        height: 349px;
        margin-top: 25px;
      }
      .heading{
        font-size: 36px;
        color: white;
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

            </div>
          </div>
          <div class="col-lg-4">
            <div class="product">

            </div>
          </div>
          <div class="col-lg-4">
            <div class="product">

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

            </div>
          </div>
          <div class="col-lg-4">
            <div class="product">

            </div>
          </div>
          <div class="col-lg-4">
            <div class="product">

            </div>
          </div>
        </div>

      </div>
    </div>
<?php require 'footer.html'; ?>
  </body>
</html>
