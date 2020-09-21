<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Uji Coba</title>
	<script src="tinymce/tinymce.min.js" type="text/javascript"></script>
</head>
<body>
	
	<form action="" method="get" accept-charset="utf-8">
		<textarea name="konten" class="kontenku"></textarea>
	</form>
	<script>
		tinymce.init({
		    selector: '.kontenku',
		    relative_urls : false,
		    remove_script_host : false,
		    convert_urls : true,
		    height: 300,
		    plugins: 'print preview paste searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample code table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools colorpicker textpattern help',
		    toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | image | table | removeformat',
		    visual_table_class: 'tiny-table'
		  });
	</script>
	<script src="../../assets/jquery-ui/external/jquery/jquery.js"></script>
</body>
</html>