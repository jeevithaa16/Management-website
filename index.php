<?php
require"new1.php";
if(isset($_POST['retrive']))
{
     $log_qry=$conn->query("Select * from pro");        
     $result=$log_qry->fetchAll();    
}
if(isset($_POST['logout']))
{
?>
<script type="text/javascript">
{
    window.location="logout.php";
    
}
</script>
<?php
}
?>
<html>
    <head>
        <title>STOCK MANAGEMENT DATABASE</title>
        <link type="text/css" href="style.css" rel="stylesheet">
    </head>
    <body style="background: url(bag.jpeg) fixed;">
        
        <div>
            <p style="text-aligin:center;">STOCK MANAGEMENT DATABASE</p>
            <form method="post">
            <input type="submit" name="retrive" id="retrive" class="btnreg" value="retrive">
        
            <input type="submit" name="logout" id="logout" class="btnreg" value="logout">    
                </form>
        </div>
        <?php
        if($log_qry->rowCount()>0)
        {
        ?>
        <table border="1" cellspacing="2" cellpadding="2">
        <br /><br />
            
        <tr><th>ID</th>
            <th>NAME</th>
            <th>APPLIANCES</th>
            <th>QUANTITY</th>
            <th>CONTACT</th>
            <th>SHIPMENT</th>
            <th>ADDRESS</th>
            <th>CITY</th>
            <th>STATE</th>
            <th>MANUFACTURING</th></tr>
            <?php
            foreach($result as $rows)
             {
            ?>
            
            <tr>
                <td><?php echo $rows['id'];?></td>
                <td><?php echo $rows['name'];?></td>
                <td><?php echo $rows['appliances']?></td>
                <td><?php echo $rows['quantity']?></td>
                <td><?php echo $rows['contact']?></td>
                <td><?php echo $rows['shipment']?></td>
                <td><?php echo $rows['address']?></td>
                <td><?php echo $rows['city']?></td>
                <td><?php echo $rows['state']?></td>
                <td><?php echo $rows['manufacturing']?></td>
            </tr>
            
            <?php
          }
            ?>
        <tr></tr>
        </table>
        
        <?php } ?>
                
    </body>
</html>
