<div class="container">
<!-- content -->

<h2>Zakat Emas dan Perak</h2>
Untuk menghitung zakat emas dan perak yang telah tersimpan selama <strong>1 tahun hijriyah</strong>. Zakat yang dikeluarkan adalah sebesar <strong>2,5%</strong>.<br />
- Nishab emas adalah <strong>85 gram</strong>.<br />
- Nishab perak adalah <strong>595 gram</strong>.
<br /><br />
<table class="table table-hover">

<tr>
	<th colspan="2" class="tableheader"><strong>Yang dimiliki</strong></th>
</tr>
<tr>
	<th class="label_cols">Emas</th>
	<th class="value_cols"><input type="text" id="emas" class="input_angka" style="width:60px" onkeyup="validasiAngka(this); zc_emas_perak();" onblur="validasi_numstring(this);" /> gram</th>
</tr>
<tr>
	<th class="label_cols">Perak</th>
	<th class="value_cols"><input type="text" id="perak" class="input_angka" style="width:60px" onkeyup="validasiAngka(this); zc_emas_perak();" onblur="validasi_numstring(this);" /> gram</th>
</tr>
<tr>
	<th colspan="2" class="tableheader"><strong>Zakat</strong></th>
</tr>
<tr>
	<th class="label_cols">.:. Zakat Emas</th>
	<th class="value_cols"><input type="text" id="zakat_emas" class="input_angka" style="width:60px" disabled="disabled" /> gram</th>
</tr>
<tr>
	<th class="label_cols">.:. Zakat Perak</th>
	<th class="value_cols"><input type="text" id="zakat_perak" class="input_angka" style="width:60px" disabled="disabled" /> gram</th>
</tr>
<tr>
	<th colspan="2" class="tableheader"><strong>Zakat (jika dibayar dengan uang)</strong></th>
</tr>
<tr>
	<th class="label_cols">Harga 1 gram emas</th>
	<th class="value_cols">Rp <input type="text" id="harga_emas" class="input_angka" onkeyup="validasiAngka(this); zc_emas_perak();" onblur="validasi_numstring(this);" value="511.000,00" /></th>
</tr>
<tr>
	<th class="label_cols">Harga 1 gram perak</th>
	<th class="value_cols">Rp <input type="text" id="harga_perak" class="input_angka" onkeyup="validasiAngka(this); zc_emas_perak();" onblur="validasi_numstring(this);" value="11.000,00" /></th>
</tr>
<tr>
	<th class="label_cols">Zakat Emas</th>
	<th class="value_cols">Rp <input type="text" id="zakat_emas_uang" class="input_angka" disabled="disabled" /></th>
</tr>
<tr>
	<th class="label_cols">Zakat Perak</th>
	<th class="value_cols">Rp <input type="text" id="zakat_perak_uang" class="input_angka" disabled="disabled" /></th>
</tr>
<tr>
	<th class="label_cols">.:. Total</th>
	<th class="value_cols">Rp <input type="text" id="zakat_total_uang" class="input_angka" disabled="disabled" /></th>
</tr>
<tr>
	<th colspan="2" class="tableheader" id="keterangan">&nbsp;</th>
</tr>
</table>
<br />
<div id="footnote">
</div>
<!-- end of content -->

</div>
