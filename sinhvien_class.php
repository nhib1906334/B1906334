<?php 
    //Khai báo lớp sinh viên với các phương thức
    class sinhvien{
        //Gồm 3 thuộc tính
        public $mssv;
        public $hoten;
        public $ngaysinh;
        //Phương thức xây dựng
        function construct($mssv,$hoten,$ngaysinh) {
            $this->mssv = $mssv;
            $this->hoten = $hoten;
            $this->ngaysinh = $ngaysinh;
        }
        //Phương thức hủy
        function destruct() {
            echo "Mã số của sinh viên là: {$this->mssv}.";
            echo "Họ tên của sinh viên là: {$this->hoten}.";
            echo "Ngày sinh của sinh viên là: {$this->ngaysinh}.";
          }
        
        //Phương thức gán giá trị cho thuộc tính
        function set_mssv($mssv) {
            $this->mssv = $mssv;
        }
        function set_hoten($hoten) {
            $this->hoten = $hoten;
        }
        function set_ngaysinh($ngaysinh) {
            $this->ngaysinh = $ngaysinh;
        }
        //Trả về giá trị
        function get_mssv() {
            return $this->mssv;
        }
        function get_hoten() {
            return $this->hoten;
        }
        function get_ngaysinh() {
            return $this->ngaysinh;
        }
    }
    $sinhvien = new sinhvien();
    $sinhvien->set_mssv('B1906334');
    $sinhvien->set_hoten('Lý Thị Hồng Cẫm Nhi');
    $sinhvien->set_ngaysinh('30/12/2001');
    
    echo $sinhvien->get_mssv();
    echo "<br>";
    echo $sinhvien->get_hoten();
    echo "<br>";
    echo $sinhvien->get_ngaysinh();
    
?>