<?php
session_start();
session_destroy();
?>
<html>
<body onLoad = "back();">

<script>
function back(){
        history.go(-1);
    }
</script>
</body>
</html>
