<?php
include "Client_pemasok.php";

if ($_POST['aksi']=='tambah')
{
    $data = array("id_pemasok"=>$_POST['id_pemasok'], "nama"=>$_POST['nama'], "jenis_kelamin"=>$_POST['jenis_kelamin'], "alamat"=>$_POST['alamat'], "no_telp"=>$_POST['no_telp'],"aksi"=>$_POST['aksi']);
    $abc->tambah_data($data);
    header('location:../menu/menu_edit_pemasok.php');
}
elseif ($_POST['aksi']=='ubah')
{
    $data = array("id_pemasok"=>$_POST['id_pemasok'], "nama"=>$_POST['nama'], "jenis_kelamin"=>$_POST['jenis_kelamin'], "alamat"=>$_POST['alamat'], "no_telp"=>$_POST['no_telp'],"aksi"=>$_POST['aksi']);
    $abc->ubah_data($data);
    header('location:../menu/menu_edit_pemasok.php');
}
elseif ($_GET['aksi']=='hapus')
{
    $data = array("id_pemasok"=>$_GET['id_pemasok'], "aksi"=>$_GET['aksi']);
    $abc->hapus_data($data);
    header('location:../menu/menu_edit_pemasok.php');
}
unset($abc,$data);
?>