<head>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/upup/style.css" />
<?php wp_head(); ?>
</head>

<body>
<?php gravity_form( 2, false, false, false, '', false ); ?>


<?php wp_footer(); ?>
</body>

<script type="text/javascript">
	$(document).ready(function() {
	   $('#input_2_1 option:first').attr('disabled','disabled').css("color","#f7ae90");
	  
	});
</script>
