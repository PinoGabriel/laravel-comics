@extends('layouts.app')

@section('content')

    <section id="myCards">
        <div class="container position-relative d-flex flex-wrap py-5">
            <div class="seriesAbsolute position-absolute text-white">CURRENT SERIES</div>
            @foreach ($dati as $dato)
                <div class="myCard">
                    <img class="myImgThumb" src={{ $dato['thumb'] }} alt="">
                    <p class="text-white pt-2">{{ strtoupper($dato['title']) }}</p>
                </div>
            @endforeach
        </div>
        <div class="container d-flex justify-content-center">
            <button class="btn btn-primary m-4"> Load More</button>
        </div>
    </section>

    <section id="myLoghi">
        <div class="container d-flex p-5 justify-content-between align-items-center">
            @foreach ($loghi as $logo)
                <div class="d-flex align-items-center">
                    <img class="myLogoImg" src={{ $logo['img'] }} alt="">
                    <p class="text-white ps-2 pt-2">{{ strtoupper($logo['desc']) }}</p>
                </div>
            @endforeach
        </div>
    </section>

@endsection

