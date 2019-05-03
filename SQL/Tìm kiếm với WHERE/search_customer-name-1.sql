-- Thao tác với classicmodel database
-- Tìm kiếm customerName có chưa kí tự A bằng LIKE 
SELECT *
FROM `customers`
WHERE `customerName` LIKE '%A%'