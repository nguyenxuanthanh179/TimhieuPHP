<?php
// OOP

/* class là tập hợp của các đối tượng có cùng thuộc tính và hành động.
 * object là đối tượng được tạo ra từ class, có tất cả tính chất của class đó.
 */

// class
class User
{
    public $name;
    public $age;
    public $address;
    public function info(){
        return $this->name . ' ' . $this->age . ' tuổi, ' . $this->address;
    }
}
// object

$info = new User();
$info->name = 'N.X.Thanh';
$info->age = 21;
$info->address = 'Hà Nội';
echo $info->info();
