<div class="entry-content">
    <div class="block_general">
        <div class="page_contact">
            <div class="row">
                <div class="col-lg-8">
                    <div class="contact__wrap">
                        <h2 class="heading">
                            <span>Liên hệ với chúng tôi</span>
                        </h2>
                        <h3 class="company-name">
                            <span> {{@$contact_us->name}} </span>
                        </h3>
                        <div class="contact-info">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="box-information">
                                        <h3><span> OFFICE & SHOWROOM: </span></h3>
                                        <p> {{@$contact_us->address_office}}</p>
                                        <ul class="list-style">
                                            <li> Hotline: {{@$contact_us->hotline}} </li>
                                            <li> Số điện thoại: {{@$contact_us->phone}} </li>
                                            <li> Email: {{@$contact_us->email}} </li>
                                            <li> Website: {{@$contact_us->website}} </li>
                                        </ul>
                                    </div>
                                    <div class="map-office">
                                        {!!  @$contact_us->map_office !!}
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="box-information">
                                        <h3><span> NHÀ MÁY SẢN XUẤT: </span></h3>
                                        <p> {{@$contact_us->address_factory}} </p>
                                    </div>
                                    <div class="map-office">
                                        {!!  @$contact_us->map_factory !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact__form">
                        <h2 class="heading">
                            <span>Đăng ký thông tin</span>
                        </h2>
                        <div class="wpcf7 no-js" id="wpcf7-f4737-p823-o1" lang="vi" dir="ltr">
                            <div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
                                <div class="row">
                                    <div class="col-md-12 col-12 form-popup">
                                        <h4 class="modal-title">Đăng ký nhận thông tin
                                        </h4>
                                        <form method="POST" action="{{ route('dang-ky.submit') }}">
                                            @csrf
                                            <div class="box_dangkytuvan">
                                                <div class="form-group">
                                                    <p>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-name">
                                                    <input size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control"
                                                           aria-required="true" aria-invalid="false"
                                                           placeholder="Họ và tên" value="" type="text" name="your-name" required/>
                                                    </span>
                                                    </p>
                                                </div>
                                                <div class="form-group">
                                                    <p>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-address">
                                                        <input size="40" class="wpcf7-form-control wpcf7-text form-control"
                                                               aria-invalid="false" placeholder="Địa chỉ"
                                                               value="" type="text" name="your-address" required/>
                                                    </span>
                                                    </p>
                                                </div>
                                                <div class="form-group">
                                                    <p>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-phone">
                                                        <input size="40" class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel form-control"
                                                               aria-required="true" aria-invalid="false"
                                                               placeholder="Điện thoại" value="" type="tel" name="your-phone" required/>
                                                    </span>
                                                    </p>
                                                </div>
                                                <div class="form-group">
                                                    <p>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-email">
                                                        <input size="40" class="wpcf7-form-control wpcf7-email wpcf7-text wpcf7-validates-as-email form-control"
                                                               aria-invalid="false" placeholder="Email"
                                                               value="" type="email" name="your-email" required/>
                                                    </span>
                                                    </p>
                                                </div>
                                                <div class="form-group">
                                                    <p>
                                                    <span class="wpcf7-form-control-wrap" data-name="your-message">
                                                        <textarea rows="10" class="wpcf7-form-control wpcf7-textarea form-control" aria-invalid="false" placeholder="Nội dung" name="your-message" required></textarea>
                                                    </span>
                                                    </p>
                                                </div>
                                                <div class="form-submit">
                                                    <p>
                                                        <button class="wpcf7-form-control wpcf7-submit has-spinner custom-submit">Gửi đi</button>
                                                    </p>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section id="sale" class="sale-section home-section">
            <div class="container">
                <div class="sale-wrap">
                    <div class="product-categories">
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
