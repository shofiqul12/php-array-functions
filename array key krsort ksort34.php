


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
        
            
            <h2>PHP  key krsort ksort</h2>
           <hr/>
           <br>
           <br>
                
           <?php

           $coder = array(
            "tamim" =>"30",
            "rasel" =>"36",
            "belal" =>"31",
            "masud" =>"20",
            "afin" =>"40"
        );
  

       // krsort($coder);
        ksort($coder);

        foreach($coder as $key=>$value){
        echo "Name:".$key.", Age: ".$value."<br>";
        

        //krsort mane letter shes er dike ze gula key e sei gula age print kore,ex:z-a dike zai .
        //ksort mane letter fast gula age print kore ex: a-z,
        }
           
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>