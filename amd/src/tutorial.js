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
 * @module    mod_treasurehunt/edit
 * @package   mod_treasurehunt
 * @copyright 2016 onwards Juan Pablo de Castro <jpdecastro@tel.uva.es>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

define(['jquery', 'jqueryui', 'mod_treasurehunt/intro', 'core/str', 'core/notification'],
        function ($, jqui, introJS, str, notification) {
            var init = {
                editpage: function () {
                    var intro = introJS();
                    var cook = {};
                    document.cookie.split(';').forEach(function (x) {
                        var arr = x.split('=');
                        arr[1] && (cook[arr[0].trim()] = arr[1].trim());
                    });
                    if (cook["introEditProgress"] != 'Done') {
                        var terms = ['nextstep', 'prevstep', 'skiptutorial', 'donetutorial', 'welcome_edit_tour', 'map_tour', 'mapplay_tour', 'roads_tour',
                            'stages_tour', 'addroad_tour', 'addstage_tour', 'save_tour', 'editend_tour'];
                        var stringQueried = terms.map(function (term) {
                            return {key: term, component: 'treasurehunt'};
                        });
                        str.get_strings(stringQueried).done(function (strings) {
                            configureEditIntro(intro, strings,terms);
                            setTimeout(function () {
                                intro.start();
                            }, 1000);
                        }).fail(notification.exception);
                    }
                }, // end of editpage function
                playpage: function (strings) {
                    var intro = introJS();
                    var cook = {};
                    document.cookie.split(';').forEach(function (x) {
                        var arr = x.split('=');
                        arr[1] && (cook[arr[0].trim()] = arr[1].trim());
                    });
                    if (cook["introPlayProgress"] != 'Done') {
                        var terms = ['nextstep', 'prevstep', 'skiptutorial', 'donetutorial', 'welcome_play_tour', 'lastsuccessfulstage_tour', 'mapplay_tour', 'validatelocation_tour', 'autolocate_tour', 'playend_tour'];
                        var stringQueried = terms.map( function (term) {
                            return {key: term, component: 'treasurehunt'};
                        });
                        str.get_strings(stringQueried).done(function (strings) {
                            configurePlayIntro(intro, strings, terms);
                            setTimeout(function () {
                                intro.start();
                            }, 1000);
                        }).fail(notification.exception);
                    }

                }, // end of playpage function

            }; // end of init var
            return init;
        }
); // end of module define function

function configureEditIntro(intro, strings,keys) {
    intro.setOptions({
        nextLabel: strings[keys.indexOf('nextstep')],
        prevLabel: strings[keys.indexOf('prevstep')],
        skipLabel: strings[keys.indexOf('skiptutorial')],
        doneLabel: strings[keys.indexOf('donetutorial')],
        steps: [
            {
                element: '#treasurehunt-editor',
                intro: strings[keys.indexOf('welcome_edit_tour')], 
                position: 'floating'
            },
            {
                element: '#mapedit',
                intro: strings[keys.indexOf('map_tour')],
                position: 'floating'
            },
            {
                element: '#roadlist',
                intro: strings[keys.indexOf('roads_tour')],
                position: 'top'
            },
            {
                element: '#stagelistpanel',
                intro: strings[keys.indexOf('stages_tour')],
                position: 'right'
            },
            {
                element: '#addroad',
                intro: strings[keys.indexOf('addroad_tour')],
                position: 'bottom'
            },
            {
                element: '#addstage',
                intro: strings[keys.indexOf('addstage_tour')],
                position: 'bottom'
            },
            {
                element: '#savestage',
                intro: strings[keys.indexOf('save_tour')],
                position: 'bottom'
            },
            {
                element: '#treasurehunt-editor',
                intro: strings[keys.indexOf('editend_tour')],
                position: 'floating'
            }
        ]
    });
    intro.oncomplete(function (target) {
        document.cookie = "introEditProgress = Done";
    });
    intro.onchange(function (target) {
        document.cookie = "introEditStep = " + target.name;
    });
}
; // end of configureEditIntro
function configurePlayIntro(intro, string,keys) {
    intro.setOptions({
        nextLabel: strings[keys.indexOf('nextstep')],
        prevLabel: strings[keys.indexOf( 'prevstep')],
        skipLabel: strings[keys.indexOf('skiptutorial')],
        doneLabel: strings[keys.indexOf('donetutorial')],
        steps: [
            {
                intro: strings[keys.indexOf('welcome_play_tour')],
                position: 'floating'
            },
            {
                element: '#collapsibleset', //#lastsuccessfulstage',
                intro: strings[keys.indexOf('lastsuccessfulstage_tour')],
                position: 'top'
            },
            {
                element: '#mapplay',
                intro: strings[keys.indexOf('mapplay_tour')],
                position: 'floating'
            },
            {
                element: '#validatelocation',
                intro: strings[keys.indexOf('validatelocation_tour')],
                position: 'top'
            },
            {
                element: '#autolocate',
                intro: strings[keys.indexOf('autolocate_tour')],
                position: 'top'
            },
            {
                element: '#treasurehunt-editor',
                intro: strings[keys.indexOf('playend_tour')],
                position: 'floating'
            }
        ]
    });
    intro.oncomplete(function (target) {
        document.cookie = "introPlayProgress = Done";
    });
    intro.onchange(function (target) {
        document.cookie = "introPlayStep = " + this._currentStep;
    });
    intro.onafterchange(function (target) {
        var parentElem = target.parentElement;
        while (parentElem != null) {
            if (parentElem.dataset.role == 'panel') {
                parentElem.style = "z-index: 1001 !important";
                break;
            } else {
                parentElem = parentElem.parentElement;
            }
        }
    });
}