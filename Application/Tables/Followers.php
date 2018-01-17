<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miles
 * Date: 8/4/17
 * Time: 10:33 PM
 */

namespace Tables;


use Carbon\Database;
use Carbon\Entities;
use Carbon\Error\PublicAlert;
use Carbon\Interfaces\iEntity;

class Followers extends Entities implements iEntity
{
    static function get(&$array, $id)
    {
        $array['following'] = self::fetchColumn('SELECT follows_user_id FROM user_followers WHERE user_id = ?', $id);
        $array['followers'] = self::fetchColumn('SELECT user_id FROM user_followers WHERE follows_user_id = ?', $id);
        return $array;
    }

    static function all(&$array, $id)
    {

    }

    static function range(&$array, $id, $argv)
    {
        // TODO: Implement range() method.
    }

    static function add(&$array, $id, $argv)
    {
        $sql = "SELECT COUNT(*) FROM user_followers WHERE user_id = ? AND follows_user_id = ?";
        $stmt = self::fetch($sql, $id, $argv);
        if (!$stmt['COUNT(*)']) {
            $sql = "INSERT INTO user_followers (user_followers.user_id, user_followers.follows_user_id) VALUES (?, ?)";
            if (!(Database::database())->prepare($sql)->execute([$id, $argv]))
                throw new PublicAlert('Failed to follow user');
            return self::get($array, $id);
        } else throw new PublicAlert('You already follow this user');
    }

    static function remove(&$array, $id)
    {
        $sql = "SELECT COUNT(*) FROM user_followers WHERE user_id = ? AND follows_user_id = ?";
        $stmt = self::fetch($sql, $array['user_id'], $id);

        if ($stmt['COUNT(*)']) {
            $sql = "DELETE FROM user_followers WHERE user_followers.user_id = ? AND user_followers.follows_user_id = ?";
            if (!(Database::database())->prepare($sql)->execute([$array['user_id'], $id]))
                throw new PublicAlert('Failed to unfollow this user ~mwahahaha~');
            return self::get($array, $array['user_id']);
        } else throw new PublicAlert('You already follow this user');
    }

}