<?php
/*
 * Template Name: contact
 */


get_header(); ?>

<div class="main">
    <div class="inner">
        <div class="contact-container">
            <div class="col-md-6">
                <h1>Contact Us</h1>
                <div class="well well-sm">
                    <?php echo do_shortcode('[contact-form-7 id="46" title="Formulario de contacto 1"]'); ?>
                </div>
            </div>
            <div class="col-md-6">
               <div id="TA_selfserveprop883" class="TA_selfserveprop">
                <ul id="4uFj30FQ" class="TA_links sdD4wATQjr">
                <li id="RjmsEeFx" class="MBn5aHrtgRk7">
                <a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a>
                </li>
                </ul>
                </div>
                <script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=883&amp;locationId=2149604&amp;lang=en_US&amp;rating=true&amp;nreviews=4&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=true&amp;border=true&amp;display_version=2"></script>

                
            </div>
        </div>
    </div>
</div>
<!-- <div class="container main">
	<div class="row">
	
		<div>
			<h1>Contact Us</h1>
		</div>
		<div class="col-md-6">
			<div class="well well-sm">
				<?php echo do_shortcode('[contact-form-7 id="46" title="Formulario de contacto 1"]'); ?>
			</div>
		</div>
		<div class="col-md-6">
            <div>
                <div class="panel panel-default">
                    
                    <div class="panel-body text-center">
                       
                        <div id="map1" class="map">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	</div>
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBu5nZKbeK-WHQ70oqOWo-_4VmwOwKP9YQ"></script>

<script type="text/javascript">
    jQuery(function ($) {
        function init_map1() {
            var myLocation = new google.maps.LatLng(38.885516, -77.09327200000001);
            var mapOptions = {
                center: myLocation,
                zoom: 16
            };
            var marker = new google.maps.Marker({
                position: myLocation,
                title: "Property Location"
            });
            var map = new google.maps.Map(document.getElementById("map1"),
                mapOptions);
            marker.setMap(map);
        }
        init_map1();
    });
</script>

<style>
    .map {
        min-width: 300px;
        min-height: 300px;
        width: 100%;
        height: 100%;
    }

    .header {
       
    }
</style>

	 -->
	
<?php

get_footer();
