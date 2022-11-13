


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
        
            
            <h2>PHP array column </h2>
           <hr/>
           <br>
           <br>
                
           <?php
            $name = array(
                array(
                'id' => 'ASH1801',
                'first_name' => 'bdinsider',
                'last_name' => 'insider360'
            ),
            array(
                'id' => 'ASH1802',
                'first_name' => 'tanvir',
                'last_name' => 'hasan'
            ),
            array(
                'id' => 'ASH1803',
                'first_name' => 'tamim',
                'last_name' => 'khan'
            ),
            array(
                'id' => 'ASH1804',
                'first_name' => 'mahadi',
                'last_name' => 'hasan'
            )


            );

            $first_name = array_column($name,'first_name','id');
           // $last_name= array_column($name,'last_name','id');
                
             print("<pre>") ;
             print_r($first_name);
             //print_r($last_name);
             print("</pre>") ; 
                


            
           
           
           ?>
           
          

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>