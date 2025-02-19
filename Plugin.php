<?php

namespace Kanboard\Plugin\VisibleDescription;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{

    public function initialize()
    {
        $this->template->hook->attach('template:board:private:task:after-title', 'VisibleDescription:board/task_description');
    }

    public function getPluginName()
    {
        return 'VisibleDescription';
    }

    public function getPluginDescription()
    {
        return t('Shows Task\'s description inside their cards in the Board view');
    }

    public function getPluginAuthor()
    {
        return 'MarcosBL';
    }

    public function getPluginVersion()
    {
        return '1.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.0.48';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/MarcosBL/VisibleDescription';
    }

}
