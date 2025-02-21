<?php
$conn = mysqli_connect("localhost", "grac_deepak", "deepak@2", "grac_deepak");

if ($conn) {
    echo "Database connection established.<br>";

    // Read the SQL file
    $sql = file_get_contents("db.sql");

    // Execute the SQL script
    if (mysqli_multi_query($conn, $sql)) {
        echo "Table 'user' created successfully.";
    } else {
        echo "Error executing SQL file: " . mysqli_error($conn);
    }

    mysqli_close($conn);
} else {
    echo "Failed to connect to the database.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2></h2>
    <h1>This is Static Data</h1>
    <h1 class="Value"></h1>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function () {
        function test(){
            $.ajax({
                type: "post",
                url: "code.php",
                data: {test:true},
                success: function (response) {
                    $(".Value").text(response);
                }
            });
        }
        test();
    });
</script>
</body>
</html>