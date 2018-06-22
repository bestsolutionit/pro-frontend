@extends('layouts.back')

@section('content')
<!--Header-area-->
<!-- <header class="header-area overlay full-height relative" id="home-page">
  <div class="absolute anlge-bg"></div>
  <div class="container">
    <div class="row" style="margin-top:120px;text-align:center">
      <img src="/img/logo-token.png" style="width:170px;height:170px" />
    </div>
    <div class="row v-center"  style="margin-top:20px;">
      <div class="col-xs-12 col-md-12" style="text-align:center;font-size:35px;margin-top:30px;text-shadow: 2px 2px #3620e6;">
        REDEEM WITH ATHA COIN!
      </div>

      <div class="col-xs-12 col-md-12" style="text-align:center;font-size:35px;margin-top:30px;text-shadow: 2px 2px #3620e6;">
        Please input your redeem code!
      </div>
      <div class="col-sm-8 col-sm-offset-2" style="text-align:center;font-size:35px;margin-top:30px;text-shadow: 2px 2px #3620e6;">
        <input type='text' class="form-control" />
      </div>
      <div class="col-xs-12 col-md-12" style="text-align:center;margin-top:30px;color:#000">
        <button class="btn btn-lg" onclick="onclickgo();" style="background:#f0f0fe;padding:10px 26px">Redeem</button>
      </div>
      <div class="local-scroll">
        <a href="#section-howtouse" class="scroll-down"><i class="scroll-down-icon"></i><span>Scroll Down</span></a>
      </div>
    </div>
  </div>
