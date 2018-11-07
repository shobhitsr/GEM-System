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

+---------------------------+--------------+------+-----+---------+----------------+
| Field                     | Type         | Null | Key | Default | Extra          |
+---------------------------+--------------+------+-----+---------+----------------+
| Location_ID               | int(11)      | NO   | PRI | NULL    | auto_increment |
| Location_Name             | char(50)     | YES  |     | NULL    |                |
| Location_Street           | char(50)     | YES  |     | NULL    |                |
| Location_City             | char(30)     | YES  |     | NULL    |                |
| Location_State            | char(30)     | YES  |     | NULL    |                |
| Location_Country          | char(30)     | YES  |     | NULL    |                |
| Location_ZIP              | char(10)     | YES  |     | NULL    |                |
| Location_Manager          | char(50)     | YES  |     | NULL    |                |
| Location_M_Email          | char(100)    | YES  |     | NULL    |                |
| Location_M_Office_Phone   | char(12)     | YES  |     | NULL    |                |
| Location_M_Cell_Phone     | char(12)     | YES  |     | NULL    |                |
| Location_Seating_Capacity | char(10)     | YES  |     | NULL    |                |
| Location_Comments         | varchar(300) | YES  |     | NULL    |                |
+---------------------------+--------------+------+-----+---------+----------------+

+-----------------------+--------------+------+-----+---------+----------------+
| Field                 | Type         | Null | Key | Default | Extra          |
+-----------------------+--------------+------+-----+---------+----------------+
| Event_ID              | int(11)      | NO   | PRI | NULL    | auto_increment |
| Event_Name            | char(50)     | YES  |     | NULL    |                |
| Event_Location        | char(100)    | YES  |     | NULL    |                |
| Event_Manager         | char(100)    | YES  |     | NULL    |                |
| Event_Performer       | char(100)    | YES  |     | NULL    |                |
| Event_Date            | char(20)     | YES  |     | NULL    |                |
| Event_Time            | char(20)     | YES  |     | NULL    |                |
| Event_Approval_Status | char(5)      | YES  |     | NULL    |                |
| Event_Capacity        | char(10)     | YES  |     | NULL    |                |
| Event_Comments        | varchar(300) | YES  |     | NULL    |                |
+-----------------------+--------------+------+-----+---------+----------------+

+--------------------+--------------+------+-----+---------+-------+
| Field              | Type         | Null | Key | Default | Extra |
+--------------------+--------------+------+-----+---------+-------+
| Agent_ID           | int(5)       | NO   | PRI | NULL    |       |
| Agent_FName        | char(25)     | YES  |     | NULL    |       |
| Agent_LName        | char(25)     | YES  |     | NULL    |       |
| Agent_Office_Phone | char(25)     | YES  |     | NULL    |       |
| Agent_CPhone       | char(25)     | YES  |     | NULL    |       |
| Agent_Email        | char(25)     | YES  |     | NULL    |       |
| Agent_Apt          | char(10)     | YES  |     | NULL    |       |
| Agent_Street       | char(50)     | YES  |     | NULL    |       |
| Agent_City         | char(30)     | YES  |     | NULL    |       |
| Agent_State        | char(30)     | YES  |     | NULL    |       |
| Agent_Country      | char(30)     | YES  |     | NULL    |       |
| Agent_ZIP          | char(10)     | YES  |     | NULL    |       |
| Agent_Comments     | varchar(300) | YES  |     | NULL    |       |
+--------------------+--------------+------+-----+---------+-------+
*/

drop table if exists Artist_Record;

create table Artist_Record
    (
        Artist_ID int auto_increment primary key,
        Artist_FName char(25),
        Artist_LName char(25),
        Artist_Office_Phone char(10),
        Artist_Cell_Phone char(10),
        Artist_Rate char(10),
        Artist_Apt char(10),
        Artist_Street char (50),
        Artist_City char(30),
        Artist_State char(30),
        Artist_Country char(30),
        Artist_ZIP char(10),
        Artist_Email char(100),
        Artist_Comments varchar(300)
    );

create table Location
    (
        Location_ID int auto_increment primary key,
        Location_Name char(50),
        Location_Manager char(50),
        Location_M_Email char(100),
        Location_M_Office_Phone char(12),
        Location_M_Cell_Phone char(12),
        Location_Seating_Capacity char(10),
        Location_Street char (50),
        Location_City char(30),
        Location_State char(30),
        Location_Country char(30),
        Location_ZIP char(10),
        Location_Comments varchar(300)
    );

create table Event
    (
        Event_ID int auto_increment primary key,
        Event_Name char(50),
        Event_Location char(100),
        Event_Performer char(100),
        Event_Capacity char(10),
        Event_Date char(20),
        Event_Time char(20),
        Event_Approval_Status char(5) Default 'NO',
        Event_Comments varchar(300)
    );

create table Employee
    (
        Employee_ID int(5) primary key,
        Employee_FName char(25),
        Employee_LName char(25),
        Employee_Status char(30),
        Employee_Phone char(30),
        Employee_Email char(30),
        Employee_Username char(30),
        Employee_Password char(30)
    );

create table Agent
    (
        Agent_ID int(5) primary key,
        Agent_FName char(25),
        Agent_LName char(25),
        Agent_Office_Phone char(25),
        Agent_CPhone char(25),
        Agent_Email char(25),
        Agent_Apt char(10),
        Agent_Street char (50),
        Agent_City char(30),
        Agent_State char(30),
        Agent_Country char(30),
        Agent_ZIP char(10),
        Agent_Comments varchar(300)
    );

insert into Artist_Record (Artist_FName, Artist_LName, Artist_Apt, Artist_Street, Artist_City, Artist_State, Artist_Country, Artist_ZIP,Artist_Email) 
     values ('Shobhit', 'Srivastava', '12', 'street', '$cty', '$state', '$cont', '$zip', 'abc@example.com');

