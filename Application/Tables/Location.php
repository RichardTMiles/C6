<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miles
 * Date: 7/31/17
 * Time: 7:53 PM
 */

namespace Tables;


use Carbon\Database;
use Carbon\Entities;
use Carbon\Error\PublicAlert;
use Carbon\Interfaces\iEntity;

class Location extends Entities implements iEntity
{
    static function get(&$array, $id)
    {
        $sql = 'SELECT * FROM carbon_location WHERE entity_id = ?';
        $array->location = self::fetch( $sql, $id );
        return true;
    }

    static function add(&$array, $id, $argv)
    {
        $sql = "REPLACE INTO carbon_location (entity_id, latitude, longitude, street, city, state, elevation) VALUES (:entity_id, :latitude, :longitude, :street, :city, :state, :elevation)";
        $stmt = Database::database()->prepare( $sql );
        $stmt->bindValue( ':entity_id', $id );
        $stmt->bindValue( ':latitude',  $argv['latitude']  ?? null );
        $stmt->bindValue( ':longitude', $argv['longitude']  ?? null  );
        $stmt->bindValue( ':elevation', $argv['elevation']  ?? null  );
        $stmt->bindValue( ':street',    $argv['street']  ?? null  );
        $stmt->bindValue( ':city',      $argv['city']  ?? null  );
        $stmt->bindValue( ':state',     $argv['state']  ?? null  );
        return $stmt->execute();
    }

    static function all(&$array, $id)
    {

    }

    static function range(&$array, $id, $argv)
    {
        // TODO: Implement range() method.
    }

    static function remove(&$array, $id)
    {
        $sql = 'DELETE * FROM carbon_location WHERE entity_id = ?';
        if (Database::database()->prepare( $sql )->execute([$id])) {
            unset($array['location']);
            return true;
        } throw new PublicAlert('Failed to remove location.');
    }

}