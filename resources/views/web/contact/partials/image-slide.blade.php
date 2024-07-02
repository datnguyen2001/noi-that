<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="title_product_single">
                <h1 class="product_title entry-title woocommerce-products-header__title page-title">
                    <span>{{$productDetails->name}}</span>
                </h1>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-8">
            <div class="images gallery-horizontal">
                <section class="slider dev3b-slider-for" style="padding: 0 8px">
                    <div id="displayImage" class="zoom" style="position: relative;left: 0;top: 0;z-index: 10;opacity: 1; height:auto !important;">
                        <img id="mainImage" width="100%" height="auto"
                             alt="Sofa gỗ óc chó tích hợp ngăn để đồ"
                             title="phòng khách bếp nhà anh sơn - madarin 1"
                             decoding="async"
                             data-srcset="https://goocchohaanh.com/wp-content/uploads/2020/01/ban-tra-go-oc-cho-tu-nhien-ha-anh-HK-801.jpg 800w, https://goocchohaanh.com/wp-content/uploads/2020/01/ban-tra-go-oc-cho-tu-nhien-ha-anh-HK-801-768x432.jpg 768w, https://goocchohaanh.com/wp-content/uploads/2020/01/ban-tra-go-oc-cho-tu-nhien-ha-anh-HK-801-300x169.jpg 300w, https://goocchohaanh.com/wp-content/uploads/2020/01/ban-tra-go-oc-cho-tu-nhien-ha-anh-HK-801-600x338.jpg 600w"
                             data-src="{{$productDetails->src}}"
                             data-sizes="(max-width: 800px) 100vw, 800px"
                             class="attachment-full size-full wp-post-image lazyloaded"
                             src="{{$productDetails->src}}"
                            style="max-height: 500px; object-fit: cover"
                        />
                        <a
                            href="#" data-toggle="modal" data-target="#imageModal"
                            class="dev3b-popup flat flat-expand"
                            data-fancybox="product-gallery">
                            <img src="{{asset('assets/images/expand.png')}}" style="height: 30px" alt="Sofa">
                        </a>
                    </div>
                </section>
                <section id="dev3b-gallery" class="slider dev3b-slider-nav slick-initialized slick-slider" style="height: 120px">
                    <div class="slick-list draggable">
                        <div class="slick-track slick-carousel-product-details" style="opacity: 1; transform: translate3d(0px, 0px, 0px); padding: 12px 35px;">
                            @foreach($productDetails->images as $image)
                                <li title="" class="slick-slide" tabindex="0" style="width: 16.6%" data-slick-index="0" aria-hidden="false">
                                    <img width="100%" height="100%" alt="" decoding="async"
                                         data-srcset="{{ $image->src }} 1920w, {{ $image->src }} 768w, {{ $image->src }} 1536w"
                                         data-src="{{ $image->src }}"
                                         data-sizes="(max-width: 1920px) 100vw, 1920px"
                                         class="attachment-shop_thumbnail size-shop_thumbnail ls-is-cached lazyloaded gallery-image"
                                         src="{{ $image->src }}"
                                         loading="lazy" sizes="(max-width: 1920px) 100vw, 1920px" style="object-fit: cover">
                                </li>
                            @endforeach
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="col-lg-4" id="detail_right">
            <div class="summary entry-summary">
                <h3 class="contact__title">
                    <span class="d-block"> Thông tin liên hệ </span>
                </h3>
                <div class="price_pro">
                    @if(isset($productDetails->price) || isset($productDetails->price_promotional))
                    <p class="price_regular text-white">Giá Bán: <del><span class="woocommerce-Price-amount amount"><bdi>{{number_format($productDetails->price)}}<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></del></p>
                    <p class="price_sale text-white">Giá KM: <ins><span class="woocommerce-Price-amount amount"><bdi>{{number_format($productDetails->price_promotional)}}<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span></ins></p>
                    @else
                    <p class="price_regular i3">Giá:
                        <ins>
                            Liên hệ
                        </ins>
                    </p>
                        @endif
                </div>
                <table class="shop_attributes">
                    <tr>
                        <th>
                            <img src="{{ asset('assets/images/ticked.svg') }}" alt="Checked">
                            Kích thước:
                        </th>
                        <td><p>{{$productDetails->size ?? 'Theo yêu cầu'}}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <img src="{{ asset('assets/images/ticked.svg') }}" alt="Checked">
                            Chất liệu:
                        </th>
                        <td><p>{{$productDetails->material ?? ''}}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <img src="{{ asset('assets/images/ticked.svg') }}" alt="Checked">
                            Nhà sản xuất:
                        </th>
                        <td><p>{{$productDetails->producer ?? ''}}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <img src="{{ asset('assets/images/ticked.svg') }}" alt="Checked">
                            Bảo hành:
                        </th>
                        <td><p>{{$productDetails->guarantee ?? ''}}</p>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            <img src="{{ asset('assets/images/ticked.svg') }}" alt="Checked">
                            Loại hàng:
                        </th>
                        <td><p>{{$productDetails->sectors ?? ''}}</p>
                        </td>
                    </tr>
                </table>
                @if($productDetails->pricing == 1)
                <a href="javascript:void(0);" class="devvn_buy_now devvn_buy_now_style" data-id="2439">
                    <strong>Liên hệ đặt hàng</strong>
                    <span>Liên hệ ngay với chúng tôi và giao hàng tận nơi</span>
                </a>
                    @else
                <a class="btn-add-cart devvn_buy_now_style" data-product-id = "{{$productDetails->id}}">
                    <strong>Thêm vào giỏ hàng</strong>
                    <span>Liên hệ ngay với chúng tôi và giao hàng tận nơi</span>
                </a>
                @endif
            </div>
        </div>
    </div>
</div>

