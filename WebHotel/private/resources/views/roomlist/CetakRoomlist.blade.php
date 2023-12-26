<style typer="text/css">
    .table-border-top th,
    .table-border-top td {
        padding: 6px 4px;
        font-size: 11px;
    }

    .table-border-top {
        border-collapse: collapse;
    }

    .table-border-top th {
        vertical-align: middle;
        border-top: 1px solid black;
        border-bottom: 3px solid black;
    }

    .table-header-top td {
        font-size: 16px;
    }

    .td-botom {
        border-bottom: 1px solid black !important;
    }
</style>
<page backtop="5mm" backbottom="5mm" backleft="3mm" backright="3mm" style="font-size: 10pt">
    <page_footer>
        <table class="page_footer" style="font-size:9pt; text-align:center;">
            <tr>
                <td style="width:350px">
                    EXPORT PDF LATIHAN . Hal : [[page_cu]] / [[page_nb]]
                </td>
                <td style="width:350px; text-align:right;">
                    Tanggal Cetak : {{ date('d/m/Y') }}
                </td>
            </tr>
        </table>
    </page_footer>
    <h4 align="center">DATA ROOM</h4>
    <table class="table-border-top">
        <tr>
            <th class="td-botom" width="90">Judul</th>
            <th class="td-botom" width="50">Harga($)</th>
            <th class="td-botom" width="50">Ukuran(ft)</th>
            <th class="td-botom" width="80">Kapasitas(person)</th>
            <th class="td-botom" width="50">Tipe Bed</th>
            <th class="td-botom" width="100">Servis</th>
            <th class="td-botom" width="50">Deskripsi</th>
            <th class="td-botom" width="100">Foto</th>
        </tr>
        @foreach ($roomlist as $d)
            <tr>
                <td class="td-botom">{{ $d->judul }}</td>
                <td class="td-botom">{{ $d->harga }}</td>
                <td class="td-botom">{{ $d->ukuran }}</td>
                <td class="td-botom">{{ $d->kapasitas }}</td>
                <td class="td-botom">{{ $d->tipe_bed }}</td>
                <td class="td-botom">{{ $d->servis }}</td>
                <td class="td-botom">{{ $d->deskripsi }}</td>
                <td class="td-botom"><img src="{{ URL($d->foto) }}" height="100" width="150"></td>
            </tr>
        @endforeach
    </table>
</page>
