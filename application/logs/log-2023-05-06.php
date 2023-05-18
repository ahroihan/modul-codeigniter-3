<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-06 09:45:02 --> Severity: Notice --> Undefined index: level D:\xampp7\htdocs\ci_all\application\controllers\inventory\Penerimaan.php 18
ERROR - 2023-05-06 09:45:02 --> Severity: Notice --> Undefined index: level D:\xampp7\htdocs\ci_all\application\controllers\inventory\Penerimaan.php 18
ERROR - 2023-05-06 09:45:02 --> Severity: Notice --> Undefined index: id D:\xampp7\htdocs\ci_all\application\controllers\inventory\Penerimaan.php 21
ERROR - 2023-05-06 09:46:13 --> Query error: Table 'ci_all.pegawai' doesn't exist - Invalid query: SELECT `tanggal`, `pegawai`.`nama` as `pegawai`, `status`, `inv_permintaan`.`id`
FROM `inv_permintaan`
JOIN `pegawai` ON `pegawai`.`id` = `inv_permintaan`.`pegawai`
WHERE `status` = 1
ERROR - 2023-05-06 10:06:00 --> Query error: Table 'ci_all.pegawai' doesn't exist - Invalid query: SELECT `tanggal`, `pegawai`.`nama` as `pegawai`, `status`, `inv_permintaan`.`id`
FROM `inv_permintaan`
JOIN `pegawai` ON `pegawai`.`id` = `inv_permintaan`.`pegawai`
WHERE `status` = 1
ERROR - 2023-05-06 10:10:47 --> Query error: Unknown column 'permintaan_detail.jumlah' in 'field list' - Invalid query: SELECT `inv_aset_baru`.`id` as `aset`, `inv_aset_baru`.`material_desc` as `aset_merk`, `inv_aset_baru`.`base_unit` as `aset_type`, `permintaan_detail`.`jumlah`
FROM `inv_permintaan_detail`
JOIN `inv_permintaan` ON `inv_permintaan`.`id` = `inv_permintaan_detail`.`inv_permintaan`
JOIN `inv_aset_baru` ON `inv_permintaan_detail`.`aset` = `inv_aset_baru`.`id`
WHERE `inv_permintaan` = 'PM00001'
ERROR - 2023-05-06 10:11:20 --> Query error: Unknown column 'inv_permintaan' in 'where clause' - Invalid query: SELECT `inv_aset_baru`.`id` as `aset`, `inv_aset_baru`.`material_desc` as `aset_merk`, `inv_aset_baru`.`base_unit` as `aset_type`, `inv_permintaan_detail`.`jumlah`
FROM `inv_permintaan_detail`
JOIN `inv_permintaan` ON `inv_permintaan`.`id` = `inv_permintaan_detail`.`inv_permintaan`
JOIN `inv_aset_baru` ON `inv_permintaan_detail`.`aset` = `inv_aset_baru`.`id`
WHERE `inv_permintaan` = 'PM00001'
ERROR - 2023-05-06 10:13:22 --> Query error: Unknown column 'inv_permintaan_detail.inv_permintaan' in 'on clause' - Invalid query: SELECT `inv_aset_baru`.`id` as `aset`, `inv_aset_baru`.`material_desc` as `aset_merk`, `inv_aset_baru`.`base_unit` as `aset_type`, `inv_permintaan_detail`.`jumlah`
FROM `inv_permintaan_detail`
JOIN `inv_permintaan` ON `inv_permintaan`.`id` = `inv_permintaan_detail`.`inv_permintaan`
JOIN `inv_aset_baru` ON `inv_permintaan_detail`.`aset` = `inv_aset_baru`.`id`
WHERE `permintaan` = 'PM00001'
ERROR - 2023-05-06 10:15:36 --> Query error: Unknown column 'inv_permintaanpermintaan' in 'where clause' - Invalid query: SELECT `inv_aset_baru`.`id` as `aset`, `inv_aset_baru`.`material_desc` as `aset_merk`, `inv_aset_baru`.`base_unit` as `aset_type`, `inv_permintaan_detail`.`jumlah`
FROM `inv_permintaan_detail`
JOIN `inv_permintaan` ON `inv_permintaan`.`id` = `inv_permintaan_detail`.`inv_permintaan`
JOIN `inv_aset_baru` ON `inv_permintaan_detail`.`aset` = `inv_aset_baru`.`id`
WHERE `inv_permintaanpermintaan` = 'PM00001'
ERROR - 2023-05-06 10:15:47 --> Query error: Unknown column 'inv_permintaan.permintaan' in 'where clause' - Invalid query: SELECT `inv_aset_baru`.`id` as `aset`, `inv_aset_baru`.`material_desc` as `aset_merk`, `inv_aset_baru`.`base_unit` as `aset_type`, `inv_permintaan_detail`.`jumlah`
FROM `inv_permintaan_detail`
JOIN `inv_permintaan` ON `inv_permintaan`.`id` = `inv_permintaan_detail`.`inv_permintaan`
JOIN `inv_aset_baru` ON `inv_permintaan_detail`.`aset` = `inv_aset_baru`.`id`
WHERE `inv_permintaan`.`permintaan` = 'PM00001'
ERROR - 2023-05-06 10:16:18 --> Query error: Unknown column 'inv_permintaan_detail.inv_permintaan' in 'on clause' - Invalid query: SELECT `inv_aset_baru`.`id` as `aset`, `inv_aset_baru`.`material_desc` as `aset_merk`, `inv_aset_baru`.`base_unit` as `aset_type`, `inv_permintaan_detail`.`jumlah`
FROM `inv_permintaan_detail`
JOIN `inv_permintaan` ON `inv_permintaan`.`id` = `inv_permintaan_detail`.`inv_permintaan`
JOIN `inv_aset_baru` ON `inv_permintaan_detail`.`aset` = `inv_aset_baru`.`id`
WHERE `inv_permintaan_detail`.`permintaan` = 'PM00001'
ERROR - 2023-05-06 10:22:28 --> Severity: Notice --> Undefined index: purchase D:\xampp7\htdocs\ci_all\application\views\inventory\pengeluaran\form.php 49
ERROR - 2023-05-06 10:22:28 --> Severity: Notice --> Undefined index: purchase D:\xampp7\htdocs\ci_all\application\views\inventory\pengeluaran\form.php 49
ERROR - 2023-05-06 05:30:32 --> Severity: error --> Exception: Unable to locate the model you have specified: Aset_baru_model D:\xampp7\htdocs\ci_all\system\core\Loader.php 349
ERROR - 2023-05-06 10:57:38 --> Severity: Notice --> Undefined index: AB00005 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 127
ERROR - 2023-05-06 10:58:13 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-06 10:58:13 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-06 10:58:13 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-06 11:04:24 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-06 11:04:24 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-06 11:04:24 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-06 11:07:56 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-06 11:07:56 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-06 11:07:56 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-06 11:08:27 --> Query error: Table 'ci_all.aset_baru' doesn't exist - Invalid query: SELECT `inv_return`.*, `aset_baru`.`id` as `asetid`, `aset_baru`.`material_desc` as `aset`, `inv_return`.`jumlah` as `jrt`
FROM `inv_return`
JOIN `aset_baru` ON `aset_baru`.`id` = `return`.`aset`
ERROR - 2023-05-06 11:25:28 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-06 11:25:28 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-06 11:25:28 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-06 11:25:36 --> Severity: error --> Exception: Unable to locate the model you have specified: Return_model D:\xampp7\htdocs\ci_all\system\core\Loader.php 349
ERROR - 2023-05-06 11:27:54 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-06 11:27:54 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-06 11:27:54 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-06 11:29:00 --> Severity: Notice --> Undefined variable: retur D:\xampp7\htdocs\ci_all\application\views\inventory\return\view.php 35
ERROR - 2023-05-06 11:29:00 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp7\htdocs\ci_all\application\views\inventory\return\view.php 35
ERROR - 2023-05-06 11:30:00 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-06 11:30:00 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-06 11:30:00 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-06 11:33:37 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-06 11:33:37 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-06 11:33:37 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-06 11:35:03 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-06 11:35:03 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-06 11:35:03 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-06 11:35:43 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-06 11:35:43 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-06 11:35:43 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-06 11:37:27 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-06 11:37:27 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-06 11:37:27 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-06 11:38:15 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-06 11:38:15 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-06 11:38:15 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-06 11:38:33 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-06 11:38:33 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-06 11:38:33 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-06 06:51:37 --> Severity: Notice --> Undefined property: Laporan::$Aset_baru_model D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 44
ERROR - 2023-05-06 06:51:37 --> Severity: error --> Exception: Call to a member function get_all() on null D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 44
ERROR - 2023-05-06 13:17:30 --> Severity: Notice --> Undefined index: tanggal D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 33
ERROR - 2023-05-06 13:17:30 --> Severity: Notice --> Undefined index: jumlah D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 70
ERROR - 2023-05-06 13:22:06 --> Severity: Notice --> Undefined index: tanggal D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 33
ERROR - 2023-05-06 13:22:06 --> Severity: Notice --> Undefined index: jumlah D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 70
ERROR - 2023-05-06 14:07:34 --> Severity: Notice --> Undefined index: tanggal D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 33
ERROR - 2023-05-06 14:07:34 --> Severity: Notice --> Undefined index: jumlah D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 70
ERROR - 2023-05-06 14:13:40 --> Severity: Notice --> Undefined index: tanggal D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 33
ERROR - 2023-05-06 14:13:40 --> Severity: Notice --> Undefined index: jumlah D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 70
ERROR - 2023-05-06 14:14:44 --> Severity: Notice --> Undefined index: tanggal D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 33
ERROR - 2023-05-06 14:14:44 --> Severity: Notice --> Undefined index: jumlah D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 70
ERROR - 2023-05-06 14:16:32 --> Query error: Unknown column 'inva_aset_baru.material_desc' in 'field list' - Invalid query: SELECT `inv_purchasing`.*, `inva_aset_baru`.`material_desc`
FROM `inv_purchasing`
JOIN `inv_aset_baru` ON `inv_aset_baru`.`id` = `inv_purchasing`.`aset`
WHERE `inv_purchasing`.`id` = 'PR00001'
ERROR - 2023-05-06 14:18:16 --> Severity: Notice --> Undefined index: tanggal D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 33
ERROR - 2023-05-06 14:18:16 --> Severity: Notice --> Undefined index: jumlah D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 70
ERROR - 2023-05-06 14:23:11 --> Severity: Notice --> Undefined index: tanggal D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 33
ERROR - 2023-05-06 14:23:11 --> Severity: Notice --> Undefined index: jumlah D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 70
ERROR - 2023-05-06 14:26:49 --> Severity: Notice --> Undefined index: tanggal D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 33
ERROR - 2023-05-06 14:26:49 --> Severity: Notice --> Undefined index: jumlah D:\xampp7\htdocs\ci_all\application\views\inventory\purchase\form.php 70
ERROR - 2023-05-06 15:07:47 --> Severity: Notice --> Undefined index: AB00004 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 83
ERROR - 2023-05-06 15:07:47 --> Severity: Notice --> Undefined index: AB00004 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 86
ERROR - 2023-05-06 15:07:47 --> Severity: Notice --> Undefined index: AB00004 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 87
ERROR - 2023-05-06 15:09:20 --> Severity: Notice --> Undefined index: AB00001 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 127
ERROR - 2023-05-06 15:11:48 --> Severity: Notice --> Undefined index: AB00004 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 127
ERROR - 2023-05-06 15:45:27 --> Severity: Notice --> Undefined index: AB00007 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 127
ERROR - 2023-05-06 15:59:12 --> Severity: Notice --> Undefined index: AB00002 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 127
ERROR - 2023-05-06 15:59:12 --> Severity: Notice --> Undefined index: AB00002 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 130
ERROR - 2023-05-06 15:59:12 --> Severity: Notice --> Undefined index: AB00002 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 131
ERROR - 2023-05-06 16:05:23 --> Severity: Notice --> Undefined index: AB00002 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 128
ERROR - 2023-05-06 16:05:23 --> Severity: Notice --> Undefined index: AB00002 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 131
ERROR - 2023-05-06 16:05:23 --> Severity: Notice --> Undefined index: AB00002 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 132
ERROR - 2023-05-06 16:05:23 --> Severity: Compile Error --> Cannot use isset() on the result of an expression (you can use "null !== expression" instead) D:\xampp7\htdocs\ci_all\application\views\inventory\permintaan\form.php 78
ERROR - 2023-05-06 16:06:10 --> Severity: Compile Error --> Cannot use isset() on the result of an expression (you can use "null !== expression" instead) D:\xampp7\htdocs\ci_all\application\views\inventory\permintaan\form.php 78
ERROR - 2023-05-06 16:06:25 --> Severity: Compile Error --> Cannot use isset() on the result of an expression (you can use "null !== expression" instead) D:\xampp7\htdocs\ci_all\application\views\inventory\permintaan\form.php 78
ERROR - 2023-05-06 16:07:06 --> Severity: Notice --> Undefined index: AB00004 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 83
ERROR - 2023-05-06 16:07:06 --> Severity: Notice --> Undefined index: AB00004 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 86
ERROR - 2023-05-06 16:07:06 --> Severity: Notice --> Undefined index: AB00004 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 87
ERROR - 2023-05-06 16:07:33 --> Severity: Notice --> Undefined index: AB00001 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 83
ERROR - 2023-05-06 16:07:33 --> Severity: Notice --> Undefined index: AB00001 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 86
ERROR - 2023-05-06 16:07:33 --> Severity: Notice --> Undefined index: AB00001 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 87
ERROR - 2023-05-06 16:13:06 --> Severity: Notice --> Undefined index: AB00005 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 128
ERROR - 2023-05-06 16:13:06 --> Severity: Notice --> Undefined index: AB00005 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 131
ERROR - 2023-05-06 16:13:06 --> Severity: Notice --> Undefined index: AB00005 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 132
ERROR - 2023-05-06 16:14:26 --> Severity: Notice --> Undefined index: AB00004 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 128
ERROR - 2023-05-06 16:14:26 --> Severity: Notice --> Undefined index: AB00004 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 131
ERROR - 2023-05-06 16:14:26 --> Severity: Notice --> Undefined index: AB00004 D:\xampp7\htdocs\ci_all\application\controllers\inventory\Permintaan.php 132
ERROR - 2023-05-06 16:16:53 --> Severity: Notice --> Undefined property: Penerimaan::$Penerimaan_model D:\xampp7\htdocs\ci_all\application\controllers\inventory\Penerimaan.php 41
ERROR - 2023-05-06 16:16:53 --> Severity: error --> Exception: Call to a member function insert() on null D:\xampp7\htdocs\ci_all\application\controllers\inventory\Penerimaan.php 41
ERROR - 2023-05-06 11:20:35 --> Severity: Notice --> Undefined property: Laporan::$Aset_baru_model D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 44
ERROR - 2023-05-06 11:20:35 --> Severity: error --> Exception: Call to a member function get_all() on null D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 44
ERROR - 2023-05-06 16:41:10 --> Severity: error --> Exception: Call to undefined method Dompdf\Dompdf::title() D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 74
ERROR - 2023-05-06 16:56:38 --> Query error: Table 'ci_all.purchasing' doesn't exist - Invalid query: SELECT `inv_penerimaan`.*, `purchase`, `purchasing`.`aset`, `purchasing`.`jumlah`, `purchasing`.`tanggal` as `tanggal_beli`, `inv_aset_baru`.`material_desc` as `barang`
FROM `inv_penerimaan`
JOIN `purchasing` ON `purchasing`.`id` = `inv_penerimaan`.`purchase`
JOIN `inv_aset_baru` ON `purchasing`.`aset` = `inv_aset_baru`.`id`
WHERE `inv_penerimaan`.`tanggal` >= '2023-04-30'
AND `inv_penerimaan`.`tanggal` <= '2023-05-06'
ORDER BY `tanggal` DESC
ERROR - 2023-05-06 17:06:09 --> Severity: error --> Exception: Invalid numeric literal D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\penerimaan\print.php 12
ERROR - 2023-05-06 17:07:59 --> Severity: error --> Exception: Invalid numeric literal D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\penerimaan\print.php 27
ERROR - 2023-05-06 17:14:17 --> Severity: error --> Exception: Invalid numeric literal D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\penerimaan\print.php 27
ERROR - 2023-05-06 17:15:58 --> Severity: error --> Exception: Call to undefined function getTanggal() D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\penerimaan\print.php 121
ERROR - 2023-05-06 12:39:38 --> Severity: Compile Error --> Cannot redeclare Laporan::pengeluaran() D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 177
ERROR - 2023-05-06 12:42:29 --> Severity: Compile Error --> Cannot redeclare Laporan::pengeluaran() D:\xampp7\htdocs\ci_all\application\controllers\inventory\Laporan.php 178
ERROR - 2023-05-06 17:45:26 --> Severity: error --> Exception: syntax error, unexpected '<', expecting elseif (T_ELSEIF) or else (T_ELSE) or endif (T_ENDIF) D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\penerimaan\print.php 118
ERROR - 2023-05-06 19:04:49 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-06 19:04:49 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-06 19:04:49 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
