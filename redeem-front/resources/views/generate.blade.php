@extends('layouts.back')

@section('content')
<section class="blue-bg section-padding" id="companies" style="background:#f2fefe">
  <div class="container">
    <div class="row">
      <p style="font-size:18px">Garage Address:&nbsp;<a id="address" target="_blank" href="https://etherscan.io/address/0x86fa049857e0209aa7d9e616f7eb3b3b78ecfdb0" style="color:#0000ff"></a><span id="nick" style="margin-left:10px;font-weight:bold"></span></p>
    </div>
    <div class="row alert-success" style="display:none; text-align:center">
      <p>Your nick name successfully saved!</p>
    </div>
    <div class="row" style="margin-top:10px">
      <input type="text" id="nick_name" name="nick_name" placeholder="Your Nick Name"/>
      <button class="btn btn-primary btn-sm" onclick="RegisterNick();">Register</button>
    </div>
    <div class="row text-center" style="margin:0px;margin-top:30px; padding:0px 50px; padding-top:50px;">
      <h1>Owned Cards</h1>
    </div>

    @if ($whalecard)
    <section class="blue-bg section-padding" id="whalecard" style="background:#f2fefe;padding:0px;display:none">
        <div class="container">
            <div class="row text-center" style="margin:0px;margin-top:30px; padding:0px 50px; padding-top:50px;">
                <h1>Whalecard</h1>
            </div>
            <div id="whalecard-div" class="row"
                 style="margin:0px;margin-top:0px; border-top:1px solid #0000ff; padding-top:20px;min-height:300px">
                <div class="card_div col-sm-4 col-xs-12">
                </div>
                <div id="whalecard_div" class="card_div col-sm-4 col-xs-12">
                    <div class="bg-sec" style="position:relative;padding-bottom: 30px">
                        <div class="logo-sec">
                            <div class="logo-text">
                                <h2>CryptoFlip</h2>
                            </div>
                        </div>
                        <div class="title-sec" style="">
                            <h2 style="">{{$whalecard->title}}</h2>
                        </div>
                        <div class="car-img">
                            <div class="carr-img">
                                <img src="{{$whalecard->image}}" alt=""/>
                            </div>
                        </div>
                        <div class="price-list">
                            <p>Next Price: <span><span class="card_next_price">0.15</span> ETH</span></p>
                            <p>Price: <span><span class="card_current_price">0.1</span> ETH</span></p>
                        </div>

                        <div class="buy-list">
                            <button class="disabled_tag btn cs-btn btn-one"
                                    onclick="buywhalecard();"><img src="/img/shoppingcart_icon.png"
                                                                              style="width:20px;margin-right:5px"></img>Buy
                            </button>
                            <!--<button class="btn cs-btn btn-two"><i class="fas fa-rocket"></i>Leap</button>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endif
    <hr style="width:100%; height:2px; background:#0000ff"/>
    <div class="row" style="margin:0px;margin-top:30px;">
      <select class="form-control" style="width:300px;float:right;font-size:16px" onchange="onselectfileter(this.value)">
        <option value="0">Select Filter</option>
        <option value="1">All</option>
        <option value="2">Companies</option>
        <option value="3">Makes</option>
        <option value="4">Cars</option>
      </select>
    </div>
    <div class="row" style="margin-top:20px">
      @foreach($companies as $company)
      <div id="company_card_div_{{$company->id}}" class="company card_div col-sm-4 col-xs-12" style="display:none">
        <div class="bg-sec" style="position:relative;">
          <div class="logo-sec">
            <div class="logo-text">
              <h2>Cryptoflipcars</h2>
            </div>
          </div>
          <div class="title-sec" style="">
            <h2 style="">{{$company->title}}</h2>
          </div>
          <div class="car-img">
            <div class="carr-img">
              <img src="{{$company->image}}" alt="" />
            </div>
          </div>
          <div class="price-list">
            <p>Price: <span><span class="card_current_price"></span> ETH</span></p>
            <p>Next Price: <span><span  class="card_next_price"></span> ETH</span></p>
          </div>

          <div class="buy-list">
            <button class="btn cs-btn btn-one disabled" onclick=""><img src="/img/shoppingcart_icon.png" style="width:20px;margin-right:5px"></img>Buy</button>
            <!--<button class="btn cs-btn btn-two"><i class="fas fa-rocket"></i>Leap</button>-->
          </div>
          <div class="add-sec" style="width:90%">
            <a id="promote_title" href="#">Your Ad Here</a>
          </div>
          <div class="promotion-sec">
            <p class="promote_btn disabled">Promote your website here: <span class="adv_price"></span> ETH</p>
          </div>
        </div>
      </div>
      @endforeach
      @foreach($makes as $make)
      <div id="make_card_div_{{$make->id}}" class="make card_div col-sm-4 col-xs-12" style="display:none">
        <div class="bg-sec" style="position:relative;">
          <div class="logo-sec">
            <div class="logo-text">
              <h2>Cryptoflipcars</h2>
            </div>
          </div>
          <div class="title-sec" style="">
            <h2 style="">{{$make->title}}</h2>
          </div>
          <div class="car-img">
            <div class="carr-img">
              <img src="{{$make->image}}" alt="" />
            </div>
          </div>
          <div class="price-list">
            <p>Price: <span><span class="card_current_price"></span> ETH</span></p>
            <p>Next Price: <span><span  class="card_next_price"></span> ETH</span></p>
          </div>

          <div class="buy-list">
            <button class="btn cs-btn btn-one disabled" onclick=""><img src="/img/shoppingcart_icon.png" style="width:20px;margin-right:5px"></img>Buy</button>
            <!--<button class="btn cs-btn btn-two"><i class="fas fa-rocket"></i>Leap</button>-->
          </div>
          <div class="add-sec" style="width:90%">
            <a id="promote_title" href="#">Your Ad Here</a>
          </div>
          <div class="promotion-sec">
            <p class="promote_btn disabled" onclick="">Promote your website here: <span class="adv_price"></span> ETH</p>
          </div>
        </div>
      </div>
      @endforeach
      @foreach($cars as $car)
      <div id="car_card_div_{{$car->id}}" class="car card_div col-sm-4 col-xs-12" style="display:none">
        <div class="bg-sec" style="position:relative;">
          <div class="logo-sec">
            <div class="logo-text">
              <h2>Cryptoflipcars</h2>
            </div>
          </div>
          <div class="title-sec" style="">
            <h2 style="">{{$car->title}}</h2>
          </div>
          <div class="car-img">
            <div class="carr-img">
              <img src="{{$car->image}}" alt="" />
            </div>
          </div>
          <div class="price-list">
            <p>Price: <span><span class="card_current_price"></span> ETH</span></p>
            <p>Next Price: <span><span  class="card_next_price"></span> ETH</span></p>
          </div>

          <div class="buy-list">
            <button class="btn cs-btn btn-one disabled" onclick=""><img src="/img/shoppingcart_icon.png" style="width:20px;margin-right:5px"></img>Buy</button>
            <!--<button class="btn cs-btn btn-two"><i class="fas fa-rocket"></i>Leap</button>-->
          </div>
          <div class="add-sec" style="width:90%">
            <a id="promote_title" href="#">Your Ad Here</a>
          </div>
          <div class="promotion-sec">
            <p class="promote_btn disabled" onclick="">Promote your website here: <span class="adv_price"></span> ETH</p>
          </div>
        </div>
      </div>
      @endforeach
      <div class="row" id="companies">

      </div>
      <div class="row" id="makes">

      </div>
      <div class="row" id="cars">

      </div>
    </div>
  </div>
