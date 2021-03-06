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
 * Language definitions.
 *
 * @package   tool_ally
 * @copyright Copyright (c) 2016 Blackboard Inc. (http://www.blackboard.com)
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminurl'] = 'Launch URL';
$string['adminurldesc'] = 'The LTI launch URL used to access the Accessibility report.';
$string['clientid'] = 'Client id';
$string['clientiddesc'] = 'The Ally client id';
$string['contentauthors'] = 'Content authors';
$string['contentauthorsdesc'] = 'Administrators and users assigned to these selected roles will have their uploaded course files evaluated for accessibility. The files are given an accessibility rating. Low ratings mean that the file needs changes to be more accessible.';
$string['curlerror'] = 'cURL error: {$a}';
$string['curlinvalidhttpcode'] = 'Invalid HTTP status code: {$a}';
$string['curlnohttpcode'] = 'Unable to verify HTTP status code';
$string['error:pluginfilequestiononly'] = 'Only question components are supported for this url';
$string['filecoursenotfound'] = 'The passed in file does not belong to any course';
$string['fileupdatestask'] = 'Push file updates to Ally';
$string['key'] = 'Key';
$string['keydesc'] = 'The LTI consumer key.';
$string['pluginname'] = 'Ally';
$string['pushurl'] = 'File updates URL';
$string['pushurldesc'] = 'Push notifications about file updates to this URL.';
$string['queuesendmessagesfailure'] = 'An error occurred while sending messages to the AWS SQS. Error data: $a';
$string['secret'] = 'Secret';
$string['secretdesc'] = 'The LTI secret.';
$string['usercapabilitymissing'] = 'The supplied user does not have the capability to delete this file.';
$string['autoconfigure'] = 'Auto configure Ally web service';
$string['autoconfiguredesc'] = 'Automatically create web service role and user for ally.';
$string['autoconfigureconfirmation'] = 'Automatically create web service role and user for ally and enable web service. The following actions will be carried out: <ul><li>create a role entitled \'ally_webservice\' and a user with the username \'ally_webuser\'</li><li>add the \'ally_webuser\' user to the \'ally_webservice\' role</li><li>enable web services</li><li>enable the rest web service protocol</li><li>enable the ally web service</li><li>create a token for the \'ally_webuser\' account</li></ul>';
$string['autoconfigsuccess'] = 'Success - the Ally web service has been automatically configured.';
$string['autoconfigtoken'] = 'The web service token is as follows:';
$string['autoconfigapicall'] = 'You can test that the webservice is working via the following url:';
$string['privacy:metadata:files:action'] = 'The action taken on the file, EG: created, updated or deleted.';
$string['privacy:metadata:files:contenthash'] = 'The file\'s content hash in order to determine uniqueness.';
$string['privacy:metadata:files:courseid'] = 'The course ID that the file belongs to.';
$string['privacy:metadata:files:externalpurpose'] = 'In order to integrate with Ally, files need to be exchanged with Ally.';
$string['privacy:metadata:files:filecontents'] = 'The actual file\'s content is sent to Ally in order to evaluate it for accessibility.';
$string['privacy:metadata:files:mimetype'] = 'The file MIME type, EG: text/plain, image/jpeg, etc.';
$string['privacy:metadata:files:pathnamehash'] = 'The file\'s path name hash to uniquely identify it.';
$string['privacy:metadata:files:timemodified'] = 'The time when the field was last modified.';
$string['pushfileserror'] = 'Ally file updates error.';
$string['pushfileserror:explanation'] = 'Errors associated with file updates push to Ally services.';
$string['pushfileserror:skip'] = 'Skipping live file(s) push due to communication problems. Live file push will be restored when file updates task is successful. Please, review your configuration.';
$string['pushfilessummary'] = 'Ally file updates summary.';
$string['pushfilessummary:explanation'] = 'Summary of file updates sent to Ally.';