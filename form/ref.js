document.getElementById('fileInput').addEventListener('change', function(event) {
    const file = event.target.files[0]; // Get the first selected file

    if (file) {
        const allowedTypes = ['application/pdf', 'image/jpeg', 'image/png']; // MIME types
        // Or, for extensions: const allowedExtensions = ['.pdf', '.jpg', '.jpeg', '.png'];

        if (!allowedTypes.includes(file.type)) { // Check MIME type
            // Or, for extensions:
            // const fileName = file.name;
            // const fileExtension = fileName.substring(fileName.lastIndexOf('.')).toLowerCase();
            // if (!allowedExtensions.includes(fileExtension)) {

            alert('Invalid file type. Please select a PDF, JPEG, or PNG file.');
            event.target.value = ''; // Clear the input
        }
    }
});





document.getElementById('fileInput').addEventListener('change', function(event) {
    const file = event.target.files[0];
    const maxSizeMB = 5; // Set your desired max size in MB
    const maxSizeBytes = maxSizeMB * 1024 * 1024;

    if (file && file.size > maxSizeBytes) {
        alert(`File size exceeds the limit of ${maxSizeMB}MB.`);
        // Optionally, clear the input or disable submission
        event.target.value = ''; 
    }
});



////


<?php
// MySQL database connection settings
$servername = "localhost";
$username = "root";
$password = "admin123";
$dbname = "phppot_image_upload";

// Make connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection and throw error if not available
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if an image file was uploaded
if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    $image = $_FILES['image']['tmp_name'];
    $imgContent = file_get_contents($image);

    // Insert image data into database as BLOB
    $sql = "INSERT INTO images(image) VALUES(?)";
    $statement = $conn->prepare($sql);
    $statement->bind_param('s', $imgContent);
    $current_id = $statement->execute() or die("<b>Error:</b> Problem on Image Insert<br/>" . mysqli_connect_error());

    if ($current_id) {
        echo "Image uploaded successfully.";
    } else {
        echo "Image upload failed, please try again.";
    }
} else {
    echo "Please select an image file to upload.";
}

// Close the database connection
$conn->close();


///



<?php
    // Retrieve the uploaded image from the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "phppot_image_upload";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $result = $conn->query("SELECT image FROM images ORDER BY id DESC LIMIT 1");

    if ($result && $result->num_rows > 0) {
      $row = $result->fetch_assoc();
      $imageData = $row['image'];
      echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="Uploaded Image" style="max-width: 500px;">';
    } else {
      echo 'No image uploaded yet.';
    }

    $conn->close();
    ?>