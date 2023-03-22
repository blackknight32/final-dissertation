drop table users;

create table users(
	u_id serial primary key,
	u_fname text not null,
	u_lname text not null,
	ph_no varchar(10),
	email varchar(20) not null,
	city text not null,
	pincode varchar(6));
	 



