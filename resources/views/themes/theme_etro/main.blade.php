<main id="main">

    <section class="product-tab-area section-ptb">
        <div class="container">
            <div class="collection-category">
                <div class="section-capture">
                    <div class="section-title">
                        <h2 data-animate="animate__fadeIn">Productos</h2>
                    </div>
                </div>
                <div class="collection-wrap">
                    <div class="collection-slider swiper" id="new-product">
                        <div class="swiper-wrapper">
                            @foreach ($negocio->servicios as $item)
                                <div class="swiper-slide" data-animate="animate__fadeIn">
                                    <div class="single-product-wrap">
                                        <div class="product-image">
                                            <a href="product-template.html" class="pro-img">
                                                <img src="{{ asset($item->imagen) }}" class="img-fluid img1 resp-img1"
                                                    alt="{{ $item->nombre }}">
                                            </a>
                                            <div class="product-label pro-new-sale">
                                                <span class="product-label-title">30%</span>
                                            </div>
                                            <div class="product-action">
                                                <a href="wishlist-product.html" class="add-to-wishlist">
                                                    <span class="product-icon"><i class="feather-heart"></i></span>
                                                    <span class="tooltip-text">Deseos</span>
                                                </a>
                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                    <span class="product-icon"><i class="feather-eye"></i></span>
                                                    <span class="tooltip-text">quickview</span>
                                                </a>
                                            </div>
                                            <div class="product-cart">
                                                <button type="button" class="add-to-cart">
                                                    <span class="product-icon">
                                                        <span class="product-bag-icon"><i
                                                                class="feather-shopping-bag"></i></span>
                                                        <span class="product-loader-icon"><i
                                                                class="feather-loader"></i></span>
                                                        <span class="product-check-icon"><i
                                                                class="feather-check"></i></span>
                                                    </span>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="product-content">
                                            <div class="product-title">
                                                <h6><a href="product-template.html">{{ $item->nombre }}</a></h6>
                                            </div>
                                            <div class="price-box">
                                                <span class="new-price">${{ $item->precio }}</span>
                                                <span class="old-price">${{ $item->precio }}</span>
                                            </div>
                                            <div class="product-ratting">
                                                <span class="review-ratting">
                                                    <span class="review-star">
                                                        <i class="feather-star"></i>
                                                        <i class="feather-star"></i>
                                                        <i class="feather-star"></i>
                                                        <i class="feather-star"></i>
                                                        <i class="feather-star"></i>
                                                    </span>
                                                    <span class="review-caption">No reviews</span>
                                                </span>
                                            </div>
                                            <div class="product-description">
                                                <p>{{ $item->descripcion }}</p>
                                            </div>
                                            <div class="product-action">
                                                <a href="javascript:void(0)" class="add-to-cart">
                                                    <span class="product-icon">
                                                        <span class="product-bag-icon"><i
                                                                class="feather-shopping-bag"></i></span>
                                                        <span class="product-loader-icon"><i
                                                                class="feather-loader"></i></span>
                                                        <span class="product-check-icon"><i
                                                                class="feather-check"></i></span>
                                                    </span>
                                                    <span class="tooltip-text">add to cart</span>
                                                </a>
                                                <a href="#quickview-modal" data-bs-toggle="modal" class="quick-view">
                                                    <span class="product-icon"><i class="feather-eye"></i></span>
                                                    <span class="tooltip-text">quickview</span>
                                                </a>
                                                <a href="wishlist-product.html" class="add-to-wishlist">
                                                    <span class="product-icon"><i class="feather-heart"></i></span>
                                                    <span class="tooltip-text">wishlist</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        {{-- <div class="collection-button" data-animate="animate__fadeIn">
                            <a href="collection.html" class="btn-style3">view more</a>
                        </div> --}}
                    </div>
                    <div class="swiper-buttons">
                        <div class="swiper-buttons-wrap">
                            <button class="swiper-prev swiper-prev-new"><i class="feather-arrow-left"></i></button>
                            <button class="swiper-next swiper-next-new"><i class="feather-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="swiper-dots">
                        <div class="swiper-pagination swiper-pagination-new"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product-tab end -->
    <!-- brand-slider start -->



    <!-- blog-section end -->
    <!-- service-area start-->
    <div class="service-area section-p" data-animate="animate__fadeIn">
        <div class="container">
            <ul class="single-service">
                <li class="service-content" data-animate="animate__fadeIn">
                    <div class="ser-block">
                        <a class="service-icon" href="JavaScript:void(0)">
                            <span><i class="feather-truck"></i></span>
                        </a>
                        <div class="service-text">
                            <h6>Free shipping</h6>
                            <p>Delivery within 5 to 7 day</p>
                        </div>
                    </div>
                </li>
                <li class="service-content" data-animate="animate__fadeIn">
                    <div class="ser-block">
                        <a class="service-icon" href="JavaScript:void(0)">
                            <span><i class="feather-gift"></i></span>
                        </a>
                        <div class="service-text">
                            <h6>Gift voucher</h6>
                            <p>Surprise coupon voucher</p>
                        </div>
                    </div>
                </li>
                <li class="service-content" data-animate="animate__fadeIn">
                    <div class="ser-block">
                        <a class="service-icon" href="JavaScript:void(0)">
                            <span><i class="feather-shield"></i></span>
                        </a>
                        <div class="service-text">
                            <h6>Money back</h6>
                            <p>Refund within 30 days</p>
                        </div>
                    </div>
                </li>
                <li class="service-content" data-animate="animate__fadeIn">
                    <div class="ser-block">
                        <a class="service-icon" href="JavaScript:void(0)">
                            <span><i class="feather-briefcase"></i></span>
                        </a>
                        <div class="service-text">
                            <h6>Safe payment</h6>
                            <p>100% secure with us</p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</main>
