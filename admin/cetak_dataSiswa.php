<?php
include("../config/session.php");
include("../config/koneksi.php");
require_once("../assets/dompdf/dompdf_config.inc.php");
include("../config/tanggal_indo.php");
$id     = $_GET['id'];
$query  = mysqli_query($connect, "SELECT * FROM data_siswa WHERE id=$id");
$data   = mysqli_fetch_array($query);
$nis    = $data['nis'];

// data orag tua dan wali murid 
$query1   = mysqli_query($connect, "SELECT * FROM data_ayah WHERE nis=$nis");
$data1    = mysqli_fetch_array($query1);
$query2   = mysqli_query($connect, "SELECT * FROM data_ibu WHERE nis=$nis");
$data2    = mysqli_fetch_array($query2);
$query3   = mysqli_query($connect, "SELECT * FROM data_wali WHERE nis=$nis");
$data3    = mysqli_fetch_array($query3);

// data nilai uas siswa
$query_nilairaport   = mysqli_query($connect, "SELECT * FROM nilai_raport, mata_pelajaran WHERE nilai_raport.nis='$nis' AND nilai_raport.kode_pelajaran = mata_pelajaran.kode_pelajaran");
$data_nilairaport    = mysqli_fetch_array($query_nilairaport);
$rowcount_raport     = mysqli_num_rows($query_nilairaport);

// data nilai uas siswa
$query_nilaiuas   = mysqli_query($connect, "SELECT * FROM nilai_uas, mata_pelajaran WHERE nilai_uas.nis='$nis' AND nilai_uas.kode_pelajaran = mata_pelajaran.kode_pelajaran");
$data_nilaiuas    = mysqli_fetch_array($query_nilaiuas);
$rowcount_uas     = mysqli_num_rows($query_nilaiuas);

// data nilai uas siswa
$query_nilaiuasp   = mysqli_query($connect, "SELECT * FROM nilai_uasp, mata_pelajaran WHERE nilai_uasp.nis='$nis' AND nilai_uasp.kode_pelajaran = mata_pelajaran.kode_pelajaran");
$data_nilaiuasp    = mysqli_fetch_array($query_nilaiuasp);
$rowcount_uasp     = mysqli_num_rows($query_nilaiuasp);

// data jenis kelamin
if ($data['jenis_kelamin']==1) {
  $jenis_kelamin="Laki-Laki";
}
else {
  $jenis_kelamin="Perempuan";
}

// data agama
if ($data['agama']==1) 
{
  $agama="Islam";
}
elseif ($data['agama']==2) {
  $agama="Katolok";
}
elseif ($data['agama']==3) {
  $agama="Kristen Protestan";
}
elseif ($data['agama']==4) {
  $agama="Hindu";
}
elseif ($data['agama']==5) {
  $agama="Budha";
}

// data kewarganegaraan
if ($data['kewarganegaraan']==1) {
  $kewarganegaraan="WNI";
}
else {
  $kewarganegaraan="WNA";
}

