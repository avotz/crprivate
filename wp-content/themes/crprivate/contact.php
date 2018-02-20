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
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15684.919025455205!2d-85.4281962!3d10.639251!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x756af3ebd14361a2!2sAvotz+Web+Works!5e0!3m2!1ses-419!2s!4v1442615525574" width="600" height="250" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                
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
