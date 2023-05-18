<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-05-07 06:18:10 --> Severity: error --> Exception: syntax error, unexpected '<', expecting end of file D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\retur\view.php 64
ERROR - 2023-05-07 06:23:00 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-07 06:23:00 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-07 06:23:00 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-07 06:30:45 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-07 06:30:45 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-07 06:30:45 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-07 06:31:02 --> Query error: Unknown column 'inv_return.purchase' in 'on clause' - Invalid query: SELECT `inv_return`.*, `inv_purchasing`.`id` as `purchase`, `inv_purchasing`.`aset`, `inv_purchasing`.`status`, `inv_aset_baru`.`material_desc` as `aset`, `inv_purchasing`.`jumlah` as `jpo`, `inv_return`.`jumlah` as `jrt`
FROM `inv_return`
JOIN `inv_purchasing` ON `inv_return`.`purchase` = `inv_purchasing`.`id`
JOIN `inv_aset_baru` ON `inv_aset_baru`.`id` = `inv_purchasing`.`aset`
WHERE `inv_return`.`tanggal` >= '2020-05-07'
AND `inv_return`.`tanggal` <= '2023-05-07'
ORDER BY `tanggal` DESC
ERROR - 2023-05-07 06:32:45 --> Query error: Unknown column 'inv_return.purchase' in 'on clause' - Invalid query: SELECT `inv_return`.*, `inv_purchasing`.`id` as `purchase`, `inv_purchasing`.`aset`, `inv_purchasing`.`status`, `inv_aset_baru`.`material_desc`, `inv_purchasing`.`jumlah` as `jpo`, `inv_return`.`jumlah` as `jrt`
FROM `inv_return`
JOIN `inv_purchasing` ON `inv_return`.`purchase` = `inv_purchasing`.`id`
JOIN `inv_aset_baru` ON `inv_aset_baru`.`id` = `inv_purchasing`.`aset`
WHERE `inv_return`.`tanggal` >= '2020-05-07'
AND `inv_return`.`tanggal` <= '2023-05-07'
ORDER BY `tanggal` DESC
ERROR - 2023-05-07 06:33:24 --> Query error: Unknown column 'inv_return.purchase' in 'on clause' - Invalid query: SELECT `inv_return`.*, `inv_purchasing`.`id`, `inv_purchasing`.`aset`, `inv_purchasing`.`status`, `inv_aset_baru`.`material_desc`, `inv_purchasing`.`jumlah` as `jpo`, `inv_return`.`jumlah` as `jrt`
FROM `inv_return`
JOIN `inv_purchasing` ON `inv_return`.`purchase` = `inv_purchasing`.`id`
JOIN `inv_aset_baru` ON `inv_aset_baru`.`id` = `inv_purchasing`.`aset`
WHERE `inv_return`.`tanggal` >= '2020-05-07'
AND `inv_return`.`tanggal` <= '2023-05-07'
ORDER BY `tanggal` DESC
ERROR - 2023-05-07 06:38:05 --> Severity: Notice --> Undefined index: purchase D:\xampp7\htdocs\ci_all\application\views\inventory\laporan\retur\view.php 56
ERROR - 2023-05-07 16:26:39 --> The insert method must be passed an array containing data.
ERROR - 2023-05-07 16:50:51 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-07 16:50:51 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-07 16:50:51 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-07 16:56:41 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-07 16:56:41 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-07 16:56:41 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-07 17:02:04 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 90
ERROR - 2023-05-07 17:02:04 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 93
ERROR - 2023-05-07 17:02:04 --> Severity: Notice --> Undefined variable: uriKu D:\xampp7\htdocs\ci_all\application\views\inventory\layout\wrapper.php 120
ERROR - 2023-05-07 17:17:18 --> Severity: Notice --> Undefined variable: stok D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 35
ERROR - 2023-05-07 17:17:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 35
ERROR - 2023-05-07 17:17:18 --> Severity: Notice --> Undefined variable: stok D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 74
ERROR - 2023-05-07 17:17:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 74
ERROR - 2023-05-07 17:18:41 --> Severity: Notice --> Undefined variable: stok D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 35
ERROR - 2023-05-07 17:18:41 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 35
ERROR - 2023-05-07 17:18:41 --> Severity: Notice --> Undefined variable: stok D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 74
ERROR - 2023-05-07 17:18:41 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 74
ERROR - 2023-05-07 17:22:18 --> Severity: Notice --> Undefined variable: stok D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 35
ERROR - 2023-05-07 17:22:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 35
ERROR - 2023-05-07 17:22:18 --> Severity: Notice --> Undefined variable: stok D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 74
ERROR - 2023-05-07 17:22:18 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 74
ERROR - 2023-05-07 18:49:00 --> Severity: Notice --> Undefined variable: stok D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 35
ERROR - 2023-05-07 18:49:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 35
ERROR - 2023-05-07 18:49:00 --> Severity: Notice --> Undefined variable: stok D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 74
ERROR - 2023-05-07 18:49:00 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 74
ERROR - 2023-05-07 18:54:10 --> Severity: Notice --> Undefined variable: stok D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 35
ERROR - 2023-05-07 18:54:10 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 35
ERROR - 2023-05-07 18:54:10 --> Severity: Notice --> Undefined variable: stok D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 74
ERROR - 2023-05-07 18:54:10 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 74
ERROR - 2023-05-07 18:58:10 --> Severity: Notice --> Undefined variable: stok D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 35
ERROR - 2023-05-07 18:58:10 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 35
ERROR - 2023-05-07 18:58:10 --> Severity: Notice --> Undefined variable: stok D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 74
ERROR - 2023-05-07 18:58:10 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\home.php 74
ERROR - 2023-05-07 19:07:04 --> Severity: Notice --> Undefined variable: aset_baru D:\xampp7\htdocs\ci_all\application\views\inventory\aset\view.php 36
ERROR - 2023-05-07 19:07:04 --> Severity: Warning --> Invalid argument supplied for foreach() D:\xampp7\htdocs\ci_all\application\views\inventory\aset\view.php 36
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Undefined variable: aset_baru D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 22
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 22
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Undefined variable: aset_baru D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 64
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 64
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Undefined variable: aset_baru D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 79
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 79
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Undefined variable: aset_baru D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 96
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 96
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Undefined variable: aset_baru D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 110
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 110
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Undefined variable: aset_baru D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 127
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 127
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Undefined variable: aset_baru D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 141
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 141
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Undefined variable: aset_baru D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 155
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 155
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Undefined variable: aset_baru D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 169
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 169
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Undefined variable: aset_baru D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 183
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 183
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Undefined variable: aset_baru D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 197
ERROR - 2023-05-07 19:08:14 --> Severity: Notice --> Trying to access array offset on value of type null D:\xampp7\htdocs\ci_all\application\views\inventory\aset\form.php 197
