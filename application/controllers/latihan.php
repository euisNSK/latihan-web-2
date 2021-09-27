<?php
class latihan extends CI_Controller
{
    public function index()
    {
        echo "<h1>BIODATA</h1>";
        echo "&nbsp;DATA DIRI
        <br>
        <br>
        <table width='700' height='200' border='0' >
        <tr>
        <td width='50'>&nbsp;</td>
        <td width='200' height='5'>NAMA LENGKAP</td>
        <td>:</td>
        <td width='500'> EUIS NURHASANAH SRI KARTINI</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td>NAMA PANGGILAN</td>
        <td>:</td>
        <td>EUIS</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td> TTL</td>
        <td> :</td>
        <td>GARUT, 21 SEPTEMBER 2002</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td> Alamat</td>
        <td>:</td>
        <td>TAMAN WISMA ASRI, KAB.BEKASI</td>
        </tr>
        <tr>
        <td>&nbsp;</td>
        <td> Agama</td>
        <td>:</td>
        <td>ISLAM</td>
        </tr>
        <tr>
        <td height='21'>&nbsp;</td>
        <td> Hobi</td>
        <td>:</td>
        <td>BERENANG</td>
        </tr>
        </table>";
    }
}