<html>

<head>
    <style media="screen">
        .row {
            display: flex;
            justify-content: flex-start;
            align-items: stretch;
            flex-wrap: nowrap;
            padding: 10px;
        }

        .ilaxkb {
            position: relative;
            display: inline-block;
            padding: 0 0 0 0;
            height: 100%;
            width: 100%;
            background-image: url("{!! asset('images/logo.png') !!}");
            /* background-attachment: scroll; */
            /* opacity: 10%; */
            background-repeat: no-repeat;
            background-position: center;
            background-size: 15%;
            page-break-after: always;
        }
        table, th, td {
            border: 1px solid #919090;
        }
        th, td {
            padding: 10px 10px;
            /* color: #3b3b3b; */
            font-size: 15px;
        }
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }

        .page-name {
            display: flex;
            width: 100%;
            margin-bottom: 20px;
        }
        h3 {
            /* color: #3b3b3b; */
            margin: 10px auto;
        }

        .ttd-container {
            display: flex;
            width: 100%;
        }
        .ttd {
            margin-left: auto;
            margin-right: 2cm;
            bottom: 2cm;
        }
        .nama {
            margin-top: 2cm;
        }
    </style>
    <style media="print">
        @page {
            size: A4 portrait;
            margin: 25px;
        }
        .row {
            display: flex;
            justify-content: flex-start;
            align-items: stretch;
            flex-wrap: nowrap;
            padding: 10px;
        }

        .ilaxkb {
            position: relative;
            display: inline-block;
            padding: 0 0 0 0;
            height: 100%;
            width: 100%;
            background-image: url("{!! asset('images/logo.png') !!}");
            /* background-attachment: scroll; */
            /* opacity: 10%; */
            background-repeat: no-repeat;
            background-position: center;
            background-size: 35%;
            page-break-after: always;
        }
        table, th, td {
            border: 1px solid #919090;
        }
        th, td {
            padding: 10px 10px;
            /* color: #3b3b3b; */
            font-size: 15px;
        }
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }

        .page-name {
            display: flex;
            width: 100%;
            margin-bottom: 1cm;
            margin-top: 2cm;
        }
        h3 {
            /* color: #3b3b3b; */
            margin: 0 auto;
        }

        .ttd-container {
            display: flex;
            width: 100%;
            position: absolute;
            bottom: 2cm;
        }
        .ttd {
            margin-left: auto;
            margin-right: 2cm;
        }
        .nama {
            margin-top: 2cm;
        }
    </style>
</head>

<body>
    @foreach ($data as $key => $value)
    <div class="row ilaxkb">
        <div class="page-name">
            <h3>DAFTAR KEGIATAN YANG DIIKUTI</h3>
        </div>
        <table>
            <thead>
                <tr>
                    <th>NO</th>
                    <th>NAMA KEGIATAN</th>
                    <th>JABATAN</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($value['event_organizers'] as $key => $event_organizer)
                    <tr>
                        <td style="text-align: center;">{{ $key + 1 }}</td>
                        <td>{{ $event_organizer->event->name }}</td>
                        <td>{{ $event_organizer->position->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="ttd-container">
            <div class="ttd">
                <div class="jabatan">
                    Ketua Himpunan Mahasiswa
                    <br />
                    Komputer dan Sistem Informasi,
                </div>
                <div class="nama">
                    {{ $config["ketua"]->value }}
                    <br />
                    {{ $config["nim_ketua"]->value }}
                </div>
            </div>
        </div>
    </div>
    @endforeach
</body>
<html>

</html>

</html>