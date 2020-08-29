@extends('layout.master')

@section('content')
    <x-header/>
    <x-navbar/>
    <x-slider/>
    <x-product-category/>
    <!--====================  End of category slider  ====================-->
    <!--====================  featured product ====================-->
    <div class="featured-product-area space-mb--25">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title -->
                    <h2 class="section-title space-mb--20">Best Sale <a href="shop.html">VIEW ALL <span><img
                                    src="assets/img/icons/arrow-right.svg" class="injectable" alt=""></span></a>
                    </h2>
                    <!-- featured products -->
                    <div class="featured-product-wrapper space-mb-m--15">
                        <div class="row row-5">
                            <div class="col-6">
                                <div class="featured-product space-mb--15">
                                    <div class="featured-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/featured/product2.png" class="img-fluid"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="featured-product__content">
                                        <div class="price">
                                            <span class="main-price">$460</span>
                                            <span class="discounted-price">$320</span>
                                        </div>
                                        <div class="icon">
                                            <button><img src="assets/img/icons/heart.svg" class="injectable"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="featured-product space-mb--15">
                                    <div class="featured-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/featured/product3.png" class="img-fluid"
                                                alt="">
                                        </a>
                                    </div>
                                    <div class="featured-product__content">
                                        <div class="price">
                                            <span class="main-price">$460</span>
                                            <span class="discounted-price">$320</span>
                                        </div>
                                        <div class="icon">
                                            <button><img src="assets/img/icons/heart.svg" class="injectable"
                                                    alt=""></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of featured product  ====================-->
    <!--====================  products area ====================-->
    <div class="products-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title -->
                    <h2 class="section-title space-mb--20">All Products</h2>
                    <!-- all products -->
                    <div class="all-products-wrapper space-mb-m--20">
                        <div class="row row-10">
                            <div class="col-6">
                                <div class="grid-product space-mb--20">
                                    <div class="grid-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/product1.png" class="img-fluid" alt="">
                                        </a>
                                        <button class="icon"><img src="assets/img/icons/heart-dark.svg"
                                                class="injectable" alt=""></button>
                                    </div>
                                    <div class="grid-product__content">
                                        <h3 class="title"><a href="shop-product.html">Leather Bag</a></h3>
                                        <span class="category">Bag</span>
                                        <div class="price">
                                            <span class="main-price">$460</span>
                                            <span class="discounted-price">$320</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="grid-product space-mb--20">
                                    <div class="grid-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/product2.png" class="img-fluid" alt="">
                                        </a>
                                        <button class="icon"><img src="assets/img/icons/heart-dark.svg"
                                                class="injectable" alt=""></button>
                                    </div>
                                    <div class="grid-product__content">
                                        <h3 class="title"><a href="shop-product.html">Lipstick</a></h3>
                                        <span class="category">Cosmetics</span>
                                        <div class="price">
                                            <span class="main-price">$40</span>
                                            <span class="discounted-price">$30</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="grid-product space-mb--20">
                                    <div class="grid-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/product3.png" class="img-fluid" alt="">
                                        </a>
                                        <button class="icon"><img src="assets/img/icons/heart-dark.svg"
                                                class="injectable" alt=""></button>
                                    </div>
                                    <div class="grid-product__content">
                                        <h3 class="title"><a href="shop-product.html">Sports Shoe</a></h3>
                                        <span class="category">Shoe</span>
                                        <div class="price">
                                            <span class="main-price">$50</span>
                                            <span class="discounted-price">$20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="grid-product space-mb--20">
                                    <div class="grid-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/product4.png" class="img-fluid" alt="">
                                        </a>
                                        <button class="icon"><img src="assets/img/icons/heart-dark.svg"
                                                class="injectable" alt=""></button>
                                    </div>
                                    <div class="grid-product__content">
                                        <h3 class="title"><a href="shop-product.html">Premium Shoe</a></h3>
                                        <span class="category">Shoe</span>
                                        <div class="price">
                                            <span class="main-price">$150</span>
                                            <span class="discounted-price">$120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="grid-product space-mb--20">
                                    <div class="grid-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/product1.png" class="img-fluid" alt="">
                                        </a>
                                        <button class="icon"><img src="assets/img/icons/heart-dark.svg"
                                                class="injectable" alt=""></button>
                                    </div>
                                    <div class="grid-product__content">
                                        <h3 class="title"><a href="shop-product.html">Leather Bag</a></h3>
                                        <span class="category">Bag</span>
                                        <div class="price">
                                            <span class="main-price">$460</span>
                                            <span class="discounted-price">$320</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="grid-product space-mb--20">
                                    <div class="grid-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/product2.png" class="img-fluid" alt="">
                                        </a>
                                        <button class="icon"><img src="assets/img/icons/heart-dark.svg"
                                                class="injectable" alt=""></button>
                                    </div>
                                    <div class="grid-product__content">
                                        <h3 class="title"><a href="shop-product.html">Lipstick</a></h3>
                                        <span class="category">Cosmetics</span>
                                        <div class="price">
                                            <span class="main-price">$40</span>
                                            <span class="discounted-price">$30</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="grid-product space-mb--20">
                                    <div class="grid-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/product3.png" class="img-fluid" alt="">
                                        </a>
                                        <button class="icon"><img src="assets/img/icons/heart-dark.svg"
                                                class="injectable" alt=""></button>
                                    </div>
                                    <div class="grid-product__content">
                                        <h3 class="title"><a href="shop-product.html">Sports Shoe</a></h3>
                                        <span class="category">Shoe</span>
                                        <div class="price">
                                            <span class="main-price">$50</span>
                                            <span class="discounted-price">$20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="grid-product space-mb--20">
                                    <div class="grid-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/product4.png" class="img-fluid" alt="">
                                        </a>
                                        <button class="icon"><img src="assets/img/icons/heart-dark.svg"
                                                class="injectable" alt=""></button>
                                    </div>
                                    <div class="grid-product__content">
                                        <h3 class="title"><a href="shop-product.html">Premium Shoe</a></h3>
                                        <span class="category">Shoe</span>
                                        <div class="price">
                                            <span class="main-price">$150</span>
                                            <span class="discounted-price">$120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="grid-product space-mb--20">
                                    <div class="grid-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/product1.png" class="img-fluid" alt="">
                                        </a>
                                        <button class="icon"><img src="assets/img/icons/heart-dark.svg"
                                                class="injectable" alt=""></button>
                                    </div>
                                    <div class="grid-product__content">
                                        <h3 class="title"><a href="shop-product.html">Leather Bag</a></h3>
                                        <span class="category">Bag</span>
                                        <div class="price">
                                            <span class="main-price">$460</span>
                                            <span class="discounted-price">$320</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="grid-product space-mb--20">
                                    <div class="grid-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/product2.png" class="img-fluid" alt="">
                                        </a>
                                        <button class="icon"><img src="assets/img/icons/heart-dark.svg"
                                                class="injectable" alt=""></button>
                                    </div>
                                    <div class="grid-product__content">
                                        <h3 class="title"><a href="shop-product.html">Lipstick</a></h3>
                                        <span class="category">Cosmetics</span>
                                        <div class="price">
                                            <span class="main-price">$40</span>
                                            <span class="discounted-price">$30</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="grid-product space-mb--20">
                                    <div class="grid-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/product3.png" class="img-fluid" alt="">
                                        </a>
                                        <button class="icon"><img src="assets/img/icons/heart-dark.svg"
                                                class="injectable" alt=""></button>
                                    </div>
                                    <div class="grid-product__content">
                                        <h3 class="title"><a href="shop-product.html">Sports Shoe</a></h3>
                                        <span class="category">Shoe</span>
                                        <div class="price">
                                            <span class="main-price">$50</span>
                                            <span class="discounted-price">$20</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="grid-product space-mb--20">
                                    <div class="grid-product__image">
                                        <a href="shop-product.html">
                                            <img src="assets/img/products/product4.png" class="img-fluid" alt="">
                                        </a>
                                        <button class="icon"><img src="assets/img/icons/heart-dark.svg"
                                                class="injectable" alt=""></button>
                                    </div>
                                    <div class="grid-product__content">
                                        <h3 class="title"><a href="shop-product.html">Premium Shoe</a></h3>
                                        <span class="category">Shoe</span>
                                        <div class="price">
                                            <span class="main-price">$150</span>
                                            <span class="discounted-price">$120</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====================  End of products area  ====================-->
    <!--====================  footer area ====================-->


@endsection
