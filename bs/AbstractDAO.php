<?php
class AbstractDAO {
    
    public static function getConnect() {
        switch (gethostname()) {
            case "C":     return new mysqli("localhost", "root", "root", "gdd2");break;
            default:     return new mysqli("localhost", "root", "Get7usa77", "gdd"); break;
        }
    }    
}