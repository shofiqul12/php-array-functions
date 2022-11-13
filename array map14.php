


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
        
            
            <h2>PHP array map </h2>
           <hr/>
           <br>
           <br>
                
           <?php
            
           function myfunction($value){
            $v = strtoupper($value);
             return($v);
             //return ($value+$value);
           }
           //$arr  = array(1,2,3,4,5,);
           $arr = array(
             "Animal" => "cow",
             "Type" => "mammal"
             

           );
           $result = array_map("myfunction",$arr);
           
           print("<pre>");
           print_r($result);
           print("</pre>");
            

           
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>