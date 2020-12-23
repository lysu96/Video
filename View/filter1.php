<div id="myBtnContainer">
  <button class="btn active" onclick="filterSelection('all')">Tất cả</button>
  <button class="btn" onclick="filterSelection('GX')">Gái xinh</button>
  <button class="btn" onclick="filterSelection('GHCT')">Tết mông</button>
  <button class="btn" onclick="filterSelection('K')">Khác</button>
</div>
	
	<?php 
	// echo "<pre>";
	// print_r($videos);
	for ($i=0; $i < count($videos); $i++) { 
	 ?>
    <div class="filterDiv GX w3-margin-bottom">
        <iframe width="100%" src="https://www.youtube.com/embed/<?php echo($videos[$i])?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <button onclick="myFunctionshowvideo('<?php echo($videos[$i])?>');" class="btn w3-opacity w3-black">Xem video</button>
    </div>
    <!-- <div class="filterDiv w3-margin-bottom">
    <iframe id="ytVideo" width="100%" height="150" src="https://www.youtube.com/embed/<?php echo($videos[$i])?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div> -->
	<?php  } ?>

