<?php

namespace App\Http\Controllers;

use App\Http\Resources\PPOBTransactionResource;
use Illuminate\Http\Request;
use App\Models\AcctSavingsAccount;
use App\Models\AcctDepositoAccount;


class AcctDepositoAccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $CoreMember = CoreMember::all();
        return $CoreMember;
    }

   //data simpanan berjangka
   public function getDataDeposito(Request $request){
    // $branch_id          = auth()->user()->branch_id;
    $fields = $request->validate([
        'member_id'         => 'required|string',
    ]);
    // if($branch_id == 0){
    //     $data = AcctDepositoAccount::withoutGlobalScopes()
    //     ->join('core_member','acct_deposito_account.member_id','core_member.member_id')
    //     ->join('acct_deposito','acct_deposito.deposito_id','acct_d+eposito_account.deposito_id')
    //     ->where('acct_deposito_account.data_state',0)
    //     ->where('acct_deposito_account.data_state',0)
    //     ->get();
    // }else{
        $data = AcctDepositoAccount::withoutGlobalScopes()
        ->join('core_member','acct_deposito_account.member_id','core_member.member_id')
        ->join('acct_deposito','acct_deposito.deposito_id','acct_d+eposito_account.deposito_id')
        ->where('acct_deposito_account.data_state',0)
        ->where('acct_deposito_account.data_state',0)
        ->where('acct_deposito_account.member_id', $fields['member_id'])
        // ->where('acct_deposito_account.branch_id',auth()->user()->branch_id)
        ->get();
    // }
    return response()->json([
        'data' => $data,
    ]);
    // return json_encode($data);
}
}
