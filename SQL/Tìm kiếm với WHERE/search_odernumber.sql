-- Thao tác với classicmodel database
-- Tìm kiếm những thông tin khách hàng có orderNumber trong khoảng 10100 đến 10110 
SELECT * 
FROM `orders` 
WHERE `orderNumber` BETWEEN 10100 AND 10110

-- Tìm kiếm những thông tin khách hàng có orderDate nhỏ hơn hoặc bằng ngày 2003-03-03 và có status là shipped

SELECT * 
FROM `orders` 
WHERE `orderDate` <= '2003-03-03' AND `status` LIKE 'shipped'
