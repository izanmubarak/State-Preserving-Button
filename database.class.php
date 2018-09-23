<?php 
class database extends SQLite3{
    function __construct(){
        $this->open('clickedtimes.db');
    }
}
?>