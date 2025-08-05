Không cần sửa lại đồ họa, chỉ sửa lại code bị sai 
-database đẫ có gồm : 
 CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `giaTien` decimal(15,2) NOT NULL,
  `tonKho` int(11) NOT NULL CHECK (`tonKho` >= 0)
)  
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
)
admin có thể thêm, sửa, xóa 
người dùng cod thể mua hàng và sản phẩm được hiện trong giỏ hàng 