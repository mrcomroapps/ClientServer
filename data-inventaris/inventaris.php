<?php
include_once(__DIR__ . "/lib/format_data.php");
include_once(__DIR__."/lib/Pilihan.php");

$Pilihan = new Pilihan();
$fmt = new FormatData();



if ($_GET['view'] == 'xml') {
	    echo $fmt->build_xml($Pilihan->GetAll(), "tb_inventaris");
} else {
	echo '<h2 align=center>'."Data barang dari sistem inventaris sekolah".'</h2>';
    echo $fmt->build_table($Pilihan->getAll());

	echo '<br />'.'<br />'.'<br />';
    echo '<h3>'."Nama Kelompok :".'</h3>'.'<hr>';
    echo '<ul>';

    echo '<li>'."Rio Ananda Putra 1707051027".'</li>';
    echo '<li>'."Abdillah Ibnu Mubarok 1707051014".'</li>';
    echo '<li>'."Rifky Berlian 1707051020".'</li>';
    
    echo '</ul>';
}
