


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
        
            
            <h2>PHP array values</h2>
           <hr/>
           <br>
           <br>
                
           <?php
           
          
          $color = array(
            "a" => "red",
            "b" => "green",
            "c" => "blue",
            "d" => "yellow",
            "e" => "skyblue"
          );
          

           $result = array_values($color);
           //ei kane se nijer moto kore key dia dei,just value gula ke print kore,key a,,c er jaigai se nijer moto kore key dia dei.
         
             
    
        
          print("<pre>");
          print_r($result);
          print("</pre>");
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>