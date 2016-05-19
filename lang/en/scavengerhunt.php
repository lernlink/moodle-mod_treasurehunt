<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.


/**
 * English strings for scavengerhunt
 *
 * You can have a rather longer description of the file as well,
 * if you like, and it can span multiple lines.
 *
 * @package    mod_scavengerhunt
 * @copyright  2015 Your Name
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$string['modulename'] = 'Scavenger Hunt';
$string['modulenameplural'] = 'Scavengers Hunt';
$string['modulename_help'] = 'Use the scavenger hunt module for... | The scavengerhunt module allows...';
$string['scavengerhuntfieldset'] = 'Custom example fieldset';
$string['riddlename'] = 'Riddle\'s name';
$string['roadname'] = 'Road\'s name';
$string['continue'] = 'Continue';
$string['updates'] = 'Updates';
$string['user'] = 'User';
$string['group'] = 'Group';
$string['start'] = 'Start';
$string['nogroupassigned'] = 'No group assigned to this road';
$string['overcomefirstriddle'] = 'To discover the first riddle you should start from the marked area on the map';
$string['nouserassigned'] = 'No user assigned to this road';
$string['usersprogress'] = 'Progress users';
$string['attempt'] = 'Attempt';
$string['state'] = 'State';
$string['play'] = 'Play';
$string['historicalattempts'] = 'Historical attempts';
$string['history'] = 'History';
$string['aerialview'] = 'Aerial';
$string['roadview'] = 'Road';
$string['mapview'] = 'Map view';
$string['noattempts'] = 'You have not made any attempt';
$string['notcreateriddle'] = 'Attempts have already been made in this road, you can not add more riddles';
$string['notdeleteriddle'] = 'Attempts have already been made in this road, you can not delete any riddle';
$string['noroads'] = 'No roads have been added yet';
$string['noresults'] = 'No results found.';
$string['nomarks'] = 'First mark on the map the desired point.';
$string['startfromhere'] = 'You can only start from here';
$string['userattemptovercome'] = 'Riddle {$a->num_riddle} discovered on the date: {$a->date}';
$string['userattemptfailed'] = 'Location failed for riddle {$a->num_riddle} on the date: {$a->date}';
$string['groupattemptovercome'] = 'Riddle {$a->num_riddle} discovered by {$a->user} on the date: {$a->date}';
$string['groupattemptfailed'] = 'Location failed by {$a->user} for riddle {$a->num_riddle} on the date: {$a->date}';
$string['successlocation'] = 'Congratulations, you are right !!!';
$string['faillocation'] = 'It is not the right place';
$string['lockedriddle'] = 'You must perform such activity to unlock the riddle';
$string['scavengerhuntname'] = 'Scavengerhunt name';
$string['scavengerhunt'] = 'Scavenger hunt';
$string['noscavengerhunts'] = 'Nothing to do here';
$string['pluginadministration'] = 'Scavenger hunt administration';
$string['pluginname'] = 'Scavenger Hunt';
$string['question_scavengerhunt'] = 'This works?';
$string['hello'] = 'Hello';
$string['welcome'] = 'Welcome to my module scavenger hunt, I hope you enjoy';
$string['question'] = 'Question';
$string['addsimplequestion'] = 'Add simple question';
$string['addsimplequestion_help'] = 'Adds a simple question before overcome successfully  the riddle';
$string['insert_road'] = 'Insert new road';
$string['insert_riddle'] = 'Insert new riddle';
$string['saveemptyridle'] = 'All modified riddles must have geometry before saving';
$string['empty_ridle'] = 'The riddle has not associated geometry. You must enter one for road can be made';
$string['confirm_delete_riddle'] = 'The riddle(s) were removed successfully';
$string['eventriddleupdated'] = 'Riddle has been updated';
$string['eventriddlecreated'] = 'Riddle has been created';
$string['eventriddledeleted'] = 'Riddle has been deleted';
$string['eventroadupdated'] = 'Road has been updated';
$string['eventroadcreated'] = 'Road has been created';
$string['eventroaddeleted'] = 'Road has been deleted';
$string['scavengerhunt:managescavenger'] = 'Manage scavengerhunt';
$string['scavengerhunt:view'] = 'View scavengerhunt';
$string['scavengerhunt:addinstance'] = 'Add a new scavengerhunt';
$string['scavengerhuntislocked'] = '{$a} is editing this scavengerhunt right now. Try to edit it in a few minutes.';
$string['availability'] = 'Availability';
$string['overcomeriddlerestrictions'] = 'Restrictions to overcome riddle';
$string['groups'] = 'Groups';
$string['editscavengerhunt'] = 'Edit scavenger hunt';
$string['gradingsummary'] = 'Grading summary';
$string['groupmode'] = 'Students play in groups';
$string['groupmode_help'] = 'If enabled students will be divided into groups based on the default set of groups or a custom grouping for each road. A group game will be shared among group members and all members of the group will see each others changes to the game.';
$string['allowsubmissionsfromdate'] = 'Allow submissions from';
$string['allowsubmissionsfromdate_help'] = 'If enabled, students will not be able to submit before this date. If disabled, students will be able to start submitting right away.';
$string['cutoffdate'] = 'Cut-off date';
$string['cutoffdate_help'] = 'If set, the assignment will not accept submissions after this date without an extension.';
$string['cutoffdatefromdatevalidation'] = 'Cut-off date must be after the allow submissions from date.';
$string['alwaysshowdescription'] = 'Always show description';
$string['alwaysshowdescription_help'] = 'If disabled, the Assignment Description above will only become visible to students at the "Allow submissions from" date.';
/* * Template */
$string['sendlotacion_title'] = 'Are you sure you want to send this location?';
$string['sendlotacion_content'] = 'This action can not be undone.';
$string['cancel'] = 'Cancel';
$string['send'] = 'Send';
$string['exit'] = 'Exit';
$string['back'] = 'Back';
$string['layers'] = 'Layers';
$string['searching'] = 'Searching';
$string['discoveredriddle'] = 'Discovered riddle';
$string['failedlocation'] = 'Failed location';
$string['riddledescription'] = 'Riddle\'s description';
$string['info_validate_location'] = 'Validate location of this riddle';
$string['button_validate_location'] = 'Validate location';
$string['search'] = 'Search';
$string['info'] = 'Info';
$string['riddles'] = 'Riddles';
$string['playwithoutmove'] = 'Playing without moving';
$string['playwithoutmove_help'] = 'If this option is enabled students may play from their computers without moving to places. A mark on the map is enabled to select the desired point';
$string['groupid'] = 'Group assigned to the road';
$string['groupid_help'] = 'Users in this group are assigned to this road when the game starts. If there is only one road and the selected option is "none", all participants in the activity will play for it';
$string['groupingid'] = 'Grouping assigned to the road';
$string['groupingid_help'] = 'Groups in this grouping are assigned to this road when the game starts';
$string['activitytoend'] = 'Complete selected activity before';
$string['activitytoend_help'] = 'The selected activity must be completed before the current riddle is displayed. For the activities of the course to be displayed in the list it must be enabled the completion activity in Moodle\'s configuration, in course\'s configuration and the activity itself.';
$string['noteam'] = 'Not a member of any group';
$string['nogroupplay'] = 'You have no road assigned, so you can not play the activity.';
$string['nogroupingplay'] = 'You have no team assigned to a road, so you can not play the activity.';
$string['multiplegroupsplay'] = 'You have assigned more than one road, so you can not play the activity.';
$string['multiplegroupingsplay'] = 'Your group has assigned more than one road, so you can not play the activity.';
$string['multiplegroupssameroadplay'] = 'You belong to more than one group assigned to the same road, so you can not play the activity.';
$string['invalidassignedroad'] = 'Assigned road is not validated';
$string['invalidroad'] = 'The road is not validated';
$string['multipleteamsplay'] = 'Member of more than one group, so unable to make the activity.';
$string['warnusersgrouping'] = 'Some users are either not a member of any grouping, or are a member of more than one grouping, or are a member of more than one group in the same road, so are unable to play the activity.';
$string['warnusersgroup'] = 'Some users are either not a member of any group, or are a member of more than one group, so are unable to play the activity.';
$string['timelabelfailed'] = 'Location sent on the date: ';
$string['timelabelsuccess'] = 'Riddle discovered on the date: ';


