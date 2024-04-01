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

-- Tổng doanh thu:
DELIMITER //

CREATE PROCEDURE GetTotalRevenue(
    IN start_date DATE,
    IN end_date DATE
)
BEGIN
    SELECT SUM(total) AS total_revenue 
    FROM invoices 
    WHERE creation_time BETWEEN start_date AND end_date;
END //

DELIMITER ;

-- Thủ tục 3
DELIMITER $$
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetTopCustomerByDateRange`(IN `start_date` DATE, IN `end_date` DATE)
BEGIN
    SELECT customer_name
    FROM customers
    WHERE customer_id IN (
        SELECT customer_id
        FROM (
            SELECT customer_id, COUNT(*) AS times
            FROM invoices
            WHERE creation_time BETWEEN start_date AND end_date
            GROUP BY customer_id
        ) AS counts
        WHERE times = (
            SELECT MAX(times)
            FROM (
                SELECT COUNT(*) AS times
                FROM invoices
                WHERE creation_time BETWEEN start_date AND end_date
                GROUP BY customer_id
            ) AS inner_counts
        )
    );
END$$
DELIMITER ;

-- Hàm 4

-- 

