<?php 

# The database class will open the clickedtimes.db SQLite file and allow us to perform SQL operations
# on it.

class database extends SQLite3{
    function __construct(){
        $this->open('clickedtimes.db');
    }
}
?>