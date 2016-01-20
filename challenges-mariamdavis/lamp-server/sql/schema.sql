-- loads creates the movie table

drop table if exists movies;

create table movies (
    title varchar(256),
    released date,
    distributer varchar(256),
    genre varchar(256),
    rating varchar(256),
    gross int,
    tickets int,
    imdb_id varchar(256),
    id int not null primary key auto_increment
);
