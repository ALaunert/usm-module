CREATE TABLE IF NOT EXISTS up_user_story_map
(
	ID INT NOT NULL PRIMARY KEY AUTO_INCREMENT
);

CREATE TABLE IF NOT EXISTS up_actor
(
	ID                INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	USER_STORY_MAP_ID INT NOT NULL,

	FOREIGN KEY (USER_STORY_MAP_ID) REFERENCES up_user_story_map (ID) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS up_step
(
	ID       INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	ACTOR_ID INT NOT NULL,

	FOREIGN KEY (ACTOR_ID) REFERENCES up_actor (ID) ON DELETE CASCADE
);


CREATE TABLE IF NOT EXISTS up_release
(
	ID   INT          NOT NULL PRIMARY KEY AUTO_INCREMENT,
	NAME VARCHAR(256) NOT NULL
);

CREATE TABLE IF NOT EXISTS up_option
(
	ID                      INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	STEP_ID                 INT NOT NULL,
	CHILD_USER_STORY_MAP_ID INT DEFAULT NULL,
	RELEASE_ID              INT NOT NULL,

	FOREIGN KEY (STEP_ID) REFERENCES up_step (ID) ON DELETE CASCADE,
	FOREIGN KEY (CHILD_USER_STORY_MAP_ID) REFERENCES up_user_story_map (ID) ON DELETE CASCADE,
	FOREIGN KEY (RELEASE_ID) REFERENCES up_release (ID) ON DELETE CASCADE
);