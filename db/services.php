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
 * Web service definitions.
 *
 * @package   tool_ally
 * @copyright Copyright (c) 2016 Blackboard Inc. (http://www.blackboard.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$functions = [
    'tool_ally_get_files' => [
        'classname'    => 'tool_ally\\webservice\\files',
        'methodname'   => 'service',
        'description'  => 'Get files to process for accessibility',
        'type'         => 'read',
        'capabilities' => 'moodle/course:view, moodle/course:viewhiddenactivities, moodle/course:viewhiddencourses',
    ],
    'tool_ally_get_course_files' => [
        'classname'    => 'tool_ally\\webservice\\course_files',
        'methodname'   => 'service',
        'description'  => 'Get course files to process for accessibility',
        'type'         => 'read',
        'capabilities' => 'moodle/course:view, moodle/course:viewhiddenactivities, moodle/course:viewhiddencourses',
    ],
    'tool_ally_get_file' => [
        'classname'    => 'tool_ally\\webservice\\file',
        'methodname'   => 'service',
        'description'  => 'Get file information',
        'type'         => 'read',
        'capabilities' => 'moodle/course:view, moodle/course:viewhiddenactivities, moodle/course:viewhiddencourses',
    ],
    'tool_ally_delete_file' => [
        'classname'    => 'tool_ally\\webservice\\delete_file',
        'methodname'   => 'service',
        'description'  => 'Delete a file',
        'type'         => 'write',
        'capabilities' => 'moodle/course:view, moodle/course:viewhiddenactivities, moodle/course:viewhiddencourses,
                moodle/course:managefiles',
    ],
    'tool_ally_get_file_updates' => [
        'classname'    => 'tool_ally\\webservice\\file_updates',
        'methodname'   => 'service',
        'description'  => 'Get file update information',
        'type'         => 'read',
        'capabilities' => 'moodle/course:view,  moodle/course:viewhiddenactivities, moodle/course:viewhiddencourses',
    ],
    'tool_ally_replace_file' => [
        'classname'    => 'tool_ally\\webservice\\replace_file',
        'methodname'   => 'service',
        'description'  => 'Replace a file with new content',
        'type'         => 'write',
        'capabilities' => 'moodle/course:view,  moodle/course:viewhiddenactivities, moodle/course:viewhiddencourses,
                moodle/course:managefiles',
    ],
    'tool_ally_request_view_completion' => [
        'classname'    => 'tool_ally\\webservice\\mod_file_view',
        'methodname'   => 'service',
        'description'  => 'Mark a file resource as complete when viewed',
        'type'         => 'write',
        'capabilities' => 'moodle/course:view,  moodle/course:viewhiddenactivities, moodle/course:viewhiddencourses,
                mod/resource:view'
    ],
    'tool_ally_version_info' => [
        'classname'    => 'tool_ally\\webservice\\version_info',
        'methodname'   => 'service',
        'description'  => 'Return key version info for ally tool, filter and moodle',
        'type'         => 'read',
        'capabilities' => 'moodle/site:configview'
    ],
    'tool_ally_get_courses' => [
        'classname'    => 'tool_ally\\webservice\\courses',
        'methodname'   => 'service',
        'description'  => 'Lists all the courses on the site',
        'type'         => 'read',
        'capabilities' => 'moodle/course:view, moodle/course:viewhiddencourses'
    ]
];

$services = [
    'Ally integration services' => [
        'functions'       => [
            'core_course_get_courses',
            'core_enrol_get_enrolled_users',
            'tool_ally_get_files',
            'tool_ally_get_course_files',
            'tool_ally_get_file',
            'tool_ally_delete_file',
            'tool_ally_get_file_updates',
            'tool_ally_replace_file',
            'tool_ally_request_view_completion',
            'tool_ally_version_info',
            'tool_ally_get_courses',
        ],
        'enabled'         => 0,
        'restrictedusers' => 0,
        'shortname'       => 'tool_ally',
        'downloadfiles'   => 1,
        'uploadfiles'     => 1
    ]
];
