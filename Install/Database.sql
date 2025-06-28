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

create table milestones
(
    key_milestone bigint unsigned auto_increment,
    program text not null,
    data json not null,
    constraint milestones_pk
        primary key (key_milestone)
);

insert into milestones VALUES (1, 'Start milestone', '{}');

create table schedule
(
    key_day date not null,
    key_milestone bigint unsigned not null,
    program text not null,
    data json not null,
    constraint schedule_pk
        primary key (key_day),
    constraint schedule_milestones_key_milestone_fk
        foreign key (key_milestone) references milestones (key_milestone)
            on update cascade on delete cascade
);

create table tickets
(
    key_ticket timestamp not null,
    key_day date not null,
    key_milestone bigint unsigned not null,
    key_level tinyint unsigned not null,
    map varchar(250) not null,
    title varchar(100) not null,
    status tinyint unsigned default 1 not null,
    program text not null,
    data json not null,
    constraint tickets_pk
        primary key (key_ticket),
    constraint tickets_schedule_key_day_fk
        foreign key (key_day) references schedule (key_day)
            on update cascade on delete cascade,
    constraint tickets_milestones_key_milestone_fk
        foreign key (key_milestone) references milestones (key_milestone)
            on update cascade on delete cascade,
    constraint tickets_levels_key_level_fk
        foreign key (key_level) references levels (key_level)
            on update cascade on delete cascade
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

create table power
(
    key_power bigint unsigned auto_increment,
    firstname varchar(100) not null,
    fullname varchar(100) not null,
    nickname varchar(100) not null,
    degree varchar(100) not null,
    type tinyint unsigned default 1 not null,
    summary text not null,
    data json not null,
    dt timestamp not null,
    constraint power_pk
        primary key (key_power)
);

