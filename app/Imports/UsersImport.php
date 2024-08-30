<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Hash;
use Illuminate\Support\Str;
use Mail;
use App\Mail\passwordMail;
class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $password = Str::password(8);
        // $password = 12345678;
        if ($row[0] != 'FIRST_NAME') {
            return new User([
                "first_name" => $row[0],
                "last_name" => $row[1],
                "email" => $row[2],
                "mobile_number" => $row[3],
                "designation" => $row[5], 
                "doj" => $row[4],
                "role" => 'user',
                "password" => Hash::make($password)
            ]);
            Mail::to($row[2])->send(new passwordMail([
                'name' => $row[0],
                'password' => $password
           ]));
        }
        
    }
}
