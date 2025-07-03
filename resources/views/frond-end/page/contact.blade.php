@extends('frond-end.layout.app')


@push('after-style')
@endpush

@section('content')
    <!--Start breadcrumb area-->
    <section class="breadcrumb-area"
        style="background-image: url({{ asset('') }}temlet1/asset_lib/image/banner-image-contact.jpg);">
        <div class="container text-center">
            <h1>Contact Us</h1>
        </div>
    </section>
    <!--End breadcrumb area-->




    <!--Start contact form area-->
    <section class="contact-form-area sec-padd-top">
        <div class="container">
            <div class="section-title">
                {{-- <h2>get in <span class="thm-color">touch</span></h2> --}}
                <p>We welcome your inquiries regarding our products, services, or customization options. Please feel free to
                    contact us — our team is ready to assist you with any information or support you may need.</p>
            </div>

            <div class="row">

                <div class="col-md-8">
                    <div class="v-map" data-aos="zoom-in" data-aos-duration="1200">
                        <div class='embed-container'>
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.1344661956077!2d112.75296291452695!3d-7.338792694703888!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb2f18df90eb%3A0xe50ca2e713cbb214!2sJl.%20Berbek%20Industri%20III%20No.23%2C%20Berbek%20Industri%2C%20Berbek%2C%20Kec.%20Waru%2C%20Kabupaten%20Sidoarjo%2C%20Jawa%20Timur%2061256!5e0!3m2!1sid!2sid!4v1650597465056!5m2!1sid!2sid"
                                width="750" height="400" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="footer-contact-info">
                        <div class="title">
                            {{-- <h4>Quick Contact</h4>
                            <p>We are a reliable company with caring passion towards our customers, please do contact us for
                                any information or inquiries.
                            </p> --}}
                        </div>
                        <ul class="clearfix">
                            <li>
                                <div class="iocn-holder">
                                    <span class="fa fa-home"></span>
                                </div>
                                <div class="text-holder">

                                    <h6>
                                        Jl. Berbek Industri 3 no 23</h6>
                                    <p>Surabaya - Indonesia</p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="icon-technology-1"></span>
                                </div>
                                <div class="text-holder">
                                    <h6>Call Us On</h6>
                                    <p> +62 31 8436676</p>
                                </div>
                            </li>
                            <li>
                                <div class="iocn-holder">
                                    <span class="icon-letter-1"></span>
                                </div>
                                <div class="text-holder">
                                    <h6>Email @</h6>
                                    <a href="#">
                                        <p> info@snl-glove.com</p>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </section>
    <!--End contact form area-->


    <section class="contact-form-area sec-padd-top">
        <div class="container">
            <div class="section-title">
                <h2>contact <span class="thm-color">us</span></h2>
                {{-- <p>Sometimes you want to go where everybody knows your name. And they're always glad you <br> came.
                    Straight nin' the hills Someday the mountain will.</p> --}}
            </div>

            <div class="row">

                <div class="col-md-12">
                    <div class="contact-form">
                        <form action="{{ asset('sendmail.php') }}" method="POST">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="form_name" placeholder="Your Name*" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="form_email" placeholder="Your Mail*" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="form_phone" placeholder="Phone">
                                </div>
                                <div class="col-md-6">
                                    <input type="text" name="form_subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <textarea name="form_message" placeholder="Your Message.." required></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="hidden" name="form_botcheck" value="">
                                    <button class="thm-btn bg-clr1" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>




            </div>
        </div>
    </section>

    
@endsection

@push('after-script')
@endpush
