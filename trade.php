<?php include_once('header-white.php'); ?>
<main>
  <section class="top_section_repeated" id="trade_top">
    <div class="top_section_repeated_container">
      <h1>Trading platform</h1>
      <p>
        Designed specifically for active trade and maximum freedom.Choose the
        type that suits you best trading platform and start investing right now
        by opening a single account for all types platforms.
      </p>
      <div class="button_blue">
        <h3>Start now</h3>
      </div>
    </div>
  </section>
  <section class="benefits" id="trade_benefits">
    <h2>Benefits of trading on stock and currency markets with Smart Flow</h2>
    <div class="benefits_container">
      <div class="benefits_item card">
        <h3>
          Fast <br />
          data processing
        </h3>
      </div>
      <div class="benefits_item card">
        <h3>High-quality analytics from leading specialists</h3>
      </div>
      <div class="benefits_item card">
        <h3>Flexibility of settings</h3>
      </div>
      <div class="benefits_item card">
        <h3>Large selection of trading instruments</h3>
      </div>
      <div class="benefits_item card">
        <h3>Extencive filtering options</h3>
      </div>
    </div>
  </section>
  <section class="web_trader">
    <div class="web_trader_container">
      <h2>web trader</h2>
      <p>
        Get access to quotes updated on real-time mode, as well as to the
        history of trading operations and indicators for implementation of
        technical analysis.
      </p>
      <ul>
        <li>Forget about downloads and installations;</li>
        <li>Live trading;</li>
        <li>Instant top-up;</li>
        <li>Trade from any device;</li>
      </ul>
      <a href="#" class="button_white"><h3>Learn more</h3></a>
    </div>
    <div class="web_trader_image">
      <img src="img/img_smartflow/trading/web_trader.svg" alt="" />
    </div>
  </section>
  <section class="popular_instruments">
    <div class="popular_instruments_header">
      <h2>Trade on the most popular instruments</h2>
      <p>
        Trade a wide range of CFDs on FX, commodities, cryptocurrencies, stocks,
        ETFs and more. Low costs, fast execution and stable support.
      </p>
    </div>
    <div class="popular_instruments-graph">
      <div class="tradingview-widget-container">
        <div class="tradingview-widget-container__widget"></div>
        <script
          type="text/javascript"
          src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js"
          async
        >
              {
              "colorTheme": "light",
              "dateRange": "12M",
              "exchange": "US",
              "showChart": true,
              "locale": "en",
              "width": "100%",
              "height": "100%",
              "largeChartUrl": "",
              "isTransparent": false,
              "showSymbolLogo": false,
              "showFloatingTooltip": false,
              "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
              "plotLineColorFalling": "rgba(41, 98, 255, 1)",
              "gridLineColor": "rgba(240, 243, 250, 0)",
              "scaleFontColor": "rgba(106, 109, 120, 1)",
              "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
              "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
              "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
              "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
              "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
          }
        </script>
      </div>
      <!-- TradingView Widget END -->
    </div>
    <p>
      To familiarize yourself with the terms of trade, a wide range of
      specialization of financial instruments.
    </p>
  </section>

  <section class="repeated_2">
    <div class="repeated_2_left">
      <div class="repeated_2_left-text">
        <h2>Start trading now</h2>
        <p>Registration takes only 40 seconds.</p>
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
