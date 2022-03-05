<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Nilai Mahasiswa</title>
</head>

<body>
    <h1 class="text-center display-5 my-5">Daftar Nilai Mahasiswa</h1>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">
                <table class="table table-hover">
                    <thead class="table-dark text-center">
                        <?php
                        $header = ['No', 'Nama', 'NIM', 'UTS', 'UAS', 'Tugas', 'Nilai Akhir'];
                        foreach ($header as $jdl) {
                            echo "
                        <th scope='col'>{$jdl}</th>
                    ";
                        }
                        ?>
                    </thead>
                    <tbody>
                        <?php

                        $ns_1 = ['id' => 1, 'nim' => '011022111', 'nama' => 'Budi', 'uts' => 80, 'uas' => 84, 'tugas' => 90];
                        $ns_2 = ['id' => 1, 'nim' => '011023124', 'nama' => 'Rudi', 'uts' => 60, 'uas' => 90, 'tugas' => 80];
                        $ns_3 = ['id' => 1, 'nim' => '011030311', 'nama' => 'Riska', 'uts' => 70, 'uas' => 85, 'tugas' => 70];
                        $ns_4 = ['id' => 1, 'nim' => '011028313', 'nama' => 'Siska', 'uts' => 50, 'uas' => 100, 'tugas' => 90];

                        $ar_nilai = [$ns_1, $ns_2, $ns_3, $ns_4];
                        $nomor = 1;
                        foreach ($ar_nilai as $ns) {
                            $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas']) / 3;
                            $num = number_format($nilai_akhir);
                            $bg = $nomor % 2 == 1 ? 'table-primary' : 'table-secondary';
                            echo "<tr class=' . $bg . text-center'>";
                            echo "
                                    <td>{$nomor}</td>
                                    <td>{$ns['nim']}</td>
                                    <td>{$ns['nama']}</td> 
                                    <td>{$ns['uts']}</td>
                                    <td>{$ns['uas']}</td>
                                    <td>{$ns['tugas']}</td>
                                    <td>{$num}</td>
                            ";
                            echo '</tr>';
                            ++$nomor;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>