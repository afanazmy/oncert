<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <style media="screen">
        html {
            margin: 0px;
        }

        .page-break {
            page-break-before: always;
        }

        @font-face {
            font-family: "Google Sans";
            src: url("{!! asset('fonts/GoogleSans-Regular.ttf') !!}") format("truetype");
            /* Safari, Android, iOS */
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            height: 100vh;
        }

        .row {
            display: flex;
            justify-content: flex-start;
            align-items: stretch;
            flex-wrap: nowrap;
            padding: 10px;
        }

        .cell {
            min-height: 75px;
            flex-grow: 1;
            flex-basis: 100%;
        }

        #i4qoaf {
            display: block;
            top: 20%;
            position: relative;
            height: 0;
            align-self: center;
        }

        #ilaxkb {
            position: relative;
            display: inline-block;
            padding: 0 0 0 0;
            height: 100%;
            width: 100%;
            background-image: url("{!! asset('images/base2.jpg') !!}");
            /* background-attachment: scroll; */
            background-repeat: no-repeat;
            background-position: center center;
            background-size: contain;
        }

        #iw4opq {
            padding: 0 0 0 0;
            top: 60%;
            width: 100%;
            margin: auto auto auto auto;
            float: left;
            display: block;
            position: relative;
            align-self: center;
            text-align: center;
            font-family: "Google Sans", Helvetica, serif;
            color: #575654;
            font-size: 15px;
        }

        #ipp38r {
            display: block;
            top: 21%;
            position: relative;
            height: 0;
            align-self: center;
        }

        #iwtbyw {
            padding: 0 0 0 0;
            top: 45%;
            width: 100%;
            margin: auto auto auto auto;
            float: left;
            display: block;
            position: relative;
            align-self: center;
            text-align: center;
            font-family: "Google Sans", Helvetica, serif;
            color: #575654;
            font-size: 24px;
            font-weight: 700;
        }

        #iumib2 {
            display: block;
            top: 22%;
            position: relative;
            height: 0;
            align-self: center;
        }

        #iyknf5 {
            padding: 0 0 0 0;
            top: 30%;
            width: 100%;
            margin: auto auto auto auto;
            float: left;
            display: block;
            position: relative;
            align-self: center;
            text-align: center;
            font-family: "Google Sans", Helvetica, serif;
            color: #575654;
            font-size: 22px;
            font-weight: 500;
        }

        #ttdContainer {
            display: flex;
            position: relative;
            top: 46%;
        }

        /* Cell Kaprodi */
        #asd45 {
            display: block;
            top: 49.8%;
            left: 34.5%;
            position: relative;
            height: 0;
            width: 60%;
            min-height: 25px;
        }

        /* Kaprodi */
        #dfdgt {
            padding: 0 0 0 0;
            width: 100%;
            margin: 0;
            align-self: center;
            text-align: center;
            float: left;
            display: block;
            position: relative;
            font-family: "Segoe UI", Helvetica, serif;
            color: #3c3c3c;
            font-size: 18px;
            font-weight: normal;
        }

        /* Cell NIP Kaprodi */
        #ghjsa2 {
            display: block;
            top: 41.7%;
            left: 34.5%;
            position: relative;
            height: 0;
            width: 60%;
            min-height: 25px;
        }

        /* NIP Kaprodi */
        #jhkdw2 {
            padding: 0 0 0 0;
            width: 100%;
            margin: 0;
            align-self: center;
            text-align: center;
            float: left;
            display: block;
            position: relative;
            font-family: "Segoe UI", Helvetica, serif;
            color: #3c3c3c;
            font-size: 18px;
            font-weight: normal;
        }

        /* Cell Ketua */
        #hgfhjf {
            display: block;
            top: 49.8%;
            left: 5.5%;
            position: relative;
            height: 0;
            width: 60%;
            min-height: 25px;
        }

        /* Ketua */
        #vbnfs {
            padding: 0 0 0 0;
            width: 100%;
            margin: 0;
            align-self: center;
            text-align: center;
            float: left;
            display: block;
            position: relative;
            font-family: "Segoe UI", Helvetica, serif;
            color: #3c3c3c;
            font-size: 18px;
            font-weight: normal;
        }

        /* Cell NIM Ketua */
        #jkgds {
            display: block;
            top: 41.7%;
            left: 5.5%;
            position: relative;
            height: 0;
            width: 60%;
            min-height: 25px;
        }

        /* NIM Ketua */
        #ngfsa1 {
            padding: 0 0 0 0;
            width: 100%;
            margin: 0;
            align-self: center;
            text-align: center;
            float: left;
            display: block;
            position: relative;
            font-family: "Segoe UI", Helvetica, serif;
            color: #3c3c3c;
            font-size: 18px;
            font-weight: normal;
        }

        @media(max-width: 768px) {
            .row {
                flex-wrap: wrap;
            }
        }
    </style>
    <style media="print">
        html {
            margin: 0px;
        }

        .page-break {
            page-break-after: always;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            height: 100vh;
            page-break-after: always;
        }

        .row {
            display: flex;
            justify-content: flex-start;
            align-items: stretch;
            flex-wrap: nowrap;

            /* padding: 10px; */
        }

        .cell {
            min-height: 75px;
            flex-grow: 1;
            flex-basis: 100%;
        }

        /* Cell row */
        #ilaxkb {
            position: relative;
            display: inline-block;
            padding: 0 0 0 0;
            height: 100%;
            width: 100%;
            background-image: url("{!! asset('images/base2.jpg') !!}");
            /* background-attachment: scroll; */
            background-repeat: no-repeat;
            background-position: center center;
            background-size: contain;
        }

        /* Cell Nomor Sertifikat */
        #i4qoaf {
            display: block;
            top: 21%;
            position: relative;
            height: 0;
            align-self: center;
        }

        /* Nomor Sertifikat */
        #iw4opq {
            padding: 0 0 0 0;
            top: 60%;
            width: 100%;
            margin: auto auto auto auto;
            float: left;
            display: block;
            position: relative;
            align-self: center;
            text-align: center;
            font-family: "Google Sans", Helvetica, serif;
            color: #575654;
            font-size: 20px;
        }

        /* Cell Nama */
        #ipp38r {
            display: block;
            top: 24%;
            position: relative;
            height: 0;
            align-self: center;
        }

        /* Nama */
        #iwtbyw {
            padding: 0 0 0 0;
            top: 45%;
            width: 100%;
            margin: auto auto auto auto;
            float: left;
            display: block;
            position: relative;
            align-self: center;
            text-align: center;
            font-family: "Google Sans", Helvetica, serif;
            color: #575654;
            font-size: 30px;
            font-weight: 700;
        }

        /* Cell Sebagai */
        #iumib2 {
            display: block;
            top: 27%;
            position: relative;
            height: 0;
            align-self: center;
        }

        /* Sebagai */
        #iyknf5 {
            padding: 0 0 0 0;
            top: 30%;
            width: 100%;
            margin: auto auto auto auto;
            float: left;
            display: block;
            position: relative;
            align-self: center;
            text-align: center;
            font-family: "Google Sans", Helvetica, serif;
            color: #575654;
            font-size: 28px;
            font-weight: 400;
        }

        #ttdContainer {
            display: flex;
            position: relative;
            top: 51.6%;
        }

        /* Cell Kaprodi */
        #asd45 {
            display: block;
            top: 49.8%;
            left: 6.5%;
            position: relative;
            height: 0;
            width: 90%;
            min-height: 25px;
        }

        /* Kaprodi */
        #dfdgt {
            padding: 0 0 0 0;
            width: 100%;
            margin: 0;
            align-self: center;
            text-align: center;
            float: left;
            display: block;
            position: relative;
            font-family: "Segoe UI", Helvetica, serif;
            color: #3c3c3c;
            font-size: 23px;
            font-weight: normal;
        }

        /* Cell NIP Kaprodi */
        #ghjsa2 {
            display: block;
            top: 41.7%;
            left: 6.5%;
            position: relative;
            height: 0;
            width: 90%;
            min-height: 25px;
        }

        /* NIP Kaprodi */
        #jhkdw2 {
            padding: 0 0 0 0;
            width: 100%;
            margin: 0;
            align-self: center;
            text-align: center;
            float: left;
            display: block;
            position: relative;
            font-family: "Segoe UI", Helvetica, serif;
            color: #3c3c3c;
            font-size: 23px;
            font-weight: normal;
        }

        /* Cell Ketua */
        #hgfhjf {
            display: block;
            top: 49.8%;
            left: 3.6%;
            position: relative;
            height: 0;
            width: 90%;
            min-height: 25px;
        }

        /* Ketua */
        #vbnfs {
            padding: 0 0 0 0;
            width: 100%;
            margin: 0;
            align-self: center;
            text-align: center;
            float: left;
            display: block;
            position: relative;
            font-family: "Segoe UI", Helvetica, serif;
            color: #3c3c3c;
            font-size: 23px;
            font-weight: normal;
        }

        /* Cell NIM Ketua */
        #jkgds {
            display: block;
            top: 41.7%;
            left: 3.9%;
            position: relative;
            height: 0;
            width: 90%;
            min-height: 25px;
        }

        /* NIM Ketua */
        #ngfsa1 {
            padding: 0 0 0 0;
            width: 100%;
            margin: 0;
            align-self: center;
            text-align: center;
            float: left;
            display: block;
            position: relative;
            font-family: "Segoe UI", Helvetica, serif;
            color: #3c3c3c;
            font-size: 23px;
            font-weight: normal;
        }

        /* @media (max-width: 768px) {
      .row {
        flex-wrap: wrap;
      }
    } */
    </style>
