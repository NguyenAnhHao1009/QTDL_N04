CREATE DATABASE ong_gia_cf;
USE ong_gia_cf;

-- Bảng tài khoản
CREATE TABLE tai_khoan (
    id_tai_khoan INT AUTO_INCREMENT PRIMARY KEY,
    ten_dang_nhap VARCHAR(50) NOT NULL,
    mat_khau VARCHAR(50) NOT NULL,
    ho_ten VARCHAR(100) NOT NULL,
    sdt VARCHAR(15) NOT NULL,
    loai ENUM('0', '1') DEFAULT '0' COMMENT '0: Nhân viên, 1: Admin'
);

-- Bảng khách hàng
CREATE TABLE khach_hang (
    id_khach_hang INT AUTO_INCREMENT PRIMARY KEY,
    ten_khach_hang VARCHAR(100) NOT NULL,
    sdt VARCHAR(15) NOT NULL
);

-- Bảng loại
CREATE TABLE loai (
    id_loai INT AUTO_INCREMENT PRIMARY KEY,
    ten_loai VARCHAR(100) NOT NULL
);
-- Bảng món
CREATE TABLE mon (
    id_mon INT AUTO_INCREMENT PRIMARY KEY,
    ten_mon VARCHAR(100) NOT NULL,
    ma_loai INT NOT NULL,
    mo_ta TEXT,
    don_gia DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (ma_loai) REFERENCES loai(id_loai)
);



-- Bảng hóa đơn
CREATE TABLE IF NOT EXISTS hoa_don (
    id_hoa_don INT AUTO_INCREMENT PRIMARY KEY,
    id_tai_khoan INT NOT NULL,
    id_khach_hang INT NOT NULL,
    thoi_gian_thanh_toan TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_tai_khoan) REFERENCES tai_khoan(id_tai_khoan),
    FOREIGN KEY (id_khach_hang) REFERENCES khach_hang(id_khach_hang)
);

-- Bảng chi tiết hóa đơn
CREATE TABLE IF NOT EXISTS chi_tiet_hd (
    id_cthd INT AUTO_INCREMENT PRIMARY KEY,
    id_hoa_don INT NOT NULL,
    id_mon INT NOT NULL,
    so_luong INT NOT NULL,
    FOREIGN KEY (id_hoa_don) REFERENCES hoa_don(id_hoa_don),
    FOREIGN KEY (id_mon) REFERENCES mon(id_mon)
);

-- Chèn dữ liệu cho các bảng

INSERT INTO tai_khoan (ten_dang_nhap, mat_khau, ho_ten, sdt, loai)
VALUES 
    ('nhanvien1', 'password1', 'Người Nhân Viên', '0987654321', '0'), -- loại 0: nhân viên
    ('admin1', 'password1', 'Quản Trị Viên', '0123456789', '1');    -- loại 1: admin
    
INSERT INTO khach_hang (ten_khach_hang, sdt)
VALUES 
    ('Nguyễn Văn A', '0123456781'),
    ('Trần Thị B', '0123456782'),
    ('Phạm Văn C', '0123456783'),
    ('Hoàng Thị D', '0123456784'),
    ('Lê Văn E', '0123456785'),
    ('Nguyễn Thị F', '0123456786'),
    ('Trần Văn G', '0123456787'),
    ('Phạm Thị H', '0123456788'),
    ('Hoàng Văn I', '0123456789'),
    ('Lê Thị K', '0123456790'),
    ('Nguyễn Văn L', '0123456791'),
    ('Trần Thị M', '0123456792'),
    ('Phạm Văn N', '0123456793'),
    ('Hoàng Thị O', '0123456794'),
    ('Lê Văn P', '0123456795'),
    ('Nguyễn Thị Q', '0123456796'),
    ('Trần Văn R', '0123456797'),
    ('Phạm Thị S', '0123456798'),
    ('Hoàng Văn T', '0123456799'),
    ('Lê Thị U', '0123456700');

INSERT INTO loai (ten_loai)
VALUES 
    ('Nước ngọt'), 
    ('Cà phê'),    
    ('Trà'),		
    ('Bánh');      
    
INSERT INTO mon (ten_mon, ma_loai, mo_ta, don_gia)
VALUES 
    ('Coca Cola', 1, 'Nước ngọt lạnh', 25000),  -- Loại: Nước ngọt
    ('Pepsi', 1, 'Nước ngọt lạnh', 25000),       -- Loại: Nước ngọt
    ('Americano', 2, 'Cà phê đen không đường', 30000),  -- Loại: Cà phê
    ('Latte', 2, 'Cà phê sữa', 35000),           -- Loại: Cà phê
    ('Trà đào', 3, 'Trà đào ngon', 35000),       -- Loại: Trà
    ('Trà xanh', 3, 'Trà xanh không đường', 30000),   -- Loại: Trà
    ('Bánh mì thịt', 4, 'Bánh mì thịt thơm ngon', 35000),   -- Loại: Bánh
    ('Bánh mì gà', 4, 'Bánh mì gà cay', 35000),            -- Loại: Bánh
    ('Bánh bông lan', 4, 'Bánh bông lan mềm mịn', 40000),  -- Loại: Bánh
    ('Bánh flan', 4, 'Bánh flan caramel', 40000),          -- Loại: Bánh
    -- Tiếp tục chèn dữ liệu cho các mục ăn khác tương tự với mỗi loại
    ('Cà phê sữa đá', 2, 'Cà phê sữa lạnh có đá', 35000),
    ('Cà phê đen đá', 2, 'Cà phê đen có đá', 30000),
    ('Trà chanh', 3, 'Trà chanh tươi mát', 30000),
    ('Trà bưởi', 3, 'Trà bưởi ngọt mát', 35000),
    ('Bánh bao', 4, 'Bánh bao nhân thịt', 25000),
    ('Bánh patê sô', 4, 'Bánh patê sô nhân thịt', 30000),
    -- Tiếp tục chèn dữ liệu cho các mục ăn khác tương tự với mỗi loại
    ('Nước chanh', 1, 'Nước chanh tươi mát', 35000),
    ('Nước cam', 1, 'Nước cam tươi', 35000),
    ('Espresso', 2, 'Cà phê đen đậm đà', 30000),
    ('Cappuccino', 2, 'Cà phê sữa foam', 35000),
    ('Trà olong', 3, 'Trà olong hương thơm đặc biệt', 40000),
    ('Trà sen', 3, 'Trà sen tươi ngon', 40000),
    -- Tiếp tục chèn dữ liệu cho các mục ăn khác tương tự với mỗi loại
    ('Bánh mì pate', 4, 'Bánh mì pate ngon', 30000),
    ('Bánh tráng nướng', 4, 'Bánh tráng nướng', 25000),
    ('Bánh plan', 4, 'Bánh plan ngọt thơm', 35000),
    ('Bánh patê sô', 4, 'Bánh patê sô nhân socola', 30000);
    
    
INSERT INTO hoa_don (id_tai_khoan, id_khach_hang)
VALUES 
    (1, 1),
    (2, 2),  
    (1, 3),  
    (2, 4),  
    (1, 5),  
    (2, 6),  
    (1, 7),  
    (2, 8),  
    (1, 9),  
    (2, 10);  
    
INSERT INTO chi_tiet_hd (id_hoa_don, id_mon, so_luong)
VALUES 
    (1, 1, 2),  
    (1, 3, 1),  
    (2, 2, 1),  
    (2, 4, 3),  
    (3, 1, 2),  
    (3, 5, 2),  
    (4, 3, 1),  
    (4, 6, 1),  
    (5, 2, 1),  
    (5, 7, 1);  