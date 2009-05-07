<html>
<head>
  <title>ExtJS File Uploader</title>
  <script src="ext-base.js" type="text/javascript"></script>
  <script src="ext-all.js" type="text/javascript"></script>
  <script src="fileupload.js" type="text/javascript"></script>
  <script type="text/javascript">
    Ext.onReady(function() {
      var fileUpload = new Ext.ux.FileUpload({
        el:       'upload-div',
        progress: 'progress.php',
        uploadTo: 'upload.php'
      });
    });
  </script>
</head>
<body>
  <div id="upload-div"><!--upload panel will go here --></div>
</body>
</html>
