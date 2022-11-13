


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
        
            
            <h2>PHP array unique</h2>
           <hr/>
           <br>
           <br>
                
           <?php
           
          
          $color = array(
            "a" => "red",
            "b" => "green",
            "c" => "yellow",
            "d" => "purple",
            "e" => "green",
            "f" => "red",
            "g" => "purple"
          );
 // ek jinis bar bar or same value bar bar  takle ta badh dia dei ek bar ei count kore ,array_unique ,

          $result = array_unique($color);
          
             
    
        
          print("<pre>");
           print_r($result);
           print("</pre>");
        
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>