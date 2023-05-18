<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-17 13:15:10 --> Severity: Notice --> Undefined index: level D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 23
ERROR - 2023-05-17 13:15:10 --> Severity: Notice --> Undefined index: level D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 23
ERROR - 2023-05-17 13:15:10 --> Severity: Notice --> Undefined index: id D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 26
ERROR - 2023-05-17 13:15:58 --> Query error: Unknown column 'inv_return.aset' in 'on clause' - Invalid query: SELECT `inv_return`.*, `inv_purchasing`.`id` as `id_po`, `inv_purchasing`.`aset`, `inv_purchasing`.`status`, `inv_aset`.`material_desc`, `inv_purchasing`.`jumlah` as `jpo`, `inv_return`.`jumlah` as `jrt`
FROM `inv_return`
JOIN `inv_purchasing` ON `inv_return`.`aset` = `inv_purchasing`.`aset`
JOIN `inv_aset` ON `inv_aset`.`id` = `inv_return`.`aset`
WHERE `inv_return`.`tanggal` >= '2023-05-01'
AND `inv_return`.`tanggal` <= '2023-05-17'
ORDER BY `tanggal` DESC
ERROR - 2023-05-17 14:05:54 --> Severity: Notice --> Undefined index: pegawai D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pengeluaran\view.php 57
ERROR - 2023-05-17 14:05:54 --> Severity: Notice --> Undefined index: aset D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pengeluaran\view.php 58
ERROR - 2023-05-17 14:05:54 --> Severity: Notice --> Undefined index: pegawai D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pengeluaran\view.php 57
ERROR - 2023-05-17 14:05:54 --> Severity: Notice --> Undefined index: aset D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pengeluaran\view.php 58
ERROR - 2023-05-17 14:05:54 --> Severity: Notice --> Undefined index: pegawai D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pengeluaran\view.php 57
ERROR - 2023-05-17 14:05:54 --> Severity: Notice --> Undefined index: aset D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pengeluaran\view.php 58
ERROR - 2023-05-17 14:09:00 --> Severity: Notice --> Undefined index: pegawai D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pengeluaran\print.php 123
ERROR - 2023-05-17 14:09:00 --> Severity: Notice --> Undefined index: pegawai D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pengeluaran\print.php 123
ERROR - 2023-05-17 14:09:00 --> Severity: Notice --> Undefined index: pegawai D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pengeluaran\print.php 123
ERROR - 2023-05-17 14:11:29 --> Severity: Notice --> Undefined index: jumlah D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pengeluaran\print.php 126
ERROR - 2023-05-17 14:11:29 --> Severity: Notice --> Undefined index: jumlah D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pengeluaran\print.php 126
ERROR - 2023-05-17 14:11:29 --> Severity: Notice --> Undefined index: jumlah D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pengeluaran\print.php 126
ERROR - 2023-05-17 14:15:11 --> Severity: Notice --> Undefined index: id_po D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\retur\print.php 122
ERROR - 2023-05-17 14:15:11 --> Severity: Notice --> Undefined index: jpo D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\retur\print.php 125
ERROR - 2023-05-17 14:19:52 --> Severity: Notice --> Undefined index: aset D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\retur\view.php 56
ERROR - 2023-05-17 14:19:52 --> Severity: Notice --> Undefined index: jpp D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\retur\view.php 57
ERROR - 2023-05-17 14:19:52 --> Severity: Notice --> Undefined index: aset D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\retur\view.php 56
ERROR - 2023-05-17 14:19:52 --> Severity: Notice --> Undefined index: jpp D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\retur\view.php 57
ERROR - 2023-05-17 14:19:52 --> Severity: Notice --> Undefined index: aset D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\retur\view.php 56
ERROR - 2023-05-17 14:19:52 --> Severity: Notice --> Undefined index: jpp D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\retur\view.php 57
ERROR - 2023-05-17 14:39:10 --> Query error: Unknown column 'inv_permintaan.tanaggal' in 'order clause' - Invalid query: SELECT `inv_permintaan_detail`.`id`, `inv_permintaan`.`tanggal`, `inv_return`.`id` as `idrt`, `inv_aset`.`id` as `asetid`, `inv_aset`.`material_desc`, `inv_permintaan`.`tanggal`, `inv_permintaan_detail`.`jumlah`, `inv_return`.`jumlah` as `jrt`, `inv_return`.`keterangan`
FROM `inv_permintaan_detail`
LEFT JOIN `inv_permintaan` ON `inv_permintaan`.`id` = `inv_permintaan_detail`.`permintaan`
LEFT JOIN `inv_aset` ON `inv_permintaan_detail`.`aset` = `inv_aset`.`id`
LEFT JOIN `inv_return` ON `inv_permintaan_detail`.`id` = `inv_return`.`permintaan_detail`
WHERE `inv_permintaan_detail`.`hapus` = 0
AND `inv_permintaan`.`status` = 1
AND `inv_return`.`tanggal` >= '2023-05-01'
AND `inv_return`.`tanggal` <= '2023-05-17'
ORDER BY `inv_permintaan`.`tanaggal` DESC
ERROR - 2023-05-17 14:40:44 --> Query error: Unknown column 'inv_permintaan.tanggaal' in 'order clause' - Invalid query: SELECT `inv_permintaan_detail`.`id`, `inv_permintaan`.`tanggal`, `inv_return`.`id` as `idrt`, `inv_aset`.`id` as `asetid`, `inv_aset`.`material_desc`, `inv_permintaan_detail`.`jumlah`, `inv_return`.`jumlah` as `jrt`, `inv_return`.`keterangan`
FROM `inv_permintaan_detail`
LEFT JOIN `inv_permintaan` ON `inv_permintaan`.`id` = `inv_permintaan_detail`.`permintaan`
LEFT JOIN `inv_aset` ON `inv_permintaan_detail`.`aset` = `inv_aset`.`id`
LEFT JOIN `inv_return` ON `inv_permintaan_detail`.`id` = `inv_return`.`permintaan_detail`
WHERE `inv_permintaan_detail`.`hapus` = 0
AND `inv_permintaan`.`status` = 1
ORDER BY `inv_permintaan`.`tanggaal` DESC
ERROR - 2023-05-17 14:42:35 --> Query error: Unknown column 'inv_permintaan.tanaggal' in 'order clause' - Invalid query: SELECT `inv_permintaan_detail`.`id`, `inv_permintaan`.`tanggal`, `inv_return`.`id` as `idrt`, `inv_aset`.`id` as `asetid`, `inv_aset`.`material_desc`, `inv_permintaan_detail`.`jumlah`, `inv_return`.`jumlah` as `jrt`, `inv_return`.`keterangan`
FROM `inv_permintaan_detail`
LEFT JOIN `inv_permintaan` ON `inv_permintaan`.`id` = `inv_permintaan_detail`.`permintaan`
LEFT JOIN `inv_aset` ON `inv_permintaan_detail`.`aset` = `inv_aset`.`id`
LEFT JOIN `inv_return` ON `inv_permintaan_detail`.`id` = `inv_return`.`permintaan_detail`
WHERE `inv_permintaan_detail`.`hapus` = 0
AND `inv_permintaan`.`status` = 1
AND `inv_permintaan`.`tanggal` >= '2023-05-01'
AND `inv_permintaan`.`tanggal` <= '2023-05-17'
ORDER BY `inv_permintaan`.`tanaggal` DESC
ERROR - 2023-05-17 14:44:47 --> Severity: Notice --> Undefined variable: return D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pemakaian\print.php 118
ERROR - 2023-05-17 14:45:53 --> Severity: Notice --> Undefined variable: return D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pemakaian\print.php 118
ERROR - 2023-05-17 14:47:04 --> Severity: error --> Exception: syntax error, unexpected 'date' (T_STRING) D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\pemakaian\print.php 44
ERROR - 2023-05-17 14:54:36 --> Query error: Unknown column 'inv_purchasing.tanggaal' in 'order clause' - Invalid query: SELECT `inv_penerimaan`.*, `inv_purchasing`.`aset`, `inv_purchasing`.`jumlah`, `inv_purchasing`.`tanggal` as `tanggal_beli`, `inv_aset`.`material_desc` as `barang`
FROM `inv_penerimaan`
JOIN `inv_purchasing` ON `inv_purchasing`.`id` = `inv_penerimaan`.`purchase`
LEFT JOIN `inv_aset` ON `inv_purchasing`.`aset` = `inv_aset`.`id`
WHERE `inv_penerimaan`.`tanggal` >= '2023-05-01'
AND `inv_penerimaan`.`tanggal` <= '2023-05-17'
ORDER BY `inv_purchasing`.`tanggaal` DESC
ERROR - 2023-05-17 14:56:12 --> Query error: Unknown column 'inv_purchasing.tanggaal' in 'order clause' - Invalid query: SELECT `inv_penerimaan`.*, `inv_purchasing`.`aset`, `inv_purchasing`.`jumlah`, `inv_purchasing`.`tanggal` as `tanggal_beli`, `inv_aset`.`material_desc` as `barang`
FROM `inv_penerimaan`
JOIN `inv_purchasing` ON `inv_purchasing`.`id` = `inv_penerimaan`.`purchase`
LEFT JOIN `inv_aset` ON `inv_purchasing`.`aset` = `inv_aset`.`id`
WHERE `inv_penerimaan`.`tanggal` >= '2023-05-01'
AND `inv_penerimaan`.`tanggal` <= '2023-05-17'
ORDER BY `inv_purchasing`.`tanggaal` DESC
ERROR - 2023-05-17 14:56:17 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\models\inventory\Penerimaan_model.php 41
ERROR - 2023-05-17 15:00:37 --> Severity: Notice --> Undefined index: desc_storage D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 149
ERROR - 2023-05-17 16:08:06 --> Severity: Notice --> Undefined index: level D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 23
ERROR - 2023-05-17 16:08:06 --> Severity: Notice --> Undefined index: level D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 23
ERROR - 2023-05-17 16:08:06 --> Severity: Notice --> Undefined index: id D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 26
ERROR - 2023-05-17 16:46:44 --> Severity: Notice --> Undefined variable: plant D:\xampp7\htdocs\ci_all\application\views\inventory\layout\sidebar.php 99
ERROR - 2023-05-17 16:47:11 --> Severity: Notice --> Undefined variable: plant D:\xampp7\htdocs\ci_all\application\views\inventory\layout\sidebar.php 99
ERROR - 2023-05-17 16:47:14 --> Severity: Notice --> Undefined variable: plant D:\xampp7\htdocs\ci_all\application\views\inventory\layout\sidebar.php 99
ERROR - 2023-05-17 16:48:02 --> Severity: Notice --> Undefined variable: plant D:\xampp7\htdocs\ci_all\application\views\inventory\layout\sidebar.php 99
ERROR - 2023-05-17 17:15:15 --> Severity: error --> Exception: Call to undefined method Lokasi_model::lokasi_plant() D:\xampp7\htdocs\ci_all\application\controllers\inventory\Lokasi.php 96
ERROR - 2023-05-17 17:16:48 --> Severity: error --> Exception: Call to undefined method Lokasi_model::get_detail_plant() D:\xampp7\htdocs\ci_all\application\controllers\inventory\Lokasi.php 136
ERROR - 2023-05-17 17:38:10 --> Severity: Notice --> Undefined variable: lokasi D:\xampp7\htdocs\ci_all\application\views\inventory\aset\detail.php 79
ERROR - 2023-05-17 17:38:10 --> Severity: Warning --> array_key_exists() expects parameter 2 to be array, unknown given D:\xampp7\htdocs\ci_all\application\views\inventory\aset\detail.php 79
ERROR - 2023-05-17 17:49:27 --> Severity: Notice --> Undefined index: base_unit D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\stock\view.php 36
ERROR - 2023-05-17 17:49:27 --> Severity: Notice --> Undefined index: base_unit D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\stock\view.php 36
ERROR - 2023-05-17 17:50:24 --> Severity: Notice --> Undefined index: base_unit D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\stock\view.php 36
ERROR - 2023-05-17 17:50:24 --> Severity: Notice --> Undefined index: base_unit D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\stock\view.php 36
ERROR - 2023-05-17 19:54:52 --> Severity: Notice --> Undefined variable: purchasing D:\xampp7\htdocs\ci_all\application\views\inventory\produksi\view.php 35
ERROR - 2023-05-17 19:54:52 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp7\htdocs\ci_all\application\views\inventory\produksi\view.php 35
ERROR - 2023-05-17 20:08:06 --> Severity: Notice --> Undefined variable: purchasing D:\xampp7\htdocs\ci_all\application\views\inventory\produksi\form.php 37
ERROR - 2023-05-17 20:08:06 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\produksi\form.php 37
ERROR - 2023-05-17 20:08:06 --> Severity: Notice --> Undefined variable: purchasing D:\xampp7\htdocs\ci_all\application\views\inventory\produksi\form.php 75
ERROR - 2023-05-17 20:08:06 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\produksi\form.php 75
ERROR - 2023-05-17 20:25:56 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\models\inventory\Produksi_model.php 56
ERROR - 2023-05-17 20:41:58 --> Query error: Column 'tanggal' cannot be null - Invalid query: INSERT INTO `inv_produksi` (`id`, `aset`, `jumlah`, `tanggal`, `tanggal_expired`) VALUES ('PS00002', 'AB00001', '720', NULL, '2024/05/17')
ERROR - 2023-05-17 21:14:59 --> Severity: Notice --> Undefined variable: produksi D:\xampp7\htdocs\ci_all\application\views\inventory\finishgood\view.php 33
ERROR - 2023-05-17 21:14:59 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp7\htdocs\ci_all\application\views\inventory\finishgood\view.php 33
ERROR - 2023-05-17 22:03:16 --> Severity: Notice --> Undefined property: Laporan::$Produksi_model D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 166
ERROR - 2023-05-17 22:03:16 --> Severity: error --> Exception: Call to a member function report() on null D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 166
ERROR - 2023-05-17 22:03:38 --> Query error: Unknown column 'inv_produksi.purchase' in 'on clause' - Invalid query: SELECT `inv_produksi`.*, `inv_purchasing`.`aset`, `inv_purchasing`.`jumlah`, `inv_purchasing`.`tanggal` as `tanggal_beli`, `inv_aset`.`material_desc` as `barang`, `inv_aset`.`base_unit`
FROM `inv_produksi`
JOIN `inv_purchasing` ON `inv_purchasing`.`id` = `inv_produksi`.`purchase`
LEFT JOIN `inv_aset` ON `inv_purchasing`.`aset` = `inv_aset`.`id`
WHERE `inv_produksi`.`tanggal` >= '2023-05-01'
AND `inv_produksi`.`tanggal` <= '2023-05-17'
ORDER BY `inv_produksi`.`tanggal` DESC
