<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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