<?php

namespace app\components;

use yii\base\BaseObject;

/**
 * Class TranslitBase
 * @package app\components
 */
class TranslitBase extends BaseObject
{

    private static $list = [
        // Спец-символы
        ' ' => '_',
        // Буквы в нижнем реестре
        'а' => 'a', 'б' => 'b', 'в' => 'v',
        'г' => 'g', 'д' => 'd', 'е' => 'e',
        'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
        'и' => 'i', 'й' => 'y', 'к' => 'k',
        'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
        'ь' => '', 'ы' => 'y', 'ъ' => '',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya',
        // Буквы в вышем реестре
        'А' => 'A', 'Б' => 'B', 'В' => 'V',
        'Г' => 'G', 'Д' => 'D', 'Е' => 'E',
        'Ё' => 'E', 'Ж' => 'Zh', 'З' => 'Z',
        'И' => 'I', 'Й' => 'Y', 'К' => 'K',
        'Л' => 'L', 'М' => 'M', 'Н' => 'N',
        'О' => 'O', 'П' => 'P', 'Р' => 'R',
        'С' => 'S', 'Т' => 'T', 'У' => 'U',
        'Ф' => 'F', 'Х' => 'H', 'Ц' => 'C',
        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch',
        'Ь' => '', 'Ы' => 'Y', 'Ъ' => '',
        'Э' => 'E', 'Ю' => 'Yu', 'Я' => 'Ya',
        // Специальные символы
        '#' => '', '/' => '', '!' => '',
        '@' => '', '$' => '', '%' => '',
        '^' => '', '&' => '', '*' => '',
        '(' => '', ')' => '', '.' => '_',
    ];

    /**
     * Получить список значений "До"
     *
     * @return array
     */
    protected static function getLat(): array
    {
        return array_values(self::getList());
    }

    /**
     * Получить список значений "После"
     *
     * @return array
     */
    protected static function getRus(): array
    {
        return array_keys(self::getList());
    }

    /**
     * Получить список символов
     *
     * @return array
     */
    public static function getList(): array
    {
        return self::$list;
    }

}