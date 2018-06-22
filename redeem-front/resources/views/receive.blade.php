@extends('layouts.back')

@section('content')
<style>
div.toastr{
  width: 700px !important;
}
th,td {
  border-bottom: 2px solid #75cbe7 !important;
}

body {
  background:url('/img/ATHA_JerseyBackgroundBlue.jpg') no-repeat center/cover !important;
}

</style>
<div class="row" style="padding:0px; margin:0px;min-height:100%;color:white">
<section class="blue-bg section-padding" id="companies">
  <div class="container">
    <div class="row" style="margin:0px;margin-top:50px;background:white;color:black;padding:20px">
      <div class="col-sm-12" style="padding:0px; font-size:20px">
        Enter your Redeem code and click Redeem button to claim your Athleticoin
      </div>
      <div class="row">
        <div class="col-sm-8">
          <input id="redeem_code" class="form-control input-lg" type="text" />
        </div>
        <div class="col-sm-4">
          <button class="btn btn-lg btn-primary" onclick="onRedeem()">Redeem</button>
        </div>
      </div>
    </div>

    <div id="alert-success" class="row" style="position:relative;background:#13a53d;font-weight:bold;color:white;padding:20px;display:none;">
      <span style="position:absolute; right:10px; top:2px; cursor:pointer" onclick="document.getElementById('alert-success').style.display='none';">&#10006;</span>
      You are successfully got redeem! Redeem Wallet:<span id="redeem"></span>
    </div>

    <div class="row" style="margin:0px;margin-top:30px;background:#75cbe7;color:white">
      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>RECEIVE FROM</th>
            <th>WALLET ADDRESS</th>
            <th>AMOUNT</th>
            <th>RECEIVE DATE</th>
            <th>PRIVATE KEY</th>
          </tr>
        </thead>
        <tbody id="tbody_content">
          @foreach ($redeems as $redeem)
          <tr id="{{$redeem->id}}">
            <td>{{$redeem->id}}</td>
            <td>{{$redeem->creator}}</td>
            <td>{{$redeem->target_address}}</td>
            <td>{{$redeem->amount}}</td>
            <td>{{$redeem->redeem_date}}</td>
            <td  style="text-align:center">
              <a href="javascript:void(0);" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="Copy PrivateKey" onclick="copykey('{{$redeem->private_key}}');"><i class="fa fa-copy" style="color:white"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{$redeems->links()}}
    </div>
  </div>
</section>

<!-- <footer class="footer-area" style="height:100px; padding:0px;text-align:center;position:fixed; bottom:0px; left:0px;width:100%">
    <p style="line-height:100px">© 2018 Redeem ® Developments. All rights reserved.</p>
</footer> -->
</div>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script src="/js/receive.min.js"></script>

@endsection
