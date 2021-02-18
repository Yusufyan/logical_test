SELECT nama, (SELECT mk_kode FROM tb_matakuliah WHERE mk_id = 2 ) AS MK
(SELECT MAX(nilai) FROM tb_mahasiswa_nilai) AS Nilai FROM tb_mahasiswa