-- Cơ sở dữ liệu chưa tạo



-- Procedure
-- Lấy danh sách các hóa đơn theo ngày bắt đầu vè kết thúc
DELIMITER //

CREATE PROCEDURE GetInvoicesByDateRange(
    IN start_date_param DATE,
    IN end_date_param DATE
)
BEGIN
    SELECT inv.invoice_id, inv.creation_time, cus.customer_name, acc.full_name, inv.total 
    FROM invoices inv
    JOIN customers cus ON inv.customer_id = cus.customer_id
    JOIN accounts acc ON inv.account_id = acc.account_id
    WHERE inv.creation_time BETWEEN start_date_param AND end_date_param;
END //

DELIMITER ;


-- 

