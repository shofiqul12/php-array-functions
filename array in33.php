


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
        
            
            <h2>PHP  in array</h2>
           <hr/>
           <br>
           <br>
                
           <?php
           
           $coder = array("SHOFIK","ROBIN","RONY","RAFI");
           if(isset($_POST['username'])){
            $text = $_POST['username'];
            if(in_array($text,$coder)){
                
                echo "$text Exist";
            }
            else{
                echo "$text  Not Exist.";
            }

           }
           /*
           //in array
           ekta variable $coder er maje kisu array nilam,tar por ek ta condison dilam username ta set kora ace ki na ta jachai kore ...
           if(isset($_POST['username'])) dilam.tar por ei ta value ta ke nibe tar jonno arek ta 
           variable er maje $text name raklam... username namer value ta ke.
           //$text = $_POST['username'];
           tar por in_array  variable raklam value gula $text,$coder check korar jonno.
           ei ta amra ekta if condison dia raklam 
           jodi value gula pai taile exist hobe ar na paile not exist .
        
           */
           
           
           ?>
           
           <form action="array in33.php" method="post">

            <input type="text" name="username" />
            <input type="submit" value="Submit"/>
            </form>



<br>

           
          
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
   </body>  
</html>