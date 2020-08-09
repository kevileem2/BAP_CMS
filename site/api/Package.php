<?php
namespace ProcessWire;



class Package {
    public static function updatePackage($data) {
        if(property_exists($data, 'clients')) {
            foreach($data->clients as $client) {
                if ($client->changeType == 0) {
                    if(property_exists($client, 'id')) {
                        $p = wire('pages')->get($client->id);
                        $p->deleted = 1;
                        $p->save();
                    }
                } elseif ($client->changeType == 1) {
                    $p = new Page(); // create new page object
                    $p->template = 'client'; // set template
                    $p->parent = wire('pages')->get('templates=clients'); // set the parent
                    $p->name = $client->guid; // give it a name used in the url for the page
                    $p->title = $client->guid; // set page title (not neccessary but recommended)
                    if(property_exists($client, 'guid')) {
                        $p->guid = $client->guid;
                    }
                    if(property_exists($client, 'firstName')) {
                        $p->firstName = $client->firstName;
                    }
                    if(property_exists($client, 'lastName')) {
                        $p->lastName = $client->lastName;
                    }
                    if(property_exists($client, 'room')) {
                        $p->room = $client->room;
                    }
                    if(property_exists($client, 'description')) {
                        $p->condition = $client->description;
                    }
                    if(property_exists($client, 'age')) {
                        $p->age = $client->age;
                    }
                    if(property_exists($client, 'parentRecordGuid')) {
                        $p->parentRecordGuid = $client->parentRecordGuid;
                    }
                    $p->save();
                } else {
                    $p = wire('pages')->get($client->id);
                    if(property_exists($client, 'firstName')) {
                        $p->firstName = $client->firstName;
                    }
                    if(property_exists($client, 'lastName')) {
                        $p->lastName = $client->lastName;
                    }
                    if(property_exists($client, 'room')) {
                        $p->room = $client->room;
                    }
                    if(property_exists($client, 'description')) {
                        $p->condition = $client->description;
                    }
                    if(property_exists($client, 'age')) {
                        $p->age = $client->age;
                    }
                    if(property_exists($client, 'parentRecordGuid')) {
                        $p->parentRecordGuid = $client->parentRecordGuid;
                    }
                    $p->save();
                }
            }
        }
        if(property_exists($data, 'notes')) {
            foreach($data->notes as $note) {
                if ($note->changeType == 0) {
                    if(property_exists($note, 'id')) {
                        $p = wire('pages')->get($note->id);
                        $p->deleted = 1;
                        $p->save();
                    }
                } elseif ($note->changeType == 1) {
                    $p = new Page(); // create new page object
                    $p->template = 'note'; // set template
                    $p->parent = wire('pages')->get('templates=notes'); // set the parent
                    $p->name = $note->guid; // give it a name used in the url for the page
                    $p->title = $note->guid; // set page title (not neccessary but recommended)
                    if(property_exists($note, 'guid')) {
                        $p->guid = $note->guid;
                    }
                    if(property_exists($note, 'parentGuid')) {
                        $p->parentGuid = $note->parentGuid;
                    }
                    if(property_exists($note, 'message')) {
                        $p->message = $note->message;
                    }
                    if(property_exists($note, 'created_at')) {
                        $p->created_at = $note->created_at;
                    }
                    if(property_exists($note, 'updated_at')) {
                        $p->updated_at = $note->updated_at;
                    }
                    $p->save();
                } else {
                    $p = wire('pages')->get($note->id);
                    if(property_exists($note, 'parentGuid')) {
                        $p->parentGuid = $note->parentGuid;
                    }
                    if(property_exists($note, 'message')) {
                        $p->message = $note->message;
                    }
                    if(property_exists($note, 'created_at')) {
                        $p->created_at = $note->created_at;
                    }
                    if(property_exists($note, 'updated_at')) {
                        $p->updated_at = $note->updated_at;
                    }
                    $p->save();
                }
            }
        }
    }

    public static function getpackage($data) {
        $result = new \StdClass();

        $result->clients = [];
        $result->notes = [];

        $clients = wire('pages')->get('template=clients')->children();

        foreach($clients as $client) {
            if($client->matches('created_users_id=' . $data->id . ', deleted=0')) {
                array_push($result->clients, [
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

        $notes = wire('pages')->get('template=notes')->children();
        foreach($notes as $note) {
            if($note->matches('created_users_id=' . $data->id . ', deleted=0')) {
                array_push($result->notes, [
                    "guid" => $note->guid,
                    "id" => $note->id,
                    "parentGuid" => $note->parentGuid,
                    "message" => $note->message,
                    "created_at" => $note->created_at,
                    "updated_at" => $note->updated_at,
                ]);
            }
        }

        return $result;
    }
}