</header> -->
<!--Header-area/-->
<style>
body {
  background:url('/img/ATHA_JerseyBackgroundBlue.jpg') no-repeat center/cover !important;
}
</style>
<section class="gray-bg section-padding" id="section-howtouse" style="background:rgba(255,255,255,0)">
  <div class="container" style="color:black;padding:70px ; margin-top:0px">
    <!-- <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
        <div class="page-title">
          <h2>Welcome to Athleticoin Awards!</h2>
          <p>Send a valuable gestrue of appreciation to anyone anywhere instantly!</p>
        </div>
      </div>
    </div> -->

    <div class="row">
      <div class="main-box col-xs-12 col-sm-8 col-sm-offset-2" style="background:white">
        <div class="page-title" style="text-align:center;margin-top:20px">
          <h2>Welcome to Athleticoin Awards!</h2>
          <p>Send a gesture of appreciation to anyone anywhere instantly!
          </p>
        </div>
        <div class="panel-group" id="accordion">
          <div class="panel">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Claim your award</a>
            </h4>
            <div id="collapse1" class="panel-collapse collapse">
              <div class="panel-group" id="accordion1">
                <div class="panel">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse-child1">How do I Redeem an Athleticoin Award?</a>
                  </h4>
                  <div id="collapse-child1" class="panel-collapse collapse">
                    <p>- Register</p>
                    <img src="/img/screenshot_register.png" />
                    <p>- Login</p>
                    <img src="/img/screenshot_login.png" />
                    <p>- Enter Your Redeem Code and click Redeem.</p>
                    <img src="/img/screenshot_redeem.png" />
                    <p>Done! You now have ATHA in your wallet!</p>
                  </div>
                </div>
                <div class="panel">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion1" href="#collapse-child2">I have redeemed an Athleticoin Award and have Athleticoin in a wallet, now what?</a>
                  </h4>
                  <div id="collapse-child2" class="panel-collapse collapse">
                    <p>1.	You can view all of your awards redeemed in the table on the Redeem page.</p>
                    <p>2.	You can hold your ATHA for a time when the community grows and the value grows with it.</p>
                    <p>3.	You can send it to another ERC20 token compatible wallet.</p>
                    <p>4.	You can visit the main Athleticoin website www.athleticoin.org for updates on partners that<br/> accept Athleticoin for products and services or listing on exchanges to trade Athleticoin for other currency.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="panel">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Give an award</a>
            </h4>
            <div id="collapse2" class="panel-collapse collapse">
              <div class="panel-group" id="accordion2">
                <div class="panel">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse-child3">How do I Buy and Give Athleticoin Awards?</a>
                  </h4>
                  <div id="collapse-child3" class="panel-collapse collapse">
                    <p>First, make sure you are accessing this site using either the Firefox or Chrome browser. <br/>
                      You will need the Metamask add on which only works on those browsers<br/>
                       and you will need to have Ethereum in your Metamask wallet to buy Athleticoin.
                    </p>
                    <p>- Register</p>
                    <img src="/img/screenshot_register.png" />
                    <p>- Login</p>
                    <img src="/img/screenshot_login.png" />
                    <p>- Click Buy and Give Athleticoin.</p>
                    <p>- Login to Metamask if you are not already logged in.</p>
                    <img src="/img/screenshot_metamask_warning1.png" />
                    <p>- Refresh the page and enter the Award Details.</p>
                    <img src="/img/screenshot_buyandgive.png" />
                    <p>- Review Details in Metamask Popup Window and Submit.</p>
                    <img src="/img/screenshot_metamask2.png" />
                    <p>- You will see a success message and the award will be listed in the table below (you may need to refresh the page).</p>
                    <img src="/img/screenshot_confirm1.png" />
                    <p>- When you are ready to send the award click the Redeem code to copy to your clipboard and send any way you choose (email, print on a gift card, etc).</p>
                    <img src="/img/screenshot_copyredeem.png" />
                  </div>
                </div>
                <div class="panel">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse-child4">What is Metmask and why do I need it?</a>
                  </h4>
                  <div id="collapse-child4" class="panel-collapse collapse">
                    <p>It’s an add on that will allow you to Buy Ethereum which is needed to purchase Athleticoins.<br/>
                      Metamask is one of the most preferred ways to Buy, Sell or Trade crypocurrency like Bitcoin, Ethereum and Athleticoin.<br/>
                     It is considered to be safer than some other wallets because private keys are not sent to 3rd party websites or unknown sources.<br/>
                     Once you have the Metamask add on you will see the process is very easy and automatic as it is integrated into the Athleticoin Awards site.<br/>
                     Visit the link below for a Metamask Introduction and More Information if you want to become more familiar with it<br/>
                     <a href="https://metamask.io/#how-it-works" style="color:blue">https://metamask.io/#how-it-works</a>
                   </p>
                  </div>
                </div>
                <div class="panel">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse-child5">How do I setup Metamask Wallet and get Ethereum?</a>
                  </h4>
                  <div id="collapse-child5" class="panel-collapse collapse">
                    <p>Get the Metamask Add on here. NOTE: You must access this site with the Firefox or Chrome browser.<br/>
                      <a href="www.metamask.io" style="color:blue">www.metamask.io</a><br/>
                     Click Get Addon and follow the directions to install the Addon<br/>
                   </p>
                   <img src="/img/screenshot_metamask3.png" />
                   <p>- Login to Metamask to access your wallet.</p>
                   <img src="/img/screenshot_metamask4.png" />
                   <p>If you do not own Ethereum, click BUY and choose Coinbase.</p>
                   <img src="/img/screenshot_metamask5.png" />
                   <p> Follow the steps to Buy as much Ethereum as you choose.<br/> It will be stored in your wallet and you will not be required to spend all Ethereum at the same time.<br/> You can also use this method to buy more later.
                Coinbase will require you to confirm your identity when you first setup an account for purchase of Ethereum.<br/> In the future, you will only need to enter your email address and password for your Coinbase account.<br/>
                Once you have an account you may also install the Coinbase app on your smartphone to buy, exchange and sell Bitcoin, Ethereum, Bitcoin Cash and Litecoin.<br/>
                 </p>
                  </div>
                </div>

                <div class="panel">
                  <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion2" href="#collapse-child6">I already own Ethereum, How to transfer it to my Metamask wallet?</a>
                  </h4>
                  <div id="collapse-child6" class="panel-collapse collapse">
                    <p>Login to Metamask<br/>
                    Click the 3 dots next to your Account Name<br/>
                    </p>
                      <img src="/img/screenshot_metamask6.png" />
                      <p> If your Ethereum is in your mobile wallet on your phone, open your wallet, choose Send Ethereum.<br/>
                    Click Show QR code for your Metamask Wallet and scan the code with your phone<br/>
                    If your Ethereum is in an online wallet or hardware wallet login and choose to send Ethereum.<br/> Click Copy Address to clipboard and paste in the Send address of your current wallet.<br/>
                    Choose the amount you want to transfer and confirm.<br/>
                    You are now all set with Ethereum in your Metamask wallet!<br/>
                    Return to the Athleticoin Awards site to Buy and Give Athleticoin.<br/>
                    </p>
                  </div>
                </div>




              </div>
            </div>
          </div>
          <div class="panel">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">What if I want to buy Athleticoin for myself?</a>
            </h4>
            <div id="collapse7" class="panel-collapse collapse">
              <p>
                The Athleticoin Awards site is currently the only way to purchase Athleticoin but no one says you can’t award yourself!  Simply create an Award and redeem it yourself. Now you own Athleticoin!
              </p>
            </div>
          </div>

          <div class="panel">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">How do I find out more about Athleticoin or where can I find contact information?</a>
            </h4>
            <div id="collapse8" class="panel-collapse collapse">
              <p>
                This site is an application for sending Athleticoin cryptocurrency as an Award.<br/>
                Visit the main Athleticoin site for more information about this cryptocurrency.
                <a href="http://athleticoin.org/" style="color:blue">www.athleticoin.org</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- <section class="gray-bg section-padding" id="section-metamask" style="padding:0px 0px">
  <div class="container" style="padding:0px 0px">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
        <div class="page-title">
          <h2>Metamask Recommended</h2>
          <p>
            MetaMask is an Ethereum wallet that runs in your browser, where you have full control over the funds.
            It gives you the ability to interact with websites using smart contracts, and to send and receive Ether.

            Once you have MetaMask installed,
            Payments will be sent directly to your wallet for your market earnings.
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
</section> -->


