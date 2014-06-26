
<!-- content -->
  <div class="holder_content">
    <section class="group1_data">
      <h3>Container Detail</h3>
      
      <table border='1' id='goods_data'>
        <tr>
          <th>EQ</th>
          <th>ShipName</th>
          <th>HandlingID</th>
          <th>PackagingID</th>
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
        
          <tr>
            <td><?php echo $containerdetail->equipmentNumber->equipmentNumber; ?></td>
            <td><?php echo $containerdetail->shippingID->shippingName; ?></td>
            <td><?php echo $containerdetail->equipmentNumber->handling->handlingName; ?></td>
            <td><?php echo $containerdetail->equipmentNumber->packaging->packagingName; ?></td>
            <td><?php echo $containerdetail->equipmentNumber->consignmentNumber; ?></td>
            <td><?php echo $containerdetail->equipmentNumber->uno; ?></td>
            <td><?php echo $containerdetail->equipmentNumber->imo; ?></td>
            <td><?php echo $containerdetail->equipmentNumber->flashpoint; ?></td>
            <td><a href="/goods/stowageDetail/<?php echo $containerdetail->equipmentNumber->stowagePosition; ?>"><?php echo $containerdetail->equipmentNumber->stowagePosition; ?></a></td>
            <td><?php echo $containerdetail->equipmentNumber->quantityInContainer; ?></td>
            <td><?php echo $containerdetail->equipmentNumber->weight; ?></td>
            <td><?php echo $containerdetail->equipmentNumber->portOfDischarge; ?></td>
            <td><?php echo $containerdetail->equipmentNumber->terminal; ?></td>
          </tr>
      </table>
    </section>
  </div>