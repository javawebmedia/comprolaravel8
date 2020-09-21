<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Uji Coba</title>
	<script src="ckeditor.js" type="text/javascript"></script>
</head>
<body>
	
	<form action="" method="get" accept-charset="utf-8">
		<textarea name="kontenku" id="kontenku"></textarea>
	</form>
	 <script>
        // Replace the <textarea id="editor1"> with a CKEditor 4
        // instance, using default configuration.
        CKEDITOR.replace( 'kontenku',
        	{
				filebrowserBrowseUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
				filebrowserUploadUrl : 'filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
				filebrowserImageBrowseUrl : 'filemanager/dialog.php?type=1&editor=ckeditor&fldr='
			} 
		);
    </script>
	<script src="../../assets/jquery-ui/external/jquery/jquery.js"></script>
</body>
</html>