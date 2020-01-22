<?php    
    
include "connection.php";    
    
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$sql = "select * from matree.details where id = '$id'";
	$result = mysql_query($sql);    
}else{
	$sql = "select * from matree.details";
	$result = mysql_query($sql);    
}
?>    
<html>    
    <body>    
        <table width = "100%" border = "1" cellspacing = "1" cellpadding = "1">    
            <tr>    
                <td>Id</td>    
                <td>College Name</td>    
                <td>Email</td>    
                <td>Contact</td>    
                <td>Events</td>    
                <td>Boys</td>    
                <td>Girls</td>    
                <td>Acc</td>    
                <td>Transaction Id</td>    
                <td>Payment Status</td>    
                <td>Payment Id</td>    
                <td>Registration On</td>    
            </tr>    
        

<?php while($row = mysql_fetch_object($result)){    ?>  
    <tr>  
        <td>  
            <?php echo $row->id;?>  
        </td>  
        <td>  
            <?php echo $row->college_name;?>  
        </td>  
        <td>  
            <?php echo $row->email;?>  
        </td>  
        <td>  
            <?php echo $row->contact;?>  
        </td>  
        <td>  
            <?php echo $row->events;?>  
        </td>  
        <td>  
            <?php echo $row->nop_boys;?>  
        </td>  
        <td>  
            <?php echo $row->nop_girls;?>  
        </td>  
        <td>  
            <?php echo $row->accommodation;?>  
        </td>  
        <td>  
            <?php echo $row->transaction_id;?>  
        </td>  
        <td>  
            <?php echo $row->payment_status;?>  
        </td>  
        <td>  
            <?php echo $row->payment_id;?>  
        </td>  
        <td>  
            <?php echo $row->last_update;?>  
        </td>
            <?php } ?>  
	</table>
		<style>
			@media print {
			  #printPageButton {
				display: none;
			  }
		</style></br>
		<center><button id="printPageButton" onclick="window.print()">Print</button></center>

    </body>    
</html>