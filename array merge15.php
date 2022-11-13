


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
        
            
            <h2>PHP merge</h2>
           <hr/>
           <br>
           <br>
                
           <?php
        //index array.
           $arr_one = array("red","green");
           $arr_two =array ("blue","yellow");
        /*
           $arr_one = array(
             "a" => "red",
             "b" => "green",
             
           );
           $arr_two = array(
            "c" => "blue",
            "b" => "yellow",
            
          );
        //associtive arry.
        er kathe shes er key array ta ta count kore,b=green,b=yellow,
        ei kan taika shes b ta count kore,
          */
          
           $result = array_merge($arr_one,$arr_two);
           
           
           print("<pre>");
           print_r($result);
           print("</pre>");
           
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>