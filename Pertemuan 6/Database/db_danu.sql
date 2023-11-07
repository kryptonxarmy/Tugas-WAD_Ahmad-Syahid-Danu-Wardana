/* Create Database and Table */

/*
Bismillah, Assalamualaikum pak
Saya Ahmad Syahid Danu Wardana
NIM 1202213054
Kelas SI4506

ini merupakan query database untuk studi kasus saya
izin untuk harap menjalankan terlebih dahulu query ini di database local jenengan nggeh

*/
create database crud_db;
 
use crud_db;
 
CREATE TABLE `table_barang` (
  `id` int(11) NOT NULL auto_increment,
  `nama_barang` varchar(100),
  `kategori` varchar(100),
  `harga` INT(15),
  PRIMARY KEY  (`id`)
);