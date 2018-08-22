<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\UserModel;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Excel;

class ExcelController extends Controller
{

    protected $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function export()
    {
        return $this->excel->download(new UsersExport,'users.xlsx');

    }

}
