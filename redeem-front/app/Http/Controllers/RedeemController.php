<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Redeem;
use App\User;
use App\Contract;
use App\Code;
use Carbon\Carbon;
class RedeemController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function receive()
    {
        $user = Auth::user();
        $redeems = Redeem::where('received_by', $user->id)->orderby('created_at', 'desc')->paginate(20);
        foreach ($redeems as $redeem){
          $redeem->creator = '';
          $item = User::where('id', $redeem->created_by)->first();
          if ($item){
            $redeem->creator = $item->name;
          }
        }
        return view('receive', [
          'page' => 'receive',
          'redeems' => $redeems
        ]);
    }

    public function sent()
    {
        $user = Auth::user();
        $redeems = Redeem::where('created_by', $user->id)->orderby('created_at', 'desc')->paginate(20);

        $codeList = Code::all();
        $settings = [];
        for($i = 0; $i < count($codeList); $i++) {
          $settings[$codeList[$i]["code_name"]] = $codeList[$i]["code_value"];
        }
        $contract = Contract::first();
        return view('sent', [
          'page' => 'sent',
          'redeems' => $redeems,
          'settings' => $settings,
          'contract' => $contract
        ]);
    }

    public function redeem(Request $request){
      $user = Auth::user();
      $amount = $request->input('amount');
      $target_address = $request->input('target_address');
      $private_key = $request->input('private_key');
      $description = $request->input('description');
      $title = $request->input('title');
      $redeem_code = $request->input('redeem_code');
      $redeem = Redeem::create([
        'title' => $title,
        'description' => $description,
        'redeem_code' => $redeem_code,
        'target_address' => $target_address,
        'private_key' => $private_key,
        'amount' => $amount,
        'created_by' => $user->id
      ]);
      return $redeem;
    }

    public function redeemReceive(Request $request){
      $user = Auth::user();
      $redeem_code = $request->input('redeem_code');
      $redeem = Redeem::where('redeem_code', $redeem_code)->first();
      if ($redeem){
        if ($redeem->received_by == null){
          $redeem->received_by = $user->id;
          $redeem->redeem_date = Carbon::now();
          $redeem->save();
          return $redeem;
        } else {
          return 'This redeem code is already used by someone!';
        }
      }
      return 'nothing';
    }
}
