<?php include_once('header-white.php'); ?>
<main>
  <section class="top_section_repeated" id="analytics_top">
    <div class="top_section_repeated_container">
      <h1>Trading conditions</h1>
      <p>
        To make trades, a trader must know features of each trading session,
        technical analysis, money management basics, etc.
      </p>
      <p>
        We provide clients with specialized programs, analytics and audit of
        your portfolio by a professional analyst to reach market prepared.
      </p>
      <div class="button_blue">
        <h3>Become a trader</h3>
      </div>
    </div>
  </section>
  <section class="analytics_graphs">
    <article class="econoimic graph-standart">
      <div class="graph-standart_header">
        <h2>Economic calendar for forex traders</h2>
        <p>
          An obligatory part of the strategy of a professional trader is a
          trading plan. Thanks to the Economic Calendar, you can plan trades
          down to the minute, taking into account upcoming economic reports,
          consensus forecasts and estimated volatility.
        </p>
      </div>
      <div class="econoimic_graph graph-standart_graph">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script
            type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-events.js"
            async
          >
                {
                "colorTheme": "light",
                "isTransparent": false,
                "width": "100%",
                "height": "100%",
                "locale": "en",
                "importanceFilter": "-1,0,1",
                "currencyFilter": "USD,EUR,ITL,NZD,CHF,AUD,FRF,JPY,ZAR,TRL,CAD,DEM,MXN,ESP,GBP"
            }
          </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
    </article>
    <article class="market-condition graph-standart">
      <div class="graph-standart_header">
        <h2>Market Condition</h2>
        <p>
          The current state of the market for financial instruments on the
          market. Allows you to find out the price for a specific time and
          see the dynamics for different periods.
        </p>
      </div>
      <div class="market-condition_graph graph-standart_graph">
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <script
            type="text/javascript"
            src="https://s3.tradingview.com/external-embedding/embed-widget-market-overview.js"
            async
          >
                {
                "colorTheme": "light",
                "dateRange": "12M",
                "showChart": true,
                "locale": "en",
                "width": "100%",
                "height": "100%",
                "largeChartUrl": "",
                "isTransparent": false,
                "showSymbolLogo": true,
                "showFloatingTooltip": false,
                "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
                "plotLineColorFalling": "rgba(41, 98, 255, 1)",
                "gridLineColor": "rgba(240, 243, 250, 0)",
                "scaleFontColor": "rgba(106, 109, 120, 1)",
                "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
                "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
                "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
                "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
                "symbolActiveColor": "rgba(41, 98, 255, 0.12)",
                "tabs": [
                {
                    "title": "Indices",
                    "symbols": [
                    {
                        "s": "FOREXCOM:SPXUSD",
                        "d": "S&P 500"
                    },
                    {
                        "s": "FOREXCOM:NSXUSD",
                        "d": "US 100"
                    },
                    {
                        "s": "FOREXCOM:DJI",
                        "d": "Dow 30"
                    },
                    {
                        "s": "INDEX:NKY",
                        "d": "Nikkei 225"
                    },
                    {
                        "s": "INDEX:DEU40",
                        "d": "DAX Index"
                    },
                    {
                        "s": "FOREXCOM:UKXGBP",
                        "d": "UK 100"
                    }
                    ],
                    "originalTitle": "Indices"
                },
                {
                    "title": "Futures",
                    "symbols": [
                    {
                        "s": "CME_MINI:ES1!",
                        "d": "S&P 500"
                    },
                    {
                        "s": "CME:6E1!",
                        "d": "Euro"
                    },
                    {
                        "s": "COMEX:GC1!",
                        "d": "Gold"
                    },
                    {
                        "s": "NYMEX:CL1!",
                        "d": "Crude Oil"
                    },
                    {
                        "s": "NYMEX:NG1!",
                        "d": "Natural Gas"
                    },
                    {
                        "s": "CBOT:ZC1!",
                        "d": "Corn"
                    }
                    ],
                    "originalTitle": "Futures"
                },
                {
                    "title": "Bonds",
                    "symbols": [
                    {
                        "s": "CME:GE1!",
                        "d": "Eurodollar"
                    },
                    {
                        "s": "CBOT:ZB1!",
                        "d": "T-Bond"
                    },
                    {
                        "s": "CBOT:UB1!",
                        "d": "Ultra T-Bond"
                    },
                    {
                        "s": "EUREX:FGBL1!",
                        "d": "Euro Bund"
                    },
                    {
                        "s": "EUREX:FBTP1!",
                        "d": "Euro BTP"
                    },
                    {
                        "s": "EUREX:FGBM1!",
                        "d": "Euro BOBL"
                    }
                    ],
                    "originalTitle": "Bonds"
                },
                {
                    "title": "Forex",
                    "symbols": [
                    {
                        "s": "FX:EURUSD",
                        "d": "EUR/USD"
                    },
                    {
                        "s": "FX:GBPUSD",
                        "d": "GBP/USD"
                    },
                    {
                        "s": "FX:USDJPY",
                        "d": "USD/JPY"
                    },
                    {
                        "s": "FX:USDCHF",
                        "d": "USD/CHF"
                    },
                    {
                        "s": "FX:AUDUSD",
                        "d": "AUD/USD"
                    },
                    {
                        "s": "FX:USDCAD",
                        "d": "USD/CAD"
                    }
                    ],
                    "originalTitle": "Forex"
                }
                ]
            }
          </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
    </article>
    <article class="data">
      <div class="data_leaders">
        <div class="graph-standart_header">
          <h2>Market leaders</h2>
          <p>Make fast trading decisions with market leader metrics.</p>
        </div>

        <div class="data_leaders-graph">
          <!-- TradingView Widget BEGIN -->
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
      </div>
      <div class="data_fundamental">
        <div class="graph-standart_header">
          <h2>Fundamental Data</h2>
          <p>
            Kick the tires on the fundamentals with this deep dive into how
            a company is doing beyond simply its stock price.
          </p>
        </div>
        <div class="data_fundamental-graph">
          <!-- TradingView Widget BEGIN -->
          <div class="tradingview-widget-container">
            <div class="tradingview-widget-container__widget"></div>
            <script
              type="text/javascript"
              src="https://s3.tradingview.com/external-embedding/embed-widget-financials.js"
              async
            >
                  {
                  "colorTheme": "light",
                  "isTransparent": false,
                  "largeChartUrl": "",
                  "displayMode": "regular",
                  "width": "100%",
                  "height": "100%",
                  "symbol": "NASDAQ:AAPL",
                  "locale": "en"
              }
            </script>
          </div>
          <!-- TradingView Widget END -->
        </div>
      </div>
    </article>
    <article class="real-time graph-standart">
      <div class="graph-standart_header">
        <h2>Real-time trading charts</h2>
        <p>
          Use the main tool of traders - technical analysis on the chart of
          a financial instrument.
        </p>
      </div>
      <div class="real-time_graph graph-standart_graph">
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div id="tradingview_57644"></div>
          <script
            type="text/javascript"
            src="https://s3.tradingview.com/tv.js"
          ></script>
          <script type="text/javascript">
            new TradingView.widget({
              width: '100%',
              height: '100%',
              symbol: 'NASDAQ:AAPL',
              interval: 'D',
              timezone: 'Etc/UTC',
              theme: 'light',
              style: '1',
              locale: 'en',
              toolbar_bg: '#f1f3f6',
              enable_publishing: false,
              allow_symbol_change: true,
              container_id: 'tradingview_57644',
            })
          </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
    </article>
  </section>
  <section class="repeated_2 analytic_baner_new">
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
