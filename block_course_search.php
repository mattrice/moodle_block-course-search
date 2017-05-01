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
 * Newblock block caps.
 *
 * @package    block_course_search
 * @copyright  Matt Rice <mrice1@midmich.edu>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class block_course_search extends block_base {

    function init() {
        $this->title = get_string('course_search', 'block_course_search');
    }

    function get_content() {
        global $CFG, $OUTPUT;

        $search    = optional_param('search', '', PARAM_RAW);  // search words

        $this->content = new stdClass();
        $this->content->items = array();
        $this->content->icons = array();
        $this->content->footer = '';

        $this->content->text = '';
        $this->content->text .= '<form name="form1" method="get" action="' . $CFG->wwwroot . '/course/search.php" id="form1">
    <div class="input-append">
        <input id="navsearchtext" type="text" name="search" placeholder="'. get_string('search_courses', 'block_course_search') .'" value="' . $search . '" >
        <button type="submit" class="btn"><i class="fa fa-search fa-fw" id="course-search-btn"></i>Search</button>
    </div>
</form>';

        return $this->content;
    }
}
