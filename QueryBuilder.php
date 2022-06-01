<?php

namespace Wiki;

class UserEdit
{
    /**
     * @param {string} $username
     * @param {string} $title
     * @return {string}
     */
    public static function nextFiveUsersEditions(string $username, string $title) : string
    {
        return 'SELECT username, title FROM editcount WHERE ' .
            self::buildWhereCondition($username, $title) .
            ' ORDER BY username, title LIMIT 5;';
    }

    /**
     * @param {string} $username
     * @param {string} $title
     * @return {string}
     */
    private static function buildWhereCondition(string $username, string $title) : string
    {
        return "(username = '{$username}' AND title > '{$title}') ".
            "OR username > '{$username}'";
    }
}
