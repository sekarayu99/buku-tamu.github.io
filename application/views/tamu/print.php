<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <style type="text/css">
        p {
            margin: 5px 0 0 0;
        }

        p.footer {
            text-align: right;
            font-size: 11px;
            border-top: 1px solid #D0D0D0;
            line-height: 32px;
            padding: 0 10px 0 10px;
            margin: 20px 0 0 0;
            display: block;
        }

        .bold {
            font-weight: bold;
        }

        #footer {
            clear: both;
            position: relative;
            height: 40px;
            margin-top: -40px;
        }
    </style>
</head>

<body style="font-size: 16px">

    <p align="center">
        <span style="font-size: 20px"><b>KAPOLDA JAWA TENGAH <br> Jl. Pahlawan No.1 Semarang</b></span> <br>
    </p>

    <hr><br>

    <p align="center">
        JADWAL KEGIATAN ANGGOTA KAPOLDA JAWA TENGAH
    </p><br><br>

    <table style="border: 1px solid black;border-collapse: collapse;font-size: 18px" width="100%">
        <tr style="margin: 5px">
            <th style="border: 1px solid black;">No</th>
            <th style="border: 1px solid black;">Nama</th>
            <th style="border: 1px solid black;">No.Handphone</th>
            <th style="border: 1px solid black;">Alamat</th>
            <th style="border: 1px solid black;">Tanggal</th>
            <th style="border: 1px solid black;">Keperluan</th>
        </tr>
        <?php
        $no = 1;
        foreach ($tamu as $t) : ?>
            <tr style="margin: 5px">
                <td style="border: 1px solid black;" align="center"><?= $no++ ?></td>
                <td style="border: 1px solid black;" align="center"><?= $t->nama ?></td>
                <td style="border: 1px solid black;" align="center"><?= $t->no_hp ?></td>
                <td style="border: 1px solid black;" align="center"><?= $t->alamat ?></td>
                <td style="border: 1px solid black;" align="center"><?= $t->tanggal ?></td>
                <td style="border: 1px solid black;" align="center"><?= $t->keperluan ?></td>
            </tr>
        <?php endforeach; ?>
    </table>


    </p>

    <br><br><br>

    <p>
        Demikian Data Jadwal Kegiatan ini dibuat dengan sebenar-benarnya, untuk diketahui dan digunakan dengan semestinya.
    </p>

    <p>
    <table width="100%">
        <tr>

            <td align="center">Diperiksa oleh<br><br><br><br><br><u>Nama Pemeriksa</u><br>Tim Pemeriksa</td>
            <td align="center">Diketahui oleh<br><br><br><br><br><u>Nama Diketahui</u><br>Manajer</td>
        </tr>
    </table>
    </p>
    <script type="text/javascript">
        window.print();
    </script>



    <p class="footer">
        <small>Tim Asset</small>
    </p>


</body>

</html>