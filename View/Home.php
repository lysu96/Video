<!-- Sidebar/menu -->
	<?php require_once 'sidebar-menu.php'; ?>

	<!-- Overlay effect when opening sidebar on small screens -->
	<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_closeSidebar()" style="cursor:pointer" title="close side menu" id="idOverlay"></div>

	<!-- !PAGE CONTENT! -->
	<div class="w3-main" style="margin-left:300px">

		<span class="w3-button w3-hide-large w3-hover-text-grey" onclick="w3_openvd()"><i class="fa fa-th-large"></i></span>
		<!-- row -->
		<div class="w3-sidebar w3-bar-block w3-collapse w3-card w3-animate-right" style="width:200px;right:0;" id="closevideo">
			<button class="w3-bar-item w3-button w3-margin-bottom w3-large w3-hide-large" onclick="w3_closevd()">Close &times;</button>

			<!-- row video -->
			<?php require_once 'row-video.php'; ?>
		</div>

		<!-- Video -->
		<?php require_once 'video.php'; ?>
		
		<!-- First Photo Grid-->
		<!-- Second Photo Grid-->
		<!-- Pagination -->
		<!-- Contact Section -->

		<!-- Footer -->
		<div class="w3-black w3-center w3-padding-16">
			<!-- Subcrit -->
			<?php require_once 'Subcrit.php'; ?>
		</div>


		<!-- End page content -->
	</div>