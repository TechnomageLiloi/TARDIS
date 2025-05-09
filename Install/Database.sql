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

create table quests
(
	key_quest varchar(9) not null,
	goal text not null,
	status tinyint unsigned default 1 not null,
	data json not null,
	constraint quests_pk
		primary key (key_quest)
);

create table stones
(
    key_stone timestamp not null,
    key_quest varchar(9) null,
    title varchar(100) not null,
    constraint stones_pk
        primary key (key_stone),
    constraint stones_quest_key_quest_fk
        foreign key (key_quest) references quests (key_quest)
            on update cascade on delete cascade
);