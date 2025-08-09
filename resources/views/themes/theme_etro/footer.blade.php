<footer>
    <!-- footer-area start -->
    {{-- <div class="footer-area section-ptb extra-bg">
        <div class="container">
            <div class="footer-list">
                <ul class="footer-ul">
                    <li class="footer-li footer-menu" data-animate="animate__fadeIn">
                        <h6 class="ft-title">Information</h6>
                        <a href="#collapse-information" data-bs-toggle="collapse" class="ft-title">
                            <span class="ftmenu-title">Information</span>
                            <span class="ftmenu-icon"><i class="feather-plus"></i></span>
                        </a>
                        <ul class="ftlink-ul collapse" id="collapse-information">
                            <li class="ftlink-li">
                                <a href="about-us.html">About us</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="privacy-policy.html">Privacy policy</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="return-policy.html">Refund policy</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="terms-condition.html">Terms condition</a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer-li footer-menu" data-animate="animate__fadeIn">
                        <h6 class="ft-title">Support</h6>
                        <a href="#collapse-support" data-bs-toggle="collapse" class="ft-title">
                            <span class="ftmenu-title">Support</span>
                            <span class="ftmenu-icon"><i class="feather-plus"></i></span>
                        </a>
                        <ul class="ftlink-ul collapse" id="collapse-support">
                            <li class="ftlink-li">
                                <a href="contact-us.html">Contact us</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="faq.html">Faq's</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="blog-grid-without.html">News</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="terms-condition.html">Help & support</a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer-li footer-menu" data-animate="animate__fadeIn">
                        <h6 class="ft-title">My account</h6>
                        <a href="#collapse-account" data-bs-toggle="collapse" class="ft-title">
                            <span class="ftmenu-title">My account</span>
                            <span class="ftmenu-icon"><i class="feather-plus"></i></span>
                        </a>
                        <ul class="ftlink-ul collapse" id="collapse-account">
                            <li class="ftlink-li">
                                <a href="return-policy.html">Order & returns</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="login-account.html">Manage account</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="collection.html">Saved items</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="blog-grid.html">Our story</a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer-li footer-menu" data-animate="animate__fadeIn">
                        <h6 class="ft-title">Category</h6>
                        <a href="#collapse-category" data-bs-toggle="collapse" class="ft-title">
                            <span class="ftmenu-title">Category</span>
                            <span class="ftmenu-icon"><i class="feather-plus"></i></span>
                        </a>
                        <ul class="ftlink-ul collapse" id="collapse-category">
                            <li class="ftlink-li">
                                <a href="product-template4.html">Computer</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="product-template2.html">Mobile</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="product-template3.html">Pendrive</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="product-template.html">Headphone</a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer-li footer-menu" data-animate="animate__fadeIn">
                        <h6 class="ft-title">Followed by</h6>
                        <a href="#collapse-followed" data-bs-toggle="collapse" class="ft-title">
                            <span class="ftmenu-title">Followed by</span>
                            <span class="ftmenu-icon"><i class="feather-plus"></i></span>
                        </a>
                        <ul class="ftlink-ul collapse" id="collapse-followed">
                            <li class="ftlink-li">
                                <a href="https://www.facebook.com/">Facebook</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="https://www.instagram.com/">Instagram</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="https://dribbble.com/">Dribbble</a>
                            </li>
                            <li class="ftlink-li">
                                <a href="https://twitter.com/">Twitter</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div> --}}
    <!-- footer-area end -->
    <!-- footer-bottom start -->
    <div class="footer-bottom-wrap mt-4">
        <div class="container">
            <div class="f-bottom-block">
                <div class="f-bottom-element f-logo">
                    <div class="logo-block">
                        <a href="javascript:void(0)" class="theme-footer-logo">
                            <img src="{{ asset($negocio->neg_imagen) }}" class="img-fluid" alt="logo">
                        </a>
                    </div>
                </div>
                <div class="f-bottom-element f-contact">
                    <div class="f-contact-main">
                        <span class="icon"><i class="feather-phone"></i></span>
                        <span class="text">
                            <span class="ft-link">
                                <a href="tel:+260150105018"
                                    title="tel:(+260) 150 105 018">{{ $negocio->neg_telefono }}</a>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="f-bottom-element f-contact">
                    <div class="f-contact-main">
                        <span class="icon"><i class="feather-mail"></i></span>
                        <span class="text">
                            <span class="ft-link">
                                <a href="mailto:demo@demo.com" class="con-add">{{ $negocio->neg_email }}</a>
                            </span>
                        </span>
                    </div>
                </div>
                <div class="f-bottom-element f-contact">
                    <div class="f-contact-main">
                        <span class="icon"><i class="feather-map-pin"></i></span>
                        <span class="text">
                            <span class="ft-link">
                                <a href="javascript:void(0)">{{ $negocio->neg_direccion }}</a>
                            </span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom end -->
    <!-- copyright start -->
    <div class="copyright">
        <div class="container">
            <ul class="copyright-ul">
                <li class="copyright-li ft-text">
                    <div class="copyright-text">
                        <p>© 2025 . All rights reserved by {{ $negocio->neg_nombre }}</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- copyright end -->
</footer>
