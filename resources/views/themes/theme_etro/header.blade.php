<header id="header" class="main-header stickyheader">
    <div class="header-area">
        <div class="container">
            <div class="main-menu-area">
                <div class="main-menu-wrap">
                    <div class="header-theme-logo">
                        <a href="index1.html" class="theme-logo">
                            <img src="{{ asset($negocio->neg_imagen) }}" class="img-fluid" alt="logo" width="120">
                        </a>
                    </div>
                    <div class="header-element header-search">
                        <div class="header-theme-search">
                            <form method="get" action="/search" class="search-form">
                                <div class="search-bar">
                                    <div class="form-search">
                                        <input type="search" name="search-input" class="search-input" value=""
                                            placeholder="Search our store" required="">
                                        <button type="button" onclick="location.href='search.html'" class="search-btn"
                                            disabled=""><i class="feather-search"></i></button>
                                    </div>
                                    <div class="search-results">
                                        <p class="search-for">Search for <span class="search-text">a</span></p>
                                        <ul>
                                            <li>
                                                <a href="product-template.html">
                                                    <img src="image/home1/product/product-1.jpg" class="img-fluid"
                                                        alt="product-1.jpg">
                                                    <span>Earbuds</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-template.html">
                                                    <img src="image/home1/product/product-7.jpg" class="img-fluid"
                                                        alt="product-7.jpg">
                                                    <span>Sandisk ssd</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-template.html">
                                                    <img src="image/home1/product/product-15.jpg" class="img-fluid"
                                                        alt="product-15.jpg">
                                                    <span>Router wifi6</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-template.html">
                                                    <img src="image/home1/product/product-18.jpg" class="img-fluid"
                                                        alt="product-18.jpg">
                                                    <span>Smartphone</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-template.html">
                                                    <img src="image/home1/product/product-31.jpg" class="img-fluid"
                                                        alt="product-31.jpg">
                                                    <span>IPad mini</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="product-template.html">
                                                    <img src="image/home1/product/product-49.jpg" class="img-fluid"
                                                        alt="product-49.jpg">
                                                    <span>HP color printer</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <p class="search-more"><a href="search.html">See all results (12)</a></p>
                                        <p class="search-fail">Search not found</p>
                                    </div>
                                    <a href="search.html" class="search-btn">Search</a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- header-text end -->
                    <!-- search-wrapper end -->
                    <!-- header-icon start -->
                    <div class="header-icon-block">
                        <ul class="shop-element">
                            <li class="side-wrap toggler-wrap">
                                <div class="toggler-wrapper">
                                    <button type="button" class="toggler-btn"><span class="toggler-icon"><i
                                                class="feather-menu"></i></span></button>
                                </div>
                            </li>
                            <li class="side-wrap search-wrap">
                                <div class="search-wrapper">
                                    <a href="#searchmodal" data-bs-toggle="modal">
                                        <span class="search-icon"><i class="feather-search"></i></span>
                                    </a>
                                </div>
                            </li>
                            <li class="side-wrap user-wrap">
                                <div class="user-info">
                                    <a href="javascript:void(0)">
                                        <span class="user-icon"><i class="feather-user"></i></span>
                                    </a>
                                    <div class="account-main">
                                        <span class="acc-title">Cuenta</span>
                                        <div class="account-login">
                                            <a href="create-account.html">Registrar</a>
                                            <a href="login-account.html">Iniciar sesión</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="side-wrap wishlist-wrap">
                                <div class="wishlist-wrapper">
                                    <a href="wishlist-product.html">
                                        <span class="wishlist-icon-count">
                                            <span class="wishlist-icon"><i class="feather-heart"></i></span>
                                            <span class="wishlist-count">(5)</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                            <li class="side-wrap cart-wrap">
                                <div class="cart-wrapper">
                                    <a href="javascript:void(0)" class="js-cart-drawer">
                                        <span class="cart-icon-count">
                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                            <span class="cart-count cart-counter">(4)</span>
                                        </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- header-icon end -->
                </div>
            </div>
        </div>
    </div>
    <div class="menu-main">
        <div class="container">
            <div class="menu-contact">
                <!-- main-menu start -->
                <div class="mega-menu-area">
                    <div class="mainmenu-content">
                        <div class="main-wrap">
                            <ul class="main-menu">
                                <li class="menu-link">
                                    <a href="index1.html" class="link-title">
                                        <span class="sp-link-title">Home</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <div class="menu-dropdown menu-single collapse">
                                        <ul class="ul">
                                            <li class="menusingle-li">
                                                <a href="index1.html" class="menusingle-title">
                                                    <span class="sp-link-title">Home 01</span>
                                                </a>
                                            </li>
                                            <li class="menusingle-li">
                                                <a href="index2.html" class="menusingle-title">
                                                    <span class="sp-link-title">Home 02</span>
                                                </a>
                                            </li>
                                            <li class="menusingle-li">
                                                <a href="index3.html" class="menusingle-title">
                                                    <span class="sp-link-title">Home 03</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-link">
                                    <a href="collection.html" class="link-title">
                                        <span class="sp-link-title">Shop</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <div class="menu-dropdown menu-banner collapse">
                                        <ul class="ul container p-0">
                                            <li class="menubanner-li">
                                                <div class="menubanner-img banner-hover">
                                                    <a href="collection.html" class="collection-img banner-img">
                                                        <img src="image/home1/menu-banner/menubanner-1.jpg"
                                                            class="img-fluid" alt="menubanner-1">
                                                    </a>
                                                    <a href="collection.html" class="collection-title">
                                                        <span>New collection</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="menubanner-li">
                                                <div class="menubanner-img banner-hover">
                                                    <a href="collection.html" class="collection-img banner-img">
                                                        <img src="image/home1/menu-banner/menubanner-2.jpg"
                                                            class="img-fluid" alt="menubanner-2">
                                                    </a>
                                                    <a href="collection.html" class="collection-title">
                                                        <span>Best collection</span>
                                                    </a>
                                                </div>
                                            </li>
                                            <li class="menubanner-li">
                                                <div class="menubanner-img banner-hover">
                                                    <a href="collection.html" class="collection-img banner-img">
                                                        <img src="image/home1/menu-banner/menubanner-3.jpg"
                                                            class="img-fluid" alt="menubanner-3">
                                                    </a>
                                                    <a href="collection.html" class="collection-title">
                                                        <span>Sale collection</span>
                                                    </a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-link">
                                    <a href="collection.html" class="link-title">
                                        <span class="sp-link-title">Collection</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <div class="menu-dropdown menu-mega collapse">
                                        <ul class="ul container p-0">
                                            <li class="menumega-li">
                                                <a href="product.html" class="menumega-title">
                                                    <span class="sp-link-title">Collection page</span>
                                                </a>
                                                <div class="menumegasup-dropdown collapse">
                                                    <ul class="menumegasup-ul">
                                                        <li class="menumegasup-li">
                                                            <a href="collection-without.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Collection</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="collection.html" class="menumegasup-title">
                                                                <span class="sp-link-title">Collection left</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="collection-right.html" class="menumegasup-title">
                                                                <span class="sp-link-title">Collection right</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="collection-list-without.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Collection list</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="collection-list.html" class="menumegasup-title">
                                                                <span class="sp-link-title">Collection list
                                                                    left</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="collection-list-right.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Collection list
                                                                    right</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menumega-li">
                                                <a href="product.html" class="menumega-title">
                                                    <span class="sp-link-title">Product page</span>
                                                </a>
                                                <div class="menumegasup-dropdown collapse">
                                                    <ul class="menumegasup-ul">
                                                        <li class="menumegasup-li">
                                                            <a href="product-template.html" class="menumegasup-title">
                                                                <span class="sp-link-title">Product layout</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="product-template2.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Product tab</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="product-template3.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Product advance</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="product-template4.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Product
                                                                    accordion</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="product-template5.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Product center</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="product-template6.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Product sticky</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="product-template7.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Product side</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menumega-li">
                                                <a href="collection.html" class="menumega-title">
                                                    <span class="sp-link-title">Account page</span>
                                                </a>
                                                <div class="menumegasup-dropdown collapse">
                                                    <ul class="menumegasup-ul">
                                                        <li class="menumegasup-li">
                                                            <a href="order-history.html" class="menumegasup-title">
                                                                <span class="sp-link-title">Order</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="profile.html" class="menumegasup-title">
                                                                <span class="sp-link-title">Profile</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="pro-address.html" class="menumegasup-title">
                                                                <span class="sp-link-title">Address</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="change-password.html" class="menumegasup-title">
                                                                <span class="sp-link-title">Change password</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="pro-tickets.html" class="menumegasup-title">
                                                                <span class="sp-link-title">My ticket</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="login-account.html" class="menumegasup-title">
                                                                <span class="sp-link-title">My account</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="pro-address.html" class="menumegasup-title">
                                                                <span class="sp-link-title">My address</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menumega-li">
                                                <a href="collection.html" class="menumega-title">
                                                    <span class="sp-link-title">Special products</span>
                                                </a>
                                                <div class="menumegasup-dropdown collapse">
                                                    <ul class="menumegasup-ul">
                                                        <li class="menumegasup-li">
                                                            <a href="product-template.html" class="menumegasup-title">
                                                                <span class="sp-link-title">Wireless earbuds</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="product-template2.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Air conditioner</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="product-template3.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">DVD player slot</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="product-template4.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">360 camera</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="product-template5.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Ev charging plug</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="product-template6.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Portable speaker</span>
                                                            </a>
                                                        </li>
                                                        <li class="menumegasup-li">
                                                            <a href="product-template7.html"
                                                                class="menumegasup-title">
                                                                <span class="sp-link-title">Evm power bank</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-link">
                                    <a href="blog-grid.html" class="link-title">
                                        <span class="sp-link-title">Blogs</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <div class="menu-dropdown menu-single collapse" id="blogs">
                                        <ul class="ul">
                                            <li class="menusingle-li">
                                                <a href="blog-grid-without.html" class="menusingle-title">
                                                    <span class="sp-link-title">Blog grid</span>
                                                </a>
                                            </li>
                                            <li class="menusingle-li">
                                                <a href="blog-grid.html" class="menusingle-title">
                                                    <span class="sp-link-title">Blog grid left</span>
                                                </a>
                                            </li>
                                            <li class="menusingle-li">
                                                <a href="blog-grid-right.html" class="menusingle-title">
                                                    <span class="sp-link-title">Blog grid right</span>
                                                </a>
                                            </li>
                                            <li class="menusingle-li">
                                                <a href="article-post-without.html" class="menusingle-title">
                                                    <span class="sp-link-title">Article post</span>
                                                </a>
                                            </li>
                                            <li class="menusingle-li">
                                                <a href="article-post.html" class="menusingle-title">
                                                    <span class="sp-link-title">Article post left</span>
                                                </a>
                                            </li>
                                            <li class="menusingle-li">
                                                <a href="article-post-right.html" class="menusingle-title">
                                                    <span class="sp-link-title">Article post right</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="menu-link">
                                    <a href="about-us.html" class="link-title">
                                        <span class="sp-link-title">Pages</span>
                                        <span class="menu-arrow"><i class="feather-chevron-down"></i></span>
                                    </a>
                                    <div class="menu-dropdown menu-sub collapse">
                                        <ul class="ul">
                                            <li class="menusub-li">
                                                <a href="about-us.html" class="menusub-title">
                                                    <span class="sp-link-title">About us</span>
                                                </a>
                                            </li>
                                            <li class="menusub-li">
                                                <a href="billing-info.html" class="menusub-title">
                                                    <span class="sp-link-title">Billing info</span>
                                                </a>
                                            </li>
                                            <li class="menusub-li">
                                                <a href="contact-us.html" class="menusub-title">
                                                    <span class="sp-link-title">Contact us</span>
                                                    <span class="menu-arrow"><i
                                                            class="feather-chevron-right"></i></span>
                                                </a>
                                                <div class="menusup-dropdown collapse">
                                                    <ul class="menusup-ul">
                                                        <li class="menusup-li">
                                                            <a href="contact-us.html" class="menusup-title">
                                                                <span class="sp-link-title">Contact us</span>
                                                            </a>
                                                        </li>
                                                        <li class="menusup-li">
                                                            <a href="contact-us-2.html" class="menusup-title">
                                                                <span class="sp-link-title">Contact us 2</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menusub-li">
                                                <a href="checkout-style1.html" class="menusub-title">
                                                    <span class="sp-link-title">Checkout</span>
                                                    <span class="menu-arrow"><i
                                                            class="feather-chevron-right"></i></span>
                                                </a>
                                                <div class="menusup-dropdown collapse">
                                                    <ul class="menusup-ul">
                                                        <li class="menusup-li">
                                                            <a href="checkout-style1.html" class="menusup-title">
                                                                <span class="sp-link-title">Checkout</span>
                                                            </a>
                                                        </li>
                                                        <li class="menusup-li">
                                                            <a href="checkout-style2.html" class="menusup-title">
                                                                <span class="sp-link-title">Checkout 2</span>
                                                            </a>
                                                        </li>
                                                        <li class="menusup-li">
                                                            <a href="checkout-style3.html" class="menusup-title">
                                                                <span class="sp-link-title">Checkout 3</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menusub-li">
                                                <a href="cancellation.html" class="menusub-title">
                                                    <span class="sp-link-title">Cancellation</span>
                                                </a>
                                            </li>
                                            <li class="menusub-li">
                                                <a href="faq.html" class="menusub-title">
                                                    <span class="sp-link-title">Faq's</span>
                                                </a>
                                            </li>
                                            <li class="menusub-li">
                                                <a href="order-complete.html" class="menusub-title">
                                                    <span class="sp-link-title">Order complete</span>
                                                </a>
                                            </li>
                                            <li class="menusub-li">
                                                <a href="privacy-policy.html" class="menusub-title">
                                                    <span class="sp-link-title">Policy</span>
                                                    <span class="menu-arrow"><i
                                                            class="feather-chevron-right"></i></span>
                                                </a>
                                                <div class="menusup-dropdown collapse">
                                                    <ul class="menusup-ul">
                                                        <li class="menusup-li">
                                                            <a href="privacy-policy.html" class="menusup-title">
                                                                <span class="sp-link-title">Privacy policy</span>
                                                            </a>
                                                        </li>
                                                        <li class="menusup-li">
                                                            <a href="payment-policy.html" class="menusup-title">
                                                                <span class="sp-link-title">Payment policy</span>
                                                            </a>
                                                        </li>
                                                        <li class="menusup-li">
                                                            <a href="shipping-policy.html" class="menusup-title">
                                                                <span class="sp-link-title">Return policy</span>
                                                            </a>
                                                        </li>
                                                        <li class="menusup-li">
                                                            <a href="return-policy.html" class="menusup-title">
                                                                <span class="sp-link-title">Shipping policy</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <li class="menusub-li">
                                                <a href="sitemap.html" class="menusub-title">
                                                    <span class="sp-link-title">Sitemap</span>
                                                </a>
                                            </li>
                                            <li class="menusub-li">
                                                <a href="terms-condition.html" class="menusub-title">
                                                    <span class="sp-link-title">Terms & condition</span>
                                                </a>
                                            </li>
                                            <li class="menusub-li">
                                                <a href="track-page.html" class="menusub-title">
                                                    <span class="sp-link-title">Track page</span>
                                                </a>
                                            </li>
                                            <li class="menusub-li">
                                                <a href="404.html" class="menusub-title">
                                                    <span class="sp-link-title">404</span>
                                                </a>
                                            </li>
                                            <li class="menusub-li">
                                                <a href="coming-soon.html" class="menusub-title">
                                                    <span class="sp-link-title">Coming soon</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- main-menu end -->
                <div class="contact-num">
                    <div class="contact-wrap service-line">
                        <span class="contact-details"><i class="feather-headphones"></i></span>
                        <a href="tel:+2101234567890">(210) 123 456 7890</a>
                    </div>
                    <div class="contact-wrap price-tag">
                        <span class="contact-details"><i class="feather-tag"></i></span>
                        <a href="collection.html">Mega sale</a>
                    </div>
                </div>
            </div>
            <!-- mega sale -->
        </div>
    </div>
</header>
