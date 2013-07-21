<?php

class angDBinit extends DBinit
{
    
    //-------------------------------------------------------------
    // Private 
    //------------------------------------------------------------- 
    private static $CONSTdatabase = "angular";
 
       
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
