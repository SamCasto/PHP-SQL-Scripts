-- crud operations for student table and 6 different retrieval operations(select statements)
DELIMITER &&
DROP PROCEDURE if exists insertStudent;
CREATE PROCEDURE insertStudent (
    in fName varchar(30),
    in lName varchar(30),
    in addr varchar(80),
    in phone varchar(10),
    in em varchar(50),
    in birth date
)
BEGIN
    INSERT INTO student(firstName, lastName, address, phoneNum, email, dob)
    VALUES (fName, lName, addr, phone, em, birth);
END &&
drop procedure if exists deleteStudent;
create procedure deleteStudent (
	in p_id int
)
begin
	delete from student
    where id = p_id;
end &&
drop procedure if exists updateStudent;
create procedure updateStudent (
	in p_id int,
    in fName varchar(30),
    in lName varchar(30),
    in addr varchar(80),
    in phone varchar(10),
    in em varchar(50),
    in birth date
)
begin
	update student
    set firstName = fname, lastName = lName, address = addr, phoneNum = phone, email = em, dob = birth
    where id = p_id;
end &&
drop procedure if exists studentIDSelect;
create procedure studentIDSelect (
	in p_id int
)
begin
	select * 
    from student
    where id = p_id;
end &&
drop procedure if exists studentLastNameSelect;
create procedure studentLastNameSelect (
    in lName varchar(35)
)
begin
	select *
    from student
    where lastName = lName;
end &&
drop procedure if exists studentDOBBeforeSelect;
create procedure studentDOBBeforeSelect (
    in birth date
)
begin
	select *
    from student
    where dob <= birth;
end &&
drop procedure if exists studentDOBAfterSelect;
create procedure studentDOBAfterSelect (
    in birth date
)
begin
	select *
    from student
    where dob >= birth;
end &&
drop procedure if exists studentEmailSelect;
create procedure studentEmailSelect (
    in em varchar(80)
)
begin
	select *
    from student
    where email = em;
end &&
drop procedure if exists studentFullNameSelect;
create procedure studentFullNameSelect (
    in fName varchar(30),
    in lName varchar(35)
)
begin
	select *
    from student
    where firstName = fName and lastName = lName;
end &&
DELIMITER ;

-- call insertStudent('Sam','Casto','310 Monroe St',3045429059,'scast305@fiu.edu','1997-01-07');
select * from student;
