


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
        
            
            <h2>PHP creates an array</h2>
           <hr/>
           <br>
           <br>
                
           <?php

        /*
        //index array
         $car = array ("Volvo","BMW","Toyota");
         $length = count($car);

         for($i=0; $i< $length; $i++) {

            echo $car[$i]."<br>";

         }
    

        */
        /*
        //assochuitive  array
        //nam gula ke key hisabe ar age gula ke value hisabe nia hoyce,
        $age = array(
            "bdinsider" => "28",
            "insider" => "27",
            "bdinsider360" => "26",
            "shofiqul" => "25"
        );
        foreach($age as $key=>$value){
            echo "Name = ".$key.", Age = ".$value;
            echo "<br>";
        }


        */
        //multi demansonal array,er mane array er maje array,
        $car = array(
            array("Volvo","100","90"),
            array("BMW","200","80"),
            array("Toyota","300","70")
        );
        echo $car[1][1];


    
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>