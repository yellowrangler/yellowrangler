<?php

class ywDBinit extends DBinit
{
    
    //-------------------------------------------------------------
    // Private 
    //------------------------------------------------------------- 
    private static $CONSTdatabase = "ywdb";
    //private static $CONSTdatabase = "WhippoorwillbridgeDB";
 
       
    //-------------------------------------------------------------
    // Public 
    //-------------------------------------------------------------
    
    // Constructor    
    public function __construct ()
    {
        parent::__construct(self::$CONSTdatabase);
    }
    
}  // end of class

?>
