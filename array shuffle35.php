


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
        
            
            <h2>PHP  shuffle</h2>
           <hr/>
           <br>
           <br>
                
           <?php

           $color = array("red","green","blue","yellow","pink");
           
           print("<pre>");
           print_r($color);
           print("</pre>");
           //shuffle  er age
          
          
           shuffle($color);

           //shuffle er pore
           //shuffle hoylo array gula ke ulta palta kore dekai be.
           // aro onk array ace sei gula php.net er gia dake nibo jokhon dorkar lage.
           

           print("<pre>");
           print_r($color);
           print("</pre>");
           
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>