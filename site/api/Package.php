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
                    $p->save();
                } else {
                    $p = wire('pages')->get($client->id);
                    if(property_exists($client, 'firstName')) {
                        $p->firstName = $client->firstName;
                    }
                    if(property_exists($client, 'lastName')) {
                        $p->lastName = $client->lastName;
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
        if(property_exists($data, 'activity')) {
            foreach($data->activity as $activity) {
                if ($activity->changeType == 0) {
                    if(property_exists($activity, 'id')) {
                        $p = wire('pages')->get($activity->id);
                        $p->deleted = 1;
                        $p->save();
                    }
                } elseif ($activity->changeType == 1) {
                    $p = new Page(); // create new page object
                    $p->template = 'activity'; // set template
                    $p->parent = wire('pages')->get('templates=activities'); // set the parent
                    $p->name = $activity->guid; // give it a name used in the url for the page
                    $p->title = $activity->guid; // set page title (not neccessary but recommended)
                    if(property_exists($activity, 'guid')) {
                        $p->guid = $activity->guid;
                    }
                    if(property_exists($activity, 'activity')) {
                        $p->activity = $activity->activity;
                    }
                    $p->save();
                } else {
                    $p = wire('pages')->get($activity->id);
                    if(property_exists($activity, 'activity')) {
                        $p->activity = $activity->activity;
                    }
                    $p->save();
                }
            }
        }
        if(property_exists($data, 'clientIntakeFormQuestions')) {
            foreach($data->clientIntakeFormQuestions as $clientIntakeFormQuestion) {
                if ($clientIntakeFormQuestion->changeType == 0) {
                    if(property_exists($clientIntakeFormQuestion, 'id')) {
                        $p = wire('pages')->get($clientIntakeFormQuestion->id);
                        $p->deleted = 1;
                        $p->save();
                    }
                } elseif ($clientIntakeFormQuestion->changeType == 1) {
                    $p = new Page(); // create new page object
                    $p->template = 'clientIntakeFormQuestion'; // set template
                    $p->parent = wire('pages')->get('templates=clientIntakeFormQuestions'); // set the parent
                    $p->name = $clientIntakeFormQuestion->guid; // give it a name used in the url for the page
                    $p->title = $clientIntakeFormQuestion->guid; // set page title (not neccessary but recommended)
                    if(property_exists($clientIntakeFormQuestion, 'guid')) {
                        $p->guid = $clientIntakeFormQuestion->guid;
                    }
                    if(property_exists($clientIntakeFormQuestion, 'parentRecordGuid')) {
                        $p->parentRecordGuid = $clientIntakeFormQuestion->parentRecordGuid;
                    }
                    if(property_exists($clientIntakeFormQuestion, 'parentIntakeFormGuid')) {
                        $p->parentIntakeFormGuid = $clientIntakeFormQuestion->parentIntakeFormGuid;
                    }
                    if(property_exists($clientIntakeFormQuestion, 'question')) {
                        $p->question = $clientIntakeFormQuestion->question;
                    }
                    if(property_exists($clientIntakeFormQuestion, 'answer')) {
                        $p->answer = $clientIntakeFormQuestion->answer;
                    }
                    if(property_exists($clientIntakeFormQuestion, 'sort')) {
                        $p->sorting = $clientIntakeFormQuestion->sort;
                    }
                    $p->save();
                } else {
                    $p = wire('pages')->get($clientIntakeFormQuestion->id);
                    if(property_exists($clientIntakeFormQuestion, 'parentRecordGuid')) {
                        $p->parentRecordGuid = $clientIntakeFormQuestion->parentRecordGuid;
                    }
                    if(property_exists($clientIntakeFormQuestion, 'parentIntakeFormGuid')) {
                        $p->parentIntakeFormGuid = $clientIntakeFormQuestion->parentIntakeFormGuid;
                    }
                    if(property_exists($clientIntakeFormQuestion, 'question')) {
                        $p->question = $clientIntakeFormQuestion->question;
                    }
                    if(property_exists($clientIntakeFormQuestion, 'answer')) {
                        $p->answer = $clientIntakeFormQuestion->answer;
                    }
                    if(property_exists($clientIntakeFormQuestion, 'sort')) {
                        $p->sorting = $clientIntakeFormQuestion->sort;
                    }
                    $p->save();
                }
            }
        }
        if(property_exists($data, 'intakeFormQuestions')) {
            foreach($data->intakeFormQuestions as $intakeFormQuestion) {
                if ($intakeFormQuestion->changeType == 0) {
                    if(property_exists($intakeFormQuestion, 'id')) {
                        $p = wire('pages')->get($intakeFormQuestion->id);
                        $p->deleted = 1;
                        $p->save();
                    }
                } elseif ($intakeFormQuestion->changeType == 1) {
                    $p = new Page(); // create new page object
                    $p->template = 'intakeFormQuestion'; // set template
                    $p->parent = wire('pages')->get('templates=intakeFormQuestions'); // set the parent
                    $p->name = $intakeFormQuestion->guid; // give it a name used in the url for the page
                    $p->title = $intakeFormQuestion->guid; // set page title (not neccessary but recommended)
                    if(property_exists($intakeFormQuestion, 'guid')) {
                        $p->guid = $intakeFormQuestion->guid;
                    }
                    if(property_exists($intakeFormQuestion, 'parentRecordGuid')) {
                        $p->parentRecordGuid = $intakeFormQuestion->parentRecordGuid;
                    }
                    if(property_exists($intakeFormQuestion, 'question')) {
                        $p->question = $intakeFormQuestion->question;
                    }
                    if(property_exists($intakeFormQuestion, 'sort')) {
                        $p->sorting = $intakeFormQuestion->sort;
                    }
                    $p->save();
                } else {
                    $p = wire('pages')->get($intakeFormQuestion->id);
                    if(property_exists($intakeFormQuestion, 'parentRecordGuid')) {
                        $p->parentRecordGuid = $intakeFormQuestion->parentRecordGuid;
                    }
                    if(property_exists($intakeFormQuestion, 'question')) {
                        $p->question = $intakeFormQuestion->question;
                    }
                    if(property_exists($intakeFormQuestion, 'sort')) {
                        $p->sorting = $intakeFormQuestion->sort;
                    }
                    $p->save();
                }
            }
        }
        if(property_exists($data, 'intakeForms')) {
            foreach($data->intakeForms as $intakeForm) {
                if ($intakeForm->changeType == 0) {
                    if(property_exists($intakeForm, 'id')) {
                        $p = wire('pages')->get($intakeForm->id);
                        $p->deleted = 1;
                        $p->save();
                    }
                } elseif ($intakeForm->changeType == 1) {
                    $p = new Page(); // create new page object
                    $p->template = 'intakeForm'; // set template
                    $p->parent = wire('pages')->get('templates=intakeForms'); // set the parent
                    $p->name = $intakeForm->guid; // give it a name used in the url for the page
                    $p->title = $intakeForm->guid; // set page title (not neccessary but recommended)
                    if(property_exists($intakeForm, 'guid')) {
                        $p->guid = $intakeForm->guid;
                    }
                    if(property_exists($intakeForm, 'title')) {
                        $p->titleName = $intakeForm->title;
                    }
                    $p->save();
                } else {
                    $p = wire('pages')->get($intakeForm->id);
                    if(property_exists($intakeForm, 'title')) {
                        $p->titleName = $intakeForm->title;
                    }
                    $p->save();
                }
            }
        }
        if(property_exists($data, 'memories')) {
            foreach($data->memories as $memory) {
                if ($memory->changeType == 0) {
                    if(property_exists($memory, 'id')) {
                        $p = wire('pages')->get($memory->id);
                        $p->deleted = 1;
                        $p->save();
                    }
                } elseif ($memory->changeType == 1) {
                    $p = new Page(); // create new page object
                    $p->template = 'memory'; // set template
                    $p->parent = wire('pages')->get('templates=memories'); // set the parent
                    $p->name = $memory->guid; // give it a name used in the url for the page
                    $p->title = $memory->guid; // set page title (not neccessary but recommended)
                    if(property_exists($memory, 'guid')) {
                        $p->guid = $memory->guid;
                    }
                    if(property_exists($memory, 'title')) {
                        $p->titleName = $memory->title;
                    }
                    if(property_exists($memory, 'description')) {
                        $p->condition = $memory->description;
                    }
                    $p->save();
                } else {
                    $p = wire('pages')->get($memory->id);
                    if(property_exists($memory, 'title')) {
                        $p->titleName = $memory->title;
                    }
                    if(property_exists($memory, 'description')) {
                        $p->condition = $memory->description;
                    }
                    $p->save();
                }
            }
        }
        if(property_exists($data, 'tasks')) {
            foreach($data->tasks as $task) {
                if ($task->changeType == 0) {
                    if(property_exists($task, 'id')) {
                        $p = wire('pages')->get($task->id);
                        $p->deleted = 1;
                        $p->save();
                    }
                } elseif ($task->changeType == 1) {
                    $p = new Page(); // create new page object
                    $p->template = 'task'; // set template
                    $p->parent = wire('pages')->get('templates=tasks'); // set the parent
                    $p->name = $task->guid; // give it a name used in the url for the page
                    $p->title = $task->guid; // set page title (not neccessary but recommended)
                    if(property_exists($task, 'guid')) {
                        $p->guid = $task->guid;
                    }
                    if(property_exists($task, 'title')) {
                        $p->titleName = $task->title;
                    }
                    if(property_exists($task, 'description')) {
                        $p->condition = $task->description;
                    }
                    if(property_exists($task, 'completed')) {
                        $p->completed = $task->completed;
                    }
                    if(property_exists($task, 'createdAt')) {
                        $p->created_at = $task->createdAt;
                    }
                    if(property_exists($task, 'updatedAt')) {
                        $p->updated_at = $task->updatedAt;
                    }
                    if(property_exists($task, 'completedAt')) {
                        $p->completed_at = $task->completedAt;
                    }
                    if(property_exists($task, 'dueTime')) {
                        $p->dueTime = $task->dueTime;
                    }
                    $p->save();
                } else {
                    $p = wire('pages')->get($memory->id);
                    if(property_exists($task, 'title')) {
                        $p->titleName = $task->title;
                    }
                    if(property_exists($task, 'description')) {
                        $p->condition = $task->description;
                    }
                    if(property_exists($task, 'completed')) {
                        $p->completed = $task->completed ? 1 : 0;
                    }
                    if(property_exists($task, 'createdAt')) {
                        $p->created_at = $task->createdAt;
                    }
                    if(property_exists($task, 'updatedAt')) {
                        $p->updated_at = $task->updatedAt;
                    }
                    if(property_exists($task, 'completedAt')) {
                        $p->completed_at = $task->completedAt;
                    }
                    if(property_exists($task, 'dueTime')) {
                        $p->dueTime = $task->dueTime;
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
        $result->activities = [];
        $result->clientIntakeFormQuestions = [];
        $result->intakeFormQuestions = [];
        $result->intakeForms = [];
        $result->memories = [];
        $result->tasks = [];

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

        $activities = wire('pages')->get('template=activities')->children();
        foreach($activities as $activity) {
            if($activity->matches('created_users_id=' . $data->id . ', deleted=0')) {
                array_push($result->activities, [
                    "guid" => $activity->guid,
                    "id" => $activity->id,
                    "activity" => $activity->activity
                ]);
            }
        }

        $clientIntakeFormQuestions = wire('pages')->get('template=clientIntakeFormQuestions')->children();
        foreach($clientIntakeFormQuestions as $clientIntakeFormQuestion) {
            if($clientIntakeFormQuestion->matches('created_users_id=' . $data->id . ', deleted=0')) {
                array_push($result->clientIntakeFormQuestions, [
                    "guid" => $clientIntakeFormQuestion->guid,
                    "id" => $clientIntakeFormQuestion->id,
                    "parentRecordGuid" => $clientIntakeFormQuestion->parentRecordGuid,
                    "parentIntakeFormGuid" => $clientIntakeFormQuestion->parentIntakeFormGuid,
                    "question" => $clientIntakeFormQuestion->question,
                    "answer" => $clientIntakeFormQuestion->answer,
                    "sort" => $clientIntakeFormQuestion->sorting,
                ]);
            }
        }

        $intakeFormQuestions = wire('pages')->get('template=intakeFormQuestions')->children();
        foreach($intakeFormQuestions as $intakeFormQuestion) {
            if($intakeFormQuestion->matches('created_users_id=' . $data->id . ', deleted=0')) {
                array_push($result->intakeFormQuestions, [
                    "guid" => $intakeFormQuestion->guid,
                    "id" => $intakeFormQuestion->id,
                    "parentRecordGuid" => $intakeFormQuestion->parentRecordGuid,
                    "question" => $intakeFormQuestion->question,
                    "sort" => $intakeFormQuestion->sorting,
                ]);
            }
        }

        $intakeForms = wire('pages')->get('template=intakeForms')->children();
        foreach($intakeForms as $intakeForm) {
            if($intakeForm->matches('created_users_id=' . $data->id . ', deleted=0')) {
                array_push($result->intakeForms, [
                    "guid" => $intakeForm->guid,
                    "id" => $intakeForm->id,
                    "title" => $intakeForm->titleName,
                ]);
            }
        }

        $memories = wire('pages')->get('template=memories')->children();
        foreach($memories as $memory) {
            if($memory->matches('created_users_id=' . $data->id . ', deleted=0')) {
                array_push($result->memories, [
                    "guid" => $memory->guid,
                    "id" => $memory->id,
                    "title" => $memory->titleName,
                    "description" => $memory->condition
                ]);
            }
        }

        $tasks = wire('pages')->get('template=tasks')->children();
        foreach($tasks as $task) {
            if($task->matches('created_users_id=' . $data->id . ', deleted=0')) {
                array_push($result->tasks, [
                    "guid" => $task->guid,
                    "id" => $task->id,
                    "title" => $task->titleName,
                    "description" => $task->condition,
                    "completed" => $task->completed,
                    "created_at" => $task->created_at,
                    "updated_at" => $task->updated_at,
                    "completed_at" => $task->completed_at,
                    "dueTime" => $task->dueTime,
                ]);
            }
        }

        return $result;
    }
}