
<?php 
while (1) {
print "\033[92m

 +_____________________+
  |-------------------|
  |     KALKULATOR    |
  |  CODED BY Mr.Star |
  |-------------------|
  |                   |
  |=== PETRIKBOSAN ===|
  |___________________|
  |_1_|_2_|_3_|_4_|_5_|
  |_6_|_7_|_8_|_9_|_0_|
  |_+_|_-_|_:_|_x_|_=_|
  |___________________|
 +                     +

 \033[93m";

$tambah = "1";
$bagi = "2";
$kurang = "3";
$kali = "4";
echo "Silahkan Pilih Opsi ! \n";
echo " [\033[92m$tambah\033[93m] Pertambahan \n";
echo " [\033[94m$bagi\033[93m] Pembagian \n";
echo " [\033[95m$kurang\033[93m] Pengurangan \n";
echo " [\033[96m$kali\033[93m] Perkalian \n\n";
echo " Pilih Opsi : ";
$tangkap = trim(fgets(STDIN));

if (!function_exists('rupiah')) {
function rupiah($uang1){
	echo number_format($uang1,0,',','.');
    return $uang1;
}
}
if ($tangkap == 1) {
	echo " \033[92mMasukan Nomor : ";
	$tambah1 = trim(fgets(STDIN));
	echo " Ditambah : ";
	$tambah2 = trim(fgets(STDIN));
	if ($tambah1 + $tambah2) {
		echo " Hasil ==> ";
		rupiah($tambah1+$tambah2);

	}

}

elseif ($tangkap == 2) {
	echo " \033[94mMasukan Nomor : ";
	$bagi1 = trim(fgets(STDIN));
	echo " Dibagi : ";
	$bagi2 = trim(fgets(STDIN));
	if ($bagi1 / $bagi2) {
		echo " Hasil ==> ";
		rupiah($bagi1/$bagi2);
	}else{
	echo " Silahkan pilih opsi yang ada yaa!\n";
}
}elseif ($tangkap == 3) {
		echo " \033[95mMasukan Nomor : ";
	$kurang1 = trim(fgets(STDIN));
	echo " Dikurang : ";
	$kurang2 = trim(fgets(STDIN));
	if ($kurang1 - $kurang2) {
		echo " Hasil ==> ";
		rupiah($kurang1-$kurang2);
	}else{
	echo " Silahkan pilih opsi yang ada yaa!\n";
}
}elseif ($tangkap == 4) {
		echo " \033[96mMasukan Nomor : ";
	$kali1 = trim(fgets(STDIN));
	echo " Dikali : ";
	$kali2 = trim(fgets(STDIN));
	if ($kali1 * $kali2) {
		echo " Hasil ==> ";
		rupiah($kali1*$kali2);
	}


}else{
	echo " Silahkan pilih opsi yang ada yaa!\n";
}

echo " \n Mau Coba lagi ? y/n : ";
$tanya = trim(fgets(STDIN));
if ($tanya == "y") {


}elseif($tanya == "n"){
	echo " Yodah kalo kaga mao :v\n\n"; exit;
}else{
	echo " Pilihan anda sungguh tidak jelas! \n\n"; exit;
}
}
 ?>
