ALTER TABLE up_option
	DROP FOREIGN KEY up_option_ibfk_1,
	DROP FOREIGN KEY up_option_ibfk_2,
	DROP FOREIGN KEY up_option_ibfk_3;

DROP TABLE IF EXISTS up_release, up_step, up_actor, up_user_story_map, up_option;