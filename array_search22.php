


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
        
            
            <h2>PHP array search</h2>
           <hr/>
           <br>
           <br>
                
           <?php
           
           $color_one = array("a" => "red","b" => "green","c" => "blue", "d" => "yellow");
           if(isset($_POST['text'])) {
            global $txt;
            $txt = $_POST['text'];
            //echo $txt;
            //ei kane echo korlam kaj kore ki na dekar jonno.
            
            $result = array_search($txt,$color_one);

            echo "You have searched by -> $txt and your key is-> $result ";
           
        
        }
        /*
        user value nite condison dilam //if(isset($_POST['text']))
          ze value ta dibo sei ta dorar jonno // $txt = $_POST['text']; dilam 
           value akare print korar jonno value nia sei kane ei echo kore dilam,tar age vale ta  $txt ke global kore nilam 
            //value="<?php global $txt; echo $txt;
            $color_one ze array ace ta search kore dekar jonno
            $result = array_search($txt,$color_one); nilam and $result name variable e raklam.
            tar por echo korlam. $txt and kon ta milce sei ta dekar jonno $result dia dilam,



        */

           
          
           
           
          
           
           ?>
           <form action="array_search22.php" method="post">

            <input type="text" name="text" value="<?php global $txt; echo $txt; ?>"/>
            <input type="submit" value="Submit"/>
         </form>
          

           
         <br>
            <div id="footer"><br><h3 align="center">Copyright@CSTE13th </h3> </div>
           
            
   </body>  
</html>