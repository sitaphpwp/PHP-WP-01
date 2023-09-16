<?php
$targetDir = "uploads/";
$allowedFormats = ['pdf', 'jpeg', 'jpg', 'png', 'gif', 'docx', 'xlsx'];
$maxFileSize = 1024 * 1024; // 1 MB

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($_FILES["fileToUpload"]["name"])) {
        $fileName = basename($_FILES["fileToUpload"]["name"]);
        $fileType = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
        $fileSize = $_FILES["fileToUpload"]["size"];

        // Check if the file format is allowed
        if (!in_array($fileType, $allowedFormats)) {
            echo "Error: Only PDF, JPEG, JPG, PNG, GIF, DOCX, and XLSX files are allowed.";
        } elseif ($fileSize > $maxFileSize) {
            echo "Error: File size exceeds the maximum limit of 1 MB.";
        } else {
            // Generate a unique filename to avoid overwriting existing files
            $newFileName = uniqid() . "." . $fileType;
            $targetFile = $targetDir . $newFileName;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "File uploaded successfully. New filename: " . $newFileName;
            } else {
                echo "Error uploading the file.";
            }
        }
    } else {
        echo "Error: Please select a file to upload.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>File Upload</title>
</head>

<body>
    <h2>File Upload</h2>
    <form method="post" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload File" name="submit">
    </form>
</body>

</html>