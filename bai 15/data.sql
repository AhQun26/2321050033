CREATE DATABASE IF NOT EXISTS QlyXemPhim;
CREATE TABLE THELOAI (
    id int PRIMARY KEY,
	tenTheLoai varchar(50)
);    
CREATE TABLE PHIM(
    id int PRIMARY KEY,
    tenPhim varchar, 
    daoDien varchar(50),
    dienVienId INT,
    namPhatHanh int,
    poster varchar, 
	mota text
# phim_dien_vien
    
# người dùng
    id int
    taikhoan int
	tenDangNhap varchar(25)
    matKhau varchar(50)
    email varchar(50)
    sdt varchar(10)
    quyen_id int
 	ngaySinh datetime
    
#quyen
    id int
    tenQuyen varchar(20)
       
# quốc gia
	# mã quốc gia
    # tên quốc gia
    
# tập phim
    id INT
    phimId INT
    thoiLuong float
    phimId int
    #thời lượng


-- Hoàn thiện cơ sở dữ liệu để quản lí web phim
-- viết các câu lệnh để chạy nhiều lần k lỗi
-- viết các câu lệnh  để mỗi  