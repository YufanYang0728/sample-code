<?php
echo $this->Html->script("../webroot/css/investment.js");
?>
<head>
    <!-- Custom styles for this template -->
    <link href="/webroot/css/form-validation.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .hide{
            display:none;
        }
    </style>
</head>
<body class="bg-light">

<form action="api" method="get">
    <div class="container">
        <main>
            <div class="py-5 text-center">
                <h2>Let's get to know each other</h2>
                <p class="lead">By filling in the form we will have a better understanding on how to serve you best.</p>
            </div>
            <br>
            <br>


            <form>
                <div>
                    <p class="lead">Do you own any existing investments currently?</p>
                    <select id="test" name="form_select">
                        <option value="" disabled selected>Select your option</option>
                        <option value="0">No</option>
                        <option value ="1">Yes</option>
                    </select>
                </div>
                <br>
                <br>
            </form>
            <div class="hide" id="selectNo">
                <form>

                    <div class="column">
                        <p class="lead">How much do you plan to invest?</p>
                        <input type="number" min="0" placeholder="$" id="invest" name="investment">
                    </div>

                    <br>
                    <div>

                    </div>
                    <br>
            </div>

            <br>
            <br>
</form>
<div class="hide" id="selectYes">
    <div class="form-group fieldGroup">

        <form>
            <div class="input-group">
                <div class="column">
                    <p class="name">Company Name:</p>
                    <select aria-label="Default select example" id="state" name="state" required>
                        <option value="" disabled selected>Select your option</option>
                        <option>Macquarie Investment</option>
                        <option>BT Panorama</option>
                        <option>AMP North</option>
                        <option>CFS FirstWrap</option>
                    </select>
                </div>

                <div class="column">
                    <p class="name">Investment Type:</p>
                    <select aria-label="Default select example" id="state" name="state" required>
                        <option value="" disabled selected>Select your option</option>
                        <option id='Netwealth Cash'>Netwealth Cash</option>
                        <option id='Aberdeen Actively Hedged Intl Equities'>Aberdeen Actively Hedged Intl Equities</option>
                        <option id='Aberdeen Asian Opportunities'>Aberdeen Asian Opportunities</option>
                        <option id='Aberdeen Australian Fixed Income'>Aberdeen Australian Fixed Income</option>
                        <option id='Aberdeen Australian Small Companies'>Aberdeen Australian Small Companies</option>
                        <option id='Aberdeen Diversified Fixed Income'>Aberdeen Diversified Fixed Income</option>
                        <option id='Aberdeen Emerging Opportunities'>Aberdeen Emerging Opportunities</option>
                        <option id='Aberdeen Global Government Bond'>Aberdeen Global Government Bond</option>
                        <option id='Aberdeen International Equity'>Aberdeen International Equity</option>
                        <option id='Aberdeen Multi-Asset Income'>Aberdeen Multi-Asset Income</option>
                        <option id='Acadian Wholesale Aus Equity Long Short'>Acadian Wholesale Aus Equity Long Short</option>
                        <option id='Acadian Wholesale Australian Equity'>Acadian Wholesale Australian Equity</option>
                        <option id='Acadian Wholesale Global Eqty Long Short'>Acadian Wholesale Global Eqty Long Short</option>
                        <option id='Advance Alleron Aus Equity Growth W'>Advance Alleron Aus Equity Growth W</option>
                        <option id='Allan Gray Australia Equity'>Allan Gray Australia Equity</option>
                        <option id='AMP Capital Core Infrastructure A'>AMP Capital Core Infrastructure A</option>
                        <option id='AMP Capital Core Property A'>AMP Capital Core Property A</option>
                        <option id='AMP Capital Corporate Bond A'>AMP Capital Corporate Bond A</option>
                        <option id='AMP Capital Global Property Securities A'>AMP Capital Global Property Securities A</option>
                        <option id='AMP Capital Wholesale Global Equity - Value Fund'>AMP Capital Wholesale Global Equity - Value Fund</option>
                        <option id='Antares Prof Elite Opportunities'>Antares Prof Elite Opportunities</option>
                        <option id='Antares Prof High Growth Shares'>Antares Prof High Growth Shares</option>
                        <option id='Antares Prof Listed Property'>Antares Prof Listed Property</option>
                        <option id='Antares Prof Small Companies'>Antares Prof Small Companies</option>
                        <option id='APN AREIT'>APN AREIT</option>
                        <option id='AQR WS DELTA 1F'>AQR WS DELTA 1F</option>
                        <option id='Armytage Australian Equity Income'>Armytage Australian Equity Income</option>
                        <option id='Arnhem Australian Equity'>Arnhem Australian Equity</option>
                        <option id='Arrowstreet Global Equity Hedged'>Arrowstreet Global Equity Hedged</option>
                        <option id='Aspect Diversified Futures-Class A'>Aspect Diversified Futures-Class A</option>
                        <option id='Aspen Parks Wholesale Prop'>Aspen Parks Wholesale Prop</option>
                        <option id='AUI Platypus Aust Equities Wholesale'>AUI Platypus Aust Equities Wholesale</option>
                        <option id='AUI Strategic Fixed Interest Trust - Wholesale'>AUI Strategic Fixed Interest Trust - Wholesale</option>
                        <option id='Aurora Dividend Income Trust'>Aurora Dividend Income Trust</option>
                        <option id='Aurora Fortitude Absolute Return'>Aurora Fortitude Absolute Return</option>
                        <option id='Ausbil Australian Active Equity'>Ausbil Australian Active Equity</option>
                        <option id='Ausbil Australian Emerging Leaders'>Ausbil Australian Emerging Leaders</option>
                        <option id='Ausbil Australian Geared Equity'>Ausbil Australian Geared Equity</option>
                        <option id='Ausbil MicroCap'>Ausbil MicroCap</option>
                        <option id='Aust Unity Acorn Capital Ws Microcap Tr'>Aust Unity Acorn Capital Ws Microcap Tr</option>
                        <option id='Aust Unity Wholesale Healthcare Property'>Aust Unity Wholesale Healthcare Property</option>
                        <option id='Aust Unity Wholesale Property Income'>Aust Unity Wholesale Property Income</option>
                        <option id='Australian Ethical Larger Companies B'>Australian Ethical Larger Companies B</option>
                        <option id='Australian Ethical Smaller Companies B'>Australian Ethical Smaller Companies B</option>
                        <option id='Australian Unity Altius Bond Fund'>Australian Unity Altius Bond Fund</option>
                        <option id='Bennelong Australian Equities'>Bennelong Australian Equities</option>
                        <option id='Bennelong Avoca Emerging Leaders'>Bennelong Avoca Emerging Leaders</option>
                        <option id='Bennelong Concentrated Australian Eq'>Bennelong Concentrated Australian Eq</option>
                        <option id='Bennelong ex-20 Australian Equities'>Bennelong ex-20 Australian Equities</option>
                        <option id='Bennelong Kardinia Absolute Return Fund'>Bennelong Kardinia Absolute Return Fund</option>
                        <option id='BlackRock Australian Eq Absolute Return'>BlackRock Australian Eq Absolute Return</option>
                        <option id='BlackRock Australian Eq Opportunities'>BlackRock Australian Eq Opportunities</option>
                        <option id='BlackRock Global Allocation Aus D'>BlackRock Global Allocation Aus D</option>
                        <option id='BlackRock Indexed Aus Listed Property'>BlackRock Indexed Aus Listed Property</option>
                        <option id='BlackRock Indexed Australian Bond'>BlackRock Indexed Australian Bond</option>
                        <option id='BlackRock Indexed Australian Equity Fund'>BlackRock Indexed Australian Equity Fund</option>
                        <option id='BlackRock Indexed Hedged Intl Equity'>BlackRock Indexed Hedged Intl Equity</option>
                        <option id='BlackRock Indexed Int Equity Fund'>BlackRock Indexed Int Equity Fund</option>
                        <option id='BlackRock Scientific Global Markets'>BlackRock Scientific Global Markets</option>
                        <option id='BlackRock W Monthly Income D'>BlackRock W Monthly Income D</option>
                        <option id='BlackRock WS Australian Share'>BlackRock WS Australian Share</option>
                        <option id='BlackRock WS Global Small Capital'>BlackRock WS Global Small Capital</option>
                        <option id='BlackRock WS Hedged Global Small Capital'>BlackRock WS Hedged Global Small Capital</option>
                        <option id='Blue Sky Apeiron Global Macro A'>Blue Sky Apeiron Global Macro A</option>
                        <option id='BNY Mellon Global Alpha A'>BNY Mellon Global Alpha A</option>
                        <option id='BT Imputation Shr WS'>BT Imputation Shr WS</option>
                        <option id='BT Wholesale Property Securities Fund'>BT Wholesale Property Securities Fund</option>
                        <option id='Capital International Global Equity'>Capital International Global Equity</option>
                        <option id='Capital International Global Equity Hgd'>Capital International Global Equity Hgd</option>
                        <option id='Celeste Australian Small Companies'>Celeste Australian Small Companies</option>
                        <option id='CFS Global Soft Commodity Share'>CFS Global Soft Commodity Share</option>
                        <option id='CFS Wholesale Australian Share-Core'>CFS Wholesale Australian Share-Core</option>
                        <option id='CFS Wholesale Colliers Glb Property Sec'>CFS Wholesale Colliers Glb Property Sec</option>
                        <option id='CFS Wholesale Enhanced Yield'>CFS Wholesale Enhanced Yield</option>
                        <option id='CFS Wholesale Equity Income'>CFS Wholesale Equity Income</option>
                        <option id='CFS Wholesale Geared Share'>CFS Wholesale Geared Share</option>
                        <option id='CFS Wholesale Global Credit Income'>CFS Wholesale Global Credit Income</option>
                        <option id='CFS Wholesale Global Resources'>CFS Wholesale Global Resources</option>
                        <option id='CFS Wholesale Imputation'>CFS Wholesale Imputation</option>
                        <option id='CFS WS Glb Listed Infrastructure'>CFS WS Glb Listed Infrastructure</option>
                        <option id='Challenger GIF 5.60 cents pa 30 Jun 2015'>Challenger GIF 5.60 cents pa 30 Jun 2015</option>
                        <option id='Challenger Guaranteed Pen - 30 June 2017'>Challenger Guaranteed Pen - 30 June 2017</option>
                        <option id='Challenger Guaranteed Pen - 30 June 2021'>Challenger Guaranteed Pen - 30 June 2021</option>
                        <option id='Clime Australian Value WS'>Clime Australian Value WS</option>
                        <option id='Cromwell Phoenix Property Securities'>Cromwell Phoenix Property Securities</option>
                        <option id='DDH Global Fixed Interest Alpha'>DDH Global Fixed Interest Alpha</option>
                        <option id='DWS Global Equity Agribusiness'>DWS Global Equity Agribusiness</option>
                        <option id='Eley Griffiths Group Small Companies'>Eley Griffiths Group Small Companies</option>
                        <option id='EQT Intrinsic Value Intl Sharemarkets'>EQT Intrinsic Value Intl Sharemarkets</option>
                        <option id='EQT SGH LaSalle Global Listed Prop Secs'>EQT SGH LaSalle Global Listed Prop Secs</option>
                        <option id='EQT SGH Wholesale Prop Income'>EQT SGH Wholesale Prop Income</option>
                        <option id='EQT Wholesale Flagship Fund'>EQT Wholesale Flagship Fund</option>
                        <option id='Fidelity Asia Fund'>Fidelity Asia Fund</option>
                        <option id='Fidelity Australian Equities'>Fidelity Australian Equities</option>
                        <option id='Fidelity China'>Fidelity China</option>
                        <option id='Fidelity Global Equities'>Fidelity Global Equities</option>
                        <option id='Fidelity India'>Fidelity India</option>
                        <option id='Fiducian India Fund'>Fiducian India Fund</option>
                        <option id='Firstmac High Livez'>Firstmac High Livez</option>
                        <option id='Franklin Templeton Multisector Bond W'>Franklin Templeton Multisector Bond W</option>
                        <option id='GaveKal Asian Opportunities Fund'>GaveKal Asian Opportunities Fund</option>
                        <option id='Goldman Sachs Australian Equities WS'>Goldman Sachs Australian Equities WS</option>
                        <option id='Goldman Sachs Core Plus Aus Fix Inc-Ord'>Goldman Sachs Core Plus Aus Fix Inc-Ord</option>
                        <option id='Goldman Sachs International WS'>Goldman Sachs International WS</option>
                        <option id='Grant Samuel Epoch Gbl Eq Shldr Yld Hgd'>Grant Samuel Epoch Gbl Eq Shldr Yld Hgd</option>
                        <option id='Grant Samuel Epoch Gbl Eq Shldr Yld Uhgd'>Grant Samuel Epoch Gbl Eq Shldr Yld Uhgd</option>
                        <option id='Grant Samuel Tribeca Alpha Plus'>Grant Samuel Tribeca Alpha Plus</option>
                        <option id='GVI Aubrey Global Growth & Income Hedged'>GVI Aubrey Global Growth & Income Hedged</option>
                        <option id='Hunter Hall Australian Value Trust'>Hunter Hall Australian Value Trust</option>
                        <option id='Hunter Hall Global Deep Green Trust'>Hunter Hall Global Deep Green Trust</option>
                        <option id='Hunter Hall Global Ethical Trust'>Hunter Hall Global Ethical Trust</option>
                        <option id='Hunter Hall Value Growth Trust'>Hunter Hall Value Growth Trust</option>
                        <option id='Hyperion Australian Growth Companies'>Hyperion Australian Growth Companies</option>
                        <option id='Hyperion Small Growth Companies'>Hyperion Small Growth Companies</option>
                        <option id='Ibbotson Diversified Alternatives Trust'>Ibbotson Diversified Alternatives Trust</option>
                        <option id='Ibbotson Dynamic Growth Trust'>Ibbotson Dynamic Growth Trust</option>
                        <option id='Ibbotson Dynamic Income Trust'>Ibbotson Dynamic Income Trust</option>
                        <option id='IFP Global Franchise'>IFP Global Franchise</option>
                        <option id='IFP Global Franchise Fund (Hedged)'>IFP Global Franchise Fund (Hedged)</option>
                        <option id='Integrity Australian Share'>Integrity Australian Share</option>
                        <option id='Invesco W Aust Smaller Companies - Class A'>Invesco W Aust Smaller Companies - Class A</option>
                        <option id='Invesco WS Asian Consumer Demand'>Invesco WS Asian Consumer Demand</option>
                        <option id='Invesco WS Australian Share'>Invesco WS Australian Share</option>
                        <option id='Invesco WS Global Matrix Hedged - Class A'>Invesco WS Global Matrix Hedged - Class A</option>
                        <option id='Invesco WS Global Matrix Unhedged'>Invesco WS Global Matrix Unhedged</option>
                        <option id='Invesco WS Global Property Secs Hgd A'>Invesco WS Global Property Secs Hgd A</option>
                        <option id='Investors Mutual WS Australian Share'>Investors Mutual WS Australian Share</option>
                        <option id='Investors Mutual WS Future Leaders'>Investors Mutual WS Future Leaders</option>
                        <option id='Ironbark Karara Australian Small Comp'>Ironbark Karara Australian Small Comp</option>
                        <option id='K2 Asian Absolute Return'>K2 Asian Absolute Return</option>
                        <option id='K2 Australian Absolute Return'>K2 Australian Absolute Return</option>
                        <option id='K2 Select International Absolute Return'>K2 Select International Absolute Return</option>
                        <option id='La Trobe Aust Mortgage Pooled Mortgage'>La Trobe Aust Mortgage Pooled Mortgage</option>
                        <option id='Legg Mason Aus Bond Trust A'>Legg Mason Aus Bond Trust A</option>
                        <option id='Legg Mason Aust Value Equity Tr A'>Legg Mason Aust Value Equity Tr A</option>
                        <option id='Legg Mason Australian Real Income Fund'>Legg Mason Australian Real Income Fund</option>
                        <option id='Legg Mason Global Multi Sector Bond Tr A'>Legg Mason Global Multi Sector Bond Tr A</option>
                        <option id='LHP Diversified Investments HR'>LHP Diversified Investments HR</option>
                        <option id='LHP Diversified Investments HW'>LHP Diversified Investments HW</option>
                        <option id='LHP Global Long/Short HW'>LHP Global Long/Short HW</option>
                        <option id='Macquarie Asia New Stars No.1'>Macquarie Asia New Stars No.1</option>
                        <option id='Macquarie High Conviction'>Macquarie High Conviction</option>
                        <option id='Macquarie Income Opportunities'>Macquarie Income Opportunities</option>
                        <option id='Macquarie International Infra Ses'>Macquarie International Infra Ses</option>
                        <option id='Macquarie Master Diversified Fixed Int'>Macquarie Master Diversified Fixed Int</option>
                        <option id='Magellan Global'>Magellan Global</option>
                        <option id='Magellan Infrastructure'>Magellan Infrastructure</option>
                        <option id='Man AHL Alpha (AUD)'>Man AHL Alpha (AUD)</option>
                        <option id='Maple-Brown Abbott Aus Geared Eq W'>Maple-Brown Abbott Aus Geared Eq W</option>
                        <option id='Maple-Brown Abbott Imputation Wholesale'>Maple-Brown Abbott Imputation Wholesale</option>
                        <option id='Maxim Property Securities'>Maxim Property Securities</option>
                        <option id='MFS Concentrated Global Equity Trust Institutional'>MFS Concentrated Global Equity Trust Institutional</option>
                        <option id='MFS Global Equity Trust'>MFS Global Equity Trust</option>
                        <option id='Naos Emerging Companies Long Short Equities Fund'>Naos Emerging Companies Long Short Equities Fund</option>
                        <option id='netwealth Active Balanced Fund'>netwealth Active Balanced Fund</option>
                        <option id='netwealth Active Conservative Fund'>netwealth Active Conservative Fund</option>
                        <option id='netwealth Active Growth Fund'>netwealth Active Growth Fund</option>
                        <option id='netwealth Active High Growth Fund'>netwealth Active High Growth Fund</option>
                        <option id='netwealth Australian Bond Index Fund'>netwealth Australian Bond Index Fund</option>
                        <option id='netwealth Australian Equities Index Fund'>netwealth Australian Equities Index Fund</option>
                        <option id='netwealth Australian Property Index Fund'>netwealth Australian Property Index Fund</option>
                        <option id='netwealth Index Opportunities Balanced Fund'>netwealth Index Opportunities Balanced Fund</option>
                        <option id='netwealth Index Opportunities Conservative Fund'>netwealth Index Opportunities Conservative Fund</option>
                        <option id='netwealth Index Opportunities Growth Fund'>netwealth Index Opportunities Growth Fund</option>
                        <option id='netwealth International Equities Index Fund'>netwealth International Equities Index Fund</option>
                        <option id='OC Dynamic Equity'>OC Dynamic Equity</option>
                        <option id='OC Premium Small Companies Fund'>OC Premium Small Companies Fund</option>
                        <option id='Patersons Australian Equity'>Patersons Australian Equity</option>
                        <option id='Patersons Australian Resources Opp'>Patersons Australian Resources Opp</option>
                        <option id='Pengana Asia Special Events Fund'>Pengana Asia Special Events Fund</option>
                        <option id='Pengana Aus Equities Market Neutral A'>Pengana Aus Equities Market Neutral A</option>
                        <option id='Pengana Australian Equities'>Pengana Australian Equities</option>
                        <option id='Pengana Emerging Companies'>Pengana Emerging Companies</option>
                        <option id='Pengana Global Resources'>Pengana Global Resources</option>
                        <option id='Perennial Global Shares High Alpha Trust'>Perennial Global Shares High Alpha Trust</option>
                        <option id='Perennial Growth Shares Wholesale Trust'>Perennial Growth Shares Wholesale Trust</option>
                        <option id='Perennial Hedged Glbl Prpty Wholesale Tr'>Perennial Hedged Glbl Prpty Wholesale Tr</option>
                        <option id='Perennial Tactical Income Trust'>Perennial Tactical Income Trust</option>
                        <option id='Perennial Value Shares Wholesale Trust'>Perennial Value Shares Wholesale Trust</option>
                        <option id='Perennial Value Smaller Companies Trust'>Perennial Value Smaller Companies Trust</option>
                        <option id='Perpetual W Share Plus L/S'>Perpetual W Share Plus L/S</option>
                        <option id='Perpetual Wholesale Australian'>Perpetual Wholesale Australian</option>
                        <option id='Perpetual Wholesale Balanced Growth'>Perpetual Wholesale Balanced Growth</option>
                        <option id='Perpetual Wholesale Concentrated Equity'>Perpetual Wholesale Concentrated Equity</option>
                        <option id='Perpetual Wholesale Diversified Income'>Perpetual Wholesale Diversified Income</option>
                        <option id='Perpetual Wholesale Ethical SRI'>Perpetual Wholesale Ethical SRI</option>
                        <option id='Perpetual Wholesale Geared Australian'>Perpetual Wholesale Geared Australian</option>
                        <option id='Perpetual Wholesale Industrial'>Perpetual Wholesale Industrial</option>
                        <option id='Perpetual Wholesale International Share'>Perpetual Wholesale International Share</option>
                        <option id='Perpetual Wholesale Smaller Companies'>Perpetual Wholesale Smaller Companies</option>
                        <option id='PIMCO EQT Wholesale Global Bond'>PIMCO EQT Wholesale Global Bond</option>
                        <option id='PIMCO EQT WS Diversified Fixed Interest'>PIMCO EQT WS Diversified Fixed Interest</option>
                        <option id='Platinum Asia'>Platinum Asia</option>
                        <option id='Platinum International'>Platinum International</option>
                        <option id='Platinum International Brands'>Platinum International Brands</option>
                        <option id='Platinum Unhedged'>Platinum Unhedged</option>
                        <option id='Plato Australian Shares Income Fund'>Plato Australian Shares Income Fund</option>
                        <option id='PM Capital Absolute Performance'>PM Capital Absolute Performance</option>
                        <option id='PM Capital Enhanced Yield'>PM Capital Enhanced Yield</option>
                        <option id='Premium Asia'>Premium Asia</option>
                        <option id='Premium China'>Premium China</option>
                        <option id='Premium SAM Asia Property'>Premium SAM Asia Property</option>
                        <option id='Prime Value Growth B'>Prime Value Growth B</option>
                        <option id='Prime Value Imputation B'>Prime Value Imputation B</option>
                        <option id='Principal Global Credit Opportunities Fund'>Principal Global Credit Opportunities Fund</option>
                        <option id='RARE Infrastructure Value'>RARE Infrastructure Value</option>
                        <option id='RARE Series Emerging Markets'>RARE Series Emerging Markets</option>
                        <option id='Realindex Aus Small Companies-Class A'>Realindex Aus Small Companies-Class A</option>
                        <option id='Realindex Australian Share-Class A'>Realindex Australian Share-Class A</option>
                        <option id='Realindex Global Share Hedged-Class A'>Realindex Global Share Hedged-Class A</option>
                        <option id='Realindex Global Share-Class A'>Realindex Global Share-Class A</option>
                        <option id='Resolution Capital Global Property Secs'>Resolution Capital Global Property Secs</option>
                        <option id='RFM StockBank'>RFM StockBank</option>
                        <option id='Russell Balanced A'>Russell Balanced A</option>
                        <option id='Russell Conservative A'>Russell Conservative A</option>
                        <option id='Russell Diversified 50 A'>Russell Diversified 50 A</option>
                        <option id='Russell Growth A'>Russell Growth A</option>
                        <option id='Russell High Growth A'>Russell High Growth A</option>
                        <option id='Schroder Credit Securities'>Schroder Credit Securities</option>
                        <option id='Schroder Fixed Income'>Schroder Fixed Income</option>
                        <option id='Schroder Global Active Value Hedged'>Schroder Global Active Value Hedged</option>
                        <option id='Schroder Real Return Fund WS Class'>Schroder Real Return Fund WS Class</option>
                        <option id='Schroder WS Australian Equity'>Schroder WS Australian Equity</option>
                        <option id='Select Alternatives Portfolio'>Select Alternatives Portfolio</option>
                        <option id='SGH ICE'>SGH ICE</option>
                        <option id='SGH20'>SGH20</option>
                        <option id='Solaris Core Australian Equity Fund PA'>Solaris Core Australian Equity Fund PA</option>
                        <option id='T. Rowe Price Asia ex-Japan'>T. Rowe Price Asia ex-Japan</option>
                        <option id='T. Rowe Price Global Equity'>T. Rowe Price Global Equity</option>
                        <option id='TAAM New Asia'>TAAM New Asia</option>
                        <option id='TD St George 4.05% 6 Months-Monthly Int 25/11/2013'>TD St George 4.05% 6 Months-Monthly Int 25/11/2013</option>
                        <option id='TD St George 4.20% 3 Year-Annual Int 24/05/2016'>TD St George 4.20% 3 Year-Annual Int 24/05/2016</option>
                        <option id='Templeton Global Equity'>Templeton Global Equity</option>
                        <option id='Term Deposit Investec 4.15% 26/05/2014'>Term Deposit Investec 4.15% 26/05/2014</option>
                        <option id='Term Deposit Investec 4.20% 25/11/2013'>Term Deposit Investec 4.20% 25/11/2013</option>
                        <option id='Term Deposit Investec 4.20% 26/08/2013'>Term Deposit Investec 4.20% 26/08/2013</option>
                        <option id='Term Deposit NAB 4.00% 25/11/2013'>Term Deposit NAB 4.00% 25/11/2013</option>
                        <option id='Term Deposit NAB 4.00% 26/05/2014'>Term Deposit NAB 4.00% 26/05/2014</option>
                        <option id='Term Deposit NAB 4.00% 26/08/2013'>Term Deposit NAB 4.00% 26/08/2013</option>
                        <option id='Term Deposit St George 4.05% 12 Months 26/05/2014'>Term Deposit St George 4.05% 12 Months 26/05/2014</option>
                        <option id='Term Deposit St George 4.10% 3 Months 26/08/2013'>Term Deposit St George 4.10% 3 Months 26/08/2013</option>
                        <option id='Threadneedle Global Equity'>Threadneedle Global Equity</option>
                        <option id='Tyndall Australian Bond'>Tyndall Australian Bond</option>
                        <option id='Tyndall Australian Share Income'>Tyndall Australian Share Income</option>
                        <option id='Tyndall Australian Share W Portfolio'>Tyndall Australian Share W Portfolio</option>
                        <option id='UBS Clarion Global Property Securities I'>UBS Clarion Global Property Securities I</option>
                        <option id='UBS Diversified Fixed Income'>UBS Diversified Fixed Income</option>
                        <option id='UBS-HALO Australian Share Fund'>UBS-HALO Australian Share Fund</option>
                        <option id='Vanguard Australian Fixed Interest Index'>Vanguard Australian Fixed Interest Index</option>
                        <option id='Vanguard Australian Shares High Yield'>Vanguard Australian Shares High Yield</option>
                        <option id='Vanguard Australian Shares Index'>Vanguard Australian Shares Index</option>
                        <option id='Vanguard Balanced Index Fund'>Vanguard Balanced Index Fund</option>
                        <option id='Vanguard Conservative Index'>Vanguard Conservative Index</option>
                        <option id='Vanguard Diversified Bond Index'>Vanguard Diversified Bond Index</option>
                        <option id='Vanguard Emerging Markets Shares Index'>Vanguard Emerging Markets Shares Index</option>
                        <option id='Vanguard Global Infrastructure'>Vanguard Global Infrastructure</option>
                        <option id='Vanguard Global Infrastructure Hedged'>Vanguard Global Infrastructure Hedged</option>
                        <option id='Vanguard Growth Index Fund'>Vanguard Growth Index Fund</option>
                        <option id='Vanguard High Growth Index'>Vanguard High Growth Index</option>
                        <option id='Vanguard Int Property Secs Idx (Hdgd)'>Vanguard Int Property Secs Idx (Hdgd)</option>
                        <option id='Vanguard Int Property Securities Index'>Vanguard Int Property Securities Index</option>
                        <option id='Vanguard International Shares Index'>Vanguard International Shares Index</option>
                        <option id='Vanguard International Shares Index Hgd'>Vanguard International Shares Index Hgd</option>
                        <option id='Vanguard Intl Credit Secs Index Hgd'>Vanguard Intl Credit Secs Index Hgd</option>
                        <option id='Vanguard Property Securities Index'>Vanguard Property Securities Index</option>
                        <option id='Walter Scott Emerging Markets'>Walter Scott Emerging Markets</option>
                        <option id='Walter Scott Global Equity'>Walter Scott Global Equity</option>
                        <option id='Walter Scott Global Equity Hedged'>Walter Scott Global Equity Hedged</option>
                        <option id='Wilson HTM Priority Growth'>Wilson HTM Priority Growth</option>
                        <option id='Wingate Global Equity W'>Wingate Global Equity W</option>
                        <option id='Winton Global Alpha'>Winton Global Alpha</option>
                        <option id='Zurich Investments Aus Property Secs'>Zurich Investments Aus Property Secs</option>
                        <option id='Zurich Investments Equity Income'>Zurich Investments Equity Income</option>
                        <option id='Zurich Investments Gbl Thematic Shr'>Zurich Investments Gbl Thematic Shr</option>
                        <option id='Zurich Investments Global Equity Income Fund'>Zurich Investments Global Equity Income Fund</option>
                        <option id='Zurich Investments Global Property Sec'>Zurich Investments Global Property Sec</option>
                        <option id='Zurich Investments Hgd Gbl Thematic Shr'>Zurich Investments Hgd Gbl Thematic Shr</option>
                    </select>
                </div>

                <div class="column">
                    <p class="name">Amount Invested:</p>
                    <input type="number" min="0" placeholder="$" id="invested" name="invested" onkeyup="myFunction()"/>
                </div>

                <div class="input-group-addon">
                    <p> </p>
                    <br>
                    <a href="javascript:void(0)" class="btn btn-success addMore"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span> + </a>
                </div>
            </div>
        </form>
    </div>



    <!-- copy of input fields group -->
    <div class="form-group fieldGroupCopy" style="display: none;">
        <div class="input-group">
            <div class="column">
                <select aria-label="Default select example" id="state" name="state" required>
                    <option value="" disabled selected>Select your option</option>
                    <option>NSW</option>
                    <option>Vic</option>
                    <option>Qld</option>
                    <option>SA</option>
                    <option>WA</option>
                    <option>Tas</option>
                    <option>NT</option>
                    <option>ACT</option>
                </select>
            </div>

            <div class="column">
                <select aria-label="Default select example" id="state" name="state" required>
                    <option value="" disabled selected>Select your option</option>
                    <option>NSW</option>
                    <option>Vic</option>
                    <option>Qld</option>
                    <option>SA</option>
                    <option>WA</option>
                    <option>Tas</option>
                    <option>NT</option>
                    <option>ACT</option>
                </select>
            </div>

            <div class="column">
                <input type="number" min="0" placeholder="$" id="invested" name="invested">
            </div>

            <div class="input-group-addon">
                <a href="javascript:void(0)" class="btn btn-danger remove"><span class="glyphicon glyphicon glyphicon-remove" aria-hidden="true"></span> - </a>
            </div>
        </div>
    </div>
