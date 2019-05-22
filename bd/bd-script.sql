/* devstagram */

create table users (
    id int primary key auto_increment,
    name varchar(100),
    email varchar(100),
    pass varchar(255),
    avatar varchar(100)
);

create table photos (
    id int primary key auto_increment,
    id_user int,
    url varchar(100)
);

create table photos_likes (
    id int primary key auto_increment,
    id_user int,
    id_photo int
);

create table photos_comments (
    id int primary key auto_increment,
    id_user int,
    id_photo int,
    data_comment datetime,
    txt text
);

create table users_following (
    id int primary key auto_increment,
    id_user_active int,
    id_user_passive int
);

