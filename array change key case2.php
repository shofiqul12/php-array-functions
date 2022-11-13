


<!DOCTYPE html>
<html>
    <head> 
        <title>index</title> 
        <style>
            
#body{
    background-color: gray;
}
#header{
    width: 115%;
    height: 70px;
    background-color:green;
    color:white;

}

#footer{
    width: 115%;
    height: 80px;
    background-color:green;
    color:white;

}

       </style>
    </head> 
    <body>
         
            <div id="header" align="center"><h2>PHP Fundamentals</h2></div>
            <span style="float:right">
                <?php
                date_default_timezone_set("Asia/Dhaka");
                echo "Time:".date("h:i:sa");
                ?>
             </span>
        
            
            <h2>PHP  array change key case</h2>
           <hr/>
           <br>
           <br>
                
           <?php

           $name = array(
            "shofik" => 25,
            "jahid" => 26,
            "robin" => 26,
            "rafi" => 27,
            "mahadi" => 28
            
           );
           print ("<pre>");
           //niche niche name gula achar jonno use korchi.tai ei kane pre tag use korlam.
           
           print_r(array_change_key_case($name,CASE_UPPER));
           // upper case er jonno.

           //print_r(array_change_key_case($name,CASE_LOWER));
           //lower case er jonno.
          
           print("</pre>");
           //niche niche name gula achar jonno use korchi.tai ei kane pre tag close korlam.
           
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>