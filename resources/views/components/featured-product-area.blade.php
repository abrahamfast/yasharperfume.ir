    <div class="featured-product-area space-mb--25">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title -->
                    <h2 class="section-title space-mb--20 text-right">پرفروش ترین عطرها<a class="btn btn-dark btn-sm" href="#">نمایش لیست</a>
                    </h2>
                    <!-- featured products -->
                    <div class="featured-product-wrapper space-mb-m--15">
                        <div class="row row-5">
                            @foreach($featuredProductAreaItems['list'] as $item)
                                <div class="col-6">
                                    <div class="featured-product space-mb--15">
                                        <div class="featured-product__image">
                                            <a href="#">
                                                <img src="{{ route('asset', $item['coverName'] ?? 'null' ) }}" class="img-fluid"
                                                    alt="">
                                            </a>
                                        </div>
                                        <div class="featured-product__content">
                                            <div class="price">
                                                <span class="main-price">{{ $item['costPriceConverted'] }}</span>
                                                <span class="discounted-price">{{ $item['listPriceConverted'] }}</span>
                                            </div>
                                            <div class="icon">
                                                <button><img src="/assets/img/icons/heart.svg" class="injectable"
                                                        alt=""></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
