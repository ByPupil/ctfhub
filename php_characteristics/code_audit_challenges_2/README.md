## code audit challenges 2

分类：脚本开发

## write-up

此题要是输入一个符合要求的数字，那么在sleep()的时候需要等上2个月了。is_numeric函数能够处理正常的数字以及十六进制或0x开头的字符串。而(int)处理十六进制或0x开头的字符串时会返回0。

```php
<?php
    show_source(__FILE__);
    include 'flag.php';
    if(isset($_GET['time'])){
        if(!is_numeric($_GET['time'])){
            echo 'The time must be bumber';
        }else if($_GET['time'] < 60 * 60 * 24 * 30 * 2){
            echo 'This time is too short.';
        }else if($_GET['time'] > 60 * 60 * 24 * 30 * 3){
            echo 'This time is too long.';
        }else{
            sleep((int)$_GET['time']);
            echo $flag;
        }
        echo '<hr>';
    }
?>
```

`payload1:?time=6e6`

`payload2:?time=0x4f1a00`