</div>

<div>
    <p>This is your total amount:<input type="text" value="" id="output"></p>
</div>


<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Risk Profile</h2>
            <h3 class="section-subheading text-muted">Please complete the questionnaire</h3>
        </div>
        <div id="questionnaire-card" class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-around pb-3">
                        <div class="col-auto col-md-10 align-self-center">
                            <h5 id="section-title" class="card-title text-center">Card title</h5>
                            <h6 id="section-subtitle" class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
                        </div>
                        <div class="col-6 col-md-1 order-md-first align-self-center" >
                            <div class="d-grid gap-2">
                                <a id="prevBtnTop" class="btn btn-secondary" onclick="onPrevious();" role="button">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-1 order-last align-self-center">
                            <div class="d-grid gap-2">
                                <a id="nextBtnTop" class="btn btn-primary" onclick="onNext();" role="button">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-6 align-content-center">
                            <div class="d-flex justify-content-center">
                                <div id="section-input" class="col">
                                    <!-- QUESTION INPUT WILL APPEAR HERE -->
                                </div>
                            </div>
                            <a id="submit-button" style="display:none" class="btn btn-primary mt-3" onclick="showResults()">Submit complete questionnaire</a>
                        </div>

                        <div class="d-grid gap-2 pt-5">
                            <div class="btn-group">
                                <a id="prevBtnBottom" class="btn btn-secondary disabled" onclick="onPrevious();">
                                    <i class="fas fa-chevron-left"></i>
                                </a>
                                <a id="nextBtnBottom" class="btn btn-primary" onclick="onNext();">
                                    <i class="fas fa-chevron-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="result-card" style="display: none" class="card">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12 mx-auto">
                            <h5 id="result-title" class="card-title text-center">Card title</h5>
                            <h6 id="result-subtitle" class="card-subtitle mb-2 text-muted text-center">Card subtitle</h6>
                            <div class="col-md-6 mx-auto py-5">
                                <h2 id="result-investorprofile" class="text-center">Investor profile</h2>
                                <h6 id="result-benchmarkassetmix" class="text-center text-muted">Benchmark asset mix</h6>
                                <p id="result-investorprofiledesc" class="text-center text-muted">Investor profile description</p>
                            </div>
                            <div class="d-grid gap-2 col-md-6 mx-auto">
                                <button type="button" class="btn btn-secondary" onclick="">Let me manage my investments myself</button>
                                <button type="button" class="btn btn-primary mt-1" onclick="">Manage my investing for me</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

