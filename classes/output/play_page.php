<?php

// Standard GPL and phpdocs

namespace mod_scavengerhunt\output;

use renderable;
use renderer_base;
use templatable;
use stdClass;

class play_page implements renderable, templatable {

    /** @var string $sometext Some text to show how to pass data to a template. */
    var $scavengerhunt = null;

    public function __construct($scavengerhunt) {
        $this->scavengerhunt = $scavengerhunt;
    }

    /**
     * Export this data so it can be used as the context for a mustache template.
     *
     * @return stdClass
     */
    public function export_for_template(renderer_base $output) {
        GLOBAL $USER;
        $data = new stdClass();
        $user = new stdClass();
        $user->name = fullname($USER); //$USER->firstname . ' ' . $USER->lastname;
        $user->picture = $output->user_picture($USER, array('link' => false));
        $data->user = $user;
        $data->scavengerhunt = $this->scavengerhunt;
        if (empty($this->scavengerhunt->description)) {
            $hasdescription = false;
        } else {
            $hasdescription = true;
        }
        $data->hasdescription = $hasdescription;
        return $data;
    }

}
