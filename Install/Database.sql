create table tardis_logs
(
    key_log bigint unsigned auto_increment,
    ts timestamp not null,
    tags varchar(1000) not null,
    data json not null,
    constraint tardis_logs_pk
        primary key (key_log)
);

create table tardis_config
(
    key_config varchar(100) not null,
    data json not null,
    constraint tardis_config_pk
        primary key (key_config)
);

create table tardis_maps
(
    key_map varchar(333) not null,
    title varchar(100) not null,
    status tinyint unsigned not null default '1',
    type tinyint unsigned not null,
    program text not null,
    data json not null,
    constraint tardis_maps_pk
        primary key (key_map)
);