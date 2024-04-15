<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test Full</title>
    <link rel="stylesheet" href="assets/css/bootstrap.5.1.1.min.css">
    <!-- Google fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&family=Roboto:wght@300;400;500;700&display=swap"
        rel="stylesheet">
    <!-- FlatIcon Css -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css">

    <!-- Slick Slider Css -->
    <link rel="stylesheet" href="assets/css/plugin/slick.css">
    <!--  Ui Tabs Css -->
    <link rel="stylesheet" href="assets/css/plugin/jquery-ui.min.css">
    <!-- Magnific-popup Css -->
    <link rel="stylesheet" href="assets/css/plugin/magnific-popup.css">
    <!-- Nice Select Css -->
    <link rel="stylesheet" href="assets/css/plugin/nice-select.v1.0.css">
    <!-- Animate Css -->
    <link rel="stylesheet" href="assets/css/plugin/animate.css">
    <!-- Style Css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
    <div class="row gx-4">
        <div class="col-xl-3 col-lg-4">
            <div class="shop-grid-sidebar">
                <button class="remove-sidebar d-lg-none d-block"><i
                        class="flaticon-cross"> </i></button>
                <div class="sidebar-holder">
                    <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                        <h4>Has photo </h4>
                        <label for="">Yes
                            <input type="checkbox" value="yes" placeholder="Yes" id="photo_yes" onchange="filterPhoto()">
                        </label>
                        <label for="">No
                            <input type="checkbox" value="" placeholder="No" id="photo_no" onchange="filterPhoto()">
                        </label>
                    </div>
                    <div class="single-sidebar-box mt-30 wow fadeInUp animated">
                        <h4>Filter By Area</h4>
{{--                        <div class="slider-box">--}}
{{--                            <div id="price-range" class="slider"></div>--}}
{{--                            <div class="output-price"><label for="priceRange">Area:</label> <input--}}
{{--                                    type="text" id="areaRange" onchange="filterArea()"></div>--}}
{{--                        </div>--}}
                        <div class="slider-box">
                            <div id="price-range" class="slider"></div>
                            <div class="output-price"> <label for="priceRange">Area:</label> <input
                                    type="text" id="priceRange" readonly onchange="filterArea()"> </div>
                        </div>
                    </div>
                    <div class="single-sidebar-box mt-30 wow fadeInUp animated pb-0 border-bottom-0 ">
                        <h4>Rooms </h4>
                        <label>1
                            <input type="checkbox" id="rooms_1" value="1" placeholder="1" onchange="filterRooms()">
                        </label>
                        <label>2
                            <input type="checkbox" id="rooms_2" value="2" placeholder="2" onchange="filterRooms()">
                        </label>
                        <label>3
                            <input type="checkbox" id="rooms_3" value="3" placeholder="3" onchange="filterRooms()">
                        </label>
                        <label>4
                            <input type="checkbox" id="rooms_4" value="4" placeholder="4" onchange="filterRooms()">
                        </label>
                        <label>5
                            <input type="checkbox" id="rooms_5" value="5" placeholder="5" onchange="filterRooms()">
                        </label>
                        <label>6
                            <input type="checkbox" id="rooms_6" value="6" placeholder="6" onchange="filterRooms()">
                        </label>
                        <label>7
                            <input type="checkbox" id="rooms_7" value="7" placeholder="7" onchange="filterRooms()">
                        </label>
                        <label>8
                            <input type="checkbox" id="rooms_8" value="8" placeholder="8" onchange="filterRooms()">
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-9 col-lg-8">
            <div class="row">
                <div class="col-xl-12">
                    <div
                        class="shop-grid-page-top-info p-0 justify-content-md-between justify-content-center">
                        <div class="left-box wow fadeInUp animated">
                            <p>Showing 1–12 of 50 Results</p>
                        </div>
                        <div
                            class="right-box justify-content-md-between justify-content-center wow fadeInUp animated">
                            <div class="short-by">
                                <div class="select-box">
                                    <select class="wide">
                                        <option data-display="Short by latest">Featured</option>
                                        <option value="1">Best selling</option>
                                        <option value="2">Alphabetically, A-Z</option>
                                        <option value="3">Alphabetically, Z-A</option>
                                        <option value="3">Price, low to high</option>
                                        <option value="3">Price, high to low</option>
                                        <option value="3">Date, old to new</option>
                                    </select>
                                </div>
                            </div>
                            <div class="product-view-style d-flex justify-content-md-between justify-content-center">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-grid-tab"
                                                data-bs-toggle="pill" data-bs-target="#pills-grid" type="button"
                                                role="tab" aria-selected="true">
                                            <i class="flaticon-grid"></i>
                                        </button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pills-list-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-list" type="button" role="tab"
                                                aria-selected="false">
                                            <i class="flaticon-list"></i>
                                        </button>
                                    </li>
                                </ul>
                                <button class="slidebarfilter d-lg-none d-flex"><i class="flaticon-edit"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-grid" role="tabpanel"
                             aria-labelledby="pills-grid-tab">
                            <div class="row">
                                @if (isset($filterProperties))
                                    <div class="row mt-3 justify-content-center" id="ajax-properties">
                                        @include('properties', ['filterProperties' => $filterProperties])
                                    </div>
                                @else
                                    <div class="text-center pt-5">
                                        <h2>NO PROPERTIES FOUND</h2>
                                    </div>
                                @endif

                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-list" role="tabpanel"
                             aria-labelledby="pills-list-tab">
                            <div class="row ">
                                <div class="col-12">
                                    <div class="product-grid-two list mt-30 ">
                                        <div class="product-grid-two__img">
                                            <a href="shop-details-2.html" class="d-block"> <img
                                                    src="assets/images/home-three/products-1.jpg"
                                                    class="first-img" alt=""/> <img
                                                    src="assets/images/home-three/products-hover-1.png"
                                                    alt="" class="hover-img"/> </a>
                                            <div class="products-grid-one__badge-box"> <span
                                                    class="badge discount">Best</span></div>
                                        </div>
                                        <div id="popupb" class="product-gird__quick-view-popup mfp-hide">
                                            <div class="container">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="quick-view__left-content">
                                                            <div class="tabs">
                                                                <div class="popup-product-thumb-box">
                                                                    <ul>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb">
                                                                            <a href="#tab7111111b"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img1.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab8111111b"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img2.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab9111111b"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img3.jpg"
                                                                                    alt=""/> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="popup-product-main-image-box">
                                                                    <div id="tab7111111b"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img1.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab8111111b"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img2.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab9111111b"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img3.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <button class="prev"><i
                                                                            class="flaticon-back"></i>
                                                                    </button>
                                                                    <button class="next"><i
                                                                            class="flaticon-next"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="popup-right-content">
                                                            <h3>Round Small Table </h3>
                                                            <div class="ratting"><i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i>
                                                                <span>(123)</span></div>
                                                            <p class="text"> Wooden Tables to Brighten Your
                                                                Dining Room </p>
                                                            <div class="price">
                                                                <h2> $50 USD
                                                                    <del> $105 USD</del>
                                                                </h2>
                                                                <h6> In stuck</h6>
                                                            </div>
                                                            <div class="color-varient"><a href="#0"
                                                                                          class="color-name pink">
                                                                    <span>Pink</span> </a> <a href="#0"
                                                                                              class="color-name red">
                                                                    <span>Red</span>
                                                                </a> <a href="#0"
                                                                        class="color-name yellow"><span>Yellow</span>
                                                                </a> <a href="#0" class="color-name blue">
                                                                    <span>Blue</span> </a> <a href="#0"
                                                                                              class="color-name black">
                                                                    <span>Black</span> </a></div>
                                                            <div class="add-product">
                                                                <h6>Qty:</h6>
                                                                <div class="button-group">
                                                                    <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                            class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                        <span class="increaseQty"> <i
                                                                                class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                    <button
                                                                        class="btn--primary "> Add to Cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="payment-method"><a href="#0"> <img
                                                                        src="assets/images/payment_method/method_1.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_2.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_3.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_4.png"
                                                                        alt=""> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-grid-two-content text-center">
                                            <span>Modern</span>
                                            <h5><a href="shop-details-2.html">Trendy stylish shoes </a></h5>
                                            <p>
                                                <del>$200</del>
                                                $159.00
                                            </p>
                                            <p class="text"> Typi non habent claritatem insitam usus
                                                legentis qui facit eorum claritatem Investigationes
                                                demonstraverunt lectores legere mele lius quod legunt
                                                saepius Claritas est etiam processus a capitalize on low
                                                hanging </p>
                                            <div class="product-grid-two__overlay-box">
                                                <div class="title">
                                                    <h6><a href="cart.html">Add To Cart</a></h6>
                                                </div>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="#popupb" class="popup_link"><i
                                                                    class="flaticon-eye"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="flaticon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="product-grid-two list mt-30">
                                        <div class="product-grid-two__img">
                                            <a href="shop-details-2.html" class="d-block">
                                                <img src="assets/images/home-three/products-2.jpg" alt=""/>
                                            </a></div>
                                        <div id="popup2z" class="product-gird__quick-view-popup mfp-hide">
                                            <div class="container">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="quick-view__left-content">
                                                            <div class="tabs">
                                                                <div class="popup-product-thumb-box">
                                                                    <ul>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb">
                                                                            <a href="#tab1z"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img2.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab2z"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img3.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab3z"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img4.jpg"
                                                                                    alt=""/> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="popup-product-main-image-box">
                                                                    <div id="tab1z"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img2.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab2z"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img3.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab3z"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img4.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <button class="prev"><i
                                                                            class="flaticon-back"></i>
                                                                    </button>
                                                                    <button class="next"><i
                                                                            class="flaticon-next"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="popup-right-content">
                                                            <h3>Diamond Ring Coyo</h3>
                                                            <div class="ratting"><i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i>
                                                                <span>(123)</span></div>
                                                            <p class="text"> Wooden Tables to Brighten Your
                                                                Dining Room </p>
                                                            <div class="price">
                                                                <h2> $50 USD
                                                                    <del> $105 USD</del>
                                                                </h2>
                                                                <h6> In stuck</h6>
                                                            </div>
                                                            <div class="color-varient"><a href="#0"
                                                                                          class="color-name pink">
                                                                    <span>Pink</span> </a> <a href="#0"
                                                                                              class="color-name red">
                                                                    <span>Red</span>
                                                                </a> <a href="#0"
                                                                        class="color-name yellow"><span>Yellow</span>
                                                                </a> <a href="#0" class="color-name blue">
                                                                    <span>Blue</span> </a> <a href="#0"
                                                                                              class="color-name black">
                                                                    <span>Black</span> </a></div>
                                                            <div class="add-product">
                                                                <h6>Qty:</h6>
                                                                <div class="button-group">
                                                                    <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                            class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                        <span class="increaseQty"> <i
                                                                                class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                    <button
                                                                        class="btn--primary "> Add to Cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="payment-method"><a href="#0"> <img
                                                                        src="assets/images/payment_method/method_1.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_2.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_3.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_4.png"
                                                                        alt=""> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-grid-two-content text-center">
                                            <span>Modern</span>
                                            <h5><a href="shop-details-2.html">Exclusive Sneakers </a></h5>
                                            <p>$159.00</p>
                                            <p class="text"> Typi non habent claritatem insitam usus
                                                legentis qui facit eorum claritatem Investigationes
                                                demonstraverunt lectores legere mele lius quod legunt
                                                saepius Claritas est etiam processus a capitalize on low
                                                hanging </p>
                                            <div class="product-grid-two__overlay-box">
                                                <div class="title">
                                                    <h6><a href="cart.html">Add To Cart</a></h6>
                                                </div>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="#popup2z" class="popup_link"><i
                                                                    class="flaticon-eye"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="flaticon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="product-grid-two list mt-30">
                                        <div class="product-grid-two__img">
                                            <a href="shop-details-2.html" class="d-block"> <img
                                                    src="assets/images/home-three/products-3.jpg" alt=""/>
                                            </a>
                                            <div class="products-grid-one__badge-box"> <span
                                                    class="bg_base badge new ">New</span></div>
                                        </div>
                                        <div id="popup3zz" class="product-gird__quick-view-popup mfp-hide">
                                            <div class="container">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="quick-view__left-content">
                                                            <div class="tabs">
                                                                <div class="popup-product-thumb-box">
                                                                    <ul>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb">
                                                                            <a href="#tab4zz"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img3.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab5zz"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img4.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab6zz"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img5.jpg"
                                                                                    alt=""/> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="popup-product-main-image-box">
                                                                    <div id="tab4zz"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img3.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab5zz"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img4.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab6zz"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img5.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <button class="prev"><i
                                                                            class="flaticon-back"></i>
                                                                    </button>
                                                                    <button class="next"><i
                                                                            class="flaticon-next"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="popup-right-content">
                                                            <h3>Leather Brown Shoe</h3>
                                                            <div class="ratting"><i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i>
                                                                <span>(123)</span></div>
                                                            <p class="text"> Wooden Tables to Brighten Your
                                                                Dining Room </p>
                                                            <div class="price">
                                                                <h2> $50 USD
                                                                    <del> $105 USD</del>
                                                                </h2>
                                                                <h6> In stuck</h6>
                                                            </div>
                                                            <div class="color-varient"><a href="#0"
                                                                                          class="color-name pink">
                                                                    <span>Pink</span> </a> <a href="#0"
                                                                                              class="color-name red">
                                                                    <span>Red</span>
                                                                </a> <a href="#0"
                                                                        class="color-name yellow"><span>Yellow</span>
                                                                </a> <a href="#0" class="color-name blue">
                                                                    <span>Blue</span> </a> <a href="#0"
                                                                                              class="color-name black">
                                                                    <span>Black</span> </a></div>
                                                            <div class="add-product">
                                                                <h6>Qty:</h6>
                                                                <div class="button-group">
                                                                    <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                            class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                        <span class="increaseQty"> <i
                                                                                class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                    <button
                                                                        class="btn--primary "> Add to Cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="payment-method"><a href="#0"> <img
                                                                        src="assets/images/payment_method/method_1.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_2.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_3.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_4.png"
                                                                        alt=""> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-grid-two-content text-center">
                                            <span>Modern</span>
                                            <h5><a href="shop-details-2.html">Fashionable Sneakers </a></h5>
                                            <p>
                                                <del>$200</del>
                                                $159.00
                                            </p>
                                            <p class="text"> Typi non habent claritatem insitam usus
                                                legentis qui facit eorum claritatem Investigationes
                                                demonstraverunt lectores legere mele lius quod legunt
                                                saepius Claritas est etiam processus a capitalize on low
                                                hanging </p>
                                            <div class="product-grid-two__overlay-box">
                                                <div class="title">
                                                    <h6><a href="cart.html">Add To Cart</a></h6>
                                                </div>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="#popup3zz" class="popup_link"><i
                                                                    class="flaticon-eye"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="flaticon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="product-grid-two list mt-30">
                                        <div class="product-grid-two__img"><a href="shop-details-2.html"
                                                                              class="d-block">
                                                <img src="assets/images/home-three/products-4.jpg" alt=""/>
                                            </a>
                                            <div class="products-grid-one__badge-box"> <span
                                                    class="badge discount">-30%</span></div>
                                        </div>
                                        <div id="popup4cc" class="product-gird__quick-view-popup mfp-hide">
                                            <div class="container">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="quick-view__left-content">
                                                            <div class="tabs">
                                                                <div class="popup-product-thumb-box">
                                                                    <ul>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb">
                                                                            <a href="#tab44cc"> <img
                                                                                    src="assets/images/home-two/products-v5-img4.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab55cc"> <img
                                                                                    src="assets/images/home-two/products-v5-img5.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab66cc"> <img
                                                                                    src="assets/images/home-two/products-v5-img6.jpg"
                                                                                    alt=""/> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="popup-product-main-image-box">
                                                                    <div id="tab44cc"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/home-two/products-v5-img4.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab55cc"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/home-two/products-v5-img5.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab66cc"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/home-two/products-v5-img6.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <button class="prev"><i
                                                                            class="flaticon-back"></i>
                                                                    </button>
                                                                    <button class="next"><i
                                                                            class="flaticon-next"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="popup-right-content">
                                                            <h3>Comfort Cool Sofa </h3>
                                                            <div class="ratting"><i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i>
                                                                <span>(123)</span></div>
                                                            <p class="text"> Wooden Tables to Brighten Your
                                                                Dining Room </p>
                                                            <div class="price">
                                                                <h2> $50 USD
                                                                    <del> $105 USD</del>
                                                                </h2>
                                                                <h6> In stuck</h6>
                                                            </div>
                                                            <div class="color-varient"><a href="#0"
                                                                                          class="color-name pink">
                                                                    <span>Pink</span> </a> <a href="#0"
                                                                                              class="color-name red">
                                                                    <span>Red</span>
                                                                </a> <a href="#0"
                                                                        class="color-name yellow"><span>Yellow</span>
                                                                </a> <a href="#0" class="color-name blue">
                                                                    <span>Blue</span> </a> <a href="#0"
                                                                                              class="color-name black">
                                                                    <span>Black</span> </a></div>
                                                            <div class="add-product">
                                                                <h6>Qty:</h6>
                                                                <div class="button-group">
                                                                    <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                            class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                        <span class="increaseQty"> <i
                                                                                class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                    <button
                                                                        class="btn--primary "> Add to Cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="payment-method"><a href="#0"> <img
                                                                        src="assets/images/payment_method/method_1.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_2.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_3.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_4.png"
                                                                        alt=""> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-grid-two-content text-center">
                                            <span>Modern</span>
                                            <h5><a href="shop-details-2.html">Summer Shoes </a></h5>
                                            <p>
                                                <del>$200</del>
                                                $159.00
                                            </p>
                                            <p class="text"> Typi non habent claritatem insitam usus
                                                legentis qui facit eorum claritatem Investigationes
                                                demonstraverunt lectores legere mele lius quod legunt
                                                saepius Claritas est etiam processus a capitalize on low
                                                hanging </p>
                                            <div class="product-grid-two__overlay-box">
                                                <div class="title">
                                                    <h6><a href="cart.html">Add To Cart</a></h6>
                                                </div>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="#popup4cc" class="popup_link"><i
                                                                    class="flaticon-eye"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="flaticon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="product-grid-two list mt-30">
                                        <div class="product-grid-two__img"><a href="shop-details-2.html"
                                                                              class="d-block"> <img
                                                    src="assets/images/home-three/products-5.png" alt=""/>
                                            </a>
                                            <div class="products-grid-one__badge-box"> <span
                                                    class="badge bg_base new">Hot</span></div>
                                        </div>
                                        <div id="popup5vv" class="product-gird__quick-view-popup mfp-hide">
                                            <div class="container">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="quick-view__left-content">
                                                            <div class="tabs">
                                                                <div class="popup-product-thumb-box">
                                                                    <ul>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb">
                                                                            <a href="#tab444vv"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img5.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab555vv"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img6.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab666vv"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img7.jpg"
                                                                                    alt=""/> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="popup-product-main-image-box">
                                                                    <div id="tab444vv"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img5.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab555vv"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img6.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab666vv"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img7.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <button class="prev"><i
                                                                            class="flaticon-back"></i>
                                                                    </button>
                                                                    <button class="next"><i
                                                                            class="flaticon-next"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="popup-right-content">
                                                            <h3>Gold Hand Ring </h3>
                                                            <div class="ratting"><i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i>
                                                                <span>(123)</span></div>
                                                            <p class="text"> Wooden Tables to Brighten Your
                                                                Dining Room </p>
                                                            <div class="price">
                                                                <h2> $40 USD
                                                                    <del> $99 USD</del>
                                                                </h2>
                                                                <h6> In stuck</h6>
                                                            </div>
                                                            <div class="color-varient"><a href="#0"
                                                                                          class="color-name pink">
                                                                    <span>Pink</span> </a> <a href="#0"
                                                                                              class="color-name red">
                                                                    <span>Red</span>
                                                                </a> <a href="#0"
                                                                        class="color-name yellow"><span>Yellow</span>
                                                                </a> <a href="#0" class="color-name blue">
                                                                    <span>Blue</span> </a> <a href="#0"
                                                                                              class="color-name black">
                                                                    <span>Black</span> </a></div>
                                                            <div class="add-product">
                                                                <h6>Qty:</h6>
                                                                <div class="button-group">
                                                                    <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                            class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                        <span class="increaseQty"> <i
                                                                                class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                    <button
                                                                        class="btn--primary "> Add to Cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="payment-method"><a href="#0"> <img
                                                                        src="assets/images/payment_method/method_1.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_2.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_3.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_4.png"
                                                                        alt=""> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-grid-two-content text-center">
                                            <span>Modern</span>
                                            <h5><a href="shop-details-2.html">Outdoor Sports Shoes</a></h5>
                                            <p>
                                                <del>$200</del>
                                                $159.00
                                            </p>
                                            <p class="text"> Typi non habent claritatem insitam usus
                                                legentis qui facit eorum claritatem Investigationes
                                                demonstraverunt lectores legere mele lius quod legunt
                                                saepius Claritas est etiam processus a capitalize on low
                                                hanging </p>
                                            <div class="product-grid-two__overlay-box">
                                                <div class="title">
                                                    <h6><a href="cart.html">Add To Cart</a></h6>
                                                </div>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="#popup5vv" class="popup_link"><i
                                                                    class="flaticon-eye"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="flaticon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="product-grid-two list mt-30">
                                        <div class="product-grid-two__img"><a href="shop-details-2.html"
                                                                              class="d-block"> <img
                                                    src="assets/images/home-three/products-6.png" alt=""/>
                                            </a></div>
                                        <div id="popup6bb" class="product-gird__quick-view-popup mfp-hide">
                                            <div class="container">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="quick-view__left-content">
                                                            <div class="tabs">
                                                                <div class="popup-product-thumb-box">
                                                                    <ul>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb">
                                                                            <a href="#tab12bb"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img6.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab13bb"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img7.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab14bb"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img8.jpg"
                                                                                    alt=""/> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="popup-product-main-image-box">
                                                                    <div id="tab12bb"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img6.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab13bb"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img7.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab14bb"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img8.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <button class="prev"><i
                                                                            class="flaticon-back"></i>
                                                                    </button>
                                                                    <button class="next"><i
                                                                            class="flaticon-next"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="popup-right-content">
                                                            <h3>New Cotton Sofa </h3>
                                                            <div class="ratting"><i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i>
                                                                <span>(123)</span></div>
                                                            <p class="text"> Wooden Tables to Brighten Your
                                                                Dining Room </p>
                                                            <div class="price">
                                                                <h2> $40 USD
                                                                    <del> $99 USD</del>
                                                                </h2>
                                                                <h6> In stuck</h6>
                                                            </div>
                                                            <div class="color-varient"><a href="#0"
                                                                                          class="color-name pink">
                                                                    <span>Pink</span> </a> <a href="#0"
                                                                                              class="color-name red">
                                                                    <span>Red</span>
                                                                </a> <a href="#0"
                                                                        class="color-name yellow"><span>Yellow</span>
                                                                </a> <a href="#0" class="color-name blue">
                                                                    <span>Blue</span> </a> <a href="#0"
                                                                                              class="color-name black">
                                                                    <span>Black</span> </a></div>
                                                            <div class="add-product">
                                                                <h6>Qty:</h6>
                                                                <div class="button-group">
                                                                    <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                            class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                        <span class="increaseQty"> <i
                                                                                class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                    <button
                                                                        class="btn--primary "> Add to Cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="payment-method"><a href="#0"> <img
                                                                        src="assets/images/payment_method/method_1.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_2.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_3.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_4.png"
                                                                        alt=""> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-grid-two-content text-center">
                                            <span>Modern</span>
                                            <h5><a href="shop-details-2.html">Sport Sneakers</a></h5>
                                            <p>
                                                <del>$200</del>
                                                $159.00
                                            </p>
                                            <p class="text"> Typi non habent claritatem insitam usus
                                                legentis qui facit eorum claritatem Investigationes
                                                demonstraverunt lectores legere mele lius quod legunt
                                                saepius Claritas est etiam processus a capitalize on low
                                                hanging </p>
                                            <div class="product-grid-two__overlay-box">
                                                <div class="title">
                                                    <h6><a href="cart.html">Add To Cart</a></h6>
                                                </div>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="#popup6bb" class="popup_link"><i
                                                                    class="flaticon-eye"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="flaticon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="product-grid-two list mt-30">
                                        <div class="product-grid-two__img"><a href="shop-details-2.html"
                                                                              class="d-block"> <img
                                                    src="assets/images/home-three/productss2-1.jpg"
                                                    class="first-img" alt=""/> <img
                                                    src="assets/images/home-three/productss2-hover-1.png"
                                                    alt="" class="hover-img"/> </a>
                                            <div class="products-grid-one__badge-box"> <span
                                                    class="badge discount">-50%</span></div>
                                        </div>
                                        <div id="popup8nn" class="product-gird__quick-view-popup mfp-hide">
                                            <div class="container">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="quick-view__left-content">
                                                            <div class="tabs">
                                                                <div class="popup-product-thumb-box">
                                                                    <ul>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb">
                                                                            <a href="#tab15nn"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img7.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab16nn"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img8.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tab17nn"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img9.jpg"
                                                                                    alt=""/> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="popup-product-main-image-box">
                                                                    <div id="tab15nn"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img7.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab16nn"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img8.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tab17nn"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img9.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <button class="prev"><i
                                                                            class="flaticon-back"></i>
                                                                    </button>
                                                                    <button class="next"><i
                                                                            class="flaticon-next"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="popup-right-content">
                                                            <h3>Pure Gold Earring </h3>
                                                            <div class="ratting"><i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i>
                                                                <span>(123)</span></div>
                                                            <p class="text"> Wooden Tables to Brighten Your
                                                                Dining Room </p>
                                                            <div class="price">
                                                                <h2> $40 USD
                                                                    <del> $99 USD</del>
                                                                </h2>
                                                                <h6> In stuck</h6>
                                                            </div>
                                                            <div class="color-varient"><a href="#0"
                                                                                          class="color-name pink">
                                                                    <span>Pink</span> </a> <a href="#0"
                                                                                              class="color-name red">
                                                                    <span>Red</span>
                                                                </a> <a href="#0"
                                                                        class="color-name yellow"><span>Yellow</span>
                                                                </a> <a href="#0" class="color-name blue">
                                                                    <span>Blue</span> </a> <a href="#0"
                                                                                              class="color-name black">
                                                                    <span>Black</span> </a></div>
                                                            <div class="add-product">
                                                                <h6>Qty:</h6>
                                                                <div class="button-group">
                                                                    <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                            class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                        <span class="increaseQty"> <i
                                                                                class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                    <button
                                                                        class="btn--primary "> Add to Cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="payment-method"><a href="#0"> <img
                                                                        src="assets/images/payment_method/method_1.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_2.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_3.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_4.png"
                                                                        alt=""> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-grid-two-content text-center">
                                            <span>Modern</span>
                                            <h5><a href="shop-details-2.html">Apex Sneakers</a></h5>
                                            <p>
                                                <del>$200</del>
                                                $159.00
                                            </p>
                                            <p class="text"> Typi non habent claritatem insitam usus
                                                legentis qui facit eorum claritatem Investigationes
                                                demonstraverunt lectores legere mele lius quod legunt
                                                saepius Claritas est etiam processus a capitalize on low
                                                hanging </p>
                                            <div class="product-grid-two__overlay-box">
                                                <div class="title">
                                                    <h6><a href="cart.html">Add To Cart</a></h6>
                                                </div>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="#popup8nn" class="popup_link"><i
                                                                    class="flaticon-eye"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="flaticon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="product-grid-two list mt-30">
                                        <div class="product-grid-two__img"><a href="shop-details-2.html"
                                                                              class="d-block"> <img
                                                    src="assets/images/home-three/productss2-2.jpg"
                                                    class="first-img" alt=""/> <img
                                                    src="assets/images/home-three/productss2-hover-2.png"
                                                    alt="" class="hover-img"/> </a></div>
                                        <div id="popup9mm" class="product-gird__quick-view-popup mfp-hide">
                                            <div class="container">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="quick-view__left-content">
                                                            <div class="tabs">
                                                                <div class="popup-product-thumb-box">
                                                                    <ul>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb">
                                                                            <a href="#tabk1mm"> <img
                                                                                    src="assets/images/home-two/products-v5-img8.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tabk2mm"> <img
                                                                                    src="assets/images/home-two/products-v5-img4.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tabk3mm"> <img
                                                                                    src="assets/images/home-two/products-v5-img1.jpg"
                                                                                    alt=""/> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="popup-product-main-image-box">
                                                                    <div id="tabk1mm"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/home-two/products-v5-img8.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tabk2mm"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/home-two/products-v5-img4.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tabk3mm"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/home-two/products-v5-img1.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <button class="prev"><i
                                                                            class="flaticon-back"></i>
                                                                    </button>
                                                                    <button class="next"><i
                                                                            class="flaticon-next"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="popup-right-content">
                                                            <h3>Wooden TV Table </h3>
                                                            <div class="ratting"><i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i>
                                                                <span>(123)</span></div>
                                                            <p class="text"> Wooden Tables to Brighten Your
                                                                Dining Room </p>
                                                            <div class="price">
                                                                <h2> $40 USD
                                                                    <del> $99 USD</del>
                                                                </h2>
                                                                <h6> In stuck</h6>
                                                            </div>
                                                            <div class="color-varient"><a href="#0"
                                                                                          class="color-name pink">
                                                                    <span>Pink</span> </a> <a href="#0"
                                                                                              class="color-name red">
                                                                    <span>Red</span>
                                                                </a> <a href="#0"
                                                                        class="color-name yellow"><span>Yellow</span>
                                                                </a> <a href="#0" class="color-name blue">
                                                                    <span>Blue</span> </a> <a href="#0"
                                                                                              class="color-name black">
                                                                    <span>Black</span> </a></div>
                                                            <div class="add-product">
                                                                <h6>Qty:</h6>
                                                                <div class="button-group">
                                                                    <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                            class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                        <span class="increaseQty"> <i
                                                                                class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                    <button
                                                                        class="btn--primary"> Add to Cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="payment-method"><a href="#0"> <img
                                                                        src="assets/images/payment_method/method_1.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_2.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_3.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_4.png"
                                                                        alt=""> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-grid-two-content text-center">
                                            <span>Modern</span>
                                            <h5><a href="shop-details-2.html">Fashionable Sneakers</a></h5>
                                            <p>$159.00</p>
                                            <p class="text"> Typi non habent claritatem insitam usus
                                                legentis qui facit eorum claritatem Investigationes
                                                demonstraverunt lectores legere mele lius quod legunt
                                                saepius Claritas est etiam processus a capitalize on low
                                                hanging </p>
                                            <div class="product-grid-two__overlay-box">
                                                <div class="title">
                                                    <h6><a href="cart.html">Add To Cart</a></h6>
                                                </div>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="#popup9mm" class="popup_link"><i
                                                                    class="flaticon-eye"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="flaticon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="product-grid-two list mt-30">
                                        <div class="product-grid-two__img">
                                            <a href="shop-details-2.html" class="d-block">
                                                <img src="assets/images/home-three/productss2-3.jpg"
                                                     alt=""/> </a>
                                        </div>
                                        <div id="popupr1jj" class="product-gird__quick-view-popup mfp-hide">
                                            <div class="container">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="quick-view__left-content">
                                                            <div class="tabs">
                                                                <div class="popup-product-thumb-box">
                                                                    <ul>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb">
                                                                            <a href="#tabr1jj"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img9.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tabr2jj"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img10.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tabr3jj"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img11.jpg"
                                                                                    alt=""/> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="popup-product-main-image-box">
                                                                    <div id="tabr1jj"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img9.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tabr2jj"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img10.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tabr3jj"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img11.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <button class="prev"><i
                                                                            class="flaticon-back"></i>
                                                                    </button>
                                                                    <button class="next"><i
                                                                            class="flaticon-next"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="popup-right-content">
                                                            <h3>Brown Lather Chair </h3>
                                                            <div class="ratting"><i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i>
                                                                <span>(123)</span></div>
                                                            <p class="text"> Wooden Tables to Brighten Your
                                                                Dining Room </p>
                                                            <div class="price">
                                                                <h2> $40 USD
                                                                    <del> $99 USD</del>
                                                                </h2>
                                                                <h6> In stuck</h6>
                                                            </div>
                                                            <div class="color-varient"><a href="#0"
                                                                                          class="color-name pink">
                                                                    <span>Pink</span> </a> <a href="#0"
                                                                                              class="color-name red">
                                                                    <span>Red</span>
                                                                </a> <a href="#0"
                                                                        class="color-name yellow"><span>Yellow</span>
                                                                </a> <a href="#0" class="color-name blue">
                                                                    <span>Blue</span> </a> <a href="#0"
                                                                                              class="color-name black">
                                                                    <span>Black</span> </a></div>
                                                            <div class="add-product">
                                                                <h6>Qty:</h6>
                                                                <div class="button-group">
                                                                    <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                            class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                        <span class="increaseQty"> <i
                                                                                class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                    <button
                                                                        class="btn--primary "> Add to Cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="payment-method"><a href="#0"> <img
                                                                        src="assets/images/payment_method/method_1.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_2.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_3.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_4.png"
                                                                        alt=""> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-grid-two-content text-center">
                                            <span>Modern</span>
                                            <h5><a href="shop-details-2.html">Summer Shoes </a></h5>
                                            <p>$159.00</p>
                                            <p class="text"> Typi non habent claritatem insitam usus
                                                legentis qui facit eorum claritatem Investigationes
                                                demonstraverunt lectores legere mele lius quod legunt
                                                saepius Claritas est etiam processus a capitalize on low
                                                hanging </p>
                                            <div class="product-grid-two__overlay-box">
                                                <div class="title">
                                                    <h6><a href="cart.html">Add To Cart</a></h6>
                                                </div>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="#popupr1jj" class="popup_link"><i
                                                                    class="flaticon-eye"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="flaticon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="product-grid-two list mt-30">
                                        <div class="product-grid-two__img"><a href="shop-details-2.html"
                                                                              class="d-block">
                                                <img src="assets/images/home-three/productss2-4.jpg"
                                                     alt=""/> </a></div>
                                        <div id="popupr11hh"
                                             class="product-gird__quick-view-popup mfp-hide">
                                            <div class="container">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="quick-view__left-content">
                                                            <div class="tabs">
                                                                <div class="popup-product-thumb-box">
                                                                    <ul>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb">
                                                                            <a href="#tabr11hh"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img10.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tabr22hh"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img11.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tabr33hh"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img9.jpg"
                                                                                    alt=""/> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="popup-product-main-image-box">
                                                                    <div id="tabr11hh"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img10.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tabr22hh"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img11.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tabr33hh"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img9.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <button class="prev"><i
                                                                            class="flaticon-back"></i>
                                                                    </button>
                                                                    <button class="next"><i
                                                                            class="flaticon-next"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="popup-right-content">
                                                            <h3>Blacked Necklace Set </h3>
                                                            <div class="ratting"><i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i>
                                                                <span>(123)</span></div>
                                                            <p class="text"> Wooden Tables to Brighten Your
                                                                Dining Room </p>
                                                            <div class="price">
                                                                <h2> $40 USD
                                                                    <del> $99 USD</del>
                                                                </h2>
                                                                <h6> In stuck</h6>
                                                            </div>
                                                            <div class="color-varient"><a href="#0"
                                                                                          class="color-name pink">
                                                                    <span>Pink</span> </a> <a href="#0"
                                                                                              class="color-name red">
                                                                    <span>Red</span>
                                                                </a> <a href="#0"
                                                                        class="color-name yellow"><span>Yellow</span>
                                                                </a> <a href="#0" class="color-name blue">
                                                                    <span>Blue</span> </a> <a href="#0"
                                                                                              class="color-name black">
                                                                    <span>Black</span> </a></div>
                                                            <div class="add-product">
                                                                <h6>Qty:</h6>
                                                                <div class="button-group">
                                                                    <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                            class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                        <span class="increaseQty"> <i
                                                                                class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                    <button
                                                                        class="btn--primary "> Add to Cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="payment-method"><a href="#0"> <img
                                                                        src="assets/images/payment_method/method_1.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_2.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_3.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_4.png"
                                                                        alt=""> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-grid-two-content text-center">
                                            <span>Modern</span>
                                            <h5><a href="shop-details-2.html">High Quality Sneakers</a></h5>
                                            <p>$159.00</p>
                                            <p class="text"> Typi non habent claritatem insitam usus
                                                legentis qui facit eorum claritatem Investigationes
                                                demonstraverunt lectores legere mele lius quod legunt
                                                saepius Claritas est etiam processus a capitalize on low
                                                hanging </p>
                                            <div class="product-grid-two__overlay-box">
                                                <div class="title">
                                                    <h6><a href="cart.html">Add To Cart</a></h6>
                                                </div>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="#popupr11hh" class="popup_link"><i
                                                                    class="flaticon-eye"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="flaticon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="product-grid-two list mt-30">
                                        <div class="product-grid-two__img"><a href="shop-details-2.html"
                                                                              class="d-block"> <img
                                                    src="assets/images/home-three/productss3-1.jpg"
                                                    alt=""/> </a></div>
                                        <div id="popupr111g"
                                             class="product-gird__quick-view-popup mfp-hide">
                                            <div class="container">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="quick-view__left-content">
                                                            <div class="tabs">
                                                                <div class="popup-product-thumb-box">
                                                                    <ul>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb">
                                                                            <a href="#tabr111g"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img11.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tabr222g"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img10.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tabr333g"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img9.jpg"
                                                                                    alt=""/> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="popup-product-main-image-box">
                                                                    <div id="tabr111g"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img11.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tabr222g"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img9.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tabr333g"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img10.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <button class="prev"><i
                                                                            class="flaticon-back"></i>
                                                                    </button>
                                                                    <button class="next"><i
                                                                            class="flaticon-next"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="popup-right-content">
                                                            <h3>Diamond Bracelet </h3>
                                                            <div class="ratting"><i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i>
                                                                <span>(123)</span></div>
                                                            <p class="text"> Wooden Tables to Brighten Your
                                                                Dining Room </p>
                                                            <div class="price">
                                                                <h2> $40 USD
                                                                    <del> $99 USD</del>
                                                                </h2>
                                                                <h6> In stuck</h6>
                                                            </div>
                                                            <div class="color-varient"><a href="#0"
                                                                                          class="color-name pink">
                                                                    <span>Pink</span> </a> <a href="#0"
                                                                                              class="color-name red">
                                                                    <span>Red</span>
                                                                </a> <a href="#0"
                                                                        class="color-name yellow"><span>Yellow</span>
                                                                </a> <a href="#0" class="color-name blue">
                                                                    <span>Blue</span> </a> <a href="#0"
                                                                                              class="color-name black">
                                                                    <span>Black</span> </a></div>
                                                            <div class="add-product">
                                                                <h6>Qty:</h6>
                                                                <div class="button-group">
                                                                    <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                            class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                        <span class="increaseQty"> <i
                                                                                class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                    <button
                                                                        class="btn--primary "> Add to Cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="payment-method"><a href="#0"> <img
                                                                        src="assets/images/payment_method/method_1.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_2.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_3.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_4.png"
                                                                        alt=""> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-grid-two-content text-center">
                                            <span>Modern</span>
                                            <h5><a href="shop-details-2.html">Outdoor Sports Shoes </a></h5>
                                            <p>$159.00</p>
                                            <p class="text"> Typi non habent claritatem insitam usus
                                                legentis qui facit eorum claritatem Investigationes
                                                demonstraverunt lectores legere mele lius quod legunt
                                                saepius Claritas est etiam processus a capitalize on low
                                                hanging </p>
                                            <div class="product-grid-two__overlay-box">
                                                <div class="title">
                                                    <h6><a href="cart.html">Add To Cart</a></h6>
                                                </div>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="#popupr111g" class="popup_link"><i
                                                                    class="flaticon-eye"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="flaticon-heart"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="product-grid-two list mt-30">
                                        <div class="product-grid-two__img"><a href="shop-details-2.html"
                                                                              class="d-block"> <img
                                                    src="assets/images/home-three/productss3-2.jpg"
                                                    alt=""/> </a></div>
                                        <div id="popupr1111gg"
                                             class="product-gird__quick-view-popup mfp-hide">
                                            <div class="container">
                                                <div class="row justify-content-between align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="quick-view__left-content">
                                                            <div class="tabs">
                                                                <div class="popup-product-thumb-box">
                                                                    <ul>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb">
                                                                            <a href="#tabr1111gg"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img9.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tabr2222gg"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img8.jpg"
                                                                                    alt=""/> </a></li>
                                                                        <li
                                                                            class="tab-nav popup-product-thumb ">
                                                                            <a href="#tabr3333gg"> <img
                                                                                    src="assets/images/shop/shop-grid-page-img8.jpg"
                                                                                    alt=""/> </a></li>
                                                                    </ul>
                                                                </div>
                                                                <div class="popup-product-main-image-box">
                                                                    <div id="tabr1111"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img9.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tabr2222"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img8.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <div id="tabr3333"
                                                                         class="tab-item popup-product-image">
                                                                        <div
                                                                            class="popup-product-single-image">
                                                                            <img
                                                                                src="assets/images/shop/shop-grid-page-img7.jpg"
                                                                                alt=""/></div>
                                                                    </div>
                                                                    <button class="prev"><i
                                                                            class="flaticon-back"></i>
                                                                    </button>
                                                                    <button class="next"><i
                                                                            class="flaticon-next"></i>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="popup-right-content">
                                                            <h3>Comfort Office Chair </h3>
                                                            <div class="ratting"><i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i> <i
                                                                    class="flaticon-star"></i>
                                                                <span>(123)</span></div>
                                                            <p class="text"> Wooden Tables to Brighten Your
                                                                Dining Room </p>
                                                            <div class="price">
                                                                <h2> $40 USD
                                                                    <del> $99 USD</del>
                                                                </h2>
                                                                <h6> In stuck</h6>
                                                            </div>
                                                            <div class="color-varient"><a href="#0"
                                                                                          class="color-name pink">
                                                                    <span>Pink</span> </a> <a href="#0"
                                                                                              class="color-name red">
                                                                    <span>Red</span>
                                                                </a> <a href="#0"
                                                                        class="color-name yellow"><span>Yellow</span>
                                                                </a> <a href="#0" class="color-name blue">
                                                                    <span>Blue</span> </a> <a href="#0"
                                                                                              class="color-name black">
                                                                    <span>Black</span> </a></div>
                                                            <div class="add-product">
                                                                <h6>Qty:</h6>
                                                                <div class="button-group">
                                                                    <div class="qtySelector text-center">
                                                                                    <span class="decreaseQty"><i
                                                                                            class="flaticon-minus"></i>
                                                                                    </span> <input type="number"
                                                                                                   class="qtyValue"
                                                                                                   value="1"/>
                                                                        <span class="increaseQty"> <i
                                                                                class="flaticon-plus"></i>
                                                                                    </span></div>
                                                                    <button
                                                                        class="btn--primary "> Add to Cart
                                                                    </button>
                                                                </div>
                                                            </div>
                                                            <div class="payment-method"><a href="#0"> <img
                                                                        src="assets/images/payment_method/method_1.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_2.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_3.png"
                                                                        alt=""> </a> <a href="#0"> <img
                                                                        src="assets/images/payment_method/method_4.png"
                                                                        alt=""> </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-grid-two-content text-center">
                                            <span>Modern</span>
                                            <h5><a href="shop-details-2.html"> High Quality Sneakers </a>
                                            </h5>
                                            <p>$159.00</p>
                                            <p class="text"> Typi non habent claritatem insitam usus
                                                legentis qui facit eorum claritatem Investigationes
                                                demonstraverunt lectores legere mele lius quod legunt
                                                saepius Claritas est etiam processus a capitalize on low
                                                hanging </p>
                                            <div class="product-grid-two__overlay-box">
                                                <div class="title">
                                                    <h6><a href="cart.html">Add To Cart</a></h6>
                                                </div>
                                                <div class="icon">
                                                    <ul>
                                                        <li><a href="#popupr1111gg" class="popup_link"><i
                                                                    class="flaticon-eye"></i></a></li>
                                                        <li><a href="wishlist.html"><i
                                                                    class="flaticon-heart"></i></a></li>
                                                    </ul>
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
            <div class="row">
                <div class="col-12 d-flex justify-content-center wow fadeInUp animated">
                    <ul class="pagination text-center">
                        <li class="next"><a href="#0"><i class="flaticon-left-arrows"
                                                         aria-hidden="true"></i> </a></li>
                        <li><a href="#0">1</a></li>
                        <li><a href="#0" class="active">2</a></li>
                        <li><a href="#0">3</a></li>
                        <li><a href="#0">...</a></li>
                        <li><a href="#0">10</a></li>
                        <li class="next"><a href="#0"><i class="flaticon-next-1"
                                                         aria-hidden="true"></i> </a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="assets/js/jqurey.v3.6.0.min.js"></script> <!-- Popper v2.9.3 Js -->
