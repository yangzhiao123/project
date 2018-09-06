<?php

namespace App\Exports;

use App\Model\UserModel;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;    //设置标题


class UsersExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return UserModel::all();
    }

    public function headings():array
    {
        return [
            '姓名',
            '邮箱',
            '密码',
        ];
    }
}