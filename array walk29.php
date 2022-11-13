


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
        
            
            <h2>PHP array walk</h2>
           <hr/>
           <br>
           <br>
                
           <?php
           
          
           function myfunction($department,$name){
        echo "$name comes from $department department<br>";

           }
          $name = array(
            "Shofik" => "CSTE",
            "Rubel" => "EEE",
            "Rony" => "ICE"
            
          );
          

            array_walk($name,"myfunction");
            //function ta ke dobbel coteson er vitore dite hobe.
          



           /*
            
          print("<pre>");
          print_r($result);
          print("</pre>");
           */
           ?>
           
          
         <br>
           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>