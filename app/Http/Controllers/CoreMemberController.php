<?php

namespace App\Http\Controllers;

use App\Http\Resources\PPOBTransactionResource;
use Illuminate\Http\Request;
use App\Models\AcctSavingsAccount;
use App\Models\CoreMember;


class CoreMemberController extends Controller
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

    //simp anggota 
    public function getMemberSavings(Request $request)
    {
        //    $branch_id          = auth()->user()->branch_id;
        //    if($branch_id == 0){

            $fields = $request->validate([
                'member_id'         => 'required|string',
            ]);

            $data = CoreMember::withoutGlobalScopes() 
            ->whereDate('member_id',$fields['member_id'])
            ->where('data_state',0)
            ->first();
        //    }else{
        //        $data = CoreMember::withoutGlobalScopes() 
        //        ->whereDate('updated_at', '=', date('Y-m-d'))
        //        ->where('branch_id',auth()->user()->branch_id)
        //        ->where('data_state',0)
        //        ->get();
        //    }

        return response()->json([
            'data' => $data,
        ]);
    }
}
