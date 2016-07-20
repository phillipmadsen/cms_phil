@extends('frontend/layouts/leftside')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('seo')
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author"content="The Grace Company"/>
@endsection

@section('jsonschema')@endsection

@section('title')@endsection

@section('bodyschema')@endsection

@section('bodytag')
rows 
@endsection

@section('header_styles')

@endsection
@section('scripts')@endsection
@section('ppscripts')@endsection

@section('submenu')
    {{-- @include('frontend.pages.hand-quilting.partials.submenu') --}}
@endsection

@section('slider')@endsection
@section('intro')@endsection
@section('page-title')
<section id="page-title">

            <div class="container clearfix">
                <h1>FAQ's</h1>
                <span>Frequently Asked Questions</span>
                <ol class="breadcrumb">
                    <li><a href="{!! url('/' . getLang()) !!}">Home</a></li>
                    <li><a href="{!! url('/' . getLang()) !!}">Pages</a></li>
                    <li class="active">FAQ's</li>
                </ol>
            </div>

        </section>

@endsection

@section('left-sidebar')
 

    <!-- Sidebar ============================================= -->
            <div class="sidebar nobottommargin clearfix">
                <div class="sidebar-widgets-wrap">

                    <div class="widget subscribe-widget clearfix">
                        <div class="dark" style="padding: 25px; background-color: #383838; border-radius: 2px;">
                            <div class="fancy-title title-border">
                                <h4>Subscribe</h4>
                            </div>

                            <p style="font-size: 15px; line-height: 1.5; color: #999;">Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</p>
                            <div id="widget-subscribe-form-result2" data-notify-type="success" data-notify-msg=""></div>
                            <form id="widget-subscribe-form2" action="include/subscribe.php" role="form" method="post" class="nobottommargin" novalidate="novalidate">
                                <div class="input-group divcenter">
                                    <span class="input-group-addon"><i class="icon-email2"></i></span>
                                    <input type="email" id="widget-subscribe-form-email2" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email" aria-required="true">
                                </div>
                                <button class="button button-3d btn-block button-small nomargin" style="margin-top: 15px !important;" type="submit">Subscribe</button>
                            </form>
                            <script type="text/javascript">
                                $("#widget-subscribe-form2").validate({
                                    submitHandler: function(form) {
                                        $(form).find('.input-group-addon').find('.icon-email2').removeClass('icon-email2').addClass('icon-line-loader icon-spin');
                                        $(form).ajaxSubmit({
                                            target: '#widget-subscribe-form-result2',
                                            success: function() {
                                                $(form).find('.input-group-addon').find('.icon-line-loader').removeClass('icon-line-loader icon-spin').addClass('icon-email2');
                                                $('#widget-subscribe-form2').find('.form-control').val('');
                                                $('#widget-subscribe-form-result2').attr('data-notify-msg', $('#widget-subscribe-form-result2').html()).html('');
                                                SEMICOLON.widget.notifications($('#widget-subscribe-form-result2'));
                                            }
                                        });
                                    }
                                });
                            </script>
                        </div>
                    </div>

                    <div class="widget widget_links clearfix">

                        <h4>Pages</h4>
                        <ul>
                            <li><a href="#"><div>About Us</div></a></li>
                       
                            <li><a href="#"><div>Team Members</div></a></li>
                            <li><a href="#"><div>Careers</div></a></li>
                     
                            <li><a href="#"><div>FAQs  </div></a></li>
                         
                            <li><a href="#"><div>Sitemap</div></a></li>
                            <li><a href="#"><div>Login/Register</div></a></li>
                      
                        </ul>

                    </div>

                    <div class="widget clearfix">

                        <h4>Recent Posts</h4>
                        <div id="post-list-footer">

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="#" class="nobg"><img src="images/magazine/small/1.jpg" alt=""></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li>10th July 2014</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="#" class="nobg"><img src="images/magazine/small/2.jpg" alt=""></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li>10th July 2014</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="spost clearfix">
                                <div class="entry-image">
                                    <a href="#" class="nobg"><img src="images/magazine/small/3.jpg" alt=""></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                                    </div>
                                    <ul class="entry-meta">
                                        <li>10th July 2014</li>
                                    </ul>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="widget clearfix">

                        <h4>Connect with Us</h4>
                        <a href="#" class="social-icon si-colored si-small si-facebook" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-delicious" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delicious">
                            <i class="icon-delicious"></i>
                            <i class="icon-delicious"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-android" data-toggle="tooltip" data-placement="top" title="" data-original-title="Android">
                            <i class="icon-android"></i>
                            <i class="icon-android"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-gplus" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                            <i class="icon-gplus"></i>
                            <i class="icon-gplus"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-stumbleupon" data-toggle="tooltip" data-placement="top" title="" data-original-title="Stumbleupon">
                            <i class="icon-stumbleupon"></i>
                            <i class="icon-stumbleupon"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-foursquare" data-toggle="tooltip" data-placement="top" title="" data-original-title="Foursquare">
                            <i class="icon-foursquare"></i>
                            <i class="icon-foursquare"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-forrst" data-toggle="tooltip" data-placement="top" title="" data-original-title="Forrst">
                            <i class="icon-forrst"></i>
                            <i class="icon-forrst"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-digg" data-toggle="tooltip" data-placement="top" title="" data-original-title="Digg">
                            <i class="icon-digg"></i>
                            <i class="icon-digg"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-spotify" data-toggle="tooltip" data-placement="top" title="" data-original-title="Spotify">
                            <i class="icon-spotify"></i>
                            <i class="icon-spotify"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-reddit" data-toggle="tooltip" data-placement="top" title="" data-original-title="Reddit">
                            <i class="icon-reddit"></i>
                            <i class="icon-reddit"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-blogger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Blogger">
                            <i class="icon-blogger"></i>
                            <i class="icon-blogger"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-dribbble" data-toggle="tooltip" data-placement="top" title="" data-original-title="Dribbble">
                            <i class="icon-dribbble"></i>
                            <i class="icon-dribbble"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-flickr" data-toggle="tooltip" data-placement="top" title="" data-original-title="Flickr">
                            <i class="icon-flickr"></i>
                            <i class="icon-flickr"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-linkedin" data-toggle="tooltip" data-placement="top" title="" data-original-title="Linked In">
                            <i class="icon-linkedin"></i>
                            <i class="icon-linkedin"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-rss" data-toggle="tooltip" data-placement="top" title="" data-original-title="RSS">
                            <i class="icon-rss"></i>
                            <i class="icon-rss"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-skype" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype">
                            <i class="icon-skype"></i>
                            <i class="icon-skype"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-twitter" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                            <i class="icon-twitter"></i>
                            <i class="icon-twitter"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-youtube" data-toggle="tooltip" data-placement="top" title="" data-original-title="Youtube">
                            <i class="icon-youtube"></i>
                            <i class="icon-youtube"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-vimeo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Vimeo">
                            <i class="icon-vimeo"></i>
                            <i class="icon-vimeo"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-yahoo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Yahoo">
                            <i class="icon-yahoo"></i>
                            <i class="icon-yahoo"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-github" data-toggle="tooltip" data-placement="top" title="" data-original-title="Github">
                            <i class="icon-github-circled"></i>
                            <i class="icon-github-circled"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-tumblr" data-toggle="tooltip" data-placement="top" title="" data-original-title="Trumblr">
                            <i class="icon-tumblr"></i>
                            <i class="icon-tumblr"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-instagram" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>

                        <a href="#" class="social-icon si-colored si-small si-pinterest" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterst">
                            <i class="icon-pinterest"></i>
                            <i class="icon-pinterest"></i>
                        </a>

                    </div>

                    <div class="widget clearfix">

                        <h4>Embed Videos</h4>
                        <!-- <iframe src="//player.vimeo.com/video/103927232" width="500" height="250" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe> -->

                    </div>

                </div>
            </div><!-- .sidebar end -->

 
