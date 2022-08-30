<!DOCTYPE HTML>
<html>
    <head>
<link rel="stylesheet" href="cssdesigns.css">
</head>
    <body bgcolor="87ceeb">
    <center><h1>Library Management System</h1></center>
    <br>
 
    <?php
    include("DBConnection.php");
 
    $search = $_REQUEST["search"];
    $search1 = $_REQUEST["search1"];
    $new = $_REQUEST["new"];
    if($new=="title"){
    $query = "update book_info set title='$search1' where title like '%$search%'"; 
    }
    elseif($new=="author"){
        $query = "update book_info set author='$search1' where author like '%$search%'"; 
    }
    elseif($new=="subject"){
        $query = "update book_info set edition='$search1' where subject like '%$search%'"; 
    }
    elseif($new=="date"){
        $query = "update book_info set publication='$search1' where date like '%$search%'"; 
    }
    $res=mysqli_query($db,$query);
    $q1= "select * from book_info";

    $result = mysqli_query($db,$q1);
 
   
    ?>
 
    <table border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
            <th> Book number </th>
            <th> Title </th>
            <th> Author </th>
            <th> Edition </th>
            <th> Publication </th>
</t>
        <?php while($row = mysqli_fetch_assoc($result))
        {
        ?>
        <tr>
            <td><?php echo $row["isbn"];?> </td>
            <td><?php echo $row["title"];?> </td>
            <td><?php echo $row["author"];?> </td>
            <td><?php echo $row["edition"];?> </td>
            <td><?php echo $row["publication"];?> </td>
        </tr>
        <?php
        }
        
        
        ?>   
    </table>
    
    
    <div class="footer">
        <center><button class="button2" onclick="window.location.href = 'index.php';" ;>Index</button>
        <br>
  <p>email:abc@gmail.com                            contact:123456789</p>
</div>
    </body>
</html>