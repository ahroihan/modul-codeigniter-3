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
      UNIVERSITAS
    </h3>
    <h4>LAPORAN DATA WISUDAWAN/TI MAHASISWA</h4>
    <table class="table" border="" cellpadding="10" cellspacing="0">
      <thead>
        <tr>
          <th class="ctr">No</th>
          <th class="ctr">NIM</th>
          <th class="ctr">Nama</th>
          <th class="ctr">Prodi</th>
          <th>Tanggal Yudisium</th>
          <th class="ctr">Status Bayar</th>
        </tr>
      </thead>
      <tbody>
        <?php if ($mahasiswa) :
          $number = 1;
          foreach ($mahasiswa as $row) :
        ?>
            <tr>
              <td class="ctr"><?php echo $number++; ?></td>
              <td class="ctr"><?php echo $row['nim']; ?></td>
              <td class="ctr"><?php echo $row['nama']; ?></td>
              <td class="ctr"><?php echo $row['prodi']; ?></td>
              <td class="ctr"><?php echo date('d-M-Y', strtotime($row['tanggal_yudisium'])); ?></td>
              <td class="ctr"><?php echo $row['status_bayar']; ?></td>
            </tr>
          <?php endforeach;
        else : ?>
          <td class="ctr" colspan="6">
            <p class="bg-danger padding-medium">Tidak ada data</p>
          </td>
        <?php endif; ?>
      </tbody>
    </table>
  </div>
</body>

</html>