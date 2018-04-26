<?php
class AbstractDAO {
    
    public static function getConnect() {
        return new mysqli("localhost", "root", "Get7usa7", "gdd");  
    }    
}