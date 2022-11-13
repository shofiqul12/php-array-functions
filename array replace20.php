


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
        
            
            <h2>PHP array product</h2>
           <hr/>
           <br>
           <br>
                
           <?php
          //index array er jonno reples hoy.
           //$color_one = array("red","green");
           //$color_two = array("blue","yellow");
           $color_one = array("a"=>"red","b"=>"green");
           $color_two = array("a"=>"blue","d"=>"yellow");
           //key match hoyle dekaibe associtive array er jonno ar match na hoykle sob dekai be ,match hoyle raplace hobe.

           $result = array_replace($color_one,$color_two);
          

           print("<pre>");
           print_r($result);
           print("</pre>");
          
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>