<?php

namespace Kanboard\Plugin\KanboardGithubTheme;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{
    public function initialize()
    {
        $this->hook->on('template:layout:css', array(
            'template' => 'plugins/KanboardGithubTheme/Assets/css/theme.css',
        ));
    }

    public function getPluginName()
    {
        return 'Kanboard GitHub Modern Theme';
    }

    public function getPluginDescription()
    {
        return 'Modern GitHub Primer Theme for Kanboard - Inspired by GitHub\'s latest Primer Design System';
    }

    public function getPluginAuthor()
    {
        return 'Adrian Narloch (narloch.dev)';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }
}
