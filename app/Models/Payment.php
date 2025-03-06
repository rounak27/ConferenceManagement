<?php
 
namespace App\Models;
 
use Carbon\Carbon;
use DB;
use Illuminate\Database\Eloquent\Model;
 
class Payment extends Model
{
//
protected $table = 'tbl_payments';
 
public static function getPriceForUser($userId)
{
$price = DB::table('tbl_users as u')
->join('tbl_member_types as mt', 'u.MemberType', '=', 'mt.id')
->join('tbl_chargedate as cd', DB::raw('CURDATE() <= cd.chargeDate'), '=', DB::raw('1'))
->join('tbl_payments as p', function ($join) {
$join->on('p.MemberTypeId', '=', 'mt.id')
->whereRaw('p.chargeId = cd.id');
})
->where('u.id', 1)
->orderBy('cd.chargeDate', 'asc')
->limit(1)
->select(DB::raw("CONCAT(p.Currency,'. ', IFNULL(p.Price, 'FREE')) AS Price"))
->first();
 
return $price ? $price->Price : 'FREE'; // If no price found, return 'FREE'
}
 
// public static function getPaymentsByMemberType($mId ,$currentDateParam=null )
// {
// // Execute the query with two parameters
// $currentDateParam = $currentDateParam ?? date('Y-m-d');
// $result = DB::table('tbl_payments as p')
// ->join('tbl_Member_types as mt', 'p.MemberTypeId', '=', 'mt.Id')
// ->join(
// DB::table('tbl_ChargeDate')
// ->where('chargeDate', '>=', $currentDateParam)
// ->orderBy('chargeDate')
// ->limit(1),
// 'cd', 'cd.id', '=', 'p.chargeId'
// )
// ->where('mt.Id', '=', $mId)
// ->select('mt.name', 'cd.id', 'price', 'currency')
// ->get();
 
// return $result;
// }
 
public static function getPaymentsByMemberType($mId, $currentDateParam = null)
{
// Set default date if not provided
$currentDateParam = $currentDateParam ?? date('Y-m-d');
 
// Create the subquery for tbl_ChargeDate
$subQuery = DB::table('tbl_chargedate')
->where('chargeDate', '>=', $currentDateParam)
->orderBy('chargeDate')
->limit(1);

 
// Execute the main query with the subquery
$result = DB::table('tbl_payments as p')
->join('tbl_member_types as mt', 'p.MemberTypeId', '=', 'mt.Id')
->joinSub($subQuery, 'cd', function ($join) {
$join->on('cd.id', '=', 'p.chargeId');
})
->where('mt.Id', '=', $mId)
->select('mt.name', 'cd.id', 'price', 'currency')
->get();
 
return $result;
}
}
