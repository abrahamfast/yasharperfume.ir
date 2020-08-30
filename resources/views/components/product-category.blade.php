    <div class="category-slider-area bg-color--grey space-pb--25 space-mb--25">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- section title -->
                    <h2 class="section-title space-mt--10 space-mb--20 text-right">دسته بندی</h2>
                    <!-- category slider -->
                    <div class="category-slider-wrapper">
                        @forelse($productCategory['list'] as $item)
                        <div class="category-item">
                            <div class="category-item__image">
                                <a href="/category/{{$item['name']}}">
                                    <img src="/assets/img/icons/category/perfume-bottle-32.png" class="injectable" alt="">
                                </a>
                            </div>
                            <div class="category-item__title">
                                <a href="/category/{$item['name']}">{{ $item['name'] }}</a>
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
