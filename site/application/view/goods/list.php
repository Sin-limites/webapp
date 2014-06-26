<?php

$goods = new goods();

?>

  <!-- content -->
  <div class="holder_content">
    <section class="group1_data">
      <h3>Informatie containers</h3>
      
      <table border='1' id='goods_data'>
        <tr>
          <th>EQ</th>
          <th>Ship name</th>
          <th>Handling</th>
          <th>Danger level</th>
          <th>ConsignmentNR</th>
          <th>Uno</th>
          <th>Ino</th>
          <th>Flashpoint</th>
          <th>Stowage</th>
          <th>Quantity</th>
          <th>Weight</th>
          <th>Port of discharge</th>
          <th>Terminal</th>
        </tr>
        
        <?php foreach($goods->getAllData() as $row) { ?>
          
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



