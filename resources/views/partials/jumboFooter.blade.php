<section id="jumboFooter">
    <div class="container myHeight">
        <div class="logoFooter">
            <div class="d-flex flex-column flex-wrap myW40 myHeightLogo py-3">
                @foreach ($index as $indexFooter)
                <div class="d-flex flex-column">
                    <h4 class="pb-3">{{ $indexFooter['title'] }}</h4>
                    @foreach ($indexFooter['i'] as $item)
                        <a> {{$item}} </a>
                    @endforeach
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>