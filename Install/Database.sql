create table logs
(
    key_log bigint unsigned auto_increment,
    ts timestamp not null,
    tags varchar(1000) not null,
    data json not null,
    constraint logs_pk
        primary key (key_log)
);

create table config
(
    key_config varchar(100) not null,
    data json not null,
    constraint config_pk
        primary key (key_config)
);

create table levels
(
    key_level tinyint unsigned auto_increment,
    title varchar(250) not null,
    status tinyint unsigned not null,
    program text null,
    goal varchar(250) not null default '-',
    constraint levels_pk
        primary key (key_level)
);

insert into levels VALUES (1, 'Teacher', 1, '-', '-');

create table road
(
    key_day bigint unsigned auto_increment,
    map varchar(250) not null,
    program text not null,
    data json not null,
    constraint i60_road_pk
        primary key (key_day)
);

create table quests
(
    key_quest smallint unsigned not null,
    map varchar(250) not null,
    title varchar(250) not null,
    program text not null,
    status tinyint unsigned default 1 not null,
    start timestamp not null,
    finish timestamp not null,
    tags varchar(100) not null,
    data json not null,
    constraint quests_pk
        primary key (key_quest, map)
);

create table exercises
(
    key_exercise smallint unsigned not null,
    map varchar(250) not null,
    title varchar(250) not null,
    status tinyint unsigned default 1 not null,
    type tinyint unsigned default 1 not null,
    program json not null,
    theory text not null,
    constraint exercises_pk
        primary key (key_exercise, map)
);