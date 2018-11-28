<?php
session_start();
unset($_SESSION);
session_destroy();

echo  '<script type="text/javascript"> window.location.href = "http://10.195.180.73/RodoX/index"  </script>'; 

?>