


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
        
            
            <h2>PHP array diff assoc</h2>
           <hr/>
           <br>
           <br>
                
           <?php
            $array_one = array(
                
                "a" =>"red",
                "b" =>"green",
                "c" =>"blue",
                "d" =>"yellow"
            );
            /*
            fast array er sathe compare kore baki array gular sathe tulona kore print kore,
            fast ze array gula ace baki gula te takle print korbe na,
            ze array gula baki gulai nai sei gula kei print kore dekai be.
         ei kane sob kisu check kore milaice a,b,c and colar jodi mile taile badh diche,
         ar na mile sei gula print kore dekaice.
         2 tar maje ektai milei badh dia dibe.
            */

            $array_two = array(
                "a" =>"red",
                "f" =>"black",
                "g" =>"purple"
                
            );
            $array_three = array(
                "h" =>"red",
                "b" =>"black",
            
                "d" =>"yellow"
            );

            $different = array_diff_assoc($array_one,$array_two,$array_three);
            
            print("<pre>");
            print_r($different);
            print("</pre>");

           
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>