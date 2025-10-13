create table fort_logs
(
    key_log bigint unsigned auto_increment,
    ts timestamp not null,
    tags varchar(1000) not null,
    data json not null,
    constraint fort_logs_pk
        primary key (key_log)
);

create table fort_config
(
    key_config varchar(100) not null,
    data json not null,
    constraint fort_config_pk
        primary key (key_config)
);

create table fort_maps
(
    key_map varchar(333) not null,
    title varchar(100) not null,
    status tinyint unsigned not null default '1',
    type tinyint unsigned not null,
    program text not null,
    data json not null,
    constraint fort_maps_pk
        primary key (key_map)
);

create table fort_degrees
(
    key_degree tinyint unsigned auto_increment,
    title varchar(100) not null,
    status tinyint unsigned default 1 not null,
    summary text not null,
    start date not null,
    finish date not null,
    constraint fort_degrees_pk
        primary key (key_degree)
);

