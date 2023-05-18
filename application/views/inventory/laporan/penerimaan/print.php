<?php
function getTanggal($tanggal)
{
  $bulan = "";
  switch (date('m', strtotime($tanggal))) {
    case "01":
      $bulan = "Januari";
      break;
    case "02":
      $bulan = "Februari";
      break;
    case "03":
      $bulan = "Maret";
      break;
    case "04":
      $bulan = "April";
      break;
    case "05":
      $bulan = "Mei";
      break;
    case "06":
      $bulan = "Juni";
      break;
    case "07":
      $bulan = "Juli";
      break;
    case "08":
      $bulan = "Agustus";
      break;
    case "09":
      $bulan = "September";
      break;
    case "10":
      $bulan = "Oktober";
      break;
    case "11":
      $bulan = "November";
      break;
    case "12":
      $bulan = "Desember";
      break;
  }

  return date('d', strtotime($tanggal)) . " " . $bulan . " " . date('Y', strtotime($tanggal));
}
?>
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
    <h4>LAPORAN DATA TERIMA BARANG</h4>
    <h4><?php echo ($this->session->userdata('tanggal_penerimaan')) ? $this->session->userdata('tanggal_penerimaan') : date('Y-m-01') . " - " . date('Y-m-d'); ?></h4>
    <table class="table" border="" cellpadding="10" cellspacing="0">
      <thead>
        <tr class="bg-green">
          <th width="5%">No</th>
          <th width="10%">ID Order</th>
          <th width="10%">Tanggal Beli</th>
          <th width="10%">Tanggal Terima</th>
          <th width="20%">Nama Barang</th>
          <th width="10%">Jumlah PO</th>
        </tr>
      </thead>
      <tbody>
        <?php $number = 1;
        if ($penerimaan) :
          foreach ($penerimaan as $row) : ?>
            <tr>
              <td><?php echo $number++; ?></td>
              <td><?php echo $row['purchase']; ?></td>
              <td class="ctr"><?php echo getTanggal($row['tanggal_beli']); ?></td>
              <td class="ctr"><?php echo getTanggal($row['tanggal']); ?></td>
              <td><?php echo $row['barang']; ?></td>
              <td class="ctr"><?php echo $row['jumlah'] . " " . $row['base_unit']; ?></td>
            </tr>
          <?php endforeach;
        else : ?>
          <tr>
            <td colspan="6">
              <p class="bg-danger padding-medium">Tidak ada data</p>
            </td>
          </tr>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</body>

</html>