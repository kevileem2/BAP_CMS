<?php
namespace ProcessWire;



class CreateUser {
    public static function addUser($data) {
        AppApiHelper::checkAndSanitizeRequiredParameters($data, ['username|text', 'password|string', 'email|text']);
        
        $item = new User();
        $item->setOutputFormatting(false);
        $item->name = $data->username;
        $item->pass = $data->password;
        $item->email = $data->email;
        $item->addRole('mobile-users');
        $item->save();
    }
}