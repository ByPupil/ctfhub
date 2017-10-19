 <?php
    if(!isset($_GET['f']))
    {
        show_source(__FILE__);
        exit();
    }
    $filename = $_GET['f'];
    if(stripos($filename, 'flag') != false) die();
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename='$filename'");
    readfile("uploads/$filename");
?> 