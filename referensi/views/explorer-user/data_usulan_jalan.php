<?php
	/*
  foreach($data as $d){
      echo "<li>$d[Nm_Lingkungan]</li>";
  }
  */
  $no=0;
  foreach ($data as $key => $value) {
	    $no++;
	    $Kd_Prov= $value['Kd_Prov'];
	    $Kd_Kab= $value['Kd_Kab'];
	    $Kd_Kec= $value['Kd_Kec'];
	    $Kd_Urut= $value['Kd_Urut_Kel'];
	    $Kd_Lingkungan= $value['Kd_Lingkungan'];
	    $Kd_Ta_Forum_Lingkungan= $value['Kd_Ta_Forum_Lingkungan'];
	    $Jenis_Usulan= $value['Jenis_Usulan'];
			echo "<tr>
								<td>$no. </td>
								<td data-prov='$Kd_Prov' data-kab='$Kd_Kab' data-kec='$Kd_Kec' data-urut='$Kd_Urut' data-lingkungan='$Kd_Lingkungan' class='data-usulan'>$Jenis_Usulan</td>
								<td></td>
						</tr>";
		}

?>

<script type="text/javascript">
/*
	$(".data-ling").click(function(){
		var prov = $(this).data('prov');
		var kab = $(this).data('kab');
		var kec = $(this).data('kec');
		var urut = $(this).data('urut');
		var lingkungan = $(this).data('lingkungan');
		alert("index.php?r=explorer/getjalan&Kd_Prov="+prov+"&Kd_Kab="+kab+"&Kd_Kec="+kec+"&Kd_Kel="+urut+"&Kd_Lingkungan="+lingkungan);
		$.ajax({
	    url: "index.php?r=explorer/getjalan",
	    data: "Kd_Prov="+prov+"&Kd_Kab="+kab+"&Kd_Kec="+kec+"&Kd_Kel="+urut+"&Kd_Lingkungan="+lingkungan,
	    success: function(ling) {
	    	//$('#list-ling').html(data);
	    	alert(ling);
	    }
	  });
	});
	*/
</script>