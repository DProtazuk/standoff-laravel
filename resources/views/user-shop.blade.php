@extends('layouts')

@section('title')
User-Shop
@endsection

@section('content')
<div id="none1" style="width:400px" class="m-auto mt-4 d-flex justify-content-between align-items-center show_user">
    <div class="d-flex">
        <img style="width: 40px; height: 40px;" src="{{$data['img']}}">
        <div class="divInfo">
            <span class="spanIdUser">{{$data['idUsers']}}</span>
            <br>
            <span class="spanLoginUser">{{$data['login']}}</span>
        </div>
    </div>
    <a href="/shop"><p id="urlqw" class="mt-3 pUser">Сменить</p></a>
</div></div>

<div id="none2" class="col-7 array_mony">
    '<div class="array_mony_menu col-2 d-flex">
        <div class="menu-mini menu-mini-active">ВАЛЮТА</div>
        <div class="menu-mini">ПРОМОКОД</div>
    </div>

    <div class="col-12 d-flex array_mony_content">
        <div class="imgMenu ">
            <button class="butForm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                <div class="text-center span-discount">G 100</div>
                <img class="m-auto imgMenu1" src="res/van-gold.png" alt="">
                <div disabled class="butShop">119 ₽</div>
            </button>
        </div>

        <div class="imgMenu">
            <button class="butForm" data-bs-toggle="modal" data-bs-target="#staticBackdrop2">
                <div class="div-discount">15%</div>
                <div class="text-center span-discount">G 500</div>
                <img class="m-auto imgMenu2" src="res/too-gold.png" alt="">
                <div class="butShop">499 ₽</div>
            </button>
        </div>

        <div class="imgMenu imgMenu3">
            <button class="butForm" data-bs-toggle="modal" data-bs-target="#staticBackdrop3">
                <div class="div-discount">25%</div>
                <div class="text-center span-discount">G 1000</div>
                <img class="m-auto imgMenu3" src="res/three-gold.png" alt="">
                <div class="butShop">890 ₽</div>
            </button>
        </div>

        <div class="imgMenu imgMenu4">
            <button class="butForm" data-bs-toggle="modal" data-bs-target="#staticBackdrop4">
                <div class="div-discount">45%</div>
                <div class="text-center span-discount">G 3000</div>
                <img class="m-auto imgMenu4" src="res/foo-gold.png" alt="">
                <div class="butShop">1999 ₽</div>
            </button>
        </div>
    </div>
</div>
@endsection