<!-- <section class="gray-bg section-padding" id="section-faq">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-8 col-sm-offset-2 text-center">
        <div class="page-title">
          <h2>Frequently Asked Questions</h2>
          <p><b>Sometimes, some questions need to be answered!</b> </br>
            Anything we can't answer here can be answered within our <a href="https://discord.gg/Ng6uJ">Discord</a> Group!
          </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
        <div class="panel-group" id="accordion">
          <div class="panel">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">What software do I need ?</a>
            </h4>
            <div id="collapse2" class="panel-collapse collapse">
              <p>To redeem, you will need three things:<br/>
                -A computer with a Chrome or Firefox browser installed.<br/>
                -A MetaMask digital wallet.<br/>
                -The cryptocurrency, Ether.<br/>
              </p>
            </div>
          </div>
          <div class="panel">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">How do I install MetaMask?</a>
            </h4>
            <div id="collapse3" class="panel-collapse collapse">
              <p>
                In order to buy contracts and sell your contracts, you’ll need to install digital wallet MetaMask on your Chrome or Firefox browser and load it up with ether.<br/>
                Go to <a href="https://chrome.google.com/webstore/detail/metamask/nkbihfbeogaeaoehlefnkodbefgpgknn" style="color:#3a2cf1">here</a> and click “Add to Chrome”.<br/>
                Or, go to <a href="https://addons.mozilla.org/en-US/firefox/addon/ether-metamask" style="color:#3a2cf1">there</a> and click “Add to Firefox”.<br/>
                Click “Add Extension” on the pop-up. Accept the Privacy Policy and agree to the TOS. Set up your MetaMask account.<br/>
                Copy your 12 seed words and file them away somewhere safe (this helps to secure your account).
                Note: For security purposes, MetaMask browser extensions will periodically request that you log back in to your account.
                If you see a lock screen on Redeem, this security measure is the most likely cause – just click your MetaMask extension, log back in,
                and continue redeem.
              </p>
            </div>
          </div>
          <div class="panel">
            <h4 class="panel-title">
              <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">How do I add ether to my MetaMask wallet? </a>
            </h4>
            <div id="collapse4" class="panel-collapse collapse">
              <p>There are two ways to add ether to your wallet. <br/><br/>If you don’t currently own ether.<br/>
                1. Buy ether directly in MetaMask, or<br/>
                2. Purchase ether through a Coinbase wallet, another type of digital wallet, and then transfer the ether to your MetaMask wallet using the Coinbase widget.<br/><br/>
                If you currently own ether, you can:<br/>
                Transfer your ether from your existing digital wallet to your MetaMask wallet. Just copy your MetaMask address, open up Coinbase, and
                click on the “Accounts” option. Click the “Send” button, paste your MetaMask address in the box, add the amount of ether you want to transfer,
                and complete the transaction.
              </p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section> -->

<!-- <footer class="footer-area relative sky-bg" id="section-contact">
  <div class="absolute footer-bg"></div> -->
  <!-- <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-sm-offset-3 text-center">
          <div class="page-title">
            <h2>Connect Us</h2>
            <p>Need anything clarified? Go ahead and send us a message! We will respond as soon as possible.</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-md-12">
          <address class="row side-icon-boxes">
            <div class="side-icon-box col-sm-4">
              <div class="side-icon">
                <img src="/assets/images/Discord-Logo-Black.png" alt="">
              </div>
              <p><strong>Discord: </strong><a href="https://discord.gg/redeem">Redeem</a></p>
            </div>
            <div class="side-icon-box col-sm-4">
              <div class="side-icon">
                <img src="https://huboncampus.com/wp-content/themes/hub/images/social/twitter/twitter-256-black.png" alt="">
              </div>
              <p><strong>Twitter: </strong><a href="https://twitter.com/redeem">Redeem</a></p>
            </div>
            <div class="side-icon-box col-sm-4">
              <div class="side-icon">
                <img src="https://cdn0.iconfinder.com/data/icons/communication-technology/500/black_envelope-512.png" alt="">
              </div>
              <p><strong>E-mail: </strong>
                <a href="mailto:skyclean906@gmail.com">skyclean906@gmail.com</a>
              </p>
            </div>
          </address>
        </div>
      </div>
    </div>
  </div> -->

  <!-- <div class="footer-middle">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 pull-right">
          <ul class="social-menu text-right x-left">
            <li><a target="_blank" href="https://www.facebook.com/CrytoFlip-Games-159546524701825"><i class="fa fa-facebook"></i></a></li>
            <li><a target="_blank" href="https://www.reddit.com/r/cryptoflip"><i class="fa fa-reddit"></i></a></li>
            <li><a target="_blank" href="https://twitter.com/CryptoFlip_Game"><i class="fa fa-twitter"></i></a></li>
          </ul>
        </div>
        <div class="col-xs-12 col-sm-6">
          <p>© 2018 Redeem ® Developments. All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</footer> -->
<!--Mainmenu-area/-->
<script type="text/javascript">

</script>
@endsection
