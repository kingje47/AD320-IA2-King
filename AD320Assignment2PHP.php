<html>
<body>
<?php echo "<br>Name: " . $_GET["Name"]; ?>
<?php echo "<br>Email: " . $_GET["Email"]; ?>  
<?php if ($_GET["PhoneNumber"] != "" ) { 
    echo "<br>Phone: " . $_GET["PhoneNumber"];
}?>    
<?php if ($_GET["State"] != ""){
    
    echo "<br>State: " . $_GET["State"];
}?>
</body>
</html>
