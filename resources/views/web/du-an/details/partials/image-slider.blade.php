<article id="post-8050"
         class="post-8050 video type-video status-publish has-post-thumbnail hentry video_type-video-san-pham video_type-video-du-an video_type-video-noi-that">
    <div class="entry-content">
        <div id="back-video" class="main-video mb-5">
            <div class="item-video-first item-album">
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
                                         data-src="{{$detailProject->src}}"
                                         data-sizes="(max-width: 800px) 100vw, 800px"
                                         class="attachment-full size-full wp-post-image lazyloaded"
                                         src="{{$detailProject->src}}"
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
                                        @foreach($detailProject->images as $image)
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
                    <div class="col-lg-4 col-12">
                        <div class="content-video-excerpt">
                            <div class="the_title_video">
                                <h2 class="title">
                                    {{@$detailProject->investor . ' - ' . @$detailProject->construction_address}} </h2>
                            </div>
                            <div class="the_excerpt_details">
                                <p>
                                    <span style="font-size: 20px;">
                                        <strong>THÔNG TIN DỰ ÁN&nbsp;</strong>
                                    </span>
                                </p>
                                <table class="shop_attributes">
                                    <tbody>
                                    <tr>
                                        <th>Chủ đầu tư:</th>
                                        <td>{{$detailProject->investor ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Địa Chỉ thi công:</th>
                                        <td>{{$detailProject->construction_address ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Loại hình:</th>
                                        <td>{{$detailProject->type ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phong cách thiết kế:</th>
                                        <td>{{$detailProject->design_style ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Vật liệu chính:</th>
                                        <td>{{$detailProject->main_material ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Đơn vị thiết kế:</th>
                                        <td>{{$detailProject->design_unit ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Tổng diện tích XD:</th>
                                        <td>{{$detailProject->total_construction_area ?? ''}}</td>
                                    </tr>
                                    <tr>
                                        <th>Năm thực hiện:</th>
                                        <td>{{$detailProject->year_implementation ?? ''}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p><a href="#register-form" class="popup_form_dat-hang"><strong>ĐĂNG KÝ TƯ VẤN</strong></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>
