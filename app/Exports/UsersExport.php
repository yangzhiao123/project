<?php

namespace App\Exports;

use App\Model\UserModel;
use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements FromCollection
{
    public function collection()
    {
        return UserModel::where('id','1');
    }
}