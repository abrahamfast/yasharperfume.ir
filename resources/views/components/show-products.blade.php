        <div class="product-image-slider-wrapper space-pb--30 space-mb--30">
                @foreach($product['sliderItemNames'] as $key => $item)
                    <div class="product-image-single">
                        <img src="{{ route('asset', $item ?? 'null' ) }}" class="img-fluid" alt="">
                    </div>
                @endforeach
        </div>
        <div class="product-content-header-area border-bottom--thick space-pb--30">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="product-content-header">
                            <div class="product-content-header__main-info">
                                <h3 class="title">{{ $product['name'] }}</h3>
                                <div class="price">
                                    <span class="main-price">{{ $product['costPriceConverted'] }}</span>
                                </div>
                                <div class="rating">
                                    <ul class="rating__stars">
                                        <li><img src="/assets/img/icons/star.svg" class="injectable" alt=""></li>
                                    </ul>
                                    <span class="rating__text">6</span>
                                </div>
                            </div>
                            <div class="product-content-header__wishlist-info text-center">
                                <img src="/assets/img/icons/heart-dark.svg" class="injectable" alt="">
                                <span class="count">10</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



            <div class="product-content-description border-bottom--thick space-pt--25 space-pb--25">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="space-mb--5 text-right">ارسال رایگان</h4>
                        <p class="text-right">ارسال برای تهران و شهرهای دیگر رایگان است</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- product content safety -->
        <div class="product-content-safety border-bottom--thick space-pt--15 space-pb--15">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h4 class="text-right">
                            <img src="/assets/img/icons/security.svg" class="injectable" alt=""> درگاه بانکی ایمن
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <!-- product content description -->
        <div class="product-content-description space-pt--25 space-pb--25">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-right" style="direction: rtl">
                        {!! str_replace("\n", "<br>", $product['description']) !!}
                    </div>
                </div>
            </div>
        </div>

        <shop-product-button-component :productId='{{ $product['id'] }}'></shop-product-button-component>



