<?php 
class Database
{
    private $host="localhost";
    private $dbname="toko_sepatu";
    private $user="root";
    private $password="";
    private $port="3306";
    private $conn;

    // function yang pertama kali di-load saat class dipanggil
    public function __construct()
    {
        // koneksi database
        try
        {
            $this->conn = new PDO("mysql:host=$this->host;port=$this->port;dbname=$this->dbname;charset=utf8",$this->user,$this->password);
        }
        catch (PDOException $e)
        {
            echo "Koneksi gagal";
        }
    }

    public function tampil_semua_data()
    {
        $query = $this->conn->prepare("select id_sepatu, nama, gambar_sepatu, ukuran, id_jenis, warna, stok, harga from sepatu order by id_sepatu");
        $query->execute();
        // mengambil banyak data dengan fetchAll
        $data = $query->fetchAll(PDO::FETCH_ASSOC);
        // mengembalikan data
        return $data;
        // hapus variable memory
        $query->closeCursor();
        unset($data);
    }

    public function tampil_data($id_sepatu)
    {
        $query = $this->conn->prepare("select id_sepatu, nama, gambar_sepatu, ukuran, id_jenis, warna, stok, harga from sepatu where id_sepatu=?");
        $query->execute(array($id_sepatu));
        // mengambil satu data dengan fetch
        $data = $query->fetch(PDO::FETCH_ASSOC);
        return $data;
        $query->closeCursor();
        unset($id_sepatu,$data);
    }

    public function tambah_data($data)
    {
        $query = $this->conn->prepare("insert ignore into sepatu (id_sepatu, nama, gambar_sepatu, ukuran, id_jenis, warna, stok, harga) values (?,?,?,?,?,?,?,?)");
        $query->execute(array($data['id_sepatu'],$data['nama']));
        $query->closeCursor();
        unset($data);
    }

    public function ubah_data($data)
    {
        $query = $this->conn->prepare("update sepatu set nama,=? where id_sepatu=?");
        $query->execute(array($data['nama'],$data['id_sepatu']));
        $query->closeCursor();
        unset($data);
    }

    public function hapus_data($id_sepatu)
    {
        $query = $this->conn->prepare("delete from sepatu where id_sepatu=?");
        $query->execute(array($id_sepatu));
        $query->closeCursor();
        unset($id_sepatu);
    }
}
?>