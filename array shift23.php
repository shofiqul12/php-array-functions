


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
        
            
            <h2>PHP array shift</h2>
           <hr/>
           <br>
           <br>
                
           <?php
           
           $color_one = array(
            "a" => "red",
            "b" => "green",
            "c" => "blue",
            "d" => "yellow"
            );
             array_shift($color_one);
             //array ke delet kore dei fast ta ke,key shoho.
           
           
           print("<pre>");
           print_r($color_one);
           print("</pre>");
        
          
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>