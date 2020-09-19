<?php

session_start();

session_destroy();
echo('<script>window.location="HOME1.php"</script>');
?>