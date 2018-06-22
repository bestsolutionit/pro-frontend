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
<div class="row" style="padding:0px; margin:0px;min-height:100%;">
<section class="blue-bg section-padding" id="companies" style="">
  <div class="container">
    <div id="make-redeem" class="row section" style="margin:0px;margin-top:20px;display:none;background:white;color:black">
      <div class="col-md-12" style="padding:0px; font-size:35px; font-weight: bold; text-align:center">
        BUY AND GIVE ATHLETICOIN
      </div>
      <div class="row" style="margin-top:90px">
        <form class="form-horizontal" method="POST" action="" id="form-redeem">
        <div class="form-group">
          <label for="ATHA_BALANCE" class="col-md-3 control-label">Your ATHA BALANCE: </label>
          <div class="col-md-7 control-label" style="text-align:left">
            <label id="token-balance">2000</label> ATHA
          </div>
        </div>

        <div class="form-group">
          <label for="ATHA_BALANCE" class="col-md-3 control-label">Your ETH BALANCE: </label>
          <div class="col-md-7 control-label" style="text-align:left">
            <label id="eth-balance">2000</label> ETH
          </div>
        </div>

        <div class="form-group">
          <label for="ATHA_BALANCE" class="col-md-3 control-label">AWARD TITLE:<span style="color:red">*</span> </label>
          <div class="col-md-7" style="text-align:left">
            <input id="title" class="form-control" type="text" required/>
          </div>
        </div>

        <div class="form-group">
          <label for="ATHA_BALANCE" class="col-md-3 control-label">AWARD DESCRIPTION: </label>
          <div class="col-md-7" style="text-align:left">
            <textarea class="form-control" type="text" id="description" required></textarea>
          </div>
        </div>

        <div class="form-group">
            <label for="redeem_amount" class="col-md-3 control-label">AWARD AMOUNT:<span style="color:red">*</span></label>
            <div class="col-md-7">
              <select id="redeem_amount" class="form-control control-label" name="redeem_amount" onchange="onchangeAmount(this.value)">
                <option value="1000">1000 ATHA</option>
                <option value="10000">10000 ATHA</option>
                <option value="100000">100000 ATHA</option>
                <option value="1000000">1000000 ATHA</option>
                <option value="10000000">10000000 ATHA</option>
              </select>
            </div>
        </div>

        <div class="form-group">
          <label for="ATHA_BALANCE" class="col-md-3 control-label">ETH Amount REQUIRED: </label>
          <div class="col-md-7" style="text-align:left">
            <input id="eth_amount" class="form-control" type="text" value="2000" disabled/>
          </div>
        </div>

        <div class="form-group">
          <label for="ATHA_BALANCE" class="col-md-3 control-label"></label>
          <div class="col-md-7" style="text-align:left">
            <button type="submit" class="btn btn-primary">CREATE AWARD</button>
          </div>
        </div>

        </form>
      </div>
      <div id="alert-success" class="row" style="position:relative;background:#13a53d;font-weight:bold;color:white;padding:20px;display:none;">
        <span style="position:absolute; right:10px; top:2px; cursor:pointer" onclick="document.getElementById('alert-success').style.display='none';">&#10006;</span>
        YOU HAVE SUCCESSFULLY CREATED AN AWARD! REDEEMCODE:<span id="redeemcode"></span>
      </div>
    </div>
    <div id="Install-metamask" class="row section" style="margin:0px;margin-top:20px;display:none">
      <div class="container" style="padding:0px 0px">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2" style="background:white;color:black;">
          <p style="font-size:25px; color:red; text-align:center">To Buy and Give Athleticoin you must access this site with Firefox or Chrome and install the Metamask Extension.<br/>
          It appears you are using a different browser.<br/>
          Please close this window and return here using Firefox or Chrome.</p>
          <div class="panel-group" id="accordion" >
          <div class="panel" style="position:relative; padding-top:80px">
            <h4 class="panel-title" style="position: absolute;top:0%;left:50%;margin-left:-200px">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">What is Metmask and why do I need it?</a>
            </h4>
            <div id="collapse5" class="panel-collapse collapse">
              <p>It’s an add on that will allow you to Buy Ethereum which is needed to purchase Athleticoins.<br/>
                Metamask is one of the most preferred ways to Buy, Sell or Trade crypocurrency like Bitcoin, Ethereum and Athleticoin.<br/>
               It is considered to be safer than some other wallets because private keys are not sent to 3rd party websites or unknown sources.<br/>
               Once you have the Metamask add on you will see the process is very easy and automatic as it is integrated into the Athleticoin Awards site.<br/>
               Visit the link below for a Metamask Introduction and More Information if you want to become more familiar with it<br/>
               <a href="https://metamask.io/#how-it-works" style="color:blue">https://metamask.io/#how-it-works</a>
             </p>
            </div>
          </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div id="Install-metamask" class="row section" style="margin:0px;margin-top:20px;display:none">
      <section class="section-padding" id="section-metamask" style="padding:0px 0px">
        <div class="container" style="padding:0px 0px">
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
              <div class="page-title">
                <h2>Metamask FIRST TO MAKE REDEEM</h2>
                <p>
                  MetaMask is an Ethereum wallet that runs in your browser, where you have full control over the funds.<br/>
                  It gives you the ability to interact with websites using smart contracts, and to send and receive Ether.<br/>

                  Once you have MetaMask installed,<br/>
                  You can make redeem directly with metamask wallet.<br/>
                </p>
              </div>
            </div>
          </div>
          <div class="text-center mt-4">
            <a href="https://chrome.google.com/webstore/detail/metamask/nkbihfbeogaeaoehlefnkodbefgpgknn" target="_blank">
              <img style="max-width:500px;" src="/assets/images/download-metamask.png">
            </a>

            <div style="margin-top:15px;">
              <a title="Chrome Download" class="btn-img-icon" href="https://chrome.google.com/webstore/detail/metamask/nkbihfbeogaeaoehlefnkodbefgpgknn" target="_blank">
                <img src="/assets/images/chrome.png" style="height:80px;">
              </a>
              <a title="Firefox Download" class="btn-img-icon" style="margin-right:15px;" href="https://addons.mozilla.org/en-US/firefox/addon/ether-metamask/" target="_blank">
                <img style="height: 72px;width: 72px;margin-top: 5px;" src="/assets/images/firefox.png">
              </a>

            </div>
          </div>
        </div>
      </section>
    </div> -->
    <div id="join-metamask" class="row section" style="display:none;margin-top:50px;">
      <section class="gray-bg section-padding" id="section-metamask" style="padding:0px 0px">
        <div class="container" style="padding:0px 0px">
          <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
              <div class="page-title">
                <h2 style="color:red">LOGIN TO Metamask FIRST And REFRESH THIS PAGE</h2>
                <h2 style="color:red">TO BUY AND GIVE ATHLETICOIN</h2>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
    <div class="row" style="margin:0px;margin-top:50px;background:#75cbe7;color:white">
    @if ($settings['net_type'] == 'test')
    <input type="hidden" id="contract_address" value="{{$contract->test}}" />
    @else
    <input type="hidden" id="contract_address" value="{{$contract->real}}" />
    @endif

      <table class="table">
        <thead>
          <tr>
            <th>#</th>
            <th>AWARD TITLE</th>
            <th>AWARD WALLET ADDRESS</th>
            <th>AMOUNT</th>
            <th>AWARD DATE</th>
            <th>REDEEMED DATE</th>
            <th>REDEEM CODE</th>
          </tr>
        </thead>
        <tbody id="tbody_content">
          @foreach ($redeems as $redeem)
          <tr id="{{$redeem->id}}">
            <td>{{$redeem->id}}</td>
            <td>{{$redeem->title}}</td>
            <td>{{$redeem->target_address}}</td>
            <td>{{$redeem->amount}}</td>
            <td>{{$redeem->created_at}}</td>
            <td>@if ($redeem->redeem_date) {{$redeem->redeem_date}} @else Not Redeemed @endif</td>
            <td  style="text-align:left">
              <a href="javascript:void(0);" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="Copy RedeemCode" onclick="copyredeem('{{$redeem->redeem_code}}');" style="color:white"><i class="fa fa-copy" style="color:white"></i> {{$redeem->redeem_code}}</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      {{ $redeems->links() }}
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
@if ($settings['net_type'] == 'test')
<script src="/web3/abi_test.js"></script>
@else
<script src="/web3/abi.js"></script>
@endif
<script>
contract_address = $('#contract_address').val();
</script>
<script src="/js/sent.js"></script>
@endsection