@endsection

@section('wrapped-content')
<!-- Post Content ============================================= -->
<div class="postcontent nobottommargin col_last clearfix">
    <p>
        We have put together some answers, from all of our great customers on quilting and concerns. We hope these how-tos, where-fors and FAQs will help you enjoy quilting and things quilting related.</p>
    <p>
    If you have questions that this page does not answer-or if you have any suggestions on articles or items you would like to see addressed here, please let us know by contacting us:</p>

        <ul style="list-style:none" class="unstyled">
            <li>Telephone: 1-800-264-0644</li>
            <li>Email: support@graceframe.com </li>
        </ul>




    <section id="faqs" class="container">
        <ul class="faq unstyled">
            @foreach($faqs as $faq)
            <li>
                <span class="number">{!! $faq->id !!}</span>
                <div>
                    <h4>{!! $faq->question !!}</h4>
                    <p>{!! $faq->answer !!}</p>
                </div>
            </li>
            @endforeach
        </ul>
    </section><!--#faqs-->






 

                        <ul id="portfolio-filter" class="clearfix">

                            <li class="activeFilter"><a href="#" data-filter="all">All</a></li>
                            <li><a href="#" data-filter=".faq-machine">Machine Quilting</a></li>
                            <li><a href="#" data-filter=".faq-qnique">Qnique</a></li>
                            <li><a href="#" data-filter=".faq-hqf">Hnd Quilting</a></li>
                            <li><a href="#" data-filter=".faq-legal">Legal</a></li>
                            <li><a href="#" data-filter=".faq-itemdiscussion">Item Discussion</a></li>
                            <li><a href="#" data-filter=".faq-affiliates">Affiliates</a></li>
                            <li><a href="#" data-filter=".faq-miscellaneous">Miscellaneous</a></li>

                        </ul>

                        <div class="clear"></div>

                        <div id="faqs" class="faqs">

                            <div class="toggle faq faq-qnique" style="display: none;">
                                <div class="togglet"><i class="toggle-closed icon-question-sign"></i><i class="toggle-open icon-question-sign"></i>How do I become an author?</div>
                                <div class="togglec" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle faq faq-machine" style="display: none;">
                                <div class="togglet"><i class="toggle-closed icon-comments-alt"></i><i class="toggle-open icon-comments-alt"></i>Helpful Resources for Authors</div>
                                <div class="togglec" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle faq faq-hqf" style="display: none;">
                                <div class="togglet"><i class="toggle-closed icon-lock3"></i><i class="toggle-open icon-lock3"></i>How much money can I make?</div>
                                <div class="togglec" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle faq faq-authors faq-legal faq-itemdiscussion">
                                <div class="togglet"><i class="toggle-closed icon-download-alt"></i><i class="toggle-open icon-download-alt"></i>Can I offer my items for free on a promotional basis?</div>
                                <div class="togglec" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle faq faq-marketplace faq-authors" style="display: none;">
                                <div class="togglet"><i class="toggle-closed icon-ok"></i><i class="toggle-open icon-ok"></i>An Introduction to the Marketplaces for Authors</div>
                                <div class="togglec" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle faq faq-affiliates faq-miscellaneous" style="display: none;">
                                <div class="togglet"><i class="toggle-closed icon-money"></i><i class="toggle-open icon-money"></i>How does the Tuts+ Premium affiliate program work?</div>
                                <div class="togglec" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle faq faq-legal faq-itemdiscussion">
                                <div class="togglet"><i class="toggle-closed icon-picture"></i><i class="toggle-open icon-picture"></i>What Images, Videos, Code or Music Can I Use in my Items?</div>
                                <div class="togglec" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle faq faq-legal faq-authors faq-itemdiscussion">
                                <div class="togglet"><i class="toggle-closed icon-file3"></i><i class="toggle-open icon-file3"></i>Can I use trademarked names in my items?</div>
                                <div class="togglec" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle faq faq-affiliates" style="display: none;">
                                <div class="togglet"><i class="toggle-closed icon-bar-chart"></i><i class="toggle-open icon-bar-chart"></i>Tips for Increasing Your Referral Income</div>
                                <div class="togglec" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle faq faq-authors faq-itemdiscussion">
                                <div class="togglet"><i class="toggle-closed icon-phone3"></i><i class="toggle-open icon-phone3"></i>How can I get support for an item which isn't working correctly?</div>
                                <div class="togglec" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                            <div class="toggle faq faq-marketplace faq-itemdiscussion">
                                <div class="togglet"><i class="toggle-closed icon-credit"></i><i class="toggle-open icon-credit"></i>How do I pay for items on the Marketplaces?</div>
                                <div class="togglec" style="display: none;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, dolorum, vero ipsum molestiae minima odio quo voluptate illum excepturi quam cum voluptates doloribus quae nisi tempore necessitatibus dolores ducimus enim libero eaque explicabo suscipit animi at quaerat aliquid ex expedita perspiciatis? Saepe, aperiam, nam unde quas beatae vero vitae nulla.</div>
                            </div>

                        </div>

                        <script type="text/javascript">
                            jQuery(document).ready(function($){
                                var $faqItems = $('#faqs .faq');
                                if( window.location.hash != '' ) {
                                    var getFaqFilterHash = window.location.hash;
                                    var hashFaqFilter = getFaqFilterHash.split('#');
                                    if( $faqItems.hasClass( hashFaqFilter[1] ) ) {
                                        $('#portfolio-filter li').removeClass('activeFilter');
                                        $( '[data-filter=".'+ hashFaqFilter[1] +'"]' ).parent('li').addClass('activeFilter');
                                        var hashFaqSelector = '.' + hashFaqFilter[1];
                                        $faqItems.css('display', 'none');
                                        if( hashFaqSelector != 'all' ) {
                                            $( hashFaqSelector ).fadeIn(500);
                                        } else {
                                            $faqItems.fadeIn(500);
                                        }
                                    }
                                }

                                $('#portfolio-filter a').click(function(){
                                    $('#portfolio-filter li').removeClass('activeFilter');
                                    $(this).parent('li').addClass('activeFilter');
                                    var faqSelector = $(this).attr('data-filter');
                                    $faqItems.css('display', 'none');
                                    if( faqSelector != 'all' ) {
                                        $( faqSelector ).fadeIn(500);
                                    } else {
                                        $faqItems.fadeIn(500);
                                    }
                                    return false;
                               });
                            });
                        </script>
 
</div>
@endsection

@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection     