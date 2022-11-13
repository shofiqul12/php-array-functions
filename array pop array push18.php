


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
        
            
            <h2>PHP array pop and push</h2>
           <hr/>
           <br>
           <br>
                
           <?php

           $arr = array( "a"=>"red","b"=>"green","blue","yellow");
           //array_pop($arr);
           //array_pop dara last array ke delet kora hoyce,

           array_push($arr,"nil","whrite");
           //array_push dara aro array add kora hoy,sathe ze array gula add korbo sei gula dia dite hoy.


          
           
           print("<pre>");
           print_r($arr);
           print("</pre>");
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>