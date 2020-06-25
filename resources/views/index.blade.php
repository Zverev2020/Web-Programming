@extends('layouts.header')

@section('title')
    <title>Main</title>
@endsection()

@section('content')
    <div class="section">
        <div class="Responsive">
            <img class="icon" src="tower-pc.png">
            <p class="icon_name">Computer</p>
        </div>

        <div class="Commerce">
            <img class="icon" src="laptop.png">
            <p class="icon_name" id="commerce">Laptop</p>
        </div>

        <div class="Blog">
            <img class="icon" src="print.png">
            <p class="icon_name">Printer</p>
        </div>

        <div class="Based">
            <img class="icon2" src="telephone.png">
            <p class="icon_name">Smartphone</p>
        </div>
    </div>

    <div class="border"></div>

    <div class="section2_width">
        <div class="section2">
            <img src="image_notebook_03.jpg">

            <div class="main_text_section2" >
                <p id="text_section2">Сервисный центр МастерКомп</p>

                <p>Сервисный центр компании МастерКомп осуществляет ремонт ноутбуков в сервисных центрах Иркутской области в городах Иркутск, Усолье-Сибирское, Ангарск. Наша компания принимает ноутбуки в ремонт с любыми неисправностями, которые необходимо отремонтировать, такими как: полная замена клавиатуры ноутбука
                    Ремонт клавиатуры и замена тачпада
                    Очистка клавиатуры и её восстановление/замена
                    Замена матрицы для моделей разных диагоналей матовых и глянцевых
                    Ремонт системы питания
                    Ремонт и замена деталей корпуса
                    Чистка и ремонт охлаждающего вентилятора
                    Ремонт экрана и подсветки
                    Очистка от пыли всех внутренних механизмов
                    Замена термопасты</p>
            </div>
        </div>
    </div>

    <div class="section3">
        <div class="Responsive">
            <img class="icon" src="at.png">
            <p class="icon_name">Complex</p>
        </div>

        <div class="Commerce">
            <img class="icon3" src="500_F_190430244_5G4bnqU288lNv4YyjagcXLgg8uMB4zo0.png">
            <p class="icon_name" id="commerce">Laptop</p>
        </div>

        <div class="Blog">
            <img class="icon" src="graphic.png">
            <p class="icon_name">Printer</p>
        </div>

        <div class="Based">
            <img class="icon4" src="favorite.png">
            <p class="icon_name">Smartphone</p>
        </div>
    </div>

    <div class="footer">
        <div class="footer_size">
            <div class="About_Us">
                <p class="footer_about">About Us</p>
                <a class="footer_about_mode" href="#">About Us<br></a>
                <a class="footer_about_mode" href="#">Why Us<br></a>
                <a class="footer_about_mode" href="#">Customer Stories<br></a>
                <a class="footer_about_mode" href="#">Press Resources<br></a>
                <a class="footer_about_mode" href="#">Press Releases<br></a>
                <a class="footer_about_mode" href="#">Contact us</a>
            </div>

            <div class="About_Us2">
                <p class="footer_about">About Us</p>
                <a class="footer_about_mode" href="#">About Us<br></a>
                <a class="footer_about_mode" href="#">Why Us<br></a>
                <a class="footer_about_mode" href="#">Customer Stories<br></a>
                <a class="footer_about_mode" href="#">Press Resources<br></a>
                <a class="footer_about_mode" href="#">Press Releases<br></a>
                <a class="footer_about_mode" href="#">Contact us</a>
            </div>

            <div class="testimoanials">
                <p class="footer_testimoanials">Service center of MasterKomp</p>

                <p class="footer_testimoanials_text">The service center of MasterKomp company carries out laptop repair in service centers of the Irkutsk region in the cities of Irkutsk, Usolye-Sibirskoye, Angarsk. Our company accepts laptops for repair with any malfunctions that need to be repaired</p>

                <a href="#" class="footer_lorem">ИП Черных.</a><br>
                <a href="#" class="footer_lorem">@2020</a>
            </div>
        </div>
    </div>
@endsection()
