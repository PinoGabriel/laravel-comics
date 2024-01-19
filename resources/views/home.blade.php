<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg+xml" href="/vite.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css"
        integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/assets/style.css">
</head>

<body>

    <div class="container py-2">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <img src="/assets/images/dc-logo.png" alt="">
            </div>
            <div>
                <a class="text-dark" href="#">CHARACTERS</a>
                <a class="px-2 text-dark" href="#">COMICS</a>
                <a class="px-2 text-dark" href="#">MOVIES</a>
                <a class="px-2 text-dark" href="#">TV</a>
                <a class="px-2 text-dark" href="#">GAMES</a>
                <a class="px-2 text-dark" href="#">COLLECTIBLES</a>
                <a class="px-2 text-dark" href="#">VIDEOS</a>
                <a class="px-2 text-dark" href="#">FANS</a>
                <a class="px-2 text-dark" href="#">NEWS</a>
                <a class="text-dark" href="#">SHOP</a>
            </div>
            <div>
                <a class="text-dark" href="">Search</a>
            </div>
        </div>
    </div>

    <section>
        <img id="jumbo" src="/assets/images/jumbotron.jpg" alt="">
    </section>

    <section id="myCards">
        <div class="container d-flex flex-wrap py-5">
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
        <div class="container d-flex py-3 justify-content-between">
            @foreach ($loghi as $logo)
                <div class="d-flex align-items-center">
                    <img class="myLogoImg" src={{ $logo['img'] }} alt="">
                    <p class="text-white ps-2 pt-2">{{ strtoupper($logo['desc']) }}</p>
                </div>
            @endforeach
        </div>
    </section>

</body>

</html>
