<?php

/**
 * @Author: indran
 * @Date:   2018-11-20 15:28:40
 * @Last Modified by:   indran
 * @Last Modified time: 2018-11-20 15:58:23
 */
?>
<script>
	function myMap() {
		var myCenter = new google.maps.LatLng(41.878114, -87.629798);
		var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
		var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
		var marker = new google.maps.Marker({position:myCenter});
		marker.setMap(map);
	}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="text-center">
	<a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">

		<span class="text-muted pt-5 mt-5 d-block text-center text-sm-left d-sm-inline-block"> Copyright © <?php echo THEME_OWN_BY; ?>
		<a href="<?php echo TERMS__CONDITIONS; ?>" target="_blank">read</a>. All rights reserved.</span>

	</footer>


	<script src="assets/js/parsley.min.js"></script>
	<script src="assets/js/lobibox.min.js"></script>  



	<script>
		$(document).ready(function(){



			$("[data-parsley-validate]").parsley({
				errorClass: 'has-danger',
				successClass: 'has-success',
				classHandler: function(ParsleyField) {
					return ParsleyField.$element.parents('.form-group');
				},
				errorsContainer: function(ParsleyField) {
					return ParsleyField.$element.parents('.form-group');
				},
				errorsWrapper: '<span class="invalid-feedback d-block">',
				errorTemplate: '<div></div>',
				trigger: 'change'
			});


			
		})
	</script>

</body>
</html>

