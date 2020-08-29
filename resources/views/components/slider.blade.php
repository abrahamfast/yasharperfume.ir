        <div class="hero-slider bg-color--grey space-y--10">
            <div class="container">
                <div class="row row-10">
                    <div class="col-12">
                        <div class="hero-slider-wrapper">
                            @forelse($sliderItems['list'] as $item)
                                <div class="hero-slider-item d-flex bg-img" data-bg="{{ route('asset', $item['imageSliderName'] ?? 'null' ) }}">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="hero-slider-content">
                                                    @isset($item['sliderCaption'])
                                                        <h1 class="hero-slider-content__title space-mb--10">
                                                            @foreach($item['sliderCaption'] as $sliderCaption)
                                                                {{$sliderCaption}} <br>
                                                            @endforeach
                                                        </h1>
                                                    @endisset
                                                    <p class="hero-slider-content__text">GET 30% OFF</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div
                            @empty
                                loading...
                            @endforelse
                    </div>
                </div>
            </div>
        </div>
