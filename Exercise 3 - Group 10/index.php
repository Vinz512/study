<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Handling</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            font-size: 1.2em;
            color: #555;
        }
        .file-content {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            margin-top: 20px;
            white-space: pre-wrap; /* Preserves formatting */
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px 0;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>PHP File Handling Example</h1>
    <p>Use the form below to read or write to a file:</p>

    <!-- File Handling Form -->
    <form action="" method="post">
        <div class="form-group">
            <label for="fileName">File Name:</label>
            <input type="text" id="fileName" name="fileName" placeholder="Enter file name (e.g., example.txt)" required>
        </div>
        <div class="form-group">
            <label for="fileContent">File Content (for writing):</label>
            <textarea id="fileContent" name="fileContent" rows="5" placeholder="Enter content to write to the file"></textarea>
        </div>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    // Check if form is submitted
    if (isset($_POST['submit'])) {
        $fileName = basename($_POST['fileName']); // Sanitize file name
        $fileContent = $_POST['fileContent'];

        // Write to the file if content is provided
        if (!empty($fileContent)) {
            file_put_contents($fileName, $fileContent);
            echo "<div class='file-content'>Successfully wrote to $fileName.</div>";
        }

        // Read the file content if no content is provided
        if (file_exists($fileName)) {
            $content = file_get_contents($fileName);
            echo "<div class='file-content'>Content of $fileName:</div>";
            echo "<div class='file-content'>" . nl2br(htmlspecialchars($content)) . "</div>";
        } else {
            echo "<div class='file-content'>File $fileName does not exist.</div>";
        }
    }
    ?>
</div>

</body>
</html>
