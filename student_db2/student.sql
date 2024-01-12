CREATE TABLE Student(
    id INT PRIMARY KEY ,
    name nvarchar(250) CHARSET utf8,
    email varchar(250)
)

SET AUTOCOMMIT=1

INSERT INTO Student VALUES
(1, N'Nguyễn Văn A', 'nguyenvana12@gmail.com'),
(2, N'Nguyễn Văn B', 'nguyenvanb34@gmail.com'),
(3, N'Nguyễn Văn C', 'nguyenvanc16@gmail.com');