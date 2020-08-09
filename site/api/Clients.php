<?php
namespace ProcessWire;



class Clients {
    public static function getClients($data) {

        $result = new \StdClass();

        $result = [];

        if(property_exists($data, 'id')) {
            $client = wire('pages')->get($data->id);
            array_push($result, [
                "guid" => $client->guid,
                "id" => $client->id,
                "parentRecordGuid" => $client->parentRecordGuid,
                "firstName" => $client->firstName,
                "lastName" => $client->lastName,
                "age" => $client->age,
                "condition" => $client->condition,
                "room" => $client->room,
            ]);
        } else {
            $clients = wire('pages')->get('template=clients')->children();
            foreach($clients as $client) {
                array_push($result, [
                    "guid" => $client->guid,
                    "id" => $client->id,
                    "parentRecordGuid" => $client->parentRecordGuid,
                    "firstName" => $client->firstName,
                    "lastName" => $client->lastName,
                    "age" => $client->age,
                    "condition" => $client->condition,
                    "room" => $client->room,
                ]);
            }
        }
        
        return $result;

    }
}