Buoc 1: Tao database trong mysql bang lenh:

create database FastShop default charset=utf8 collate=utf8_unicode_ci;

Buoc 2: Copy va chay lenh trong file 1_10_2011


Tao du lieu cho Customer: insert into Customer(CusName, CusAddress, CusUserName, CusPassword, CusEmail, CusTelephone)
 values('Trung','Vietnam', 'trung', sha1('trung'), 'trung@gmail.com', '123456');