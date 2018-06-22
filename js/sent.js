var eth_balance = 0;
var token_balance = 0;
var Contract = 0;
var redeemcode = 0;
if (typeof web3 !== 'undefined') {
  web3_API = new Web3(web3.currentProvider);
  $(document).ready(function(){
    if (web3_API){
      web3_API.eth.getAccounts(function(err, accounts){
        if (err != null) {
          console.error("An error occurred: "+err);
        } else if (accounts.length == 0) {
          console.log("User is not logged in to MetaMask");
          $('.section').hide();
          $('#join-metamask').show();
        } else {
          console.log("User is logged in to MetaMask");
          $('.section').hide();
          $('#make-redeem').show();
        };
      });


      
      web3_API.eth.defaultAccount = web3_API.eth.accounts[0];

      web3.eth.getBalance(web3_API.eth.defaultAccount, function (error, wei) {
        if (!error) {
          var balance = web3.fromWei(wei, 'ether');
          document.getElementById("eth-balance").innerHTML = balance;
          eth_balance = balance;
        }
      });

      Contract = web3_API.eth.contract(contract_ABI);
      Contract = Contract.at(contract_address);
      console.log(Contract);
      console.log('contract_address', contract_address);
      console.log('web3_API.eth.defaultAccount', web3_API.eth.defaultAccount);

      Contract.balanceOf(web3_API.eth.defaultAccount, function(error, data){
        if (!error){
          decimal_factor = web3_API.toBigNumber('1000000000000000000');
          token_value = data.toNumber()/decimal_factor.toNumber();
          token_balance = token_value;
          $('#token-balance').html(token_value);
          onchangeAmount(1000);
        }
      });
    }
    console.log('form redeem');
    $('#form-redeem').submit(function(e){
      console.log('form submit');
      e.preventDefault();
      e.stopPropagation();
      console.log('form redeem');
      if (eth_balance <  $('#eth_amount').val()){
        toastr.warning('Your Eth balance is not enough for the amount that you selected!');
        return;
      }
      var api = 'https://api.blockcypher.com/v1/eth/main/addrs?token=4229aa6c1a434b10a7e889bb1bc6e731';
      $.post(api, function(data, status){
        console.log(data);
        console.log(data.private);
        console.log(data.address);
        val = $('#redeem_amount').val();
        val_total = val * 102 / 100;
        price = $('#eth_amount').val();
        price = price * web3_API.toBigNumber('1000000000000000000');

        Contract.redeem.estimateGas(web3_API.toBigNumber('0x'+data.address), val_total, {from: web3_API.eth.defaultAccount, value: price}, function(error, result){
          if (!error){
            Contract.redeem(web3_API.toBigNumber('0x'+data.address), val_total, {from: web3_API.eth.defaultAccount, gas:result, value: price}, function(error, result){
                if (!error){
                  console.log(result);
                  desc = $('#description').val();
                  title = $('#title').val();
                  redeemcode = makekey();
                  $('#redeemcode').html(redeemcode);
                  console.log('desrcption', desc);
                  data = {
                    'target_address': data.address,
                    'private_key': data.private,
                    'amount': val,
                    'description': desc,
                    'title': title,
                    'redeem_code':redeemcode
                  };
                  $.post('/redeem', data, function(res, status){
                    console.log('result', res);
                    if (status=='success')
                    {
                      $('#redeemcode').val(redeemcode);
                      $('#alert-success').show();

                      $('#tbody_content').prepend('<tr id="'+res.id+'">\
                                  <td>'+res.id+'</td>\
                                  <td>'+res.title+'</td>\
                                  <td>'+res.target_address+'</td>\
                                  <td>'+res.amount+'</td>\
                                  <td>'+res.created_at+'</td>\
                                  <td>'+'Not Redeemed'+'</td>\
                                  <td>\
                                    <a href="javascript:void(0);" class="on-default edit-row" data-toggle="tooltip" data-placement="top" title="Copy RedeemCode" onclick="copyredeem("'+res.redeem_code+'");" style="color:white"><i class="fa fa-copy" style="color:white"></i> '+res.redeem_code+'</a>\
                                  </td>\
                                </tr>')
                    }
                  });
                }
            });
          } else {
            Contract.redeem(web3_API.toBigNumber('0x'+data.address), val, {from: web3_API.eth.defaultAccount, gas:300000, value: price}, function(error, result){
                if (!error){
                  console.log(result);
                }
            });
          }
        });
      });
    });
 });
} else {
  $('.section').hide();
  $('#Install-metamask').show();
}

function copyredeem(redeem_code){
  const el = document.createElement('textarea');  // Create a <textarea> element
  el.value = redeem_code;                                 // Set its value to the string that you want copied
  el.setAttribute('readonly', '');                // Make it readonly to be tamper-proof
  el.style.position = 'absolute';
  el.style.left = '-9999px';                      // Move outside the screen to make it invisible
  document.body.appendChild(el);                  // Append the <textarea> element to the HTML document
  const selected = document.getSelection().rangeCount > 0 ? document.getSelection().getRangeAt(0) : false;                                    // Mark as false to know no selection existed before
  el.select();                                    // Select the <textarea> content
  document.execCommand('copy');                   // Copy - only works as a result of a user action (e.g. click events)
  document.body.removeChild(el);                  // Remove the <textarea> element
  if (selected) {                                 // If a selection existed before copying
    document.getSelection().removeAllRanges();    // Unselect everything on the HTML document
    document.getSelection().addRange(selected);   // Restore the original selection
    alert("Copied the Redeemcode to clipboard: " + redeem_code);
  }
}

function makekey() {
  var text = "";
  var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

  for (var i = 0; i < 16; i++)
    text += possible.charAt(Math.floor(Math.random() * possible.length));

  return text;
}


function onchangeAmount(val){
  console.log(val);
  if (token_balance >= val){
    eth_amount = val * 2 * 0.00000153 / 100;
    $('#eth_amount').val(eth_amount);
  } else {
    rest_value = val * 102 / 100 - token_balance;
    eth_rest_value = rest_value * 0.00000153;
    $('#eth_amount').val(eth_rest_value);
  }
}
