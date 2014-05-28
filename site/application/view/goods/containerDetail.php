
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
            <td><?php echo $containerdetail->equipmentnumber; ?></td>
            <td><?php echo $shipdetail->shipname; ?></td>
            <td><?php echo $containerdetail->handlingid; ?></td>
            <td><?php echo $containerdetail->packagingid; ?></td>
            <td><?php echo $containerdetail->consignmentnumber; ?></td>
            <td><?php echo $containerdetail->uno; ?></td>
            <td><?php echo $containerdetail->ino; ?></td>
            <td><?php echo $containerdetail->flashpoint; ?></td>
            <td><a href="/goods/stowageDetail/<?php echo $containerdetail->stowageposition; ?>"><?php echo $containerdetail->stowageposition; ?></a></td>
            <td><?php echo $containerdetail->quantityincontainer; ?></td>
            <td><?php echo $containerdetail->weight; ?></td>
            <td><?php echo $containerdetail->portofdischarge; ?></td>
            <td><?php echo $containerdetail->terminal; ?></td>
          </tr>
      </table>
    </section>
  </div>