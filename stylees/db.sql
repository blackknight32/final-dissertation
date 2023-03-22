drop table user1;
CREATE TABLE user1
(
	id serial,
	name character varying(250),
	email character varying(250),
	password character varying(250),
	CONSTRAINT id Primary key(id)
);


