/*
Table definitions
passenger:
+----------------+-----------+------+-----+---------+----------------+
| Field          | Type      | Null | Key | Default | Extra          |
+----------------+-----------+------+-----+---------+----------------+
| Artist_ID      | int(11)   | NO   | PRI | NULL    | auto_increment |
| Artist_FName   | char(25)  | YES  |     | NULL    |                |
| Artist_LName   | char(25)  | YES  |     | NULL    |                |
| Artist_Apt     | char(10)  | YES  |     | NULL    |                |
| Artist_Street  | char(50)  | YES  |     | NULL    |                |
| Artist_City    | char(30)  | YES  |     | NULL    |                |
| Artist_State   | char(30)  | YES  |     | NULL    |                |
| Artist_Country | char(30)  | YES  |     | NULL    |                |
| Artist_ZIP     | char(10)  | YES  |     | NULL    |                |
| Artist_Email   | char(100) | YES  |     | NULL    |                |
+----------------+-----------+------+-----+---------+----------------+
*/

drop table if exists Artist_Record;

create table Artist_Record
    (Artist_ID int auto_increment primary key,
     Artist_FName char(25),
     Artist_LName char(25),
     Artist_Apt char(10),
     Artist_Street char (50),
     Artist_City char(30),
     Artist_State char(30),
     Artist_Country char(30),
     Artist_ZIP char(10),
     Artist_Email char(100));

insert into Artist_Record (Artist_FName, Artist_LName, Artist_Apt, Artist_Street, Artist_City, Artist_State, Artist_Country, Artist_ZIP,Artist_Email) 
     values ('Shobhit', 'Srivastava', '12', 'street', '$cty', '$state', '$cont', '$zip', 'abc@example.com');
