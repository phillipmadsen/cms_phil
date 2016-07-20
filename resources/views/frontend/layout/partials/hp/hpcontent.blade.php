<section id="slider" class="force-full-screen full-screen">
	<div class="force-full-screen full-screen dark section nopadding nomargin noborder ohidden">
		<div class="container clearfix">
			<div class="slider-caption slider-caption-center">
				<h2 data-animate="fadeInUp">Welcome to The Grace Company</h2>
				<p data-animate="fadeInUp" data-delay="200">With or products you can Create just what you need for your Perfect quilt experience.</p>
				<a data-animate="fadeInUp" data-delay="400" href="#" class="button button-border button-light button-rounded button-large noleftmargin nobottommargin" style="margin-top: 30px;">Start Browsing</a>
				<a data-animate="fadeInUp" data-delay="600" href="#" class="button button-3d button-teal button-large nobottommargin" style="margin: 30px 0 0 10px;">Buy Now</a>
			</div>
		</div>
		<div class="video-wrap">
			<video poster="images/videos/explore.jpg" preload="auto" loop autoplay muted>
				<source src='{!! asset('/frontend/images/videos/qnique-video-background.mp4') !!}' type='video/mp4' />
				<source src='{!! asset('/frontend/images/videos/qnique-video-background.webm') !!}' type='video/webm' />
			</video>
			<div class="video-overlay" style="background-color: rgba(0,0,0,0.45);"></div>
		</div>
	</div>
</section>

<div class="section-top-ribon" style="background-color:black; height: 31px;"></div>
	<script type="text/javascript">

							jQuery(window).load( function(){

								var radarChartData = {
									labels : ["A","B","C","D","E","F","G"],
									datasets : [
										{
											fillColor : "rgba(220,220,220,0.5)",
											strokeColor : "rgba(220,220,220,1)",
											pointColor : "rgba(220,220,220,1)",
											pointStrokeColor : "#fff",
											data : [65,59,90,81,56,55,40]
										},
										{
											fillColor : "rgba(151,187,205,0.5)",
											strokeColor : "rgba(151,187,205,1)",
											pointColor : "rgba(151,187,205,1)",
											pointStrokeColor : "#fff",
											data : [28,48,40,19,96,27,100]
										}
									]

								};

								var globalGraphSettings = {animation : Modernizr.canvas};

								function showRadarChart(){
									var ctx = document.getElementById("radarChartCanvas").getContext("2d");
									new Chart(ctx).Radar(radarChartData,globalGraphSettings);
								}

								$('#radarChart').appear( function(){ $(this).css({ opacity: 1 }); setTimeout(showRadarChart,300); },{accX: 0, accY: -155},'easeInCubic');

							});

						</script>
<section>


{{-- <div class="section-top-ribon" style="background-color:black; height: 31px;"></div> --}}
{{-- <div class="section-top-ribon" style="background-color:black; height: 31px;"></div> --}}



