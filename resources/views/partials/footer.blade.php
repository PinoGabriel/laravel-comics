<section id="footerBg">
    <div class="container d-flex justify-content-between py-4">
        <div>
            <div class="signUp text-white p-3">SIGN-UP NOW!</div>
        </div>
        <div class="d-flex align-items-center"> 
            <div class="followUs">FOLLOW US</div>
            @foreach ($footer as $item)
                <img class="ps-3" src="{{$item}}" alt="">
            @endforeach
        </div>
    </div>
</section>