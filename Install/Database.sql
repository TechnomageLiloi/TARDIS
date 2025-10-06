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
    key_map varchar(1000) not null,
    status tinyint unsigned not null default '1',
    program text not null,
    data json not null,
    constraint umklaidet_maps_pk
        primary key (key_map)
);