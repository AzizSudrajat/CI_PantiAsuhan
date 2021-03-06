<div class="container">
<!-- content -->

<h2>Zakat Uang dan Surat Berharga Lainnya</h2>
Untuk menghitung zakat harta yang telah tersimpan selama <strong>1 tahun hijriyah</strong>. Metode perhitungannya sama dengan zakat emas atau perak. Yaitu, dengan nisab senilai <strong>85 gram emas atau 595 gram perak</strong>. Sedangkan zakatnya adalah sebesar <strong>2,5%</strong>.
<br /><br />
<table class="table table-hover">
<tr>
	<th colspan="2" class="tableheader"><strong>Nishab</strong></th>
</tr>
<tr>
	<th class="label_cols">Nishab yang digunakan</th>
	<th class="value_cols">
	<select name="opsi_nisab" id="opsi_nisab" onchange="zc_mal_nisab(); zc_mal_hitung();">
		<option value="emas" selected="selected">Emas</option>
		<option value="perak">Perak</option>
	</select>
	</th>
</tr>
<tr>
	<th class="label_cols">Harga 1 gram emas</th>
	<th class="value_cols">Rp <input type="text" id="harga_emas" class="input_angka" onkeyup="validasiAngka(this); zc_mal_nisab(); zc_mal_hitung();" onblur="validasi_numstring(this);" value="511.000,00" /></th>
</tr>
<tr>
	<th class="label_cols">Harga 1 gram perak</th>
	<th class="value_cols">Rp <input type="text" id="harga_perak" class="input_angka" onkeyup="validasiAngka(this); zc_mal_nisab(); zc_mal_hitung();" onblur="validasi_numstring(this);" value="11.000,00" disabled="disabled" /></th>
</tr>
<tr>
	<th class="label_cols"><strong>.:. Nishab</strong></th>
	<th class="value_cols">Rp <input type="text" id="nisab" class="input_angka" disabled="disabled" value="43.435.000,00" /> <input type="hidden" id="nisab_float" value="43435000.00" /></th>
</tr>

<tr>
	<th colspan="2" class="tableheader"><strong>Harta</strong></th>
</tr>
<tr>
	<th class="label_cols">Uang tunai dan tabungan</th>
	<th class="value_cols">Rp <input type="text" id="uang_tabungan" class="input_angka" onkeyup="validasiAngka(this); zc_mal_total_harta();" onblur="validasi_numstring(this);" /></th>
</tr>
<tr>
	<th class="label_cols">Saham dan surat berharga lainnya <sup>[1]</sup></th>
	<th class="value_cols">Rp <input type="text" id="saham" class="input_angka" onkeyup="validasiAngka(this); zc_mal_total_harta();" onblur="validasi_numstring(this);" /></th>
</tr>
<tr>
	<th class="label_cols">Piutang <sup>[2]</sup></th>
	<th class="value_cols">Rp <input type="text" id="piutang" class="input_angka" onkeyup="validasiAngka(this); zc_mal_total_harta();" onblur="validasi_numstring(this);" /></th>
</tr>
<tr>
	<th class="label_cols"><strong>.:. Total Harta</strong></th>
	<th class="value_cols">Rp <input type="text" id="total_harta" class="input_angka" disabled="disabled" /> <input type="hidden" id="total_harta_float" /></th>
</tr>

<tr>
	<th colspan="2" class="tableheader"><strong>Kewajiban</strong></th>
</tr>
<tr>
	<th class="label_cols">Hutang <sup>[3]</sup></th>
	<th class="value_cols">Rp <input type="text" id="hutang" class="input_angka" onkeyup="validasiAngka(this); zc_mal_total_kewajiban();" onblur="validasi_numstring(this);" /></th>
</tr>
<tr>
	<th class="label_cols"><strong>.:. Total Kewajiban</strong></th>
	<th class="value_cols">Rp <input type="text" id="total_kewajiban" class="input_angka" disabled="disabled" /> <input type="hidden" id="total_kewajiban_float" /></th>
</tr>

<tr>
	<th colspan="2" class="tableheader"><strong>Zakat</strong></th>
</tr>
<tr>
	<th class="label_cols">Selisih harta dan kewajiban</th>
	<th class="value_cols">Rp <input type="text" id="selisih_harta" class="input_angka" disabled="disabled" /></th>
</tr>
<tr>
	<th class="label_cols"><strong>.:. Zakat</strong></th>
	<th class="value_cols">Rp <input type="text" id="zakat_harta" class="input_angka" disabled="disabled" /></th>
</tr>

<tr>
	<th colspan="2" class="tableheader" id="keterangan">&nbsp;</th>
</tr>
</table>
<br />
<div id="footnote">
Keterangan :
<ol>
<li>Termasuk di dalamnya adalah investasi seperti reksadana dkk. Khusus untuk saham, kami sarankan untuk membaca tulisan di <a href="http://konsultasisyariah.com/zakat-saham" target="_blank">KonsultasiSyariah.com</a>.</li>
<li>Piutang yang diharapkan dapat kembali / ditagih.</li>
<li>Cicilan hutang yang harus dibayar (jatuh tempo) dalam waktu dekat.</li>
</ol>
</div>
<!-- end of content -->

</div>