$html = '<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>'.$data['nama_lengkap'].' (NIS.'.$data['nis'].'/NISN.'.$data['nisn'].')</title>
  </head>
  <body>
    <br>
    <br>
    <br>
    <table width="100%">
      <tbody>
        <tr>
          <td style="font-size:14pt;" colspan="2">
          <b>
          '.$data['nama_lengkap'].' (NIS.'.$data['nis'].'/NISN.'.$data['nisn'].')
          </b>
          <br>
          <hr>
          </td>
        </tr>
        <tr style="font-size:11pt;">
          <td width="50%">
            <b>Nomor Akta Kelahiran</b>
            <br>
            '.$data['nomor_akta'].'
            <br>
            <br>
            <b>Tempat, Tanggal Lahir</b>
            <br>
            '.$data['tempat_lahir'].','.TanggalIndo($data['tanggal_lahir']).'
            <br>
            <br>
            <b>Jenis Kelamin</b>
            <br>
            '.$jenis_kelamin.'
            <br>
            <br>
            <b>Agama</b>
            <br>
            '.$agama.'
            <br>
            <br>
            <b>Kewarganegaraan</b>
            <br>
            '.kewarganegaraan.'
            <br>
            <br>
            <b>Alamat</b>
            <br>
            '.$data['alamat'].'
            <br>
            <br>
            <b>Tahun Lulus</b>
            <br>
            '.$data['tahun_ajaran'].'
            <br>
            <br>
            <b>Nomor Ijazah</b>
            <br>
            '.$data['nomor_ijazah'].'
            <br>
            <br>
          </td>
          <td width="50%">
            <b>Data Ayah</b> 
            <br>
            <b><i>Nama</i></b>
            <br>
            '.$data1['nama_ayah'].'
            <br>
            <b><i>Pendidikan Terakhir</i></b>
            <br>
            '.$data1['pendidikan_ayah'].'
            <br>
            <b><i>Pekerjaan</i></b>
            <br>
            '.$data1['pekerjaan_ayah'].'
            <br>
            <br>
            <b>Data Ibu</b> 
            <br>
            <b><i>Nama</i></b>
            <br>
            '.$data2['nama_ibu'].'
            <br>
            <b><i>Pendidikan Terakhir</i></b>
            <br>
            '.$data2['pendidikan_ibu'].'
            <br>
            <b><i>Pekerjaan</i></b>
            <br>
            '.$data2['pekerjaan_ibu'].'
            <br>
            <br>
            <b>Data Wali Murid</b> 
            <br>
            <b><i>Nama</i></b>
            <br>
            '.$data3['nama_wali'].'
            <br>
            <b><i>Pendidikan Terakhir</i></b>
            <br>
            '.$data3['pendidikan_wali'].'
            <br>
            <b><i>Pekerjaan</i></b>
            <br>
            '.$data3['pekerjaan_wali'].'
            <br>
            <b><i>Hubungan Keluarga</i></b>
            <br>
            '.$data3['hubungan_keluarga'].'
            <br>
          </td>
        </tr>
        <tr>
          <td colspan="2">
          <hr>
          </td>
        </tr>
      </tbody>
    </table>
    <table width="99%" style="font-size:11pt;">
      <tbody>
        <tr>
          <td width="33%" align="center"><b>Nilai Rata-Rata Raport</b></td>
          <td width="33%" align="center"><b>Nilai UAS</b></td>
          <td width="33%" align="center"><b>Nilai UAS Provinsi</b></td>
        </tr>
        <tr>
          <td colspan="3">
            <hr>
          </td>
        </tr>
        <tr>
          <td width="33%">
            <table cellspacing=0 width="100%">
              <thead>
                <tr>
                  <td><i><b>Mata Pelajaran</b></i></td>
                  <td  align="center" ><i><b>Nilai</b></i></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="2"><br></td>
                </tr> 
              ';
              foreach ($query_nilairaport as $Index=>$data_raport):
                  $html .= '
                  <tr>
                    <td width="75%">'.$data_raport['mata_pelajaran'].'</td>
                    <td width="25%" align="center">'.$data_raport['nilai'].'</td>
                  </tr>
                  <tr>
                    <td colspan="2"><br></td>
                  </tr> 
                  ';
                endforeach;
            $html .='
              </tbody>
            </table>
          </td>
          <td width="33%">
            <table cellspacing=0 width="100%">
              <thead>
                <tr>
                  <td><i><b>Mata Pelajaran</b></i></td>
                  <td align="center" ><i><b>Nilai</b></i></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="2"><br></td>
                </tr> 
              ';
              foreach ($query_nilaiuas as $Index=>$data_uas):
                  $html .= '
                  <tr>
                    <td width="75%">'.$data_uas['mata_pelajaran'].'</td>
                    <td width="25%" align="center">'.$data_uas['nilai'].'</td>
                  </tr>
                  <tr>
                    <td colspan="2"><br></td>
                  </tr> 
                  ';
                endforeach;
            $html .='
              </tbody>
            </table>
          </td>
          <td width="33%">
            <table cellspacing=0 width="100%">
              <thead>
                <tr>
                  <td><i><b>Mata Pelajaran</b></i></td>
                  <td align="center"><i><b>Nilai</b></i></td>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td colspan="2"><br></td>
                </tr> 
              ';
              foreach ($query_nilaiuasp as $Index=>$data_uasp):
                  $html .= '
                  <tr>
                    <td width="75%">'.$data_uasp['mata_pelajaran'].'</td>
                    <td width="25%" align="center">'.$data_uasp['nilai'].'</td>
                  </tr>
                  <tr>
                    <td colspan="2"><br></td>
                  </tr> 
                  ';
                endforeach;
            $html .='
              </tbody>
            </table>
          </td>
        </tr>
      </tbody>
    </table>
  </body>
</html>
'
;
$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->set_Paper("legal","potrait");
$dompdf->render();
$dompdf->stream('NIS.'.$data['nis'].'/NISN.'.$data['nisn'].'/'.$data['nama_lengkap'].'.pdf', array("Attachment" => false));
exit(0);
// $dompdf->stream('LAPORAN '.$bulan.' '.$tahun.'.pdf');
?>
