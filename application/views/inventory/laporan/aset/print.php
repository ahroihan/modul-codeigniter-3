<style>
  body {
    font-family: Arial, Sans-serif, Helvetica;
    padding-right: 40px;
    padding-left: 40px;
  }

  header {
    font-size: 20px;
    text-align: center !important;
    margin: 0 auto !important;
  }

  h3,
  h4 {
    text-align: center !important;
  }

  .ctr {
    text-align: center;
  }

  .table {
    border: 1px solid red;
    font-size: 13px;
    border-color: #dedede;
    width: 100%;
    border-collapse: collapse;
  }

  .table thead {
    background-color: #00a65a;
    border-color: #008d4c;
    color: #fff;
  }

  .table tbody tr td {
    border-collapse: collapse;
  }

  tbody tr:nth-child(even) {
    background: #F6F5FA;
  }

  .on {
    float: right;
    font-size: 13px;
    font-style: italic;
  }
</style>

<body>
  <div id="main-content">
    <h3>
      Aplikasi Inventory
    </h3>
    <h4>LAPORAN DATA ASET</h4>
    <table class="table" border="" cellpadding="10" cellspacing="0">
      <thead>
        <tr>
          <th class="ctr">No</th>
          <th class="ctr">Detail Lokasi</th>
          <th class="ctr">Material</th>
          <th>Detail Material</th>
          <th class="ctr">Stock</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $number = 1;
        if ($aset) :
          foreach ($aset as $row) : ?>
            <tr>
              <td class="ctr"><?php echo $number++; ?></td>
              <td><?php echo $row['desc_storage']; ?></td>
              <td class="ctr"><?php echo $row['material']; ?></td>
              <td><?php echo $row['material_desc']; ?></td>
              <td class="ctr"><?php echo $row['stock']; ?></td>
            </tr>
          <?php endforeach;
        else : ?>
          <tr>
            <td colspan="5">
              <p class="bg-danger padding-medium">Tidak ada data</p>
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</body>

</html>