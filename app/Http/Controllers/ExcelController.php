<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\UserModel;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Excel;
use PhpParser\ErrorHandler\Collecting;
use Maatwebsite\Excel\Concerns\WithHeadings;    //设置标题
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;   //为空时零填充
use Maatwebsite\Excel\Concerns\ShouldAutoSize;      //自动单元格尺寸
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;      //设置单元格数据格式
use Maatwebsite\Excel\Concerns\WithColumnFormatting;       //设置列格式

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
