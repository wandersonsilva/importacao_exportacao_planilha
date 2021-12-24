<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel, WithHeadingRow
{
    private $users;

    public function __construct()
    {
        $this->users = User::select('email', 'name', 'password')->get();
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $user = $this->users->where('email', $row['email'])->where('name', $row['name'])->first();
        return new User([
            //
            "email" => $row['email'],
            "name"  => $row['name'],
            "password" => \Hash::make($row['password'])
        ]);
    }
}
