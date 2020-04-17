create table games
( id int unsigned not null auto_increment primary key,
  name char(50) not null,
  link varchar(320) not null,
  description varchar(320) not null
);