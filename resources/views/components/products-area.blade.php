
    <div class="products-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title -->
                    <h2 class="section-title space-mb--20 text-right">جدیترین محصولات <a class="btn btn-dark btn-sm" href="/shop">همه محصولات</a></h2>
                    <!-- all products -->
                    <div class="all-products-wrapper space-mb-m--20">
                        <div class="row row-10">
                            @forelse($products['list'] as $product)
	                        <div class="col-6">
	                            <div class="grid-product space-mb--20">
	                                <div class="grid-product__image">
	                                    <a href="/shop/{{ $product['id'].'/'.$product['url'] }}">
	                                        <img src="{{ route('asset', $product['coverName']?? 'null' ) }}" class="img-fluid" alt="">
	                                    </a>
	                                    <button class="icon">
	                                    	<img src="/assets/img/icons/heart-dark.svg" class="injectable"alt="">
	                                    </button>
	                                </div>
	                                <div class="grid-product__content">
	                                    <h3 class="title"><a href="/shop/{{ $product['id'].'/'.$product['url'] }}">{{ $product['name'] }}</a></h3>
	                                    <span class="category">{{ $product['categoryName'] }}</span>
	                                    <div class="price">
	                                        <span class="main-price">{{ $product['costPriceConverted'] }}</span>
	                                        <span class="discounted-price">{{ $product['costPriceConverted'] }}</span>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
                        @empty
                        	loading ...
                        @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
