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
          <th>ShipID</th>
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
        
        <?php foreach($goods->getAllData() as $row) { ?>
          <tr>
            <td><a href="/goods/containerDetail/<?php echo $row->equipmentnumber; ?>"><?php echo $row->equipmentnumber; ?></a>  </td>
            <td><?php echo $row->shipid; ?></td>
            <td><?php echo $row->handlingid; ?></td>
            <td><?php echo $row->packagingid; ?></td>
            <td><?php echo $row->consignmentnumber; ?></td>
            <td><?php echo $row->uno; ?></td>
            <td><?php echo $row->ino; ?></td>
            <td><?php echo $row->flashpoint; ?></td>
            <td><a href="/goods/stowageDetail/<?php echo $row->stowageposition; ?>"><?php echo $row->stowageposition; ?></a></td>
            <td><?php echo $row->quantityincontainer; ?></td>
            <td><?php echo $row->weight; ?></td>
            <td><?php echo $row->portofdischarge; ?></td>
            <td><?php echo $row->terminal; ?></td>
          </tr>
        <?php } ?>
      </table>
    </section>
  </div>



