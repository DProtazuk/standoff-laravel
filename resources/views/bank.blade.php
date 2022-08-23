<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Оплата заказа &#8212; ЮKassa</title>
    <link rel="icon" type="image/x-icon" href="/res/favicon-kass.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/kassa.css">
</head>

<body>
    <a href="https://yookassa.ru/"><img class="header-kass" src="/res/header-kass.png" alt=""></a> 
    <br>
    <div class="container d-flex col-12  justify-content-center">
        <img src="/res/selection.png" alt="">
    </div>

    <div class="container d-flex col-12 flex-column  justify-content-center">
        <div id="showInput" class="d-flex justify-content-center col-12 mt-3" style="cursor:pointer;">
                <p class="span-info">Детали платежа</p>&thinsp;
                <img class="svgImg" src="/res/down.png" alt="">
        </div>
    </div>
        
    <span id="hiddenInput" class="text-center span-info">Покупка "G {{ $data['price'] }}" для игрока {{ $data['id'] }}</span>
   
    <div style="width: 450px;" class="m-auto mt-3">
        <div class="d-flex justify-content-between colum-bank align-items-center">
            <img src="/res/selection(1).png" alt="">
            <h6 class="h6-kassa">{{ $data['price2'] }} ₽</h6>
        </div>
    </div>

    <div style="width: 450px;" class="m-auto mt-4">
        <div class="d-flex justify-content-between colum-bank align-items-center">
            <img src="/res/selection(2).png" alt="">
            <h6 class="h6-kassa2">https://store.standoff2.com/ru</h6>
        </div>
    </div>

    <div style="width: 450px;" class="m-auto mt-4">
        <div class="d-flex justify-content-between colum-bank align-items-center">
            <img src="/res/selection(3).png" alt="">
            <h6 class="h6-kassa3">{{ $data['type'] }}</h6>
        </div>
    </div>

    <div style="width: 450px;" class="m-auto mt-4">
        <div class="d-flex justify-content-between colum-bank align-items-center">
            <img src="/res/selection(4).png" alt="">
            <h6 style="margin-left:15px" class="h6-kassa3">{{ $data['key'] }}</h6>
            <img style="cursor:pointer;" src="res/selection(6).png">
        </div>
    </div>

    <div class="d-flex col-12 ">
        <a class="m-auto mt-5" href="/good"><img style="cursor:pointer"  src="/res/selection(5).png"></a> 
    </div>
        <br><br><br><br><br>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script>
    $('body').on('click',"#showInput",  function() {
        var num2 = document.getElementById("hiddenInput");

        if (num2.style.display == 'block') {
            num2.style.display = 'none';
            $('.svgImg').attr('src', '../res/down.png');
        } 
        else {
            num2.style.display = 'block';
            $('.svgImg').attr('src', '../res/up.png');
            
        }
    });
</script>
</html>