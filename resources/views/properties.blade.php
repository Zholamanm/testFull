@foreach($filterProperties as $property)
    <div class="col-xl-4 col-lg-6 col-6 ">
        <div class="products-three-single w-100  mt-30">
            <div class="products-three-single-img"><a
                    href="shop-details-3.html" class="d-block"> <img
                        src="assets/images/home-three/productss2-1.jpg"
                        class="first-img" alt=""/> <img
                        src="assets/images/home-three/productss2-hover-1.png"
                        alt="" class="hover-img"/>
                </a>
                <div class="products-grid-one__badge-box"> <span
                        class="bg_base badge new ">New</span>
                </div>
                <a href="cart.html" class="addcart btn--primary style2">
                    Add To Cart </a>
                <div class="products-grid__usefull-links">
                    <ul>
                        <li><a href="wishlist.html"> <i class="flaticon-heart">
                                </i> <span>
                                                                            wishlist</span> </a></li>
                        <li><a href="compare.html"> <i
                                    class="flaticon-left-and-right-arrows"></i>
                                <span>
                                                                            compare</span> </a></li>
                        <li><a href="#popup5" class="popup_link"> <i
                                    class="flaticon-visibility"></i>
                                <span> quick view</span>
                            </a></li>
                    </ul>
                </div>
            </div>
            <div id="popup5" class="product-gird__quick-view-popup mfp-hide">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-lg-6">
                            <div class="quick-view__left-content">
                                <div class="tabs">
                                    <div class="popup-product-thumb-box">
                                        <ul>
                                            <li
                                                class="tab-nav popup-product-thumb">
                                                <a href="#tabb1">
                                                    <img src="assets/images/shop/products-v6-img5.jpg"
                                                         alt=""/> </a></li>
                                        </ul>
                                    </div>
                                    <div class="popup-product-main-image-box">
                                        <div id="tabb1"
                                             class="tab-item popup-product-image">
                                            <div
                                                class="popup-product-single-image">
                                                <img src="assets/images/shop/products-v6-img5.jpg"
                                                     alt=""/></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="popup-right-content">
                            <h3>{{ $property->title }}</h3>
                            <p class="text"> {{ $property->description }}
                            </p>
                            <div class="price">
                                <h2>Floor: {{ $property->floor }} </h2>
                            </div>
                            <div class="price">
                                <h2>Rooms: {{ $property->rooms }} </h2>
                            </div>
                            <div class="price">
                                <h2>Area: {{ $property->area }} </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="products-three-single-content text-center"><span>{{ $property->description }}</span>
            <h5><a href="shop-details-3.html"> {{ $property->title }} </a>
            </h5>
            <p>Floor: {{ $property->floor }}</p>
            <p>Rooms: {{ $property->rooms }}</p>
            <p>Area: {{ $property->area }}</p>
        </div>
    </div>
@endforeach
