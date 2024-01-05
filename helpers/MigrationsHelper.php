<?php

namespace app\helpers;

/**
 * Class MigrationsHelpers
 *
 * @package app\helpers;
 * @description Класс для работы упрощения работы с миграциями
 * @version 1.1
 * @revision 20231230
 */
class MigrationsHelper
{

    /**
     * Используется для построения таблиц в миграциях
     */
    const DEFAULT_TABLE_OPTIONS = 'ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci';

    /**
     * Описание стандартного поля, которое будет хранить в себе JSON данные
     */
    const DEFAULT_JSON_TYPE = 'JSON NOT NULL';

    /**
     * Описание стандартного поля, в который будет сохраняться информация о последней дате при обновлении записи
     */
    const DEFAULT_TIMESTAMP_ON_UPDATE = 'ON UPDATE CURRENT_TIMESTAMP';


    // Таблицы для Users модуля
    const TABLE_USERS_GROUPS = '{{%usersGroups%}}';
    const TABLE_USERS = '{{%users%}}';

    // Таблицы для External модуля
    const TABLE_SERVERS = '{{%servers%}}';

    // Таблицы для News модуля
    const TABLE_NEWS = '{{%news%}}';
    const TABLE_NEWS_GROUPS = '{{%newsGroups%}}';
    const TABLE_NEWS_COMMENTS = '{{%newsComments%}}';

    // Таблицы для Forum модуля
    const TABLE_FORUM_CATEGORIES = '{{%forumCategories%}}';
    const TABLE_FORUM_THREADS = '{{%forumThreads%}}';
    const TABLE_FORUM_THEMES = '{{%forumThemes%}}';
    const TABLE_FORUM_MESSAGES = '{{%forumMessages%}}';

}