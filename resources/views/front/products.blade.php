@extends('front.layouts.app')
@section('title', __('website.categories'))
@section('content')
    @if ($products->count() > 0)
        <section class="product product-sidebar seller-sidebar footer-padding">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-3">
                        <div class="sidebar" data-aos="fade-right">
                            <div class="sidebar-section">
                                <div class="sidebar-wrapper">
                                    <h5 class="wrapper-heading">Product Categories</h5>
                                    <div class="sidebar-item">
                                        <ul class="sidebar-list">
                                            <li>
                                                <input type="checkbox" id="mobile" name="mobile">
                                                <label for="mobile">Mobile & Laptops</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="bags" name="bags">
                                                <label for="bags">Bags</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="sweatshirt" name="sweatshirt">
                                                <label for="sweatshirt">Sweatshirt</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="boots" name="boots">
                                                <label for="boots">Boots</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="accessories" name="accessories">
                                                <label for="accessories">Accessories</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="sneakers" name="sneakers">
                                                <label for="sneakers">Sneakers</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="outerwear" name="outerwear">
                                                <label for="outerwear">Outerwear</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="activewear" name="activewear">
                                                <label for="activewear">Activewear</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="grooming" name="grooming">
                                                <label for="grooming">Grooming</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="cosmatics" name="cosmatics">
                                                <label for="cosmatics">Cosmetics</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="watch" name="watch">
                                                <label for="watch">Watch</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="sidebar-wrapper sidebar-range">
                                    <h5 class="wrapper-heading">Price Range</h5>
                                    <div class="price-slide range-slider">
                                        <div class="price">
                                            <div class="range-slider style-1">
                                                <div id="slider-tooltips" class="mb-3 slider-range"></div>
                                                <span class="example-val" id="slider-margin-value-min"></span>
                                                <span>-</span>
                                                <span class="example-val" id="slider-margin-value-max"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <div class="sidebar-wrapper">
                                    <h5 class="wrapper-heading">Brands</h5>
                                    <div class="sidebar-item">
                                        <ul class="sidebar-list">
                                            <li>
                                                <input type="checkbox" id="thread" name="thread">
                                                <label for="thread">Refined Threads
                                                </label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="ethereal" name="ethereal">
                                                <label for="ethereal">Ethereal Chic</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="yellow" name="yellow">
                                                <label for="yellow">Yellow</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="esctasy" name="esctasy">
                                                <label for="esctasy">Esctasy</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="urban" name="urban">
                                                <label for="urban">Urban Hive</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="velvet" name="velvet">
                                                <label for="velvet">Velvet Vista</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="boldly" name="boldly">
                                                <label for="boldly">Boldly Blue</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="minted" name="minted">
                                                <label for="minted">Minted Mode</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="ensemble" name="ensemble">
                                                <label for="ensemble">Eclectic Ensemble</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="attire" name="attire">
                                                <label for="attire">BraveAlchemy Attire</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="couture" name="couture">
                                                <label for="couture">Cascade Couture</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="sidebar-wrapper">
                                    <h5 class="wrapper-heading">Color</h5>
                                    <div class="sidebar-item">
                                        <ul class="sidebar-list">
                                            <li>
                                                <input type="checkbox" id="red" name="red">
                                                <label for="red">Red</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="blue" name="blue">
                                                <label for="blue">blue</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="navy" name="navy">
                                                <label for="navy">Navy</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>
                                <div class="sidebar-wrapper">
                                    <h5 class="wrapper-heading">Size</h5>
                                    <div class="sidebar-item">
                                        <ul class="sidebar-list">
                                            <li>
                                                <input type="checkbox" id="small" name="small">
                                                <label for="small">Small</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="medium" name="medium">
                                                <label for="medium">Medium</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="large" name="large">
                                                <label for="large">Large</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="xl" name="xl">
                                                <label for="xl">XL</label>
                                            </li>
                                            <li>
                                                <input type="checkbox" id="2xl" name="2xl">
                                                <label for="2xl">2XL</label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-shop-section">
                                <span class="wrapper-subtitle">TRENDY</span>
                                <h5 class="wrapper-heading">Best wireless Shoes</h5>
                                <a href="product-sidebar.html" class="shop-btn deal-btn">Shop Now </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="product-sidebar-section" data-aos="fade-up">
                            <div class="row g-5">
                                @if (isset($flashtimer) && $flashtimer == 'true')
                                    <div class="col-12">
                                        <div class="countdown-section">
                                            <div class="countdown-items">
                                                <span id="day" class="number" style="color: red">0</span>
                                                <span class="text">Days</span>
                                            </div>
                                            <div class="countdown-items">
                                                <span id="hour" class="number" style="color: skyblue">0</span>
                                                <span class="text">Hours</span>
                                            </div>
                                            <div class="countdown-items">
                                                <span id="minute" class="number" style="color: green">0</span>
                                                <span class="text">Minutes</span>
                                            </div>
                                            <div class="countdown-items">
                                                <span id="second" class="number" style="color: red">0</span>
                                                <span class="text">seconds</span>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                                <div class="col-lg-12">
                                    <div class="product-sorting-section">
                                        <div class="result">
                                            <p> {{ __('website.showing') }}
                                                <span>{{ $products->firstItem() }}–{{ $products->lastItem() }}
                                                    {{ __('website.of') }} {{ $products->total() }}
                                                    {{ __('website.results') }}</span>
                                            </p>
                                        </div>
                                        <div class="product-sorting">
                                            <span class="product-sort">Sort by:</span>
                                            <div class="product-list">
                                                <span class="default">Default</span>
                                                <span>
                                                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M1 1L5 5L9 1" stroke="#9A9A9A" />
                                                    </svg>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @foreach ($products as $item)
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="product-wrapper" data-aos="fade-up">
                                            <div class="product-img">
                                                <img src="{{ asset('uploads/products/' . $item->images->first()->file_name) }}"
                                                    alt="product-img">
                                                <div
                                                    class="top-0 px-2 py-1 text-white rounded position-absolute start-0 bg-danger">
                                                    {{ $item->brand->name }}
                                                </div>
                                                <div class="product-cart-items">
                                                    <a href="#" class="cart cart-item">
                                                        <span>
                                                            <svg width="40" height="40" viewBox="0 0 40 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="40" height="40" rx="20"
                                                                    fill="white" />
                                                                <path
                                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                                    fill="#181818" />
                                                                <path
                                                                    d="M12 14.4482V16.5664H12.5466H13.0933V15.3957V14.2204L15.6214 16.7486L18.1496 19.2767L18.5459 18.8759L18.9468 18.4796L16.4186 15.9514L13.8904 13.4232H15.0657H16.2364V12.8766V12.33H14.1182H12V14.4482Z"
                                                                    fill="black" fill-opacity="0.2" />
                                                                <path
                                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                                    fill="#181818" />
                                                                <path
                                                                    d="M23.4345 12.8766V13.4232H24.6052H25.7805L23.2523 15.9514L20.7241 18.4796L21.125 18.8759L21.5213 19.2767L24.0495 16.7486L26.5776 14.2204V15.3957V16.5664H27.1243H27.6709V14.4482V12.33H25.5527H23.4345V12.8766Z"
                                                                    fill="black" fill-opacity="0.2" />
                                                                <path
                                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                                    fill="#181818" />
                                                                <path
                                                                    d="M15.6078 23.5905L13.0933 26.1096V24.9343V23.7636H12.5466H12V25.8818V28H14.1182H16.2364V27.4534V26.9067H15.0657H13.8904L16.4186 24.3786L18.9468 21.8504L18.5596 21.4632C18.35 21.2491 18.1633 21.076 18.1496 21.076C18.1359 21.076 16.9926 22.2103 15.6078 23.5905Z"
                                                                    fill="black" fill-opacity="0.2" />
                                                                <path
                                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                                    fill="#181818" />
                                                                <path
                                                                    d="M21.1113 21.4632L20.7241 21.8504L23.2523 24.3786L25.7805 26.9067H24.6052H23.4345V27.4534V28H25.5527H27.6709V25.8818V23.7636H27.1243H26.5776V24.9343V26.1096L24.0586 23.5905C22.6783 22.2103 21.535 21.076 21.5213 21.076C21.5076 21.076 21.3209 21.2491 21.1113 21.4632Z"
                                                                    fill="black" fill-opacity="0.2" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a href="#" class="favourite cart-item">
                                                        <span>
                                                            <svg width="40" height="40" viewBox="0 0 40 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="40" height="40" rx="20"
                                                                    fill="#AE1C9A" />
                                                                <path
                                                                    d="M14.6928 12.3935C13.5057 12.54 12.512 13.0197 11.671 13.8546C10.9155 14.6016 10.4615 15.3926 10.201 16.4216C9.73957 18.2049 10.0745 19.9626 11.1835 21.6141C11.8943 22.6723 12.8135 23.6427 14.4993 25.1221C15.571 26.0632 18.8422 28.8096 19.0022 28.9011C19.1511 28.989 19.2069 29 19.5232 29C19.8395 29 19.8953 28.989 20.0442 28.9011C20.2042 28.8096 23.4828 26.0595 24.5471 25.1221C26.2404 23.6354 27.1521 22.6687 27.8629 21.6141C28.9719 19.9626 29.3068 18.2049 28.8454 16.4216C28.5849 15.3926 28.1309 14.6016 27.3754 13.8546C26.6237 13.1113 25.8199 12.6828 24.7667 12.4631C24.2383 12.3533 23.2632 12.3423 22.8018 12.4448C21.5142 12.7194 20.528 13.3529 19.6274 14.4808L19.5232 14.609L19.4227 14.4808C18.5333 13.3749 17.562 12.7414 16.3228 12.4631C15.9544 12.3789 15.1059 12.3423 14.6928 12.3935ZM15.9357 13.5104C16.9926 13.6935 17.9044 14.294 18.6263 15.2864C18.7491 15.4585 18.9017 15.6636 18.9613 15.7478C19.2367 16.1286 19.8098 16.1286 20.0851 15.7478C20.1447 15.6636 20.2973 15.4585 20.4201 15.2864C21.4062 13.9315 22.7795 13.2944 24.2755 13.4958C25.9352 13.7191 27.2303 14.8616 27.7252 16.5424C28.116 17.8717 27.9448 19.2668 27.234 20.5228C26.6386 21.5738 25.645 22.676 23.9145 24.203C23.0772 24.939 19.5567 27.9198 19.5232 27.9198C19.486 27.9198 15.9804 24.95 15.1319 24.203C12.4711 21.8557 11.4217 20.391 11.1686 18.6736C11.0049 17.5641 11.2393 16.3703 11.8087 15.4292C12.6646 14.0121 14.3318 13.2358 15.9357 13.5104Z"
                                                                    fill="#000" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                    <a href="compaire.html" class="compaire cart-item">
                                                        <span>
                                                            <svg width="40" height="40" viewBox="0 0 40 40"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect width="40" height="40" rx="20"
                                                                    fill="white" />
                                                                <path
                                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                                    fill="#181818" />
                                                                <path
                                                                    d="M18.8948 10.6751C18.8948 11.0444 18.8829 11.3502 18.871 11.3502C18.8591 11.3502 18.6645 11.3859 18.4461 11.4336C14.674 12.1959 11.8588 15.1779 11.3346 18.966C11.2115 19.8316 11.2632 21.1499 11.4498 22.0314C11.9223 24.2867 13.3875 26.4031 15.3252 27.642L15.5515 27.7849L16.1114 27.364C16.4171 27.1337 16.6712 26.9352 16.6712 26.9193C16.6712 26.9074 16.572 26.8439 16.4529 26.7803C15.8453 26.4627 15.0552 25.8274 14.5191 25.2278C13.5026 24.0882 12.8514 22.6984 12.641 21.2372C12.5655 20.6972 12.5655 19.6251 12.641 19.1129C12.8038 18.0289 13.185 17.0044 13.7568 16.1071C14.4715 14.9913 15.5594 14.0145 16.7507 13.4149C17.3542 13.1132 18.192 12.8273 18.7678 12.724L18.8948 12.7002V13.2561C18.8948 13.5618 18.9028 13.812 18.9147 13.812C18.9544 13.812 21.4361 11.9339 21.4361 11.9061C21.4361 11.8783 18.9544 10.0001 18.9147 10.0001C18.9028 10.0001 18.8948 10.3019 18.8948 10.6751Z"
                                                                    fill="black" fill-opacity="0.2" />
                                                                <path
                                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                                    fill="#181818" />
                                                                <path
                                                                    d="M24.219 12.9662C23.9133 13.1965 23.6671 13.399 23.679 13.4149C23.6909 13.4347 23.81 13.5102 23.949 13.5856C25.1124 14.2448 26.1964 15.3566 26.8675 16.5914C27.2725 17.334 27.614 18.414 27.7092 19.2558C27.7887 19.9189 27.741 21.0585 27.614 21.662C27.066 24.2589 25.2593 26.3514 22.7657 27.2806C22.452 27.3957 21.6023 27.63 21.4911 27.63C21.4474 27.63 21.4355 27.5307 21.4355 27.0741C21.4355 26.7684 21.4276 26.5182 21.4157 26.5182C21.376 26.5182 18.8943 28.3963 18.8943 28.4241C18.8943 28.4519 21.376 30.3301 21.4157 30.3301C21.4276 30.3301 21.4355 30.0283 21.4355 29.6551V28.984L21.5864 28.9602C21.9557 28.9006 23 28.6187 23.3415 28.4837C26.4386 27.2726 28.559 24.5884 28.9997 21.3166C29.1149 20.4748 29.0633 19.1565 28.8806 18.2988C28.4081 16.0435 26.9429 13.9271 25.0052 12.6882L24.7789 12.5453L24.219 12.9662Z"
                                                                    fill="black" fill-opacity="0.2" />
                                                            </svg>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-description">
                                                    <a href="{{ route('website.product.show', $item->slug) }}"
                                                        class="product-details">{{ $item->getTranslation('name', app()->getLocale()) }}
                                                    </a>
                                                    <div class="price">
                                                        @if ($item->has_variant == 0)
                                                            @if ($item->has_discount == 1)
                                                                <span class="price-cut">{{ $item->price }}</span>
                                                                <span
                                                                    class="new-price">{{ $item->getPriceAfterDiscount() }}</span>
                                                            @else
                                                                <span class="new-price">{{ $item->price }}</span>
                                                            @endif
                                                        @else
                                                            <span
                                                                class="new-price">{{ __('website.show_vartiant') }}</span>
                                                        @endif

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-cart-btn">
                                                <a href="cart.html" class="product-btn">Add To Cart</a>
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
        </section>
    @else
        <section class="blog about-blog footer-padding">
            <div class="container">
                <div class="blog-bradcrum">
                    <span><a href="{{ route('website.home') }}">Home</a></span>
                    <span class="devider">/</span>
                    <span><a href="#">404 Not Found</a></span>
                </div>
                <div class="blog-item" data-aos="fade-up">
                    <div class="cart-img">
                        <img src="{{ asset('assets/front/assets/images/homepage-one/empty-cart.webp') }}" alt />
                    </div>
                    <div class="cart-content">
                        <p class="content-title">Empty! You don’t Cart any Products</p>
                        <a href="{{ route('website.home') }}" class="shop-btn">Back to Shop</a>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection



@section('js')

@if(isset($flashtimer) && $flashtimer == 'true')
    <script>
        function StartCountDown() {
            const now = new Date();
            const endOfDate = new Date();
            endOfDate.setHours(23, 59, 59, 999);
            const diff = endOfDate - now;
            if (diff < 0) {
                $("#day").text(0);
                $("#hour").text(0);
                $("#minute").text(0);
                $("#second").text(0);
            } else {
                const totalsecond = Math.floor(diff / 1000);
                const hour = Math.floor((totalsecond % (86400)) / (3600));
                const minute = Math.floor((totalsecond % (3600)) / 60);
                const second = Math.floor(totalsecond % 60);
                $("#day").text("0");
                $("#hour").text(String(hour).padStart(2,'0'));
                $("#minute").text(String(minute).padStart(2,'0'));
                $("#second").text(String(second).padStart(2,'0'));
            }
        }
        $(function(){
            StartCountDown();
            setInterval(StartCountDown, 1000);
        })

    </script>
@endif
@endsection
