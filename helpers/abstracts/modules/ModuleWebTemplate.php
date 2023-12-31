<?php

namespace app\helpers\abstracts\modules;

use app\helpers\traits\AppTrait;
use app\helpers\traits\CacheTrait;
use app\helpers\traits\RequestTrait;
use app\helpers\traits\ResponseTrait;
use app\helpers\traits\SessionTraits;
use app\helpers\traits\UserTrait;
use yii\base\BootstrapInterface;
use yii\base\Module;
use Yii;
use yii\i18n\PhpMessageSource;

/**
 * Class ModuleWebTemplate
 *
 * @package app\helpers\abstracts
 * @description Класс для работы с модулями проекта, которые используют web часть
 * @version 1.1
 * @revision 20231229
 */
abstract class ModuleWebTemplate extends Module implements BootstrapInterface
{

    use AppTrait;
    use RequestTrait;
    use ResponseTrait;
    use UserTrait;
    use SessionTraits;
    use CacheTrait;

    /**
     * @return string
     */
    abstract public static function getModuleName(): string;

    /**
     * @param $action
     * @return bool
     */
    public function beforeAction($action): bool
    {
        if ($this->isWebApp()) {
            $permission = '';
        }
        return parent::beforeAction($action);
    }

    /**
     * @param $app
     * @return void
     */
    public function bootstrap($app)
    {
        $this->controllerNamespace = sprintf('app\modules\%s\controllers', static::getModuleName());
        $this->registerTranslation($app);

        if ($this->isConsoleApp()) {
            $this->controllerNamespace = sprintf('app\modules\%s\commands', static::getModuleName());
        }
    }

    /**
     * @param string $category
     * @param $message
     * @param array $params
     * @param null $language
     * @return string
     */
    public static function t(string $category, $message, array $params, $language = null): string
    {
        $category = sprintf('modules/%s/%s', static::getModuleName(), $category);
        return Yii::t($category, $message, $params, $language);
    }

    /**
     * @param $app
     */
    public function registerTranslation($app)
    {
        $fileMap = [];
        foreach ($this->getFileMap() as $file) {
            $_item = sprintf('modules/%s/%s', static::getModuleName(), $file);
            $fileMap[$_item] = sprintf('%s.php', $file);
        }

        $_i18n = sprintf('modules/%s/*', static::getModuleName());
        $app->i18n->translations[$_i18n] = [
            'class' => PhpMessageSource::class,
            'forceTranslation' => true,
            'basePath' => sprintf('@app/modules/%s/messages', static::getModuleName()),
            'fileMap' => $fileMap,
        ];
    }

    /**
     * @return array
     */
    protected function getFileMap(): array
    {
        return [
            'module',
            'models',
            'forms',
            'menu',
        ];
    }

}