<!-- Модальное окно -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ВВЕДИТЕ EMAIL</h5>
          <button type="button" class="btn-close btnCloseForm" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
          <div class="container">
              <form action="/kassa" method="post">
                @csrf
              <span class="email">Для того чтобы мы могли прислать Вам чек необходимо указать <br> Ваш email.</span>
              
              <input type="hidden" name="id" value="{{ $data['idUsers'] }}">
              <input type="hidden" name="price" value="100">
              <input type="hidden" name="price2" value="119">

            <div data-input="input-shop2" id="form-input" class="focus-div col-7 mt-4 d-flex input-div m-auto">
                <input data-butFalse="svgForm1" data-butTrue="svgForm2" data-button="butPosikForm" onkeyup="check()" id="input-shop2" name="email" style="background: none;" class="m-auto input-hidden" type="text">
                <svg id="svgForm1" class="m-auto svgForm1" style="fill: white; opacity:0.6; height:25px;" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path></svg>
                <svg data-input="input-shop2" data-button="butPosikForm" data-svg="svgForm1" id="svgForm2" data-form="1" class="m-auto svgForm2 svgActive" style="fill: white; opacity:0.6; height:25px;" class="m-auto MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
            </div>

              <div class="text-center span-discount-modal">G 100</div>
              <button type="submit" id="butPosikForm" disabled data-bs-dismiss="modal" class="butShop_form">Купить за 199 ₽</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Модальное окно -->
  <div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ВВЕДИТЕ EMAIL</h5>
          <button type="button" class="btn-close btnCloseForm" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
          <div class="container">
              <form action="/kassa" method="post">
                @csrf
                  <span class="email">Для того чтобы мы могли прислать Вам чек необходимо указать <br> Ваш email.</span>
                  
                  <input type="hidden" name="id" value="{{ $data['idUsers'] }}">
                  <input type="hidden" name="price" value="500">
                  <input type="hidden" name="price2" value="499">

                  <div data-input="input-shop3" id="form-input2" class="focus-div col-7 mt-4 d-flex input-div m-auto">
                      <input data-butFalse="svgForm3" data-butTrue="svgForm4" data-button="butPosikForm2" onkeyup="check()" id="input-shop3" name="email" style="background: none;" class="m-auto input-hidden" type="text">
                      <svg id="svgForm3" class="m-auto svgForm1" style="fill: white; opacity:0.6; height:25px;" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path></svg>
                      <svg data-input="input-shop3" data-button="butPosikForm2" data-svg="svgForm3" id="svgForm4" data-form="1" class="m-auto svgForm2 svgActive" style="fill: white; opacity:0.6; height:25px;" class="m-auto MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
                  </div>

                  <div class="text-center span-discount-modal">G 500</div>
                  <button type="submit" id="butPosikForm2" disabled data-bs-dismiss="modal" class="butShop_form">Купить за 499 ₽</button>
              </form>    
          </div>
        </div>
      </div>
    </div>
  </div>
  
  
  <!-- Модальное окно -->
  <div class="modal fade" id="staticBackdrop3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ВВЕДИТЕ EMAIL</h5>
          <button type="button" class="btn-close btnCloseForm" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
          <div class="container">
              <form action="/kassa" method="post">
                @csrf
              <span class="email">Для того чтобы мы могли прислать Вам чек необходимо указать <br> Ваш email.</span>
              
              <input type="hidden" name="id" value="{{ $data['idUsers'] }}">
              <input type="hidden" name="price" value="1000">
              <input type="hidden" name="price2" value="890">

              <div data-input="input-shop4" id="form-input3" class="focus-div col-7 mt-4 d-flex input-div m-auto">
                <input data-butFalse="svgForm5" data-butTrue="svgForm6" data-button="butPosikForm3" onkeyup="check()" id="input-shop4" name="email" style="background: none;" class="m-auto input-hidden" type="text">
                <svg id="svgForm5" class="m-auto svgForm1" style="fill: white; opacity:0.6; height:25px;" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path></svg>
                <svg data-input="input-shop4" data-button="butPosikForm3" data-svg="svgForm5" id="svgForm6" data-form="1" class="m-auto svgForm2 svgActive" style="fill: white; opacity:0.6; height:25px;" class="m-auto MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
              </div>

              <div class="text-center span-discount-modal">G 1000</div>
              <button type="submit" id="butPosikForm3" disabled data-bs-dismiss="modal" class="butShop_form">Купить за 890 ₽</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Модальное окно -->
  <div class="modal fade" id="staticBackdrop4" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel">ВВЕДИТЕ EMAIL</h5>
          <button type="button" class="btn-close btnCloseForm" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body">
          <div class="container">
              <form action="/kassa" method="post">
                @csrf
              <span class="email">Для того чтобы мы могли прислать Вам чек необходимо указать <br>Ваш email.</span>
              
              <input type="hidden" name="id" value="{{ $data['idUsers'] }}">
              <input type="hidden" name="price" value="3000">
              <input type="hidden" name="price2" value="1999">
              
              <div data-input="input-shop5" id="form-input4" class="focus-div col-7 mt-4 d-flex input-div m-auto">
                <input data-butFalse="svgForm7" data-butTrue="svgForm8" data-button="butPosikForm4" onkeyup="check()" id="input-shop5" name="email" style="background: none;" class="m-auto input-hidden" type="text">
                <svg id="svgForm7" class="m-auto svgForm1" style="fill: white; opacity:0.6; height:25px;" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path></svg>
                <svg data-input="input-shop5" data-button="butPosikForm4" data-svg="svgForm7" id="svgForm8" data-form="1" class="m-auto svgForm2 svgActive" style="fill: white; opacity:0.6; height:25px;" class="m-auto MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
              </div>
                
              <div class="text-center span-discount-modal">G 3000</div>
              <button type="submit" id="butPosikForm4" disabled data-bs-dismiss="modal" class="butShop_form">Купить за 1999 ₽</button>
              </form>
          </div>
        </div>
      </div>
    </div>
  </div>