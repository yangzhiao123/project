<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class SwaggerController extends Controller
{
    /**
     * 假设是项目中的一个API
     *
     * @SWG\Get(path="/swagger/my-data",
     *   tags={"project"},
     *   summary="拿一些神秘的数据",
     *   description="请求该接口需要先登录。",
     *   operationId="getMyData",
     *   produces={"application/json"},
     *   @SWG\Parameter(
     *     in="formData",
     *     name="reason",
     *     type="string",
     *     description="拿数据的理由",
     *     required=true,
     *   ),
     *   @SWG\Response(response="default", description="操作成功")
     * )
     */
    public function getMyData()
    {
        echo 1;die;

    }

    /**
     * 发起出差申请
     * @SWG\Post(
     *     path="/hr/business-trip/create-business-trip",
     *     summary="发起出差申请",
     *     description="发起出差申请",
     *     tags={"HR:BusinessTrip"},
     *     produces={"application/json"},
     * @SWG\Parameter(
     *         name="X-Requested-With",
     *         in="header",
     *         description="AJAX标识 默认为 XMLHttpRequest",
     *         default="XMLHttpRequest",
     *         required=true,
     *         type="string",
     *     ),
     * @SWG\Parameter(
     *          name="data",
     *          in="body",
     *          required=true,
     *          @SWG\Schema(
     *              type ="object",
     *              required={},
     *@SWG\Property(property="user_uuid",title="发起人uuid",type="string",default="发起人uuid"),
     *@SWG\Property(property="depart_code",title="发起人部门code",type="string",default="发起人部门code"),
     *@SWG\Property(property="depart_name",title="发起人部门名称",type="string",default="发起人部门名称"),
     *@SWG\Property(property="position_level",title="职位",type="string",default="职位"),
     *@SWG\Property(property="start_at",title="出差开始时间",type="string",default="出差开始时间"),
     *@SWG\Property(property="end_at",title="出差结束时间",type="string",default="出差结束时间"),
     *@SWG\Property(property="days",title="出差天数",type="string",default="出差天数"),
     *@SWG\Property(property="detach_name",title="派遣人",type="string",default="派遣人"),
     *@SWG\Property(property="business_trip_content",title="出差事由和预计达成目标",type="string",default="出差事由和预计达成目标"),
     *@SWG\Property(property="together_people",title="同行人员",type="string",default="同行人员"),
     *@SWG\Property(property="customer_company",title="被拜访单位",type="string",default="被拜访单位"),
     *@SWG\Property(property="customer_name",title="拜访人",type="string",default="拜访人"),
     *@SWG\Property(property="contact_way",title="联系方式",type="string",default="联系方式"),
     *@SWG\Property(
     *     property="predict_cost",
     *     type="object",
     *     description="预计费用",
     *     default = {
     *              "traffic_price" :"交通费",
     *              "meal_price" :"餐费",
     *              "stay_price" :"住宿费",
     *              "serve_price" :"客户招待费",
     *              "else_price" :"其它费用",
     *              "total" :"合计",
     *               },
     *          ),
     *@SWG\Property(
     *     property="air_ticket",
     *     type="object",
     *     description="机票预定信息",
     *     default = {
     *            {
     *              "name" :"姓名",
     *              "start_at" :"出发日期",
     *              "start_time_frame" :"出发时段",
     *              "end_at" :"返程日期",
     *              "end_time_frame" :"返程时段",
     *              "start_place" :"出发地",
     *              "start_place" :"出发地",
     *              "destination" :"目的地",
     *              "id_card" :"身份证号码",
     *             },
     *             {
     *              "name" :"姓名",
     *              "start_at" :"出发日期",
     *              "start_time_frame" :"出发时段",
     *              "end_at" :"返程日期",
     *              "end_time_frame" :"返程时段",
     *              "start_place" :"出发地",
     *              "start_place" :"出发地",
     *              "destination" :"目的地",
     *              "id_card" :"身份证号码",
     *             },
     *
     *               },
     *          ),
     *    ),
     * ),
     * @SWG\Response(
     *         response="200",
     *         description="操作成功",
     *     ),
     * @SWG\Response(
     *         response="500",
     *         description="操作失败",
     *     )
     * )
     *
     * @return \Illuminate\Http\JsonResponse
     */
}
