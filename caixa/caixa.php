<html>
    <head>
        <title>trek</title>
        <script src="../js/jquery-3.3.1.min.js" charset="utf-8"></script>
    </head>
    <body>

    </body>
</html>

<script>
$.ajax({
type: "POST",
url: 'submission.php',
data: {name: 'Wayne', age: 27},
success: function(data){
    alert(data);
}
});
</script>
