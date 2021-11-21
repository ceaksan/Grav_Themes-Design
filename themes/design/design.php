<?php

namespace Grav\Theme;

use Grav\Common\Theme;
use Grav\Common\Language\LanguageCodes;

class design extends Theme {
    public static function getSubscribedEvents() {
        return [
          'onThemeInitialized' => ['onThemeInitialized', 0]
        ];
    }

    public function onThemeInitialized() {
        $this->enable([
          'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ]);
    }

    public function onTwigSiteVariables() {
        $this->grav['twig']->twig_vars['theme_config'] = $this->grav['config']->get('design.oceanus');
    }

    public static function sliderStyles() {
      return array (
          '2' => 'Style 2',
          '3' => 'Style 3'
      );
    }

}