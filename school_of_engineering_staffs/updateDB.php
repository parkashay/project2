<?php
	// check this file's MD5 to make sure it wasn't called before
	$tenantId = Authentication::tenantIdPadded();
	$setupHash = __DIR__ . "/setup{$tenantId}.md5";

	$prevMD5 = @file_get_contents($setupHash);
	$thisMD5 = md5_file(__FILE__);

	// check if this setup file already run
	if($thisMD5 != $prevMD5) {
		// set up tables
		setupTable(
			'staffs', " 
			CREATE TABLE IF NOT EXISTS `staffs` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`name` VARCHAR(200) NOT NULL,
				`title` VARCHAR(200) NOT NULL,
				`photo` VARCHAR(40) NOT NULL,
				`description` TEXT NOT NULL,
				`research_paper` VARCHAR(40) NULL
			) CHARSET utf8mb4", [
				"ALTER TABLE staffs ADD `field1` VARCHAR(40)",
				"ALTER TABLE `staffs` CHANGE `field1` `id` VARCHAR(40) NULL ",
				"ALTER TABLE `staffs` CHANGE `id` `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ",
				"ALTER TABLE staffs ADD `field2` VARCHAR(40)",
				"ALTER TABLE `staffs` CHANGE `field2` `name` VARCHAR(40) NULL ",
				" ALTER TABLE `staffs` CHANGE `name` `name` VARCHAR(40) NOT NULL ",
				" ALTER TABLE `staffs` CHANGE `name` `name` VARCHAR(200) NOT NULL ",
				"ALTER TABLE staffs ADD `field3` VARCHAR(40)",
				"ALTER TABLE `staffs` CHANGE `field3` `title` VARCHAR(40) NULL ",
				" ALTER TABLE `staffs` CHANGE `title` `title` VARCHAR(40) NOT NULL ",
				" ALTER TABLE `staffs` CHANGE `title` `title` VARCHAR(200) NOT NULL ",
				"ALTER TABLE staffs ADD `field4` VARCHAR(40)",
				"ALTER TABLE `staffs` CHANGE `field4` `description` VARCHAR(40) NULL ",
				"ALTER TABLE `staffs` CHANGE `comments` `comments` TEXT NULL ",
				" ALTER TABLE `staffs` CHANGE `description` `description` TEXT NOT NULL ",
				"ALTER TABLE staffs ADD `field5` VARCHAR(40)",
				"ALTER TABLE `staffs` CHANGE `field5` `photo` VARCHAR(40) NULL ",
				"ALTER TABLE `staffs` CHANGE `photo` `photo` VARCHAR(40) NULL ",
				"ALTER TABLE staffs ADD `field6` VARCHAR(40)",
				"ALTER TABLE `staffs` CHANGE `field6` `research_paper` VARCHAR(40) NULL ",
				" ALTER TABLE `staffs` CHANGE `photo` `photo` VARCHAR(40) NOT NULL ",
			]
		);

		setupTable(
			'notes', " 
			CREATE TABLE IF NOT EXISTS `notes` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`name` VARCHAR(200) NOT NULL,
				`category` INT UNSIGNED NOT NULL,
				`uploaded_by` INT UNSIGNED NOT NULL,
				`description` TEXT NULL,
				`photo` VARCHAR(40) NULL,
				`file_one` VARCHAR(200) NULL,
				`file_two` VARCHAR(200) NULL
			) CHARSET utf8mb4", [
				"ALTER TABLE notes ADD `field1` VARCHAR(40)",
				"ALTER TABLE `notes` CHANGE `field1` `id` VARCHAR(40) NULL ",
				"ALTER TABLE `notes` CHANGE `id` `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ",
				"ALTER TABLE notes ADD `field2` VARCHAR(40)",
				"ALTER TABLE `notes` CHANGE `field2` `name` VARCHAR(40) NULL ",
				" ALTER TABLE `notes` CHANGE `name` `name` VARCHAR(200) NULL ",
				" ALTER TABLE `notes` CHANGE `name` `name` VARCHAR(200) NOT NULL ",
				"ALTER TABLE notes ADD `field3` VARCHAR(40)",
				"ALTER TABLE `notes` CHANGE `field3` `category` VARCHAR(40) NULL ",
				" ALTER TABLE `notes` CHANGE `category` `category` VARCHAR(200) NULL ",
				" ALTER TABLE `notes` CHANGE `category` `category` VARCHAR(200) NOT NULL ",
				"ALTER TABLE notes ADD `field4` VARCHAR(40)",
				"ALTER TABLE `notes` CHANGE `field4` `description` VARCHAR(40) NULL ",
				"ALTER TABLE `notes` CHANGE `comments` `comments` TEXT NULL ",
				"ALTER TABLE notes ADD `field5` VARCHAR(40)",
				"ALTER TABLE `notes` CHANGE `field5` `file_one` VARCHAR(40) NULL ",
				" ALTER TABLE `notes` CHANGE `file_one` `file_one` VARCHAR(200) NULL ",
				"ALTER TABLE notes ADD `field6` VARCHAR(40)",
				"ALTER TABLE `notes` CHANGE `field6` `file_two` VARCHAR(40) NULL ",
				" ALTER TABLE `notes` CHANGE `file_two` `file_two` VARCHAR(200) NULL ",
				"ALTER TABLE notes ADD `field7` VARCHAR(40)",
				"ALTER TABLE `notes` CHANGE `field7` `photo` VARCHAR(40) NULL ",
				"ALTER TABLE `notes` CHANGE `photo` `photo` VARCHAR(40) NULL ",
				"ALTER TABLE notes ADD `field8` VARCHAR(40)",
				"ALTER TABLE `notes` CHANGE `field8` `uploaded_by` VARCHAR(40) NULL ",
				" ALTER TABLE `notes` CHANGE `uploaded_by` `uploaded_by` VARCHAR(200) NULL ",
				" ALTER TABLE `notes` CHANGE `uploaded_by` `uploaded_by` VARCHAR(200) NOT NULL ",
			]
		);
		setupIndexes('notes', ['category','uploaded_by',]);

		setupTable(
			'notes_category', " 
			CREATE TABLE IF NOT EXISTS `notes_category` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`notes_category` VARCHAR(200) NOT NULL
			) CHARSET utf8mb4", [
				"ALTER TABLE notes_category ADD `field1` VARCHAR(40)",
				"ALTER TABLE `notes_category` CHANGE `field1` `id` VARCHAR(40) NULL ",
				"ALTER TABLE `notes_category` CHANGE `id` `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ",
				"ALTER TABLE notes_category ADD `field2` VARCHAR(40)",
				"ALTER TABLE `notes_category` CHANGE `field2` `category_name` VARCHAR(40) NULL ",
				" ALTER TABLE `notes_category` CHANGE `category_name` `category_name` VARCHAR(40) NOT NULL ",
				"ALTER TABLE notes_category ADD `field2` VARCHAR(40)",
				"ALTER TABLE `notes_category` CHANGE `field2` `notes_category` VARCHAR(40) NULL ",
				" ALTER TABLE `notes_category` CHANGE `notes_category` `notes_category` VARCHAR(200) NULL ",
				" ALTER TABLE `notes_category` CHANGE `notes_category` `notes_category` VARCHAR(200) NOT NULL ",
			]
		);

		setupTable(
			'student_achievments', " 
			CREATE TABLE IF NOT EXISTS `student_achievments` ( 
				`id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
				PRIMARY KEY (`id`),
				`name` VARCHAR(200) NOT NULL,
				`photo` VARCHAR(40) NOT NULL,
				`description` TEXT NOT NULL
			) CHARSET utf8mb4", [
				"ALTER TABLE student_achievments ADD `field1` VARCHAR(40)",
				"ALTER TABLE `student_achievments` CHANGE `field1` `id` VARCHAR(40) NULL ",
				"ALTER TABLE `student_achievments` CHANGE `id` `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ",
				"ALTER TABLE student_achievments ADD `field2` VARCHAR(40)",
				"ALTER TABLE `student_achievments` CHANGE `field2` `name` VARCHAR(40) NULL ",
				"ALTER TABLE student_achievments ADD `field3` VARCHAR(40)",
				"ALTER TABLE `student_achievments` CHANGE `field3` `photo` VARCHAR(40) NULL ",
				"ALTER TABLE `student_achievments` CHANGE `photo` `photo` VARCHAR(40) NULL ",
				"ALTER TABLE student_achievments ADD `field4` VARCHAR(40)",
				"ALTER TABLE `student_achievments` CHANGE `field4` `description` VARCHAR(40) NULL ",
				"ALTER TABLE `student_achievments` CHANGE `comments` `comments` TEXT NULL ",
				" ALTER TABLE `student_achievments` CHANGE `name` `name` VARCHAR(200) NULL ",
				" ALTER TABLE `student_achievments` CHANGE `name` `name` VARCHAR(200) NOT NULL ",
				" ALTER TABLE `student_achievments` CHANGE `photo` `photo` VARCHAR(40) NOT NULL ",
				" ALTER TABLE `student_achievments` CHANGE `description` `description` TEXT NOT NULL ",
			]
		);



		// save MD5
		@file_put_contents($setupHash, $thisMD5);
	}


	function setupIndexes($tableName, $arrFields) {
		if(!is_array($arrFields) || !count($arrFields)) return false;

		foreach($arrFields as $fieldName) {
			if(!$res = @db_query("SHOW COLUMNS FROM `$tableName` like '$fieldName'")) continue;
			if(!$row = @db_fetch_assoc($res)) continue;
			if($row['Key']) continue;

			@db_query("ALTER TABLE `$tableName` ADD INDEX `$fieldName` (`$fieldName`)");
		}
	}


	function setupTable($tableName, $createSQL = '', $arrAlter = '') {
		global $Translation;
		$oldTableName = '';
		ob_start();

		echo '<div style="padding: 5px; border-bottom:solid 1px silver; font-family: verdana, arial; font-size: 10px;">';

		// is there a table rename query?
		if(is_array($arrAlter)) {
			$matches = [];
			if(preg_match("/ALTER TABLE `(.*)` RENAME `$tableName`/i", $arrAlter[0], $matches)) {
				$oldTableName = $matches[1];
			}
		}

		if($res = @db_query("SELECT COUNT(1) FROM `$tableName`")) { // table already exists
			if($row = @db_fetch_array($res)) {
				echo str_replace(['<TableName>', '<NumRecords>'], [$tableName, $row[0]], $Translation['table exists']);
				if(is_array($arrAlter)) {
					echo '<br>';
					foreach($arrAlter as $alter) {
						if($alter != '') {
							echo "$alter ... ";
							if(!@db_query($alter)) {
								echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
								echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
							} else {
								echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
							}
						}
					}
				} else {
					echo $Translation['table uptodate'];
				}
			} else {
				echo str_replace('<TableName>', $tableName, $Translation['couldnt count']);
			}
		} else { // given tableName doesn't exist

			if($oldTableName != '') { // if we have a table rename query
				if($ro = @db_query("SELECT COUNT(1) FROM `$oldTableName`")) { // if old table exists, rename it.
					$renameQuery = array_shift($arrAlter); // get and remove rename query

					echo "$renameQuery ... ";
					if(!@db_query($renameQuery)) {
						echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
						echo '<div class="text-danger">' . $Translation['mysql said'] . ' ' . db_error(db_link()) . '</div>';
					} else {
						echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
					}

					if(is_array($arrAlter)) setupTable($tableName, $createSQL, false, $arrAlter); // execute Alter queries on renamed table ...
				} else { // if old tableName doesn't exist (nor the new one since we're here), then just create the table.
					setupTable($tableName, $createSQL, false); // no Alter queries passed ...
				}
			} else { // tableName doesn't exist and no rename, so just create the table
				echo str_replace("<TableName>", $tableName, $Translation["creating table"]);
				if(!@db_query($createSQL)) {
					echo '<span class="label label-danger">' . $Translation['failed'] . '</span>';
					echo '<div class="text-danger">' . $Translation['mysql said'] . db_error(db_link()) . '</div>';

					// create table with a dummy field
					@db_query("CREATE TABLE IF NOT EXISTS `$tableName` (`_dummy_deletable_field` TINYINT)");
				} else {
					echo '<span class="label label-success">' . $Translation['ok'] . '</span>';
				}
			}

			// set Admin group permissions for newly created table if membership_grouppermissions exists
			if($ro = @db_query("SELECT COUNT(1) FROM `membership_grouppermissions`")) {
				// get Admins group id
				$ro = @db_query("SELECT `groupID` FROM `membership_groups` WHERE `name`='Admins'");
				if($ro) {
					$adminGroupID = intval(db_fetch_row($ro)[0]);
					if($adminGroupID) @db_query("INSERT IGNORE INTO `membership_grouppermissions` SET
						`groupID`='$adminGroupID',
						`tableName`='$tableName',
						`allowInsert`=1, `allowView`=1, `allowEdit`=1, `allowDelete`=1
					");
				}
			}
		}

		echo '</div>';

		$out = ob_get_clean();
		if(defined('APPGINI_SETUP') && APPGINI_SETUP) echo $out;
	}
