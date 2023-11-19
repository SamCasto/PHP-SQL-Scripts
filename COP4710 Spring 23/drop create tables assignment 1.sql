set foreign_key_checks = 0;
drop table Department;
create table Department (
	id int primary key auto_increment,
	depName varchar(255)
);
drop table  Student;
create table Student (
	id int primary key auto_increment,
    firstName varchar(30),
    lastName varchar(35),
    address varchar(80),
    phoneNum varchar(10),
    email varchar(50),
    dob date
);
drop table Faculty;
create table Faculty (
	id int primary key auto_increment,
    firstName varchar(30),
    lastName varchar(35),
    address varchar(80),
    phoneNum varchar(10),
    email varchar(50),
    dob date
);
drop table Course;
create table Course (
	id int primary key auto_increment,
    courseName varchar(255),
    courseNum int,
    depID int not null references Department(id),
    facID int not null references Faculty(id),
    startTime datetime,
    endTime datetime,
    roomNum int,
    credits int
);
drop table Plan;
create table Plan (
	stuID int not null references Student(id),
    courseID int not null references Course(id),
    startTime datetime,
    endTime datetime,
    roomNum int
);
drop table Enrolment;
create table Enrolment (
	id int primary key auto_increment,
    stuID int not null references Student(id),
    courseID int not null references Course(id),
    grade varchar(1)
);
drop table Financial;
create table Financial (
	accountNum int primary key auto_increment,
    amountDue int,
    amountPaid int,
    facID int not null references Faculty(id),
    stuID int not null references Student(id),
    billingAddress varchar(80)
);
ALTER TABLE Course ADD FOREIGN KEY (depID) REFERENCES Department(id);
ALTER TABLE Course ADD FOREIGN KEY (facID) REFERENCES Faculty(id);
alter table Plan add foreign key (stuID) references Student(id);
alter table Plan add foreign key (courseID) references Course(id);
alter table Enrolment add foreign key (stuID) references Student(id);
alter table Enrolment add foreign key (courseID) references Course(id);
alter table Financial add foreign key (stuID) references Student(id);
alter table Financial add foreign key (facID) references Faculty(id);
set foreign_key_checks = 1;
    