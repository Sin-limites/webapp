<?php
$order = "";
$flow = "";

if (isset($_GET['order']))
	$order = $_GET['order'];

if (isset($_GET['flow']))
	$flow = $_GET['flow'];
	
$goods = new goods();
$goods->order = $order;
$goods->flow = $flow;

if ($flow == "asc")
	$flow = "desc";
else
	$flow = "asc";

?>

  <!-- content -->
  <div class="holder_content">
    <section class="group1_data">
      <h3>Informatie containers</h3>
      
      <table border='1' id='goods_data'>
        <tr>
          <th><a href="?order=equipmentNumber&flow=<?php echo $flow;?>">EQ</a></th>
          <th>Ship name</th>
          <th><a href="?order=handlingID&flow=<?php echo $flow;?>">Handling</a></th>
          <th><a href="?order=packagingID&flow=<?php echo $flow;?>">Danger level</a></th>
          <th><a href="?order=consignmentNumber&flow=<?php echo $flow;?>">ConsignmentNR</a></th>
          <th><a href="?order=uno&flow=<?php echo $flow;?>">Uno</a></th>
          <th><a href="?order=imo&flow=<?php echo $flow;?>">Imo</a></th>
          <th><a href="?order=flashpoint&flow=<?php echo $flow;?>">Flashpoint</a></th>
          <th><a href="?order=stowagePosition&flow=<?php echo $flow;?>">Stowage</a></th>
          <th><a href="?order=quantityincontainer&flow=<?php echo $flow;?>">Quantity</a></th>
          <th><a href="?order=weight&flow=<?php echo $flow;?>">Weight</a></th>
          <th><a href="?order=portofdischarge&flow=<?php echo $flow;?>">Port of discharge</a></th>
          <th><a href="?order=terminal&flow=<?php echo $flow;?>">Terminal</a></th>
        </tr>
        
        <?php foreach($goods->getAllData(null) as $row) { ?>
          
          <tr>
            <td><a href="/goods/containerDetail/<?php echo $row->equipmentNumber->equipmentNumber; ?>"><?php echo $row->equipmentNumber->equipmentNumber; ?></a>  </td>
            <td><?php echo $row->shippingID->shippingName; ?></td>
            <td><?php echo $row->equipmentNumber->handling->handlingName; ?></td>
            <td><?php echo $row->equipmentNumber->packaging->packagingName; ?></td>
            <td><?php echo $row->equipmentNumber->consignmentNumber; ?></td>
            <td><?php echo $row->equipmentNumber->uno; ?></td>
            <td><?php echo $row->equipmentNumber->imo; ?></td>
            <td><?php echo $row->equipmentNumber->flashpoint; ?></td>
            <td><a href="/goods/stowageDetail/<?php echo $row->equipmentNumber->stowagePosition; ?>"><?php echo $row->equipmentNumber->stowagePosition; ?></a></td>
            <td><?php echo $row->equipmentNumber->quantityInContainer; ?></td>
            <td><?php echo $row->equipmentNumber->weight; ?></td>
            <td><?php echo $row->equipmentNumber->portOfDischarge; ?></td>
            <td><?php echo $row->equipmentNumber->terminal; ?></td>
          </tr>
        <?php } ?>
      </table>
    </section>
  </div>



