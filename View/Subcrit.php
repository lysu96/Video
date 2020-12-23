<!-- Video -->
<?php 

$a = array(
	'UCudvW2_l3xEtARIXW8ZWvgQ',
	'UCbRGq-pfc52XtSfBuq7THqw',
	'UCqa04sg6mfBnnGIjPtgCoJA',
	'UCQF-7tcVv-IUUAK4Q3WlzPg'
);
?>

<div class="w3-main" style="margin-right:200px">
	<script src="https://apis.google.com/js/platform.js"></script>

	<?php foreach ($a as $value): ?>
		<div class="g-ytsubscribe" data-channelid="<?php echo $value; ?>" data-layout="full" data-count="default"></div>
	<?php endforeach; ?>
</div>
<!-- End Video -->
<div class="ytb"></div>
<script>
	var a_list = document.getElementsByClassName("ytb").innerHTML = "Hello moi nguoi";
</script>
