<?php
    function __autoload($class_name) 
    {
        //class directories
        $directorys = array(
            'lib/',
            'lib/controllers/',
            'lib/models/'
        );
        
        //for each directory
        foreach($directorys as $directory)
        {
            //see if the file exsists
            if(file_exists($directory.$class_name . '.php'))
            {
                require_once($directory.$class_name . '.php');
                //only require the class once
                return;
            }            
        }
    }
?>