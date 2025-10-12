create table umklaidet_logs
(
    key_log bigint unsigned auto_increment,
    ts timestamp not null,
    tags varchar(1000) not null,
    data json not null,
    constraint umklaidet_logs_pk
        primary key (key_log)
);

create table umklaidet_config
(
    key_config varchar(100) not null,
    data json not null,
    constraint umklaidet_config_pk
        primary key (key_config)
);

create table umklaidet_maps
(
    key_map varchar(333) not null,
    title varchar(100) not null,
    status tinyint unsigned not null default '1',
    type tinyint unsigned not null,
    program text not null,
    data json not null,
    constraint umklaidet_maps_pk
        primary key (key_map)
);

create table umklaidet_degrees
(
    key_degree tinyint unsigned auto_increment,
    title varchar(100) not null,
    status tinyint unsigned default 1 not null,
    summary text not null,
    start date not null,
    finish date not null,
    constraint umklaidet_degrees_pk
        primary key (key_degree)
);

