<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"
            type="text/javascript">
    </script>
</head>
<body style="background-color:black;color:white;font-family:'Courier New';font-size:100pt;text-align:left">
<div id="file_content"></div>
    <script>
        var time = 0;
        setInterval(function() {
            $.ajax({
                type: "POST",
                data: {time : time},
                url: "fileupdate.php",
                success: function (data) {
                    var result = $.parseJSON(data)
                    if (result.content) {
                        $('#file_content').append('' + result.content);
                    }
                    time = result.time;
                }
            });
        }, 10);
    </script>
<br>
<div style="font-size:72px;text-align:center">copyright Neuralis&#xA9</div>
</body> 
