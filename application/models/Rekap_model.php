<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rekap_model extends CI_Model
{


    public function __construct()
    {
        $this->load->database();
    }

    public function get_data($table)
    {
        //select * from penilaian_pns;
        return $this->db->get($table);
    }

    function load_data()
    {
        $query = $this->db->query("SELECT * FROM `ranking`");
        return $query->result_array();
    }

    function refresh()
    {
        $query = $this->db->query("DROP TABLE rekap_nilai");
        $query = $this->db->query("CREATE TABLE rekap_nilai AS
        SELECT DISTINCT RIGHT(id_pertanyaan,2), 
        AVG(nilai_hairul), AVG(nilai_yeny), AVG(nilai_ummi), AVG(nilai_iqbal), AVG(nilai_armula),
        AVG(nilai_salim), AVG(nilai_yetri), AVG(nilai_ony), AVG(nilai_eka), AVG(nilai_wahyu),
        AVG(nilai_nadhea), AVG(nilai_lupri), AVG(nilai_zulfikri), AVG(nilai_hendra), AVG(nilai_adi)
        FROM penilaian_pns
        GROUP BY RIGHT(id_pertanyaan,2)");
        $query = $this->db->query("ALTER TABLE rekap_nilai   
        CHANGE COLUMN `RIGHT(id_pertanyaan,2)` id_pertanyaan varchar(2),
        CHANGE COLUMN `AVG(nilai_hairul)` rekap_hairul decimal(14,4),
        CHANGE COLUMN `AVG(nilai_yeny)` rekap_yeny decimal(14,4),
        CHANGE COLUMN `AVG(nilai_ummi)` rekap_ummi decimal(14,4),
        CHANGE COLUMN `AVG(nilai_iqbal)` rekap_iqbal decimal(14,4),
        CHANGE COLUMN `AVG(nilai_armula)` rekap_armula decimal(14,4),
        CHANGE COLUMN `AVG(nilai_salim)` rekap_salim decimal(14,4),
        CHANGE COLUMN `AVG(nilai_yetri)` rekap_yetri decimal(14,4),
        CHANGE COLUMN `AVG(nilai_ony)` rekap_ony decimal(14,4),
        CHANGE COLUMN `AVG(nilai_eka)` rekap_eka decimal(14,4),
        CHANGE COLUMN `AVG(nilai_wahyu)` rekap_wahyu decimal(14,4),
        CHANGE COLUMN `AVG(nilai_nadhea)` rekap_nadhea decimal(14,4),
        CHANGE COLUMN `AVG(nilai_lupri)` rekap_lupri decimal(14,4),
        CHANGE COLUMN `AVG(nilai_zulfikri)` rekap_zulfikri decimal(14,4),
        CHANGE COLUMN `AVG(nilai_hendra)` rekap_hendra decimal(14,4),
        CHANGE COLUMN `AVG(nilai_adi)` rekap_adi decimal(14,4),
        ADD PRIMARY KEY (id_pertanyaan);");
        $query = $this->db->query("DROP TABLE rekap_chart");
        $query = $this->db->query("CREATE TABLE rekap_chart AS
        SELECT CONCAT('000', LEFT(`id_pertanyaan`,1)) as id_aspek, AVG(rekap_hairul) AS rekap_hairul, 
        AVG(rekap_yeny) AS rekap_yeny, AVG(rekap_ummi) AS rekap_ummi,
        AVG(rekap_iqbal) AS rekap_iqbal, AVG(rekap_armula) AS rekap_armula, AVG(rekap_salim) AS rekap_salim,
        AVG(rekap_yetri) AS rekap_yetri, AVG(rekap_ony) AS rekap_ony, AVG(rekap_eka) AS rekap_eka,
        AVG(rekap_wahyu) AS rekap_wahyu, AVG(rekap_nadhea) AS rekap_nadhea, AVG(rekap_lupri) AS rekap_lupri,
        AVG(rekap_zulfikri) AS rekap_zulfikri, AVG(rekap_hendra) AS rekap_hendra, AVG(rekap_adi) AS rekap_adi
        FROM rekap_nilai
        GROUP BY LEFT(`id_pertanyaan`,1)");
        $query = $this->db->query("ALTER TABLE `rekap_chart` ADD PRIMARY KEY (`id_aspek`);");
        $query = $this->db->query("ALTER TABLE `rekap_chart` ADD nama_aspek VARCHAR(20);");
        $query = $this->db->query("UPDATE `rekap_chart` SET nama_aspek = 'Kedisiplinan' WHERE id_aspek = 0001;");
        $query = $this->db->query("UPDATE `rekap_chart` SET nama_aspek = 'Sikap dan Perilaku' WHERE id_aspek = 0002;");
        $query = $this->db->query("UPDATE `rekap_chart` SET nama_aspek = 'Kepedulian' WHERE id_aspek = 0003;");
        $query = $this->db->query("DROP TABLE rekap_nilai_ppnpn");
        $query = $this->db->query("CREATE TABLE rekap_nilai_ppnpn AS
        SELECT DISTINCT RIGHT(id_pertanyaan,2), 
        AVG(nilai_mawan), AVG(nilai_yheik), AVG(nilai_ridwan), AVG(nilai_wulan), AVG(nilai_mika),
        AVG(nilai_sutia)
        FROM penilaian_ppnpn
        GROUP BY RIGHT(id_pertanyaan,2)");
        $query = $this->db->query("ALTER TABLE rekap_nilai_ppnpn   
        CHANGE COLUMN `RIGHT(id_pertanyaan,2)` id_pertanyaan varchar(2),
        CHANGE COLUMN `AVG(nilai_mawan)` rekap_mawan decimal(14,4),
        CHANGE COLUMN `AVG(nilai_yheik)` rekap_yheik decimal(14,4),
        CHANGE COLUMN `AVG(nilai_ridwan)` rekap_ridwan decimal(14,4),
        CHANGE COLUMN `AVG(nilai_wulan)` rekap_wulan decimal(14,4),
        CHANGE COLUMN `AVG(nilai_mika)` rekap_mika decimal(14,4),
        CHANGE COLUMN `AVG(nilai_sutia)` rekap_sutia decimal(14,4),
        ADD PRIMARY KEY (id_pertanyaan);");
        $query = $this->db->query("DROP TABLE rekap_chart_ppnpn");
        $query = $this->db->query("CREATE TABLE rekap_chart_ppnpn AS
        SELECT CONCAT('000', LEFT(`id_pertanyaan`,1)) as id_aspek, AVG(rekap_mawan) AS rekap_mawan, 
        AVG(rekap_yheik) AS rekap_yheik, AVG(rekap_ridwan) AS rekap_ridwan,
        AVG(rekap_wulan) AS rekap_wulan, AVG(rekap_mika) AS rekap_mika, AVG(rekap_sutia) AS rekap_sutia
        FROM rekap_nilai_ppnpn
        GROUP BY LEFT(`id_pertanyaan`,1)");
        $query = $this->db->query("ALTER TABLE `rekap_chart_ppnpn` ADD PRIMARY KEY (`id_aspek`);");
        $query = $this->db->query("ALTER TABLE `rekap_chart_ppnpn` ADD nama_aspek VARCHAR(20);");
        $query = $this->db->query("UPDATE `rekap_chart_ppnpn` SET nama_aspek = 'Kedisiplinan' WHERE id_aspek = 0001;");
        $query = $this->db->query("UPDATE `rekap_chart_ppnpn` SET nama_aspek = 'Sikap dan Perilaku' WHERE id_aspek = 0002;");
        $query = $this->db->query("UPDATE `rekap_chart_ppnpn` SET nama_aspek = 'Kepedulian' WHERE id_aspek = 0003;");
        $query = $this->db->query("DROP TABLE rekap_chart_final");
        $query = $this->db->query("CREATE TABLE rekap_chart_final AS
        SELECT rekap_chart.*, rekap_chart_ppnpn.rekap_mawan, rekap_chart_ppnpn.rekap_yheik, rekap_chart_ppnpn.rekap_ridwan,
        rekap_chart_ppnpn.rekap_wulan, rekap_chart_ppnpn.rekap_mika, rekap_chart_ppnpn.rekap_sutia
        FROM rekap_chart
        INNER JOIN rekap_chart_ppnpn ON rekap_chart.id_aspek = rekap_chart_ppnpn.id_aspek");
        $query = $this->db->query("DROP TABLE temp, temp2, ranking");
        $query = $this->db->query("CREATE TABLE temp AS SELECT nama_lengkap FROM `table_user` WHERE id_pegawai NOT IN (SELECT id_pegawai FROM `table_user` WHERE `nama_pendek`='aldi')");
        $query = $this->db->query("ALTER TABLE `temp` ADD COLUMN `id` INT AUTO_INCREMENT UNIQUE FIRST");
        $query = $this->db->query("CREATE TABLE temp2 AS SELECT ROUND(AVG(`rekap_hairul`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_yeny`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_ummi`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_iqbal`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_armula`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_salim`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_yetri`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_ony`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_eka`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_wahyu`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_nadhea`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_lupri`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_zulfikri`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_hendra`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_adi`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_mawan`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_yheik`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_ridwan`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_wulan`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_mika`),2) FROM `rekap_chart_final`
        UNION ALL
        SELECT ROUND(AVG(`rekap_sutia`),2) FROM `rekap_chart_final`");
        $query = $this->db->query("ALTER TABLE `temp2` ADD COLUMN `id` INT AUTO_INCREMENT UNIQUE FIRST");
        $query = $this->db->query("CREATE TABLE ranking AS
        SELECT  temp2.*, temp.nama_lengkap
        FROM temp
        INNER JOIN temp2 ON temp.id = temp2.id");
        $query = $this->db->query("ALTER TABLE ranking CHANGE COLUMN `ROUND(AVG(``rekap_hairul``),2)` indeks decimal(14,2)");
        $query = $this->db->query("ALTER TABLE ranking ORDER BY `indeks` DESC;");
        $query = $this->db->query("ALTER TABLE ranking ADD COLUMN `nomor_urut` INT AUTO_INCREMENT UNIQUE FIRST");
    }

    public function chart_database()
    {
        return $this->db->get('rekap_chart_final')->result();
    }
}
