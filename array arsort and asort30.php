


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
        
            
            <h2>PHP array arsort and asort</h2>
           <hr/>
           <br>
           <br>
                
           <?php
           //arsort.
          $num = array(
            "Shofik" =>"25",
            "Rubel" =>"40",
            "Rony" =>"35",
            "Tamim" =>"28"
            
          );

          //arsort($num);
          asort($num);
          foreach($num as $name=>$age){
            
            echo "Name: ".$name.", Age: ".$age."<br>";
            
         //value anu sare asce,arsort dile  bro value gula age print hoy,
         //ar asort dile choto value gula age print hoy,

          }

           
          
         
         
         
          
          

            
            



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