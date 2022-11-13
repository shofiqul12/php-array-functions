


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
        
            
            <h2>PHP array slice</h2>
           <hr/>
           <br>
           <br>
                
           <?php
           
           $color_one = array("red", "green", "blue", "yellow","skyblue","neviblue");
             $result = array_slice($color_one,2);
             //$result = array_slice($color_one,-2,1);
             /*
             amra ze kan taika chai array ke dakte sei kan taika dekar jonno
             array_slice use korlam,ar 2  dilam kon jaika taika dekabe ta bole dilam.
             ami jodi chai last  taika korte -2 dilam   1 dilam.
             */
             
           print("<pre>");
           print_r($result);
           print("</pre>");
        
          
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>