


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
        
            
            <h2>PHP array intersect assoc </h2>
           <hr/>
           <br>
           <br>
                
           <?php
            $array_one = array(
                
                "a" =>"red",
                "b" =>"green",
                "c" =>"blue",
                "d" =>"yellow",
            );
            /*
            fast array er sathe compare kore baki array gular sathe tulona kore print kore,
            sob gular sathe match hoy ze array gula sei gula print kore,
            ek tai kore mathe arek tai kore na taile hobe na.
            array value and key 2 tai match hoyte hoy be.
            */

            $array_two = array(
                "a" =>"red",
                "b" =>"green",
                "d" =>"yellow"
                
            );
            $array_three = array(
                "a" =>"red",
                "c" =>"green",
            
                "d" =>"yellow"
            );

            $different = array_intersect_assoc($array_one,$array_two,$array_three);
            
            print("<pre>");
            print_r($different);
            print("</pre>");

           
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>