</body>
<?= $this->Html->script('questionnaire.js') ?>
<script>
    var questionnaire = new Questionnaire('risk-profile', 'Risk Profile', 'Used to understand your investing expectations and risk appetite');

    var question = new Question("investment-term",
        new SelectMenu("investment-term", "investment term", "Please select an answer...", [
            new SelectOption(10,"Less than 12 months", false),
            new SelectOption(20,"Between 1 and 3 years", false),
            new SelectOption(30,"Between 3 and 5 years", false),
            new SelectOption(40,"Between 5 and 7 years", false),
            new SelectOption(50,"Longer than 7 years", false)
        ])
    );
    var section = new Section("investment-term", "Question 1", "For how long would you expect most of your money to be invested before you would need to access it?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    question = new Question("return-expectation",
        new SelectMenu("return-expectation", "return expectation", "Please select an answer...", [
            new SelectOption(10,"A reasonable return without losing any capital", false),
            new SelectOption(20,"1-3%", false),
            new SelectOption(30,"4-6%", false),
            new SelectOption(40,"7-9%", false),
            new SelectOption(50,"Over 9%", false)
        ])
    );
    var section = new Section("return-expectation", "Question 2", "If you consider current interest rates what overall level of return (after inflation) do you reasonably expect to achieve from your investments over the period you wish to invest for?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    question = new Question("poorly-performing-cash-in",
        new SelectMenu("poorly-performing-cash-in", "poorly performing cash in", "Please select an answer...", [
            new SelectOption(0,"You would cash it in if there was any loss in value", false),
            new SelectOption(10,"Less than 1 year", false),
            new SelectOption(20,"Up to 3 years", false),
            new SelectOption(30,"Up to 5 years", false),
            new SelectOption(40,"Up to 7 years", false),
            new SelectOption(50,"Up to 10 years", false)
        ])
    );
    var section = new Section("poorly-performing-cash-in", "Question 3", "Assuming you had no need for capital, how long would you allow a poorly performing investment to continue before cashing it in (assuming the poor performance was mainly due to market influences)?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    question = new Question("investment-experience",
        new SelectMenu("investment-experience", "investment-experience", "Please select an answer...", [
            new SelectOption(10,"Very little understanding or interest", false),
            new SelectOption(20,"Not very familiar", false),
            new SelectOption(30,"Have had enough experience to understand the importance of diversification", false),
            new SelectOption(40,"I understand that markets may fluctuate and that different market sectors offer different income, growth and taxation characteristics.", false),
            new SelectOption(50,"I am experienced with all investment classes and understand the various factors that may influence performance.", false)
        ])
    );
    var section = new Section("investment-experience", "Question 4", "How familiar are you with investment markets?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    question = new Question("tax-efficiency",
        new SelectMenu("tax-efficiency", "tax efficiency", "Please select an answer...", [
            new SelectOption(10,"Preferably guaranteed returns, ahead of tax-savings", false),
            new SelectOption(20,"Stable, reliable returns with minimal tax savings", false),
            new SelectOption(30,"Some variability in returns, some tax savings", false),
            new SelectOption(40,"Moderate variability in returns, reasonable tax savings", false),
            new SelectOption(50,"Higher variability but potentially higher returns, maximising tax savings", false)
        ])
    );
    var section = new Section("tax-efficiency", "Question 5", "There is generally a greater tax efficiency when investing in more volatile investments. With this in mind, which of the following would you be more comfortable with?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    question = new Question("paper-hands",
        new SelectMenu("paper-hands", "portfolio decrease scenario", "Please select an answer...", [
            new SelectOption(10,"Horror – Security of your capital is critical and you do not intend to take risks.", false),
            new SelectOption(20,"You would cut your losses and transfer your funds to more secure investment sectors.", false),
            new SelectOption(30,"You would be concerned, but would wait to see if the investments improve.", false),
            new SelectOption(40,"This was a risk you understood – you would leave your investments in place expecting performance to improve.", false),
            new SelectOption(50,"You would invest more funds to take advantage of the lower unit/share prices expecting future growth.", false)
        ])
    );
    var section = new Section("paper-hands", "Question 6", "What would your reaction be if six months after placing your investments, you discovered that due mainly to market conditions your portfolio had decreased in value by 20%?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    question = new Question("investing-purpose",
        new SelectMenu("investing-purpose", "investment purpose", "Please select an answer...", [
            new SelectOption(50,"You have an investment time frame of over 5 years. You understand investment markets and are mainly investing for growth to accumulate long-term wealth, or are prepared to use aggressive investments to provide income.", false),
            new SelectOption(40,"You are not nearing retirement, have surplus funds to invest and are aiming to accumulate long term wealth from a balanced portfolio.", false),
            new SelectOption(30,"You have a lump sum (eg inheritance or a superannuation rollover payment from your employer) and you are uncertain about what sort of investment alternatives are available.", false),
            new SelectOption(20,"You are nearing retirement and you are investing to ensure you have sufficient funds available to enjoy your retirement.", false),
            new SelectOption(20,"You have some specific objectives within the next 5 years for which you want to accumulate sufficient funds.", false),
            new SelectOption(10,"You want to provide a regular income and/or totally protect the value of your investment capital.", false)
        ])
    );
    var section = new Section("investing-purpose", "Question 7", "Which of the following best describes your purpose for investing?")
    section.addQuestion(question);
    questionnaire.addSection(section);

    var section = new Section("additional-notes", "Additional question", "Please note your preference for higher risk returns in relation to protecting your investment.")
    var conditionalQuestion = new Question("additional-notes",
        new InputField("additional-question", "text", "Enter your response here", "...", true),
        false //required if not skipped
    );
    section.addQuestion(conditionalQuestion);
    questionnaire.addSection(section);

    questionnaire.getCurrentSection().show();

    function shouldConditionalQuestionBeSkipped() {
        if (calculateTotalScore() > 100 && (questionnaire.getAnswerByQuestionId("return-expectation") == 10 || questionnaire.getAnswerByQuestionId("poorly-performing-cash-in") == 0 || questionnaire.getAnswerByQuestionId("paper-hands") == 10 || questionnaire.getAnswerByQuestionId("investing-purpose") == 10)) {
            return false;
        } else {
            return true;
        }
    }

    function calculateTotalScore() {
        var total = 0;
        total += parseFloat(questionnaire.getAnswerByQuestionId("investment-term"));
        total += parseFloat(questionnaire.getAnswerByQuestionId("return-expectation"));
        total += parseFloat(questionnaire.getAnswerByQuestionId("poorly-performing-cash-in"));
        total += parseFloat(questionnaire.getAnswerByQuestionId("investment-experience"));
        total += parseFloat(questionnaire.getAnswerByQuestionId("tax-efficiency"));
        total += parseFloat(questionnaire.getAnswerByQuestionId("paper-hands"));
        total += parseFloat(questionnaire.getAnswerByQuestionId("investing-purpose"));
        return total;
    }

    function skipConditionalQuestion() {
        questionnaire.addSectionToSkipById("additional-notes");
    }

    function doNotSkipConditionalQuestion() {
        questionnaire.removeSectionToSkipById("additional-notes");
    }

    function onNext() {
        questionnaire.saveAnswersForCurrentSection();

        if (shouldConditionalQuestionBeSkipped()) {
            skipConditionalQuestion();
        } else {
            doNotSkipConditionalQuestion();
        }

        questionnaire.nextSection();

        if (shouldSubmitButtonBeShown()) {
            showSubmitButton();
        }
    }

    function onPrevious() {
        questionnaire.saveAnswersForCurrentSection();

        if (shouldConditionalQuestionBeSkipped()) {
            skipConditionalQuestion();
        } else {
            doNotSkipConditionalQuestion();
        }

        questionnaire.previousSection();

        if (shouldSubmitButtonBeShown()) {
            showSubmitButton();
        }
    }

    function shouldSubmitButtonBeShown() {
        return questionnaire.haveAllSectionsBeenAnswered();
    }

    function showSubmitButton() {
        var submit = document.getElementById("submit-button");
        submit.style.display = "block";
        console.log("Submit button displayed")
    }

    function onSubmit() {
        showResults();
    }

    function showResults() {

        document.getElementById("result-title").innerHTML = "Results";
        document.getElementById("result-subtitle").innerHTML = "Your responses have been saved. According to your responses, you are a:";

        var investorprofile = "";
        var investorprofiledesc = "";
        var benchmarkassetmix = "";

        const result = calculateTotalScore();
        if (result <= 100) {
            investorprofile = "Very Conservative 'Cash'";
            investorprofiledesc = "May be suitable for investors with a short-term investment horizon or a very low tolerance for risk, seeking a return similar to cash rates.";
            benchmarkassetmix = "100% Cash";
        } else if (result <= 140) {
            investorprofile = "Conservative 'Fixed Interest'";
            investorprofiledesc = "May be suitable for investors with an investment horizon of at least 3 years and a low risk tolerance, seeking higher than cash returns over the investment timeframe.";
            benchmarkassetmix = "100% Defensive";
        } else if (result <= 170) {
            investorprofile = "Moderately Conservative 'Capital Stable'";
            investorprofiledesc = "May be suitable for investors with an investment horizon of at least 3 years and a low to moderate risk tolerance, seeking regular income and the opportunity for some growth over the investment timeframe.";
            benchmarkassetmix = "70% Defensive, 30% Growth";
        } else if (result <= 200) {
            investorprofile = "Moderate 'Conservative Growth'";
            investorprofiledesc = "May be suitable for investors with an investment horizon of at least 3-5 years and a moderate risk tolerance, seeking a mix of income and growth over the investment timeframe from a well-diversified portfolio.  This strategy suits investors aiming for a return higher than what is likely from a portfolio dominated by defensive assets but who want lower volatility than what a share fund would likely generate.";
            benchmarkassetmix = "50% Defensive, 50% Growth";
        } else if (result <= 250) {
            investorprofile = "Assertive 'Balanced'";
            investorprofiledesc = "May be suitable for investors with an investment horizon of at least 5 years and a moderate risk tolerance, seeking more growth than income over the investment timeframe. This strategy suits investors aiming for a return higher than what is likely from a more defensive portfolio but who want lower volatility than what a share fund would likely generate.  ";
            benchmarkassetmix = "30% Defensive, 70% Growth";
        } else if (result <= 300) {
            investorprofile = "Moderately Aggressive 'Growth'";
            investorprofiledesc = "May be suitable for investors with an investment horizon of at least 5-7 years and a moderate to high risk tolerance, seeking a high exposure to growth assets.";
            benchmarkassetmix = "15% Defensive, 85% Growth";
        } else {
            investorprofile = "Aggressive 'Share'";
            investorprofiledesc = "May be suitable for investors with an investment horizon of at least 7 years and high risk tolerance, comfortable with a share portfolio dominated by Australian and international shares. ";
            benchmarkassetmix = "100% Growth";
        }

        document.getElementById("result-investorprofile").innerHTML = investorprofile;
        document.getElementById("result-investorprofiledesc").innerHTML = investorprofiledesc;
        document.getElementById("result-benchmarkassetmix").innerHTML = benchmarkassetmix;

        document.getElementById("result-card").style.display = "block";
        document.getElementById("questionnaire-card").style.display = "none";

        createCookie("answers", questionnaire.getQuestionsAndAnswersJSONString(), "1");

        // Function to create the cookie
        function createCookie(name, value, days) {
            var expires;

            if (days) {
                var date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = "; expires=" + date.toGMTString();
            }
            else {
                expires = "";
            }

            document.cookie = escape(name) + "=" +
                escape(value) + expires + "; path=/";
        }


    }
    $(document).ready(function(){
        //group add limit
        var maxGroup = 10;

        //add more fields group
        $(".addMore").click(function(){
            if($('body').find('.fieldGroup').length < maxGroup){
                var fieldHTML = '<div class="form-group fieldGroup">'+$(".fieldGroupCopy").html()+'</div>';
                $('body').find('.fieldGroup:last').after(fieldHTML);
            }else{
                alert('Maximum '+maxGroup+' groups are allowed.');
            }
        });

        //remove fields group
        $("body").on("click",".remove",function(){
            $(this).parents(".fieldGroup").remove();
        });
    });
    document.getElementById('test').addEventListener('change', function () {
        var style = this.value == 1 ? 'block' : 'none';
        document.getElementById('selectYes').style.display = style;
    });
    document.getElementById('test').addEventListener('change', function () {
        var style = this.value == 0 ? 'block' : 'none';
        document.getElementById('selectNo').style.display = style;
    });

</script>
