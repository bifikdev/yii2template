<?php

namespace app\components;

use TgVault\File\FileVault;
use TgVault\Secret;
use TgVault\VaultException;
use yii\base\Component;
use Yii;

class Secrets extends Component
{

    /**
     * @var FileVault
     */
    public $vault;

    /**
     * @param string $param
     * @param string $collection
     * @return string
     */
    public function get(string $param, string $collection): string
    {
        try {
            $secrets = $this->collection($collection);
        } catch (VaultException $e) {
            Yii::error(sprintf('Secrets error: %s, %s. Error: %s', $collection, $param, $e->getMessage()), 'secrets');
            return '';
        }
        return $secrets->get($param);
    }

    /**
     * @param string $collection
     * @return Secret
     * @throws VaultException
     */
    public function collection(string $collection): Secret
    {
        return $this->vault->getSecret($collection);
    }

}