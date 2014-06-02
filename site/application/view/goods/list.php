<?php

$goods = new goods();

?>

  <!-- content -->
  <div class="holder_content">
    <section class="group1_data">
      <h3>Informatie containers</h3>
      
      <table border='1' id='goods_data'>
        <tr>
          <th>Scheepsnaam</th>
          <th>Handling</th>
          <th>Terminal</th>
          <th>Consignment_nr</th>
          <th>Package kind</th>
          <th>Shipping</th>
          <th>Group</th>
          <th>EquipNr</th>
          <th>Stowage</th>
        </tr>
        
        <?php foreach($goods->getAllData() as $row) {
        $stowDetailUrl = '/goods/stowageDetail/?detailNum=' . $row['Stowage_position']; ?>
          <tr>
            <td><?php echo $row['Scheepsnaam'] ?></td>
            <td><?php echo $row['Handling'] ?></td>
            <td><?php echo $row['Terminal'] ?></td>
            <td><?php echo $row['Consignmentnr'] ?></td>
            <td><?php echo $row['Kind_of_package'] ?></td>
            <td><?php echo $row['Shipping_Name'] ?></td>
            <td><?php echo $row['Packaging_Group'] ?></td>
            <td><?php echo $row['Equipment_number'] ?></td>
            <td><?php echo "<a href='$stowDetailUrl'>";
            echo $row['Stowage_position'] ?></a></td>
          </tr>
        <?php } ?>
      </table>
    </section>
  </div>



