<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploader</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.5.1.min.js"></script>
</head>
<body>
    <form action="./backend/upload.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="exampleFormControlFile1">Files to upload:</label>
        <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
        <button type="submit" name="submit">Upload</button>
    </div>
    <div class="file_drag_area" id="file_drag_area">or drop files here</div>
    <div class="uploads"></div>
    <div class="uploaded_files"><a href="upload">See upload files</a></div>
    </form>
    
    
</body>
<script src="js/jquery-3.5.1.min.js"></script>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="js/script.js"></script>
</html>