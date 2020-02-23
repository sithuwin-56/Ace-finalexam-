<?php 
     $con = mysqli_connect("localhost","root","","finalexam");// return pyn tr ko variable 1ku htl htae
     //var_dump($con); 
    
     /*echo mysqli_connect_errno()."<br>";//error ma shi yin 0
     echo mysqli_connect_error()."<br>";*/

     if(mysqli_connect_errno()){
         echo mysqli_connect_error();
     }else{
         $result=mysqli_query($con,"SELECT*FROM `student`");
          //var_dump($result);//boo(true)
         //$row=mysqli_fetch_array($result); 
         //fetch_row so yin no nk pl htote lo ya
         //fetch_assoc so yin name nk pl htote lo ya 
         echo "<br>";
         
         echo "<table border='2'>";
         echo "<tr><th>Student_ID</th><th>Student_Name</th><th>Class_Name</th><th>Registered_Date</th><th>Status</th></tr>";
         while($row=mysqli_fetch_array($result)){
             echo "<tr>";
         echo "<td>".$row[0]."</td>";//fetch_array nk so yin name nk pr output htote lo ya eg.row['sno']
         echo "<td>".$row[1]."</td>";
         echo "<td>".$row[2]."</td>";
         echo "<td>".$row[3]."</td>";
         echo "<td>".$row[4]."</td>";
         

         echo "<tr>";
         }

     }
     mysqli_close($con);

    ?>