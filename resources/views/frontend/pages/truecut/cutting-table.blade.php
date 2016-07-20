@extends('frontend/layout/layout')

@section('htmlschema')
itemscope itemtype="http://schema.org/Article"
@endsection

@section('bodyschema')
@endsection

@section('seo')
    <meta name="title" content="TrueCut Cutting Table">
    <meta name="description" content="welcome to the TrueCut Cutting Table section of the new Grace Company Website">
    <meta name="keywords" content="the grace company, hand quilting frame, grace frames, grace hand frames, grace and sewing frames, sewing hoops, lap hoops">
    <meta name="author" content="The Grace Company"/>
@endsection

@section('title')
TrueCut Cutting Table | TrueCut Section | The Grace Company
@endsection

@section('jsonschema')
@endsection

@section('bodytag')
    rows
@endsection

@section('header_styles')
@endsection

@section('scripts')
@endsection

@section('ppscripts')
@endsection


@section('submenu')
@include('frontend.layout.partials.menu.submenu-items', ['items'=> $menu_truecut->roots()])
@endsection

@section('slider')@endsection

@section('page-title')@endsection

@section('content')
        <!-- Content
        ============================================= -->
        <section id="content">

            <div class="content-wrap" style="padding:0px;">




         <!-- intro
    =================================================== -->

                 <div class="container nobottommargin">

                        <div class="heading-block topmargin nobottommargin center">
                            <h1>TrueCut Cutting Table</h1>
                            <p class="before-heading">Top of the line features and quality</p>
                        </div>







                            <img data-animate="fadeInRight" src="{!! asset('/frontend/images/product-overviews/cutting-table/table_big.png') !!}" alt="Cutting &amp; Crafting Table">



                            <p class="lead">An All-Purpose Cutting &amp; Crafting Table with eight height adjustable, sturdy metal legs to set to your ideal working height. There are even included shelves for convenient storage and the side leaves fold for convenience.</p>



                    </div>





                 <!--Other Features
================================-->
              <div class="row bottommargin-sm clearfix" style="border-top:2px solid #b14949;">
                  <div class="heading-block center topmargin nobottomborder">
                      <h2>TrueCut Table Features</h2>
                  </div>
              </div>
               <div class="container clearfix topmargin bottommargin">

                        <div class="row clearfix">

                           <div class="col_half  nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                     <img src="{!! asset('/frontend/images/product-overviews/cutting-table/leaves_down.png') !!}" alt="Folding Table">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Folding Side Leaves</h4>
                                       </div>
                               <p>Use just as much work space as you need! Put the sides down to save space when the table is not in use.</p>

                                   </div>
                               </div>
                           </div>

                          <div class="col_half col_last nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                      <img src="{!! asset('/frontend/images/product-overviews/cutting-table/storage.png') !!}" alt="Storage Shelves">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Space-Saving Storage</h4>
                                       </div>
                                       <p>Convenient storage shelves are included to hold everything you need for your projects.</p>
                                   </div>
                               </div>
                           </div>
                       </div>

                        <div class="row clearfix topmargin-sm">

                           <div class="col_half  nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                     <img src="{!! asset('/frontend/images/product-overviews/cutting-table/caster_wheels.png') !!}" alt="Caster Wheels">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Locking Caster Wheels</h4>
                                       </div>
                               <p>Moving the table is easy thanks to the smooth rolling wheels. Lock them in place when you are ready to start working.</p>

                                   </div>
                               </div>
                           </div>


                          <div class="col_half col_last nobottommargin">
                               <div class="feature-box center media-box fbox-bg">
                                   <div class="fbox-media">
                                      <img src="{!! asset('/frontend/images/product-overviews/cutting-table/adj_legs.png') !!}" alt="Adjustable Legs">
                                   </div>
                                   <div class="fbox-desc">
                                       <div class="heading-block nobottomborder nobottommargin">
                                           <h4>Work At Your Ideal Height</h4>
                                       </div>
                                       <p>Height-adjustable legs let you work at the level that is most comfortable to you!</p>
                                   </div>
                               </div>
                           </div>
                       </div>

                </div>










                 <!-- compared
====================================-->

                        <div class="container bottommargin-sm" style="border-top:2px solid #b14949;">
                            <div class="heading-block center topmargin nobottomborder">
                                <h2>Size Specifications</h2>
                            </div>


                                    <img src="{!! asset('/frontend//images/product-overviews/cutting-table/table_plain.png') !!}" alt="Open Table" />

                        </div>




            </div><!--.content-wrap end-->

        </section><!-- #content end -->
@endsection


@section('footer_scripts')@endsection
@section('pp_footer_scripts')@endsection
@section('inlinejs')@endsection