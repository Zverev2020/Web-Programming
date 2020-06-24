@extends('layouts.header')
@section('title')
    <title>Products and news</title>
@endsection()
@section('content')


    <div class="section_size">



             @foreach($section as $section)
                    <div class="productcard">

                        <img class="image_product" src="{{$section->img_url}}">
                        <h2>{{$section->title}}</h2>
                        {{$section->description}}

                    </div>
            @endforeach


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

                <p class="footer_testimoanials_text">The service center of MasterKomp company carries out laptop repair in service centers of the Irkutsk region in the cities of Irkutsk, Usolye-Sibirskoye, Angarsk. Our company accepts laptops for repair with any malfunctions that need to be repaired </p>

                <a href="#" class="footer_lorem">ИП Черных</a><br>
                <a href="#" class="footer_lorem">@2020</a>
            </div>
        </div>
    </div>

@endsection()
