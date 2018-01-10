drop database if exists ppms;
create database ppms;
use ppms;


create table tbl_account(
    id int(11) primary key auto_increment,
    accountname varchar(30),
    accounttype varchar(30),
    entrydate date,
    updatedate date,
    active char(1)
);

INSERT INTO `tbl_account` VALUES 
(1,'Guest Service','Income','2030-12-17','2030-12-17','Y'),
(2,'Project Service Charge','Income','2030-12-17','2030-12-17','Y'),
(3,'Electricity Bill','Expense','2030-12-17','2030-12-17','Y'),
(4,'Product Selling','Income','2030-12-17','2030-12-17','Y'),
(5,'Product Buying','Expense','2030-12-17','2030-12-17','Y'),
(6,'Employee Salary','Expense','2030-12-17','2030-12-17','Y');

create table tbl_transaction(
    id int(11) primary key auto_increment,
    accountname varchar(30),
    accounttype varchar(30),
    amount double(8,2),
    description varchar(300),
    payment double(8,2),
    entrydate date,
    updatedate date,
    active char(1)
);

create table tbl_position(
    id int(11) primary key auto_increment,
    positionname varchar(30),
    description varchar(300),
    entrydate date,
    updatedate date,
    active char(1)
);
INSERT INTO `tbl_position` VALUES (1,'Programmer','Programmer','2030-12-17','2030-12-17','Y'),
(2,'SEO','Manage','2030-12-17','2030-12-17','Y'),
(3,'Chief Executive Officer','Chief Executive Officer - office','2030-12-17','2030-12-17','Y'),
(4,'HR Admin','HR Admin','2030-12-17','2030-12-17','Y'),
(5,'Lead Programmer','Lead Programmer','2030-12-17','2030-12-17','Y'),
(6,'Junior Software Developer','Junior Software Developer','2030-12-17','2030-12-17','Y');

create table tbl_employee(
    id int(11) primary key auto_increment,
    empId varchar(30),
    firstname varchar(30),
    middlename varchar(30),
    lastname varchar(30),
    emailid varchar(60),
    password varchar(60),
    contactnumber varchar(30),
    altercontact varchar(30),
    currentaddress text,
    permenentaddress text,
    image text,
    jobtitle varchar(200),
    entrydate date,
    updatedate date,
    active char(1)
);
INSERT INTO `tbl_employee` VALUES (1,'005','Pravin','Prabhakar','Tumsare','pravintumsare@gmail.com','^c#lBKk@','7416363492','7416363492','lodha','shantinagar','','Junior Software Developer','2018-01-02','2018-01-02','Y');

create table tbl_employeeeducation(
    id int(11) primary key auto_increment,
    empId int(11),
    degreeName varchar(30),
    university varchar(300),
    percent varchar(5),
    passingyear varchar(5),
    entrydate date,
    updatedate date,
    active char(1)
);

create table tbl_employeework(
    id int(11) primary key auto_increment,
    empId int(11),
    comanyname varchar(30),
    workingperiod varchar(300),
    jobtitle varchar(5),
    fromdate date,
    todate date,
    entrydate date,
    updatedate date,
    active char(1)
);


create table tbl_holiday(
    id int(11) primary key auto_increment,
    holidayname  varchar(100),
    fromdate  date,
    todate  date,
    noofday  int(3),
    entrydate date,
    updatedate date,
    active char(1)
);

INSERT INTO `tbl_holiday` VALUES 
(1,'Republic Day','2018-01-26','2018-01-26',1,'2017-12-30','2017-12-30','Y'),
(2,'Independence Day','2018-08-15','2018-08-15',1,'2017-12-30','2017-12-30','Y'),
(3,'Christmas Celebration','2017-12-25','2017-12-25',1,'2017-12-30','2017-12-30','Y');


create table tbl_leave(
    id int(11) primary key auto_increment,
    leavename  varchar(100),
    description varchar(300),
    unit  int(3),
    entrydate date,
    updatedate date,
    active char(1)
);
INSERT INTO `tbl_leave` VALUES 
(1,'Earned leave','Earned leave',5,'2017-12-30','2017-12-30','Y'),
(2,'Sick leave','Sick leave',4,'2017-12-30','2017-12-30','Y'),
(3,'Casual leave','Casual leave',1,'2017-12-30','2017-12-30','Y'),
(4,'Leave without pay (LWP)','Leave without pay (LWP)',1,'2017-12-30','2017-12-30','Y'),
(5,'Maternity leave (ML)','Maternity leave (ML)',30,'2017-12-30','2017-12-30','Y'),
(6,'Paternity leave','Paternity leave',7,'2017-12-30','2017-12-30','Y'),
(7,'Compensatory Off','Compensatory Off',2,'2017-12-30','2017-12-30','Y');


create table tbl_project(
    id int(11) primary key auto_increment,
    projectid  varchar(100),
    projectcode  varchar(100),
    projectname  varchar(100),
    description varchar(300),
    fromdate date,
    todate date,
    perdaywork  int(3),
    totalhrwork  int(3),
    entrydate date,
    updatedate date,
    active char(1)
);


create table tbl_attendance(
    id int(11) primary key auto_increment,
    empid  int(11),
    empname  varchar(100),
    intime timestamp,
    outtime timestamp,
    entrydate date,
    updatedate date,
    active char(1)
);

create table tbl_timesheet(
    id int(11) primary key auto_increment,
    empid  int(11),
    empname  varchar(100),
    code varchar(100),
    monday int(2),
    tuesday  int(2),
    wednesday  int(2),
    thursday  int(2),
    friday  int(2),
    saturday  int(2),
    isBillable char(1),
    startDate date,
    endDate date,
    entrydate date,
    updatedate date,
    active char(1)
);

create table tbl_leavapplication(
    id int(11) primary key auto_increment,
    empid  int(11),
    empCode  varchar(100),
    empname  varchar(100),
    leaveId int(11),
    leaveType varchar(100),
    fromDate date,
    toDate date,
    totalDayes int(2),
    description text,
    status char(1),
    feedback text,
    entrydate date,
    updatedate date,
    active char(1)
);

