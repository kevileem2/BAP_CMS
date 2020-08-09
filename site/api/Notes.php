<?php
namespace ProcessWire;



class Notes {
    public static function getNotes($data) {

        $result = new \StdClass();

        $result = [];

        if(property_exists($data, 'id')) {
            $note = wire('pages')->get($data->id);
            array_push($result, [
                "guid" => $note->guid,
                "id" => $note->id,
                "parentGuid" => $note->parentRecordGuid,
                "message" => $note->message,
                "created_at" => $note->created_at,
                "updated_at" => $note->updated_at,
            ]);
        } else {
            $notes = wire('pages')->get('template=notes')->children();
            foreach($notes as $note) {
                array_push($result, [
                    "guid" => $note->guid,
                    "id" => $note->id,
                    "parentGuid" => $note->parentRecordGuid,
                    "message" => $note->message,
                    "created_at" => $note->created_at,
                    "updated_at" => $note->updated_at,
                ]);
            }
        }
        
        return $result;

    }
}