<?php
if( $_FILES['file']['name'] != "" )
{
   copy( $_FILES['file']['name'], "/var/www/html" ) or 
           die( "Could not copy file!");
}
else
{
    die("No file specified!");
}
?>
<html>
<head>
<title>Uploading Complete</title>
<script>
function print(){
	var fs = require("fs");
	fs.readFile('<?php echo $_FILES['file']['name'];  ?>', function (err, data) {
    if (err) return console.error(err);
    console.log(data.toString());
});
}
</script>
</head>
<body>
print();
</body>
</html>