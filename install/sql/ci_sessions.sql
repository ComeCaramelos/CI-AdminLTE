CREATE TABLE IF NOT EXISTS `ci_sessions` (
        `id` varchar(128) NOT NULL,
        `ip_address` varchar(45) NOT NULL,
        `timestamp` int(10) unsigned DEFAULT 0 NOT NULL,
        `data` blob NOT NULL,
        KEY `ci_sessions_timestamp` (`timestamp`)
);

/* When sess_match_ip = TRUE */
ALTER TABLE ci_sessions ADD PRIMARY KEY (id, ip_address);

/* When sess_match_ip = FALSE */
/* ALTER TABLE ci_sessions ADD PRIMARY KEY (id);*/

/* To drop a previously created primary key (use when changing the setting) */
/*ALTER TABLE ci_sessions DROP PRIMARY KEY;*/