</head>

<body>
    @foreach ($data as $key => $value)
    <div id="ilaxkb" class="row">
        <div id="i4qoaf" class="cell">
            <div id="iw4opq">No. {{ $value['increment'] }}{{ $value['base'] }}</div>
        </div>
        <div class="cell" id="ipp38r">
            <div id="iwtbyw">{{ $value['name'] }}</div>
        </div>
        <div class="cell" id="iumib2">
            @if (isset($value['division']))
            <div id="iyknf5">Staff {{ $value['division'] }}</div>
            @else
            <div id="iyknf5">{{ $value['daily_manager'] }}</div>
            @endif
        </div>
        <div id="ttdContainer">
            <div style="width: 50%;">
                <div id="asd45">
                    <div id="dfdgt">{{ $config["kaprodi"]->value }}</div>
                </div>
                <div id="ghjsa2">
                    <div id="jhkdw2">{{ $config["nip_kaprodi"]->value }}</div>
                </div>
            </div>
            <div style="width: 50%;">
                <div id="hgfhjf">
                    <div id="vbnfs">{{ $config["ketua"]->value }}</div>
                </div>
                <div id="jkgds">
                    <div id="ngfsa1">{{ $config["nim_ketua"]->value }}</div>
                </div>
            </div>
        </div>
    </div>
    @if ($key
    < @count($data)-1 )
    <div class="page-break"></div>
    @endif
    @endforeach
</body>
<html>

</html>

</html>
