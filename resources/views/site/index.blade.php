@extends('layouts.site')
@section('content')
<div class="col-lg-10">
    <div class="tab-area">
        <div class="d-flex align-items-start">
            <div class="tab-content" id="v-pills-tabContent">

                <div class="tab-pane fade  show active" id="v-pills-Javascript" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <!-- Start about Area -->
                    <div id="about" class="rn-about-area">
                        <div class="container">
                            @livewire('site.about1')
                            <!-- what I am doing area -->
                            <div class="row mt--50">
                                <div class="col-12 text-center">
                                    <h6 class="title color-lightn mb--30">
                                        Nimalar Qilolaman
                                    </h6>
                                </div>
                                {{-- <div class="col-lg-6 mb_sm--30 mb_md--30">
                                    <div class="service-card-one border-style">
                                        <div class="inner">
                                            <i data-feather="edit"></i>
                                            <h6 class="title color-lightn">
                                                Full stack
                                            </h6>
                                            <p class="describe">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Inventore dolorum atque dicta distinctio
                                                mollitia fuga.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="service-card-one border-style">
                                        <div class="inner">
                                            <i data-feather="cast"></i>
                                            <h6 class="title color-lightn">
                                                Web Design
                                            </h6>
                                            <p class="describe">
                                                Lorem ipsum, dolor sit amet consectetur adipisicing
                                                elit. Inventore dolorum atque dicta distinctio
                                                mollitia fuga.
                                            </p>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                            <!-- what I am doing area End -->
                           @livewire('site.resume1')
                        </div>
                    </div>
                    <!-- End about Area -->
                </div>

                <div class="tab-pane fade" id="v-pills-Wordpress" role="tabpanel" aria-labelledby="v-pills-wordpress-tab">
                    <!-- Start Portfolio Area -->
                    <div class="rn-portfolio-area" id="portfolio">
                        <div class="container">
        
                                <!-- Start Single Portfolio -->
                                @livewire('site.work1')
                                <!-- End Single Portfolio -->

                            
                        </div>
                    </div>
                    <!-- End portfolio Area -->
                </div>

                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tabs">
                    <!-- Start News Area -->
                    <div class="rn-blog-area" id="blog">
                        <div class="container">
                          

                            @livewire('site.blog1')
                            
                        </div>
                    </div>
                    <!-- ENd Mews Area -->
                </div>

                <div class="tab-pane fade" id="v-pills-python" role="tabpanel" aria-labelledby="v-pills-python-tabs">
                    <!-- Start Contact section -->
                    <div class="rn-contact-area" id="contacts">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-5">
                                    @livewire('site.contact1')
                                </div>
                                <div data-aos-delay="600" class="col-lg-7 contact-input">
                                    <div class="contact-form-wrapper ml--0">
                                        <div class="introduce">
                                            <form  method="POST" action="{{route('contact.send')}}" class="rnt-contact-form  row" >
                                                    @csrf
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="name">Ismingiz</label>
                                                        <input class="form-control form-control-lg" name="name" id="name" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="phone">Telefon Raqamingiz</label>
                                                        <input class="form-control" name="phone" id="phone" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="email">Elektron Pochta</label>
                                                        <input class="form-control form-control-sm" id="email" name="email" type="email">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="subject">Nima haqda suramoqchisiz</label>
                                                        <input class="form-control form-control-sm" id="subject" name="subject" type="text">
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <label for="message">Xabaringiz</label>
                                                        <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                                    </div>
                                                </div>

                                                <div class="col-lg-12">
                                                    <button  type="submit"  class="rn-btn">
                                                        <span>Jo'natish</span>
                                                        <i data-feather="arrow-right"></i>
                                                    </button>
                                                </div>

                                            </form>
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Contuct section -->
                </div>

            </div>
        </div>
    </div>
</div>
@endsection




<div class="backto-top">
    <div>
        <i data-feather="arrow-up"></i>
    </div>
</div>
<!-- Back to top end -->
