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
 * Get information about a single file.
 *
 * @package   tool_ally
 * @copyright Copyright (c) 2016 Blackboard Inc. (http://www.blackboard.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

namespace tool_ally\webservice;

use tool_ally\file_url_resolver;
use tool_ally\local;
use tool_ally\local_file;

defined('MOODLE_INTERNAL') || die();

require_once(__DIR__.'/../../../../../lib/externallib.php');

/**
 * Get information about a single file.
 *
 * @package   tool_ally
 * @copyright Copyright (c) 2016 Blackboard Inc. (http://www.blackboard.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class file extends \external_api {
    /**
     * @return \external_function_parameters
     */
    public static function service_parameters() {
        return new \external_function_parameters([
            'id' => new \external_value(PARAM_ALPHANUM, 'File path name SHA1 hash')
        ]);
    }

    /**
     * @return \external_single_structure
     */
    public static function service_returns() {
        return new \external_single_structure([
            'id'           => new \external_value(PARAM_ALPHANUM, 'File path name SHA1 hash'),
            'courseid'     => new \external_value(PARAM_INT, 'Course ID of the file'),
            'userid'       => new \external_value(PARAM_INT, 'User ID of the file owner'),
            'name'         => new \external_value(PARAM_TEXT, 'File name'),
            'mimetype'     => new \external_value(PARAM_RAW, 'File mime type'),
            'contenthash'  => new \external_value(PARAM_ALPHANUM, 'File content SHA1 hash'),
            'timemodified' => new \external_value(PARAM_TEXT, 'Last modified time of the file'),
            'url'          => new \external_value(PARAM_LOCALURL, 'File URL'),
            'downloadurl'  => new \external_value(PARAM_LOCALURL, 'Web service download URL'),
            'location'     => new \external_value(PARAM_LOCALURL, 'URL to view file in context'),
        ]);
    }

    /**
     * @param string $id The file path name hash
     * @return array
     */
    public static function service($id) {

        $params = self::validate_parameters(self::service_parameters(), ['id' => $id]);

        $file = get_file_storage()->get_file_by_hash($params['id']);
        if (!$file instanceof \stored_file) {
            throw new \moodle_exception('filenotfound', 'error');
        }

        $context = \context::instance_by_id($file->get_contextid());

        self::validate_context($context);
        require_capability('moodle/course:view', $context);
        require_capability('moodle/course:viewhiddencourses', $context);

        $resolver = new file_url_resolver();

        return [
            'id'           => $file->get_pathnamehash(),
            'courseid'     => local_file::courseid($file),
            'userid'       => $file->get_userid(),
            'name'         => $file->get_filename(),
            'mimetype'     => $file->get_mimetype(),
            'contenthash'  => $file->get_contenthash(),
            'timemodified' => local::iso_8601($file->get_timemodified()),
            'url'          => local_file::url($file)->out(false),
            'downloadurl'  => local_file::webservice_url($file)->out(false),
            'location'     => $resolver->resolve_url($file)->out(false),
        ];
    }
}
