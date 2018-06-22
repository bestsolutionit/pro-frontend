function onRedeem(){
  redeem_code = $('#redeem_code').val();
  data = {
    'redeem_code':redeem_code
  };

  $.post('/receive', data,  function(res, status){
    if (status == 'success'){
      if (res == 'nothing'){
        toastr.warning('Redeem code no longer valid.<br/>Or This has already been redeemed.<br/> Please check your code again.');
      } else if (res == "This redeem code is already used by someone!") {
        toastr.warning('Redeem code no longer valid.<br/>Or This has already been redeemed.<br/> Please check your code again.');
      } else {
        location.reload();
      }
    }
  })
}


function copykey(private_key){
  console.log(private_key);
  const el = document.createElement('textarea');  // Create a <textarea> element
  el.value = private_key;                                 // Set its value to the string that you want copied
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
    alert("Copied the PrivateKey to clipboard: " + private_key);
  }
}
