        <div class="offcanvas-menu" id="offcanvas-menu">
            @auth
                <div class="profile-card text-center">
                    <div class="profile-card__image space-mb--10">
                        <img src="/assets/img/profile.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="profile-card__content">
                        <p class="name">Don Normane <span class="id">ID MD 4350</span></p>
                    </div>
                </div>
                @else
                <div class="profile-card text-center">
                    <div class="profile-card__content">
                         <a class="btn btn-success" href="/register">ثبت نام</a>
                    </div>
                </div>
            @endauth
            <div class="offcanvas-navigation-wrapper space-mt--40">
                <ul class="offcanvas-navigation">
                    @auth
                                            <li>
                            <a href="/profile">پروفایل من</a>
                            <span class="icon"><img src="/assets/img/icons/profile-two.svg" class="injectable" alt=""></span>
                        </li>

                    @else
    <li>
                            <a href="/login">لاگین</a>
                            <span class="icon"><img src="/assets/img/icons/profile.svg" class="injectable" alt=""></span>
                        </li>
                    @endauth
                    <li>
                        <a href="/notification">پیام‌ها</a>
                        <span class="icon"><img src="/assets/img/icons/notification.svg" class="injectable" alt=""></span>
                    </li>
                    <li>
                        <a href="/shop">همه محصولات</a>
                        <span class="icon"><img src="/assets/img/icons/product.svg" class="injectable" alt=""></span>
                    </li>
                    <li>
                        <a href="/order">خرید های من</a>
                        <span class="icon"><img src="/assets/img/icons/cart-two.svg" class="injectable" alt=""></span>
                    </li>
                    <li>
                        <a href="/cart">سبد خرید</a>
                        <span class="icon"><img src="/assets/img/icons/cart-three.svg" class="injectable" alt=""></span>
                    </li>
                    <li>
                        <a href="/wishlist">لیست علاقه مندیها</a>
                        <span class="icon"><img src="/assets/img/icons/wishlist.svg" class="injectable" alt=""></span>
                    </li>
                    <li>
                        <a href="/edit-profile">تنظمیات</a>
                        <span class="icon"><img src="/assets/img/icons/gear-two.svg" class="injectable" alt=""></span>
                    </li>
                    <li>
                        <a href="/contact">تماس با ما</a>
                        <span class="icon"><img src="/assets/img/icons/profile.svg" class="injectable" alt=""></span>
                    </li>
                </ul>
            </div>
        </div>
