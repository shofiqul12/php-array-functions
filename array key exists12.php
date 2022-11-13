


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
        
            
            <h2>PHP array key exists </h2>
           <hr/>
           <br>
           <br>
                
           <?php
            //$arr = array("name","age","id");
            $arr = array(
                
                "name" =>"tamim",
                "age" =>"25"
               
            );

            if(array_key_exists("name", $arr)) {

                echo "key already exists.";
            }

            else{
                echo "key does not exists.";  
            }

            /*
            array key ace kina ta check kore neowr jonno..use kora .
            //$arr = array("name","age","id"); jodi array gula ei vabe dei tobe check korar somoy if condison e
            array er number mane koto number e array ace sei ta dia dibo .
          //if(array_key_exists(0, $arr)) ...
          baki sob tik takbe,
          array number sudu ei kete change hobe takle exists na takle not exists .
            */

           
            

           
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>