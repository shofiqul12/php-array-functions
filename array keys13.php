


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
        
            
            <h2>PHP array keys </h2>
           <hr/>
           <br>
           <br>
                
           <?php
            
            $car = array(
                
                "Volvo"  =>"kc90",
                "BMW"    =>"x5",
                "Toyta"  => "Highlander"
               
            );
            $result = array_keys($car,"x5");

        
            /*
            key gula ke nia ashar jonno.
            //$result = array_keys($car,"x5"); jodi ei vabe dei tobe
             "x5" er ta kali print hobe ,zar value ta dia dibo sei ta print korbe.
             ar jodi //$result = array_keys($car); ei vabe dei sob gula kei print korbe.

             */

             print("<pre>");
             print_r($result);
             print("</pre>");

           
            

           
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>