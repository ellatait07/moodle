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
// GNU General Public License for ella details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme Ella settings.
 *
 * Each setting that is defined in the parent theme Clean should be
 * defined here too, and use the exact same config name. The reason
 * is that theme_ella does not define any layout files to re-use the
 * ones from theme_clean. But as those layout files use the function
 * {@link theme_clean_get_html_for_settings} that belong to Clean,
 * we have to make sure it works as expected by having the same settings
 * in our theme.
 *
 * @see        theme_clean_get_html_for_settings
 * @package    theme_ella
 * @copyright  2014 Frédéric Massart
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {

    // @textColor setting.
    $name = 'theme_ella/textcolor';
    $title = get_string('textcolor', 'theme_ella');
    $description = get_string('textcolor_desc', 'theme_ella');
    $default = '#333366';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @linkColor setting.
    $name = 'theme_ella/linkcolor';
    $title = get_string('linkcolor', 'theme_ella');
    $description = get_string('linkcolor_desc', 'theme_ella');
    $default = '#FF6500';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @bodyBackground setting.
    $name = 'theme_ella/bodybackground';
    $title = get_string('bodybackground', 'theme_ella');
    $description = get_string('bodybackground_desc', 'theme_ella');
    $default = '';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background image setting.
    $name = 'theme_ella/backgroundimage';
    $title = get_string('backgroundimage', 'theme_ella');
    $description = get_string('backgroundimage_desc', 'theme_ella');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background repeat setting.
    $name = 'theme_ella/backgroundrepeat';
    $title = get_string('backgroundrepeat', 'theme_ella');
    $description = get_string('backgroundrepeat_desc', 'theme_ella');;
    $default = 'repeat';
    $choices = array(
        '0' => get_string('default'),
        'repeat' => get_string('backgroundrepeatrepeat', 'theme_ella'),
        'repeat-x' => get_string('backgroundrepeatrepeatx', 'theme_ella'),
        'repeat-y' => get_string('backgroundrepeatrepeaty', 'theme_ella'),
        'no-repeat' => get_string('backgroundrepeatnorepeat', 'theme_ella'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background position setting.
    $name = 'theme_ella/backgroundposition';
    $title = get_string('backgroundposition', 'theme_ella');
    $description = get_string('backgroundposition_desc', 'theme_ella');
    $default = '0';
    $choices = array(
        '0' => get_string('default'),
        'left_top' => get_string('backgroundpositionlefttop', 'theme_ella'),
        'left_center' => get_string('backgroundpositionleftcenter', 'theme_ella'),
        'left_bottom' => get_string('backgroundpositionleftbottom', 'theme_ella'),
        'right_top' => get_string('backgroundpositionrighttop', 'theme_ella'),
        'right_center' => get_string('backgroundpositionrightcenter', 'theme_ella'),
        'right_bottom' => get_string('backgroundpositionrightbottom', 'theme_ella'),
        'center_top' => get_string('backgroundpositioncentertop', 'theme_ella'),
        'center_center' => get_string('backgroundpositioncentercenter', 'theme_ella'),
        'center_bottom' => get_string('backgroundpositioncenterbottom', 'theme_ella'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Background fixed setting.
    $name = 'theme_ella/backgroundfixed';
    $title = get_string('backgroundfixed', 'theme_ella');
    $description = get_string('backgroundfixed_desc', 'theme_ella');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Main content background color.
    $name = 'theme_ella/contentbackground';
    $title = get_string('contentbackground', 'theme_ella');
    $description = get_string('contentbackground_desc', 'theme_ella');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Secondary background color.
    $name = 'theme_ella/secondarybackground';
    $title = get_string('secondarybackground', 'theme_ella');
    $description = get_string('secondarybackground_desc', 'theme_ella');
    $default = '#FFFFFF';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Invert Navbar to dark background.
    $name = 'theme_ella/invert';
    $title = get_string('invert', 'theme_ella');
    $description = get_string('invertdesc', 'theme_ella');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Logo file setting.
    $name = 'theme_ella/logo';
    $title = get_string('logo','theme_ella');
    $description = get_string('logodesc', 'theme_ella');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Small logo file setting.
    $name = 'theme_ella/smalllogo';
    $title = get_string('smalllogo', 'theme_ella');
    $description = get_string('smalllogodesc', 'theme_ella');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'smalllogo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Show site name along with small logo.
    $name = 'theme_ella/sitename';
    $title = get_string('sitename', 'theme_ella');
    $description = get_string('sitenamedesc', 'theme_ella');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Custom CSS file.
    $name = 'theme_ella/customcss';
    $title = get_string('customcss', 'theme_ella');
    $description = get_string('customcssdesc', 'theme_ella');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // Footnote setting.
    $name = 'theme_ella/footnote';
    $title = get_string('footnote', 'theme_ella');
    $description = get_string('footnotedesc', 'theme_ella');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @footerTextColor setting.
    $name = 'theme_ella/footertextcolor';
    $title = get_string('footertextcolor', 'theme_ella');
    $description = get_string('footertextcolor_desc', 'theme_ella');
    $default = '#FF6500';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @h2textcolor setting.
    $name = 'theme_ella/h2textcolor';
    $title = get_string('h2textcolor', 'theme_ella');
    $description = get_string('h2textcolor_desc', 'theme_ella');
    $default = '#FF6500';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @phovercolor setting.
    $name = 'theme_ella/phovercolor';
    $title = get_string('phovercolor', 'theme_ella');
    $description = get_string('phovercolor_desc', 'theme_ella');
    $default = '#FF6500';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, null, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // @fontsize setting.
    $name = 'theme_ella/fontsize';
    $title = get_string('fontsize', 'theme_ella');
    $description = get_string('fontsize_desc', 'theme_ella');
    $default = '10px';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

    // cool file setting.
    $name = 'theme_ella/coolfile';
    $title = get_string('coolfile','theme_ella');
    $description = get_string('coolfiledesc', 'theme_ella');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);

}
