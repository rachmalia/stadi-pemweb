<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Radew</title>
</head>
<body>
    <h2>Data</h2>
    <?php
        //judul-judul kolom tabel
        $this->table->set_heading('No.', 'Judul', 'Tanggal Rilis');
        $i= 1;
        foreach($srt_movie->result() as $row){
            $this->table->add_row($i, $row->mtitle, $row->mrelease_date);
            $i++;
        }
        echo $this->table->generate();

        $this->table->clear();
        //judul-judul kolom tabel
        $this->table->set_heading('No.', 'Judul', 'Tanggal Rilis');
        $j=1;
        foreach($srt_movie->result() as $row){
            $this->table->add_row($j, $row->mtitle, $row->mrelease_date);
            $j++;
        }
        echo $this->table->generate();
    ?>
</body>
</html>