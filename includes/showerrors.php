<script>
	var arrayFromPHP = <?php echo json_encode($errors); ?>;
		$.each(arrayFromPHP, function (i, elem) {
		var n = noty({text: elem});
	});
</script>