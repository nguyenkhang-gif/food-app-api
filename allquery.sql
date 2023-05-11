    CREATE TABLE Product (
        ID int AUTO_INCREMENT,
        name VARCHAR(255),
        des varchar(255),
        price int,
        PRIMARY KEY (ID)
    );





    CREATE TABLE users (
        id int AUTO_INCREMENT,
        Username varchar(255), 
        Name varchar(255),
        Password varchar(255), 
        addressDes varchar(255),
        phonDes varchar(255),
        Email varchar(255),
        PRIMARY key(ID)
    );
    -- CREATE TABLE product (
    --     ID int AUTO_INCREMENT,--ID của address
    --     name varchar(255), 
    --     des varchar(255), 
    --     price varchar(255),--mô tả địa chỉ hoặc lưu vĩ độ nếu còn tgian 
    --     PRIMARY key(ID)
    -- );


    CREATE TABLE cart (
        ID int ,
        itemID int , 
        amount int
    );



    CREATE TABLE orders (
        ID int AUTO_INCREMENT,
        userID int, 
        addressID varchar(255),
        phonenumID varchar(255),
        OrderInfo varchar(255),
        des varchar(255),
        Total varchar(255),
        status varchar(255),
        PRIMARY key(ID)
        
    );

    CREATE TABLE his  (
        ID int,
        itemID int, 
        star int,
        comment varchar(255),
        
    
    );
    CREATE TABLE fav  (
        ID int,
        itemID int
    );


    INSERT INTO product (name,des,price)
    VALUES
    ('Bánh Bao','Được làm từ gạo :))',9000),
    ('Bánh Mỳ','Được làm từ gạo :))',9000),
    ('Bánh Tráng trộn','Được làm từ gạo :))',9000),
    ('Bún đậu mắm tôm','Được làm từ gạo :))',9000),
    ('Bún Thịt Nướng','Được làm từ gạo :))',9000),
    ('Bún Xào','Được làm từ gạo :))',9000),
    ('Cam ép','Được làm từ gạo :))',9000),
    ('Cơm Tấm','Được làm từ gạo :))',9000),
    ('Gỏi Cuốn','Được làm từ gạo :))',9000),
    ('Mỳ Trứng','Được làm từ gạo :))',9000),
    ('Mỳ Tương Đen','Được làm từ gạo :))',9000),
    ('Mỳ Xào Trứng','Được làm từ gạo :))',9000),
    ('Oreo Đá Xay','Được làm từ gạo :))',9000),
    ('Súp Cua','Được làm từ gạo :))',9000),
    ('Trà Sữa','Được làm từ gạo :))',9000),
    ('Xoài lắc','Được làm từ gạo :))',9000)

