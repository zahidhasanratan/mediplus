<html>
<head>
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,900&display=swap" rel="stylesheet">
</head>
<style>
    body {
        text-align: center;
        padding: 40px 0;
    }

    h1 {
        color: #88B04B;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-weight: 900;
        font-size: 40px;
        margin-bottom: 10px;
    }
    p {
        color: #404F5E;
        font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
        font-size:20px;
        margin: 0;
    }
    i {
        color: #9ABC66;
        font-size: 100px;
        line-height: 200px;
        margin-left:-15px;
    }
    .container-box {
        background: white;
        padding: 60px;
        border-radius: 4px;
        display: inline-block;
        margin: 0 auto;
    }
</style>


<body>
<div class="container-box" style="padding:80px 0px">
    <div class="dd">
        <table width="100%" cellspacing="0" border="1">
            <tbody>
            <tr>
                <td>
                    <table style="width:100%;font-size:10px">
                        <tbody>
                        <tr>
                            <td colspan="2">
                                <table style="width:100%">
                                    <tbody>
                                    <tr>
                                        <td class="m_-4791405201879489630receipt-logo-td m_-4791405201879489630border-bottom-light" style="width:60%; border:none !important;">
                                            <img width="400px" src="data:image/png;base64,{{ base64_encode(file_get_contents(public_path('/front/images/logo.png'))) }}" class="m_-4791405201879489630receipt-logo CToWUd" alt="Logo" style="">
                                        </td>
                                        <td class="m_-4791405201879489630content-align-top m_-4791405201879489630border-bottom-light" style="width:40%;padding-left:10px; border:none !important;">
                                            <div class="m_-4791405201879489630receipt-header-name" style="font-size:12px">
                                                <b style="font-size: 16px; margin-left:50px;">DMC Day Registration 2023</b>
                                            </div>
                                            <div class="m_-4791405201879489630receipt-header-address" style="font-size:12px"></div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        <!--<tr>-->
                        <!--    <td colspan="2">&nbsp;</td>-->
                        <!--</tr>-->
                        <tr>
                            <td class="m_-4791405201879489630content-align-top m_-4791405201879489630ticket-right-section">
                                <table style="width:100%;font-size:10px;" cellspacing="0">
                                    <tbody>
                                    <tr>
                                        <td class="m_-4791405201879489630ticket-head-cc" style="font-size:15px;  border:none !important;">Code :</td>
                                        <td class="m_-4791405201879489630ticket-value-cc" style="font-size:15px;font-weight:bold;  border:none !important;"> {{ $invoice->random }}</td>
                                        <td class="m_-4791405201879489630ticket-head-cc" style="font-size:15px;  border:none !important;">Event Date:</td>
                                        <td class="m_-4791405201879489630ticket-value-cc" style="font-size:15px;font-weight:bold;  border:none !important;">10 July 2023</td>
                                    </tr>
                                    <tr>
                                        <td class="m_-4791405201879489630ticket-head-cc">Batch:</td>
                                        <td class="m_-4791405201879489630ticket-value-cc">{{ $invoice->batch }}</td>
                                        <td class="m_-4791405201879489630ticket-head-cc">Mobile :</td>
                                        <td class="m_-4791405201879489630ticket-value-cc">{{ $invoice->mobile }}</td>
                                    </tr>
                                    <tr>
                                        <td class="m_-4791405201879489630ticket-head-cc">E-mail :</td>
                                        <td class="m_-4791405201879489630ticket-value-cc">{{ $invoice->email }}</td>
                                        <td class="m_-4791405201879489630ticket-head-cc">Venue :</td>
                                        <td class="m_-4791405201879489630ticket-value-cc">
                                            <i class="m_-4791405201879489630fa m_-4791405201879489630fa-clock-o"></i> DMC
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                                <table style="width:100%;font-size:13px;margin-top:5px" border="0">
                                    <tbody>
                                    <tr>
                                        <th colspan="3">&nbsp;</th>
                                    </tr>
                                    <tr>
                                        <th style="border-bottom:1px solid #000000;padding-bottom:5px">Participant Name</th>
                                        <th style="border-bottom:1px solid #000000;text-align:center">Registration For</th>
                                    </tr>
                                    <tr>
                                        <td class="m_-4791405201879489630ticket-passenger-info" style="font-size:13px;padding:2px 0">
                                            {{ $invoice->name }}
                                        </td>
                                        <td style="text-align:center"> 78th DMC Day </td>
                                    </tr>
                                    <tr>
                                        <td class="m_-4791405201879489630ticket-passenger-info" style="font-size:13px;padding:2px 0"></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td class="m_-4791405201879489630content-align-top m_-4791405201879489630ticket-left-section" style="width:30%;vertical-align:top">
                                <table style="width:100%;font-size:10px; background-color:#f3f3f3">
                                    <tbody>
                                    <tr>
                                        <td style=" border:none !important;" class="m_-4791405201879489630ticket-head-cc">
                                            <u>Payment Details</u>
                                        </td>
                                        <td style=" border:none !important;" class="m_-4791405201879489630ticket-value-cc"></td>
                                    </tr>
                                    <tr>
                                        <td class="m_-4791405201879489630ticket-head-cc" style=" border:none !important;">DMC Fee :</td>
                                        <td style=" border:none !important;" class="m_-4791405201879489630ticket-value-cc">{{ $btprice = $invoice->btprice }} /= </td>
                                    </tr>

                                    <tr>
                                        <td style=" border:none !important;" class="m_-4791405201879489630ticket-head-cc">+ T-shirt ({{ $invoice->size }})</td>
                                    </tr>
                                    @if($invoice->spouse !='')
                                    <tr>
                                        <td style="border:none !important;" class="m_-4791405201879489630ticket-head-cc">+ Spouse :</td>
                                        <td class="m_-4791405201879489630ticket-value-cc">{{ $spouse ='1500' }} /=</td>
                                    </tr>
                                    @else
                                        @php $spouse='0'; @endphp
                                    @endif
                                    @if($invoice->free !='')
                                        <tr>
                                            <td class="m_-4791405201879489630ticket-head-cc">+ Kids under 10 Year : {{ $invoice->free }}</td>
                                            <td class="m_-4791405201879489630ticket-value-cc">{{ $kids ='0' }} /=</td>
                                        </tr>
                                    @else
                                        @php $kids='0'; @endphp
                                    @endif

                                    @if($invoice->plus10 !='')
                                        <tr>
                                            <td class="m_-4791405201879489630ticket-head-cc">+ Kids 10 Year + : {{ $invoice->plus10 }} Kids</td>
                                            <td class="m_-4791405201879489630ticket-value-cc">{{ $plus10 = ($invoice->plus10 * 2500) }} /=</td>
                                        </tr>
                                    @else
                                        @php $plus10='0'; @endphp
                                    @endif

                                    <tr>
                                        <td style="border:none !important;" class="m_-4791405201879489630ticket-head-cc"><b>Total</b></td>
                                        <td style="border:none !important;" class="m_-4791405201879489630ticket-value-cc">{{ $total = $btprice + $spouse + $kids + $plus10 }} /=</td>
                                    </tr>
                                    @if($invoice->lifeno !='')
                                    <tr>
                                        <td style="border:none !important;" class="m_-4791405201879489630ticket-head-cc"><b style="font-size: 15px;">Life Member No : {{ $invoice->lifeno }}</b></td>
                                    </tr>
                                    @endif

                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            <tr style="border:none !important">
                <td style="border:none !important">
                    <table style="width:100%; " border="0">
                        <tbody>
                        <tr>
                            <td style="width:20%">
                                <div style="font-size:12px;color:#999999">Powered by</div>
                                <div style="font-size:17px;color:#333333;font-weight:bold">
                                    <a href="#" target="_blank" data-saferedirecturl="#">
                                        <span style="font-size: 10px;">Events Fluent</span>
                                    </a>
                                </div>
                            </td>
                            <td style="width:25%">
                                <div style="font-size:12px;color:#999999">Write to us</div>
                                <div style="font-size:17px;color:#333333;font-weight:bold">
                                    <a href="mailto:alumni@dmcalumnitrust.org" target="_blank">
                                        <span style="font-size: 10px;">alumni@dmcalumnitrust.org</span>
                                    </a>
                                </div>
                            </td>
                            <td style="width:20%">
                                <div style="font-size:12px;color:#999999">Call us</div>
                                <div style="font-size:17px;color:#333333;font-weight:bold">
                                    <span style="font-size: 10px;">01783-487160</span>
                                </div>
                            </td>

                            <td style="width:20%;text-align:right">

                                <div class="barcode" style="
  height: 66px;
  overflow: hidden;
  margin-top:20px;
">
                                <?php
                                use Picqer\Barcode\BarcodeGeneratorPNG;
                                $barcodeGenerator = new BarcodeGeneratorPNG();
                                $barcodeValue = "$invoice->random";
                                $barcodeImage = $barcodeGenerator->getBarcode($barcodeValue, $barcodeGenerator::TYPE_CODE_128);
                                ?>

                                    <img src="data:image/png;base64,{{ base64_encode($barcodeImage) }}" alt="Barcode">

                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>