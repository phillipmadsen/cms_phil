     <section id="slider" class="slider-parallax swiper_wrapper clearfix" style="height: 550px;">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image: url('{!! asset('frontend/demos/construction/images/slider/2.jpg') !!}'); background-position: center top;">
                        <div class="container clearfix">
                            <div class="slider-caption">
                                <h2>The Grace Company</h2>
                                <p>The Grace Company consistently generates new and exciting ideas, experiments in new product design, and is always reaching new heights in excellence and quality.  The Grace Company goes to great expense to take each product from concept to market by utilizing state-of-the-art software, in-house rapid prototyping, and cost-efficient sourcing and manufacturing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="container clearfix">
                            <div class="slider-caption slider-caption-right">
                                <h2>Beautifully Designed</h2>
                                <p>Through these means, The Grace Company has been able to rapidly respond to market and customer needs and continues to lead the industry. After 25 wonderful years, The Grace Company continues in the tradition of creativity, innovation, and service.</p>
                            </div>
                        </div>
                        <div class="video-wrap">
                            <video id="slide-video" poster="{!! asset('frontend/images/videos/qnique-overview-poster.jpg') !!}" preload="auto" loop autoplay muted>
                                <source src='{!! asset('frontend/images/videos/qnique-video-background.webm') !!}' type='video/webm' />
                                <source src='{!! asset('frontend/images/videos/qnique-video-background.mp4') !!}' type='video/mp4' />
                            </video>
                            <div class="video-overlay" style="background-color: rgba(0,0,0,0.1);"></div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="background-image: url('{!! asset('frontend/demos/construction/images/slider/1.jpg') !!}'); background-position: center bottom;">
                        <div class="container clearfix">
                            <div  class="slider-caption">
                                <h2>Premium Quilting Proucts</h2>
                                <p>You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
                <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            </div>

            <script>
                jQuery(document).ready(function($){
                    var swiperSlider = new Swiper('.swiper-parent',{
                        paginationClickable: false,
                        slidesPerView: 1,
                        simulateTouch: false,
                        grabCursor: false,
                        loop: true,
                        onSwiperCreated: function(swiper){
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 750; } else { toAnimateDelayTime = 750; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeStart: function(swiper){
                            $('[data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                $toAnimateElement.removeClass('animated').removeClass(elementAnimation).addClass('not-animated');
                            });
                            SEMICOLON.slider.swiperSliderMenu();
                        },
                        onSlideChangeEnd: function(swiper){
                            $('#slider').find('.swiper-slide').each(function(){
                                if($(this).find('video').length > 0) { $(this).find('video').get(0).pause(); }
                            });
                            $('#slider').find('.swiper-slide:not(".swiper-slide-active")').each(function(){
                                if($(this).find('video').length > 0) {
                                    if($(this).find('video').get(0).currentTime != 0 ) $(this).find('video').get(0).currentTime = 0;
                                }
                            });
                            if( $('#slider').find('.swiper-slide.swiper-slide-active').find('video').length > 0 ) { $('#slider').find('.swiper-slide.swiper-slide-active').find('video').get(0).play(); }

                            $('#slider .swiper-slide.swiper-slide-active [data-caption-animate]').each(function(){
                                var $toAnimateElement = $(this);
                                var toAnimateDelay = $(this).attr('data-caption-delay');
                                var toAnimateDelayTime = 0;
                                if( toAnimateDelay ) { toAnimateDelayTime = Number( toAnimateDelay ) + 300; } else { toAnimateDelayTime = 300; }
                                if( !$toAnimateElement.hasClass('animated') ) {
                                    $toAnimateElement.addClass('not-animated');
                                    var elementAnimation = $toAnimateElement.attr('data-caption-animate');
                                    setTimeout(function() {
                                        $toAnimateElement.removeClass('not-animated').addClass( elementAnimation + ' animated');
                                    }, toAnimateDelayTime);
                                }
                            });
                        }
                    });

                    $('#slider-arrow-left').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipePrev();
                    });

                    $('#slider-arrow-right').on('click', function(e){
                        e.preventDefault();
                        swiperSlider.swipeNext();
                    });
                });
            </script>

        </section>

        <!-- Content  ============================================= -->