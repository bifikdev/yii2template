<?php

namespace app\components;

use yii\base\Component;
use yii\helpers\Json;
use Yii;

class ScriptInfo extends Component
{

    /**
     * @var string Ссылка на composer.json
     */
    public $composerFile = '';

    /**
     * @var \stdClass Данные из файла
     */
    public $content;

    const COMPOSER_FILE = 'composer.json';

    const COMPOSER_DIR = '@app';

    /**
     * Init function
     */
    public function init()
    {
        if ($content = $this->getFile()) {
            $this->setContent(Json::decode($content, false));
        } else {
            $this->setContent($this->getDefaultContent());
        }
        parent::init();
    }

    /**
     * @return string
     */
    public function getLicence(): string
    {
        return $this->getContent()->license;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->getContent()->description;
    }

    /**
     * @return array
     */
    public function getAuthor(): array
    {
        return $this->getContent()->author;
    }

    /**
     * @return string
     */
    public function getVersion(): string
    {
        return $this->getContent()->version;
    }

    /**
     * @return string
     */
    public function getRevision(): string
    {
        return $this->getContent()->revision;
    }

    /**
     * @return \stdClass
     */
    private function getContent(): \stdClass
    {
        return $this->content;
    }

    /**
     * @return false|string
     */
    private function getFile()
    {
        return file_get_contents(sprintf('%s/%s', Yii::getAlias(self::COMPOSER_DIR), self::COMPOSER_FILE));
    }

    /**
     * @return \stdClass
     */
    private function getDefaultContent(): \stdClass
    {
        $content = new \stdClass();
        $content->license = null;
        $content->description = null;
        $content->version = null;
        $content->revision = null;
        $content->author = [];
        return $content;
    }

    /**
     * @param \stdClass $content
     */
    private function setContent(\stdClass $content)
    {
        $this->content = $content;
    }


}