<?php
include "../lib/DomainWhois.php";

function processBatchDomainOrder(array $domains)
{

	$harga = [];
	echo "==========================================================\n";
	echo "# INVOICE\n\n";

	for($i=0; $i<sizeof($domains); $i++){
		$harga[$i] = harga_extension($domains[$i]); // Insert harga to array
		echo $domains[$i]."\t \t \t".$harga[$i]."\n";
	}

	echo "-------------------------------------------- +\n";
	echo "TOTAL \t \t \t \t Rp ".array_sum($harga); // SUM all harga
	echo "\n\n==========================================================";
}

function harga_extension($domain){
	if (preg_match('/(.*?)\.com$/', $domain)) {
		return 99000;
	} elseif (preg_match('/(.*?)\.net$/', $domain)) {
		return 119000;
	} elseif (preg_match('/(.*?)\.org$/', $domain)) {
		return 129000;
	} elseif (preg_match('/(.*?)\.space$/', $domain)) {
		return 28000;
	} elseif (preg_match('/(.*?.*?)\.co.id$/', $domain)) {
		return 99000;
	} elseif (preg_match('/(.*?)\.co$/', $domain)) {
		return 419000;
	} elseif (preg_match('/(.*?)\.id$/', $domain)) {
		return 249000;
	} else return 0;
}

function main(){
	$domains = [];
	$loop_status = true;
	$i=0;
	$obj = new DomainWhois(); // Create Object

	echo "==========================================================\n";
	echo "Info : \n -Press 'Enter' pada keyboard untuk menambah domain lain \n -Type 'ok' untuk Proses Selanjutnya (INVOICE)\n";
	echo "==========================================================\n";
	echo "Input Domain :\n";

	while ($loop_status == true) {
		# GET input from user per line
		$input = readline("=>");
		$ketersediaan = $obj->isAvailable($input); // Check random domain availability
		$split = explode(".",$input); // To split between name domain and extension 
		# Validation
		if ($input == 'ok' && sizeof($domains) == null){
			echo "[TIDAK VALID] Silahkan Isi! Tidak boleh kosong\n";
			continue;
		}
		elseif ($input == 'ok' && sizeof($domains) != null){
			processBatchDomainOrder($domains); // Go to INVOICE
			break;
		}
		elseif (strlen($split[0]) < 3) { // Min 3 char before dot
			echo "[TIDAK VALID] Karakter tidak cukup!\n";
			continue;
		}
		elseif (strlen($split[0]) > 15) { // Max 15 char before dot
			echo "[TIDAK VALID] Anda mengetik terlalu banyak!\n";
			continue;
		}
		elseif (!strpos($input, '.')) {
			echo "[TIDAK VALID] Domain harus memiliki ekstensi!\n";
			continue;
		}
		elseif (preg_match('/[^a-z.\-0-9]/i', $input))  {
			echo "[TIDAK VALID] Domain hanya boleh mengandung karakter alphanumerik, dot, dan dash!\n";
			continue;
		}
		elseif (!strpos($input, '.com') && !strpos($input, '.net') && !strpos($input, '.org') && !strpos($input, '.space') && !strpos($input, '.co.id') && !strpos($input, '.co') && !strpos($input, '.id')) {
			echo "[TIDAK VALID] Bukan extension domain yang benar!\n";
			continue;
		}
		elseif ($ketersediaan == 0) {
			echo "[TIDAK VALID] Domain telah terdaftar\n";
			continue;
		}
		else {
			echo "[VALID]\n";
			$domains[$i] = $input; // Insert to array
		}

		$i++;
	}
}

# Call main function
main();

?>

