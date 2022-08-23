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
    <div class="col-4 mx-auto mt-4">
        <br>
        <span class="span-url"> https://store.standoff2.com</span>
        <br>
        <span class="span-price">{{ $data['price2'] }}<span class="rr">₽</span></span>
        <br>
        <div id="showInput" class="d-flex col-5 mt-3" style="cursor:pointer;">
            <p class="span-info">Детали платежа</p>&thinsp;
            <img class="svgImg" src="/res/down.png" alt="">
        </div>
        <p id="hiddenInput" class="span-info">Покупка "G {{ $data['price'] }}" для игрока {{ $data['id'] }}</p>
        
        <div id="spinner-wave" class="spinner-wave">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        
        <form action="/bank" method="post">
            @csrf
            <input type="hidden" name="type" value="Банковская карта">
            <input type="hidden" name="price" value="{{ $data['price'] }}">
            <input type="hidden" name="id" value="{{ $data['id'] }}">
            <input type="hidden" name="price2" value="{{ $data['price2'] }}">

            <button class="display-none bank" type="submit"></button>
            <img id="bank" class="img-plat" src="/res/img1.png">
        </form>

        <form action="/bank" method="post">
            @csrf
            <input type="hidden" name="type" value="ЮMoney">
            <input type="hidden" name="price" value="{{ $data['price'] }}">
            <input type="hidden" name="id" value="{{ $data['id'] }}">
            <input type="hidden" name="price2" value="{{ $data['price2'] }}">

            <button class="display-none money" type="submit"></button>
            <img id="money" class="img-plat" src="/res/img2.png">
        </form>
        
        
        <img class="img-plat" src="/res/img3.png">
        <img class="mt-4" style="cursor:pointer;" src="/res/img4.png">
        <br><br>
        <a href="shop.php"><img src="/res/img5.png" style="cursor:pointer;"></a>
        <br><br><br>
    </div>
    <img class="mt-4 w-100" src="/res/footer.png" style="cursor:pointer;">
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

  
    
    $('body').on('click',"#money",  function() { 
        let type = ".money";
        rotate(type);
    });

    $('body').on('click',"#bank",  function() { 
        let type = ".bank";
        rotate(type);
    });


    function rotate(type) {
        var num2 = document.getElementById("spinner-wave");
        num2.style.display = 'block';
        
            let time = 3000;
            
            setTimeout(function(){
                $(type).trigger('click');
            },time);
    }
    
</script>



<style>
  .spinner-wave {
    margin: 0 auto;
    width: 100px;
    height: 50px;
    text-align: center;
}

.spinner-wave > div {
    background-color: #333;
    height: 100%;
    width: 6px;
    display: inline-block;

    -webkit-animation: wave 1.2s infinite ease-in-out;
    animation: wave 1.2s infinite ease-in-out;
}

.spinner-wave div:nth-child(2) {
    -webkit-animation-delay: -1.1s;
    animation-delay: -1.1s;
}

.spinner-wave div:nth-child(3) {
    -webkit-animation-delay: -1.0s;
    animation-delay: -1.0s;
}

.spinner-wave div:nth-child(4) {
    -webkit-animation-delay: -0.9s;
    animation-delay: -0.9s;
}

.spinner-wave div:nth-child(5) {
    -webkit-animation-delay: -0.8s;
    animation-delay: -0.8s;
}

@-webkit-keyframes wave {
    0%, 40%, 100% { -webkit-transform: scaleY(0.4) }
    20% { -webkit-transform: scaleY(1.0) }
}

@keyframes wave {
    0%, 40%, 100% { transform: scaleY(0.4); }
    20% { transform: scaleY(1.0); }
}

#spinner-wave {
    display:none;
}
</style>
</html>