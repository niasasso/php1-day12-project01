<?php

	// Membuat perintah sql
	$sql = "SELECT id, kategori, judul ,harga FROM produk";

	$result = $connection->query($sql);

 ?>