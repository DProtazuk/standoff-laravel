@extends('layouts')

@section('title')
Магазин | Standoff 2
@endsection

@section('content')
<div id="window-poisk" class="col-6 window-poisk p-5  text-center text-white">
    <span class="spanIndex1 EurostileMed">УКАЖИТЕ СВОЙ АККАУНТ</span>
    <br>
    <span class="spanIndex2">Найдите его по игровому ID</span>
    <form method="post" action="/search">
        @csrf
        <div data-input="input-shop" id="form-input" class="focus-div col-7 mt-4 d-flex input-div m-auto">
            <input data-butFalse="svg1" data-butTrue="svg2" data-button="butPosik" onkeyup="check()" id="input-shop" name="id" placeholder="ID" style="background: none;" class="m-auto input-hidden" type="text">
            <svg id="svg1" data-form="1" style="fill: white; opacity:0.6; height:25px;" class="m-auto MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
            <svg data-input="input-shop" data-button="butPosik" data-svg="svg1" id="svg2" data-form="1" style="fill: white; opacity:0.6; height:25px;" class="m-auto MuiSvgIcon-root svgActive" focusable="false" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path></svg>
        </div>

        @if(isset($data))
            @if($data == "1")
                <h6 class="mt-3 text-center text-eror">Такого пользователя нет</h6>
            @endif 
        @endif
        <button type="submit" class="mt-4" id="butPosik" disabled>ИСКАТЬ</button>
    </form>
    @if(isset($data))
        @if($data != "1")
        <form method="post" action="/user-shop">
            @csrf
            <input type="hidden" name="id" value="{{ $data['idUsers'] }}">
            <button type="submit" class="buttonShop display"></button>
            <div class="col-5 m-auto mt-4 d-flex justify-content-between align-items-center show_user">
                <div class="d-flex">
                    <img style="width: 40px; height: 40px;" src="{{ $data['img'] }}">
                    <input class="hiddenInput" type="hidden" value="{{$data['idUsers']}}">
                    <div class="divInfo">
                        <span class="spanIdUser">ID {{$data['idUsers']}}</span>
                        <br>
                        <span class="spanLoginUser">{{$data['login']}}</span>
                    </div>
                </div>
                <svg class="ImgUser" width="8" height="15" viewBox="0 0 8 15" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.93137 0.36135L7.66863 6.62763C8.11046 7.10943 8.11046 7.89058 7.66863 8.37238L1.93137 14.6387C1.48954 15.1205 0.773199 15.1205 0.331371 14.6387C-0.110457 14.1569 -0.110457 13.3757 0.331371 12.8939L5.26863 7.5L0.331371 2.1061C-0.110457 1.6243 -0.110457 0.843149 0.331371 0.36135C0.773199 -0.12045 1.48954 -0.12045 1.93137 0.36135Z" fill="#8E8F96"></path></svg>
            </div>
        
            </div>
        </form>
        @endif
    @endif
</div>
@endsection