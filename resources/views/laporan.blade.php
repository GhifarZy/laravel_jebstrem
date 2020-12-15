@extends('main')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <script src="js/jquery-3.1.0.js"></script>
    <script src="js/jquery.dataTables.min.js"></script>
    @section('title', 'Dashboard')
</head>
<body> 
@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dashboard</h1>
            </div>
        </div>
    </div>
</div>

@endsection

@section('content')
    
<div class="content mt-3">
    <div class="animated FadeIn">
        <br>
        <table id="example" class="table table-striped table-bordered" style="width:100%;padding: 0px;">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Hak Akses</th>
                    <th>Nidn</th>
                    <th>Nama</th>
                    <th>Jurusan</th>
                    
                </tr>
            </thead>
            <tbody>

                                                <tr>
                    <td>1</td>
                    <td> Kaprodi-PGMI</td>
                    <td style="text-align:center">7071</td>
                    <td width="300px;">Ziady as S.T,</td>
                    <td>Pendidikan Guru MI</td>
                    </tr>
                                                <tr>
                    <td>2</td>
                    <td> Kaprodi-PBA</td>
                    <td style="text-align:center">6061</td>
                    <td width="300px;">Ghifar s</td>
                    <td>Pendidikan Bahasa Arab</td>
                    </tr>
                                                <tr>
                    <td>3</td>
                    <td> Kaprodi-PAI</td>
                    <td style="text-align:center">5051</td>
                    <td width="300px;">Muhammad s</td>
                    <td>Pendidikan Agama Islam</td>
                    </tr>
                                                <tr>
                    <td>4</td>
                    <td> Dosen-PGMI</td>
                    <td style="text-align:center">93433</td>
                    <td width="300px;">Mistinging</td>
                    <td>Pendidikan Guru MI</td>
                    </tr>
                                                <tr>
                    <td>5</td>
                    <td> Dosen-PGMI</td>
                    <td style="text-align:center">102938</td>
                    <td width="300px;">Ghifarraaa</td>
                    <td>Pendidikan Guru MI</td>
                    </tr>
                                                <tr>
                    <td>6</td>
                    <td> Dosen-PGMI</td>
                    <td style="text-align:center">881203</td>
                    <td width="300px;">Rukiayah</td>
                    <td>Pendidikan Guru MI</td>
                    </tr>
                                                <tr>
                    <td>7</td>
                    <td> Dosen-PGMI</td>
                    <td style="text-align:center">9080</td>
                    <td width="300px;">Sulainmnia</td>
                    <td>Pendidikan Guru MI</td>
                    </tr>
                                                <tr>
                    <td>8</td>
                    <td> Dosen-PGMI</td>
                    <td style="text-align:center">2138012</td>
                    <td width="300px;">Marianah</td>
                    <td>Pendidikan Guru MI</td>
                    </tr>
                                                <tr>
                    <td>9</td>
                    <td> Dosen-PGMI</td>
                    <td style="text-align:center">3000828</td>
                    <td width="300px;">Rukiahh</td>
                    <td>Pendidikan Guru MI</td>
                    </tr>
                                                <tr>
                    <td>10</td>
                    <td> Dosen-PBA</td>
                    <td style="text-align:center">3002901</td>
                    <td width="300px;">Adhiyati</td>
                    <td>Pendidikan Bahasa Arab</td>
                    </tr>
                                                <tr>
                    <td>11</td>
                    <td> Dosen-PBA</td>
                    <td style="text-align:center">1230109</td>
                    <td width="300px;">Yugiimina</td>
                    <td>Pendidikan Bahasa Arab</td>
                    </tr>
                                                <tr>
                    <td>12</td>
                    <td> Dosen-PBA</td>
                    <td style="text-align:center">8210391</td>
                    <td width="300px;">Baitinuraa</td>
                    <td>Pendidikan Bahasa Arab</td>
                    </tr>
                                                <tr>
                    <td>13</td>
                    <td> Dosen-PBA</td>
                    <td style="text-align:center">8257704</td>
                    <td width="300px;">ghifar</td>
                    <td>Pendidikan Bahasa Arab</td>
                    </tr>
                                                <tr>
                    <td>14</td>
                    <td> Dosen-PBA</td>
                    <td style="text-align:center">2009101020</td>
                    <td width="300px;">Drunk</td>
                    <td>Pendidikan Bahasa Arab</td>
                    </tr>
                                                <tr>
                    <td>15</td>
                    <td> Dosen-PBA</td>
                    <td style="text-align:center">85234</td>
                    <td width="300px;">Service`S</td>
                    <td>Pendidikan Bahasa Arab</td>
                    </tr>
                                                <tr>
                    <td>16</td>
                    <td> Dosen-PBA</td>
                    <td style="text-align:center">39930</td>
                    <td width="300px;">Mr-x</td>
                    <td>Pendidikan Bahasa Arab</td>
                    </tr>
                                                <tr>
                    <td>17</td>
                    <td> Dosen-PBA</td>
                    <td style="text-align:center">1920</td>
                    <td width="300px;">Qwq</td>
                    <td>Pendidikan Agama Islam</td>
                    </tr>
                                                <tr>
                    <td>18</td>
                    <td> Dosen-PBA</td>
                    <td style="text-align:center">2309</td>
                    <td width="300px;">Yusuf</td>
                    <td>Pendidikan Bahasa Arab</td>
                    </tr>
                    
                                            </tbody>
            </tfoot>
        </table>
    </div>
</div>
@endsection 
</body>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
</html>

