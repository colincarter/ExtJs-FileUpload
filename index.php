<html>
<head>
  <title>ExtJS File Uploader</title>
  <link rel="stylesheet" type="text/css" href="ext/resources/css/ext-all.css"/>
  <link rel="stylesheet" type="text/css" href="file-upload.css" />
  <script src="ext/adapter/ext/ext-base.js" type="text/javascript"></script>
  <script src="ext/ext-all-debug.js" type="text/javascript"></script>
  <script src="FileUploadField.js"></script>
  <script src="fileupload.js" type="text/javascript"></script>
  <script type="text/javascript">
    Ext.onReady(function() {
      var fileUpload = new Ext.ux.FileUpload({
        applyTo:  'upload-div',
        progress: 'progress.php',
        uploadTo: 'upload.php'
      });
    });
  </script>
</head>
<body>

  <span id="upload-div">
  </span>
</body>
</html>
