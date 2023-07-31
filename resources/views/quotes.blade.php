@extends('layouts.main')
@section('content')
    <div class="main_section  w-full">
        <div class="container min-h-full flex">
            <div class=" grow flex justify-between gap-[45px]">
                <x-sidebar></x-sidebar>
                <div class="section_info flex flex-col">
                    <h1>Котировки</h1>

                    <div class="indexes">
                        <h2>Индексы</h2>

                        <!-- TradingView Widget BEGIN -->
                        <div class="tradingview-widget-container mt-4">
                            <div class="tradingview-widget-container__widget"></div>
                            <div class="tradingview-widget-copyright"><a href="https://ru.tradingview.com/"
                                                                         rel="noopener nofollow" target="_blank"><span
                                        class="blue-text">Следите за рынками на TradingView</span></a></div>
                            <script type="text/javascript"
                                    src="https://s3.tradingview.com/external-embedding/embed-widget-market-quotes.js"
                                    async>
                                {
                                    "width"
                                :
                                    "100%",
                                        "height"
                                :
                                    "600",
                                        "symbolsGroups"
                                :
                                    [
                                        {
                                            "name": "Индексы",
                                            "originalName": "Indices",
                                            "symbols": [
                                                {
                                                    "name": "FOREXCOM:SPXUSD",
                                                    "displayName": "S&P 500"
                                                },
                                                {
                                                    "name": "FOREXCOM:NSXUSD",
                                                    "displayName": "US 100"
                                                },
                                                {
                                                    "name": "FOREXCOM:DJI",
                                                    "displayName": "Dow 30"
                                                },
                                                {
                                                    "name": "INDEX:NKY",
                                                    "displayName": "Nikkei 225"
                                                },
                                                {
                                                    "name": "INDEX:DEU40",
                                                    "displayName": "DAX Index"
                                                },
                                                {
                                                    "name": "FOREXCOM:UKXGBP",
                                                    "displayName": "UK 100"
                                                }
                                            ]
                                        },
                                        {
                                            "name": "Фьючерсы",
                                            "originalName": "Futures",
                                            "symbols": [
                                                {
                                                    "name": "CME_MINI:ES1!",
                                                    "displayName": "S&P 500"
                                                },
                                                {
                                                    "name": "CME:6E1!",
                                                    "displayName": "Euro"
                                                },
                                                {
                                                    "name": "COMEX:GC1!",
                                                    "displayName": "Gold"
                                                },
                                                {
                                                    "name": "NYMEX:CL1!",
                                                    "displayName": "Crude Oil"
                                                },
                                                {
                                                    "name": "NYMEX:NG1!",
                                                    "displayName": "Natural Gas"
                                                },
                                                {
                                                    "name": "CBOT:ZC1!",
                                                    "displayName": "Corn"
                                                }
                                            ]
                                        },
                                        {
                                            "name": "Облигации",
                                            "originalName": "Bonds",
                                            "symbols": [
                                                {
                                                    "name": "CBOT:ZB1!",
                                                    "displayName": "T-Bond"
                                                },
                                                {
                                                    "name": "CBOT:UB1!",
                                                    "displayName": "Ultra T-Bond"
                                                },
                                                {
                                                    "name": "EUREX:FGBL1!",
                                                    "displayName": "Euro Bund"
                                                },
                                                {
                                                    "name": "EUREX:FBTP1!",
                                                    "displayName": "Euro BTP"
                                                },
                                                {
                                                    "name": "EUREX:FGBM1!",
                                                    "displayName": "Euro BOBL"
                                                }
                                            ]
                                        },
                                        {
                                            "name": "Форекс",
                                            "originalName": "Forex",
                                            "symbols": [
                                                {
                                                    "name": "FX:EURUSD",
                                                    "displayName": "EUR/USD"
                                                },
                                                {
                                                    "name": "FX:GBPUSD",
                                                    "displayName": "GBP/USD"
                                                },
                                                {
                                                    "name": "FX:USDJPY",
                                                    "displayName": "USD/JPY"
                                                },
                                                {
                                                    "name": "FX:USDCHF",
                                                    "displayName": "USD/CHF"
                                                },
                                                {
                                                    "name": "FX:AUDUSD",
                                                    "displayName": "AUD/USD"
                                                },
                                                {
                                                    "name": "FX:USDCAD",
                                                    "displayName": "USD/CAD"
                                                }
                                            ]
                                        }
                                    ],
                                        "showSymbolLogo"
                                :
                                    false,
                                        "colorTheme"
                                :
                                    "light",
                                        "isTransparent"
                                :
                                    false,
                                        "locale"
                                :
                                    "ru"
                                }
                            </script>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