<script src="assets/js/popper.v2.9.3.min.js"></script> <!-- Bootstrap v5.1.1 js -->
<script src="assets/js/bootstrap.v5.1.1.min.js"></script> <!-- jquery ui js -->
<script src="assets/js/plugin/jquery-ui.min.js"></script> <!-- Parallax js -->
<script src="assets/js/plugin/jarallax.min.js"></script> <!-- Slick Slider Js -->
<script src="assets/js/plugin/slick.min.js"></script> <!-- isotope Js -->
<script src="assets/js/plugin/isotope.js"></script> <!-- magnific-popup v2.3.4 Js -->
<script src="assets/js/plugin/jquery.magnific-popup.min.js"></script> <!-- Tweenmax v2.3.4 Js -->
<script src="assets/js/plugin/tweenMax.min.js"></script> <!-- Nice Select Js -->
<script src="assets/js/plugin/nice-select.v1.0.min.js"></script> <!-- Wow js -->
<script src="assets/js/plugin/wow.v1.3.0.min.js"></script> <!-- Wow js -->
<script src="assets/js/plugin/jquery.countdown.min.js"></script> <!-- Main js -->
<script src="assets/js/main.js"></script>
<script>
    function filterArea() {
        let areaString = $('#priceRange').val();
        // let sort = $('#sortSelect').val();
        let numbers = areaString.replace('area:', '').trim();
        let splitNumbers = numbers.split('-');
        let min_area = parseInt(splitNumbers[0].trim(), 10);
        let max_area = parseInt(splitNumbers[1].trim(), 10);
        let rooms_1 = $('#rooms_1').is(':checked') ? $('#rooms_1').val() : '';
        let rooms_2 = $('#rooms_2').is(':checked') ? $('#rooms_2').val() : '';
        let rooms_3 = $('#rooms_3').is(':checked') ? $('#rooms_3').val() : '';
        let rooms_4 = $('#rooms_4').is(':checked') ? $('#rooms_4').val() : '';
        let rooms_5 = $('#rooms_5').is(':checked') ? $('#rooms_5').val() : '';
        let rooms_6 = $('#rooms_6').is(':checked') ? $('#rooms_6').val() : '';
        let rooms_7 = $('#rooms_7').is(':checked') ? $('#rooms_7').val() : '';
        let rooms_8 = $('#rooms_8').is(':checked') ? $('#rooms_8').val() : '';
        let photo_no = $('#photo_no').val();
        let photo_yes = $('#photo_yes').is(':checked') ? $('#photo_yes').val() : '';
        $.get({
            url: '{{url('/')}}',
            data: {
                min_area: min_area,
                max_area: max_area,
                rooms_1: rooms_1,
                rooms_2: rooms_2,
                rooms_3: rooms_3,
                rooms_4: rooms_4,
                rooms_5: rooms_5,
                rooms_6: rooms_6,
                rooms_7: rooms_7,
                rooms_8: rooms_8,
                photo_yes: photo_yes,
                photo_no: photo_no,
            },
            dataType: 'json',
            success: function (response) {
                $('#ajax-properties').html(response.view);
            },
        });
    }
    function filterRooms() {
        let areaString = $('#priceRange').val();
        // let sort = $('#sortSelect').val();
        let numbers = areaString.replace('area:', '').trim();
        let splitNumbers = numbers.split('-');
        let min_area = parseInt(splitNumbers[0].trim(), 10);
        let max_area = parseInt(splitNumbers[1].trim(), 10);
        let rooms_1 = $('#rooms_1').is(':checked') ? $('#rooms_1').val() : '';
        let rooms_2 = $('#rooms_2').is(':checked') ? $('#rooms_2').val() : '';
        let rooms_3 = $('#rooms_3').is(':checked') ? $('#rooms_3').val() : '';
        let rooms_4 = $('#rooms_4').is(':checked') ? $('#rooms_4').val() : '';
        let rooms_5 = $('#rooms_5').is(':checked') ? $('#rooms_5').val() : '';
        let rooms_6 = $('#rooms_6').is(':checked') ? $('#rooms_6').val() : '';
        let rooms_7 = $('#rooms_7').is(':checked') ? $('#rooms_7').val() : '';
        let rooms_8 = $('#rooms_8').is(':checked') ? $('#rooms_8').val() : '';
        let photo_no = $('#photo_no').val();
        let photo_yes = $('#photo_yes').is(':checked') ? $('#photo_yes').val() : '';
        $.get({
            url: '{{url('/')}}',
            data: {
                min_area: min_area,
                max_area: max_area,
                rooms_1: rooms_1,
                rooms_2: rooms_2,
                rooms_3: rooms_3,
                rooms_4: rooms_4,
                rooms_5: rooms_5,
                rooms_6: rooms_6,
                rooms_7: rooms_7,
                rooms_8: rooms_8,
                photo_yes: photo_yes,
                photo_no: photo_no,
            },
            dataType: 'json',
            success: function (response) {
                $('#ajax-properties').html(response.view);
            },
        });
    }
    function filterPhoto() {
        let areaString = $('#priceRange').val();
        // let sort = $('#sortSelect').val();
        let numbers = areaString.replace('area:', '').trim();
        let splitNumbers = numbers.split('-');
        let min_area = parseInt(splitNumbers[0].trim(), 10);
        let max_area = parseInt(splitNumbers[1].trim(), 10);
        let rooms_1 = $('#rooms_1').is(':checked') ? $('#rooms_1').val() : '';
        let rooms_2 = $('#rooms_2').is(':checked') ? $('#rooms_2').val() : '';
        let rooms_3 = $('#rooms_3').is(':checked') ? $('#rooms_3').val() : '';
        let rooms_4 = $('#rooms_4').is(':checked') ? $('#rooms_4').val() : '';
        let rooms_5 = $('#rooms_5').is(':checked') ? $('#rooms_5').val() : '';
        let rooms_6 = $('#rooms_6').is(':checked') ? $('#rooms_6').val() : '';
        let rooms_7 = $('#rooms_7').is(':checked') ? $('#rooms_7').val() : '';
        let rooms_8 = $('#rooms_8').is(':checked') ? $('#rooms_8').val() : '';
        let photo_no = $('#photo_no').val();
        let photo_yes = $('#photo_yes').is(':checked') ? $('#photo_yes').val() : '';
        $.get({
            url: '{{url('/')}}',
            data: {
                min_area: min_area,
                max_area: max_area,
                rooms_1: rooms_1,
                rooms_2: rooms_2,
                rooms_3: rooms_3,
                rooms_4: rooms_4,
                rooms_5: rooms_5,
                rooms_6: rooms_6,
                rooms_7: rooms_7,
                rooms_8: rooms_8,
                photo_yes: photo_yes,
                photo_no: photo_no,
            },
            dataType: 'json',
            success: function (response) {
                $('#ajax-properties').html(response.view);
            },
        });
    }
    $("#price-range").slider({
        range: true,
        min: 0,
        max: 5000,
        values: [0, 3500], // Example initial values
        slide: function(event, ui) {
            $("#priceRange").val(ui.values[0] + " - " + ui.values[1]);
            filterArea(); // Call the filter function directly here
        }
    });

</script>
</body>
</html>