</section>





<footer class="footer-area" style="position:fixed; bottom:0;left:0px; width:100%;height:200px;margin:0px;text-align:center">
  <p style="line-height:100px">© 2018 Cryptoflipcars ® Developments. All rights reserved.</p>
</footer>
<script src="/web3/abi.js"></script>
<script>
var web3_API = null;
var company_prices = [];
var adv_prices = [];
var whalecard = {};
if (typeof web3 !== 'undefined') {
  web3_API = new Web3(web3.currentProvider);
  var defaultAccount = web3_API.eth.defaultAccount = web3_API.eth.accounts[0];
} else {
  alert('please turn on metamask and refresh page!');
}

$(document).ready(function(){
  if (web3_API){
    var Contract = web3_API.eth.contract(contract_ABI);
    $('#address').html(defaultAccount);
    $('#address').attr('href', 'https://etherscan.io/address/' + defaultAccount);
    var Contract = Contract.at("{{$contract->contract_address}}");

    Contract.getWhaleCard(function (error, result) {
        if (!error){
            address = result[0];
            price = web3_API.toBigNumber(result[1]);
            ether = web3_API.toBigNumber('1000000000000000000');
            ether_value = price.toNumber() / ether.toNumber();
            whalecard.price = price;
            whalecard.owner = address;
            console.log('whalecard');
            $('#whalecard_div .card_current_price').html(ether_value.toFixed(4));
            next_value = parseFloat(ether_value * 1.55).toFixed(4);
            $('#whalecard_div .card_next_price').html(next_value);
            console.log(address);
            if (defaultAccount == address){
              $('#whalecard').show();
            }
        } else {
            console.log(error)
        }
    });


    Contract.getCompanyCount(function(error, result) {
      if (error){
        console.log(error);
      } else {
        console.log(result);

        for (company_id = 0; company_id < result; company_id++){
          Contract.getCompany(company_id, function(error, result) {
            if(!error)
            {
                name = result[0];
                address = result[1];
                price = web3_API.toBigNumber(result[2]);
                is_released = result[3];
                adv_txt = result[4];
                adv_link = result[5];
                adv_price = web3_API.toBigNumber(result[6]);
                adv_owner = result[7];
                id = result[8];

              ether = web3_API.toBigNumber('1000000000000000000');
              ether_value = price.toNumber()/ether.toNumber();
              id = parseInt(id) + 1;
              $('#company_card_div_'+id+' .card_current_price').html(ether_value);
              next_value = parseFloat(ether_value * 1.55).toFixed(3);
              $('#company_card_div_'+id+' .card_next_price').html(next_value);

              //$('#companies').append('<p>'+(parseInt(id)-1)+' addCompany('+name+', '+address+', '+price+' ,'+is_released+')</p>');
              if (is_released && address == defaultAccount){
                $('#company_card_div_'+id).show();
                $('#company_card_div_'+id).addClass('released');
                $('#company_card_div_'+id+' #promote_title').html(text);
                $('#company_card_div_'+id+' #promote_title').attr('href', link);
                $('#company_card_div_'+id+' .adv_price').html(ether_value);
              }
            }
            else
            console.error(error);
          });
        }
        //console.log('html', html);
        //.html(html);
      }
    });

    Contract.getMakeCount(function(error, result) {
      if (error){
        console.log(error);
      } else {
        console.log(result);
        for (make_id = 0; make_id < result; make_id++){
          Contract.getMake(make_id, function(error, result) {
            if(!error)
            {
                name = result[0];
                address= result[1];
                price = web3_API.toBigNumber(result[2]);
                is_released = result[4];
                adv_txt = result[5];
                adv_link = result[6];
                adv_price = result[7];
                adv_owner= result[8];
                id = result[9];

              ether = web3_API.toBigNumber('1000000000000000000');
              ether_value = price.toNumber()/ether.toNumber();
              id = parseInt(id) + 1;
              $('#make_card_div_'+id+' .card_current_price').html(ether_value);
              next_value = parseFloat(ether_value * 1.55).toFixed(3);
              $('#make_card_div_'+id+' .card_next_price').html(next_value);

              console.log(is_released);
              //$('#makes').append('<p>'+(parseInt(id)-1)+' addMake('+name+', '+address+', '+price+' ,'+result[3]+', '+is_released+')</p>');
              if (is_released && address == defaultAccount){
                $('#make_card_div_'+id).show();
                $('#make_card_div_'+id).addClass('released');
                  $('#make_card_div_'+id+' #promote_title').html(adv_txt);
                  $('#make_card_div_'+id+' #promote_title').attr('href', adv_link);
                  ether_value = adv_price.toNumber()/ether.toNumber();
                  $('#make_card_div_' + id + ' .adv_price').html(ether_value.toFixed(4));
              }
            }
            else
            console.error(error);
          });
        }
      }
    });

    Contract.getCarCount(function(error, result) {
      if (error){
        console.log(error);
      } else {
        console.log('car', result);
        for (car_id = 0; car_id < result; car_id++){
          Contract.getCar(car_id, function(error, result) {
            if(!error)
            {
                name = result[0];
                addresses = result[1];
                price = result[2];
                is_released = result[5];
                adv_txt = result[6];
                adv_link = result[7];
                adv_price = result[8];
                adv_owner = result[9];
                id = result[10];
                address = addresses[0];

              ether = web3_API.toBigNumber('1000000000000000000');
              ether_value = price.toNumber()/ether.toNumber();
              id = parseInt(id) + 1;
              $('#car_card_div_'+id+' .card_current_price').html(ether_value);
              next_value = parseFloat(ether_value * 1.55).toFixed(3);
              $('#car_card_div_'+id+' .card_next_price').html(next_value);

              console.log('car', is_released);
              //$('#cars').append('<p>'+(parseInt(id)-1)+' addCar('+name+', '+result[1]+', '+price+' ,'+result[3]+', '+result[4]+', '+is_released+')</p>');
              if (is_released && address == defaultAccount){

                $('#car_card_div_'+id).show();
                $('#car_card_div_'+id).addClass('released');
                  $('#car_card_div_'+id+' #promote_title').html(adv_txt);
                  $('#car_card_div_'+id+' #promote_title').attr('href', adv_link);
                  ether_value = adv_price.toNumber()/ether.toNumber();
                  $('#car_card_div_' + id + ' .adv_price').html(ether_value.toFixed(4));
              }
            }
            else
            console.error(error);
          });
        }
      }
    });

    var url = '/getNick';
    var address = defaultAccount;

    var data = {
      "address":	address,
    };

    var success = function response_from_server(data){
      console.log('nick', data);
      if (data){
        $('#nick').html('(Nick Name: ' + data +')');
      }
    };
    console.log(data);
    jQuery.get( url, data, success);

  } else {
    alert('please turn on metamask and refresh page!');
  }
})

function onselectfileter(val){
  console.log(val);
  if (val == 4){
    $('.card_div').hide();
    $('.card_div.car.released').show();
  } else if (val == 3){
    $('.card_div').hide();
    $('.card_div.make.released').show();
  } else if (val == 2){
    $('.card_div').hide();
    $('.card_div.company.released').show();
  } else {
    $('.card_div').hide();
    $('.card_div.released').show();
  }
}

function RegisterNick(){
  var url = '/registerNick';
  var nick_name = $('#nick_name').val();
  var address = defaultAccount;

  var data = {
    "nick_name":	nick_name,
    "address":	address,
  };

  var success = function response_from_server(data){
    $('.alert-success').show();
    setTimeout(function(){
      $('.alert-success').hide();
    }, 3000);
  };
  console.log(data);
  jQuery.post( url, data, success);
}
</script>
@endsection
