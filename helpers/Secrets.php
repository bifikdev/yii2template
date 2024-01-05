<?php

use TgVault\VaultFactory;
use TgVault\VaultException;
use TgVault\Vault;

/**
 * Class Secrets
 *
 * @package app
 * @description Класс для работы с secrets.json файлом
 * @version 1.1
 * @revision 20231229
 */
class Secrets
{

    private static Vault $secrets;

    /**
     * @param string $file
     * @return void
     * @throws Exception
     */
    public static function load(string $file)
    {
        if (is_file($file)) {
            try {
                self::$secrets = VaultFactory::create([
                    'type' => 'file',
                    'config' => [
                        'filename' => $file
                    ],
                ]);
            } catch (VaultException $exception) {
                throw new \Exception($exception->getMessage());
            }
        } else {
            throw new \Exception('No secrets.json file');
        }
    }

    /**
     * @param string $name
     * @param string $collection
     * @return mixed
     */
    public static function getSecret(string $name, string $collection)
    {
        try {
            $_collection = self::$secrets->getSecret($collection);
            try {
                $secret = $_collection->get($name);
                return is_null($secret) ? '' : $secret;
            } catch (VaultException $exception) {
                return '';
            }
        } catch (VaultException $exception) {
            return '';
        }
    }

}