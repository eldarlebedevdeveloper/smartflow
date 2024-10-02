<?php include_once('header.php'); ?>
<main>
  <section class="running_line">
    <!-- TradingView Widget BEGIN -->
    <div class="tradingview-widget-container">
      <div class="tradingview-widget-container__widget"></div>
      <script
        type="text/javascript"
        src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js"
        async
      >
            {
            "symbols": [
            {
                "proName": "FOREXCOM:SPXUSD",
                "title": "S&P 500"
            },
            {
                "proName": "FOREXCOM:NSXUSD",
                "title": "US 100"
            },
            {
                "proName": "FX_IDC:EURUSD",
                "title": "EUR/USD"
            },
            {
                "proName": "BITSTAMP:BTCUSD",
                "title": "Bitcoin"
            },
            {
                "proName": "BITSTAMP:ETHUSD",
                "title": "Ethereum"
            }
            ],
            "showSymbolLogo": true,
            "colorTheme": "light",
            "isTransparent": false,
            "displayMode": "regular",
            "locale": "en"
        }
      </script>
    </div>
    <!-- TradingView Widget END -->
  </section>
  <section class="news">
    <div class="news_left">
      <!-- TradingView Widget BEGIN -->
      <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script
          type="text/javascript"
          src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js"
          async
        >
              {
              "feedMode": "all_symbols",
              "colorTheme": "light",
              "isTransparent": false,
              "displayMode": "regular",
              "width": "100%",
              "height": "100%",
              "locale": "en"
          }
        </script>
      </div>
      <!-- TradingView Widget END -->
    </div>
  </section>
  <section class="repeated_2 news_baner">
    <div class="repeated_2_left">
      <div class="repeated_2_left-text">
        <h2>Ready to trade?</h2>
        <p>Get started with your trading account today.</p>
      </div>
    </div>
    <div class="repeated_2_right">
      <form
        action="https://official.smartflow.com/register"
        class="repeated_2_form"
      >
        <input type="text" placeholder="Name" class="input_white" />
        <input type="text" placeholder="Last name" class="input_white" />
        <button class="button_black"><h3>Register</h3></button>
      </form>
    </div>
  </section>
</main>
<?php include_once('footer.php'); ?>