<?php
if(isset($_FILES['file'])) move_uploaded_file($_FILES['file']['tmp_name'], '../foto/' . $_FILES['file']['name']);
?>