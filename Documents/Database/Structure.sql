create table quests
(
	key_quest bigint unsigned auto_increment,
	start timestamp not null,
	title varchar(100) not null,
	quest text not null,
	status tinyint unsigned default 1 not null,
	type tinyint unsigned default 1 not null,
	mark tinyint unsigned default 1 not null,
	data json not null,
	constraint quests_pk
		primary key (key_quest)
);

