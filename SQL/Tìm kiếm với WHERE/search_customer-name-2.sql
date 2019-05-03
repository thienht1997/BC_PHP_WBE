-- Thao tác với classicmodel database
-- Tìm kiếm những customer trong bảng customer có city là  Nantes, Las Vegas, Warszawa hoặc NYC
SELECT * 
FROM `customers` 
WHERE `city` IN ('Nantes','Las Vegas','Warszawa','NYC')