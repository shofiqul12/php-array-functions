


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
        
            
            <h2>PHP array current</h2>
           <hr/>
           <br>
           <br>
                
           <?php
           
          
          $name = array("shofik","robin","tamim","rony");
          
          
          print("<pre>");
          print_r($name);
          print("</pre>");
          
          echo "Current Value:". current($name)."<br>";
          echo "Next Value:".next($name)."<br>";
         
          echo "Current Value:". current($name)."<br>";
          echo "Previous Value:". prev($name)."<br>";
         
          echo "Last Value:".end($name)."<br>";

          /*
          current value hisabe fast value ta ke dore nei.
          jodi current value er porer ta nite chai tobe next dibo current er jaigai.
          jodi amra last value ke dorte chai tobe current er jaigai end dibo.
          maje abr jodi current value ber kori taile next value ke current value hisabe dore nei,
          abr previous value ber korte current er jaigai prev likte hoyh.
          
          */
        
          
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>