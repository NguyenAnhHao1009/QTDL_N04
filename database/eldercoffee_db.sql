
create database eldercoffee_db;
use eldercoffee_db;

-- Tạo bảng accounts
CREATE TABLE accounts (
    account_id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    type varchar(10) NOT NULL
);

-- Tạo bảng customers
CREATE TABLE customers (
    customer_id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name VARCHAR(255) NOT NULL,
    phone_number VARCHAR(20)
);

-- Tạo bảng items
CREATE TABLE items (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    item_name VARCHAR(255) NOT NULL,
    category_id INT,
    description TEXT,
    unit_price DECIMAL(10, 2),
    added_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Tạo bảng category
CREATE TABLE category (
    category_id INT AUTO_INCREMENT PRIMARY KEY,
    category_name VARCHAR(255) NOT NULL
);

-- Tạo bảng invoices
CREATE TABLE invoices (
    invoice_id INT AUTO_INCREMENT PRIMARY KEY,
    account_id INT,
    customer_id INT,
    creation_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (account_id) REFERENCES accounts(account_id),
    FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
);

-- Tạo bảng invoice_details
CREATE TABLE invoice_details (
    detail_id INT AUTO_INCREMENT PRIMARY KEY,
    invoice_id INT,
    item_id INT,
    quantity INT,
    FOREIGN KEY (invoice_id) REFERENCES invoices(invoice_id),
    FOREIGN KEY (item_id) REFERENCES items(item_id)
);

-- Chèn du lieu

INSERT INTO accounts (full_name, email, password, type) VALUES
('Phú Lâm', 'admin', 'admin', 'admin'),
('Alice Smith', 'alice@example.com', 'password2', 'user'),
('Bob Johnson', 'bob@example.com', 'password3', 'admin');

INSERT INTO customers (customer_name, phone_number) VALUES
('Nguyễn Văn A', '0123456789'),
('Trần Thị B', '0987654321'),
('Lê Văn C', '0369852147'),
('Phạm Thị D', '0321478963'),
('Hoàng Văn E', '0987456321'),
('Nguyễn Thị F', '0912345678'),
('Lê Văn G', '0978563412'),
('Trần Thị H', '0914752368'),
('Phạm Văn I', '0987561234'),
('Hoàng Thị K', '0901234567'),
('Nguyễn Văn L', '0978564123'),
('Trần Thị M', '0987456321'),
('Lê Văn N', '0912365478'),
('Phạm Thị O', '0909876543'),
('Hoàng Văn P', '0978561234'),
('Nguyễn Thị Q', '0912456789'),
('Lê Văn R', '0987451236'),
('Phạm Thị S', '0912365478'),
('Trần Văn T', '0909876543'),
('Hoàng Thị U', '0978561234');


INSERT INTO category (category_name) VALUES
('Bánh'),
('Trà'),
('Cà phê'),
('Nước ngọt'),
('Sinh tố'),
('Nước ép');


-- Chèn dữ liệu vào bảng items
INSERT INTO items (item_name, category_id, description, unit_price)
VALUES
('Bánh gạo lứt', 1, 'Bánh gạo lứt ngọt thơm phức, là lựa chọn lý tưởng cho bữa sáng.', 20000),
('Bánh tráng trộn', 1, 'Bánh tráng trộn với hương vị đậm đà, kích thích vị giác.', 15000),
('Bánh mì nướng tỏi', 1, 'Bánh mì nướng tỏi thơm phức, giòn rụm, là món ăn phổ biến.', 18000),
('Bánh bông lan', 1, 'Bánh bông lan mềm mịn, ngọt ngào, là một sự lựa chọn hoàn hảo.', 25000),
('Bánh flan', 1, 'Bánh flan trứng ngọt ngào, mềm mịn, thích hợp cho mọi dịp.', 30000),
('Trà đen', 2, 'Trà đen đậm đà, thơm nồng, làm từ lá trà tươi.', 25000),
('Trà xanh', 2, 'Trà xanh nguyên chất, giàu chất chống oxy hóa, tốt cho sức khỏe.', 20000),
('Trà bưởi', 2, 'Trà bưởi tươi mát, thơm ngon, giúp thanh lọc cơ thể.', 30000),
('Trà sữa', 2, 'Trà sữa thơm ngon, ngọt thanh, phù hợp cho mùa hè nóng nực.', 35000),
('Trà hạt sen', 2, 'Trà hạt sen thơm mát, giàu dinh dưỡng, giúp thư giãn.', 40000),
('Cà phê đen', 3, 'Cà phê đen đậm đà, đắng ngắt, giúp tỉnh táo.', 30000),
('Cà phê sữa', 3, 'Cà phê sữa đậm đà, thơm ngon, pha chế từ cà phê nguyên chất và sữa tươi.', 35000),
('Cappuccino', 3, 'Cappuccino nguyên chất, hòa quện giữa cà phê đen, sữa tươi và bọt sữa.', 40000),
('Latte', 3, 'Latte mềm mịn, thơm ngon, phù hợp cho buổi sáng.', 38000),
('Espresso', 3, 'Espresso mạnh mẽ, đắng ngắt, là lựa chọn của người yêu thích cà phê.', 35000),
('Nước ngọt đậu nành', 4, 'Nước ngọt đậu nành tự nhiên, giàu chất dinh dưỡng, thích hợp cho mọi lứa tuổi.', 25000),
('Nước ngọt cam', 4, 'Nước ngọt cam tươi mát, giàu vitamin C, giúp tăng cường hệ miễn dịch.', 20000),
('Nước ngọt cola', 4, 'Nước ngọt cola ngon mát, pha chế từ nguyên liệu tự nhiên, giúp giải khát.', 30000),
('Nước ngọt chanh', 4, 'Nước ngọt chanh thơm mát, giúp thanh lọc cơ thể.', 22000),
('Nước ngọt soda', 4, 'Nước ngọt soda sảng khoái, giúp tạo cảm giác sảng khoái.', 25000),
('Sinh tố dâu', 5, 'Sinh tố dâu ngọt ngào, giàu vitamin, giúp cung cấp năng lượng.', 35000),
('Sinh tố bơ', 5, 'Sinh tố bơ mềm mịn, giàu chất béo lành mạnh, giúp cung cấp năng lượng.', 40000);

INSERT INTO invoices (account_id, customer_id) VALUES
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


INSERT INTO invoice_details (invoice_id, item_id, quantity) VALUES
(1, 1, 2),
(1, 2, 1),
(2, 3, 3),
(2, 4, 2),
(3, 5, 1),
(3, 6, 4),
(4, 7, 2),
(4, 8, 3),
(5, 9, 1),
(5, 10, 2);
