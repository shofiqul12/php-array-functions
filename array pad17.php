


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
        
            
            <h2>PHP array pad</h2>
           <hr/>
           <br>
           <br>
                
           <?php

           $arr = array("red","green");
           $result = array_pad($arr,5,"blue");
           //ei kane 5 er jaigai za dei sei ta porjon to blue print korbe.
           //-5 dile age blue print korbe.nidisto kno value sent kora ar ki.

           
           print("<pre>");
           print_r($result);
           print("</pre>");
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>