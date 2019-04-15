<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Referensi</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/dataTables.bootstrap4.css'?>">
</head>
<body>
<div class="container">
	<!-- Page Heading -->
    <div class="row">
        <div class="col-12">
            <div class="col-md-12">
                <h1>Referensi</h1>
            </div>

            <table class="table table-striped" id="mydata">
                <thead>
                    <tr>
                        <th>ID Referensi</th>
                        <th>Judul TA</th>
                        <th>Penulis</th>
                        <th>Tahun</th>
                        <th>Asal Referensi</th>
                    </tr>
                </thead>
                <tbody id="show_data">

                </tbody>
            </table>
        </div>
    </div>

</div>

<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.2.1.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/dataTables.bootstrap4.js'?>"></script>

<script type="text/javascript">
	$(document).ready(function(){
		show_referensi();	//call function show all product

		$('#mydata').dataTable();

		//function show all product
		function show_referensi(){
		    $.ajax({
		        type  : 'ajax',
		        url   : '<?php echo site_url('referensi/referensi_data')?>',
		        async : false,
		        dataType : 'json',
		        success : function(data){
		            var html = '';
		            var i;
		            for(i=0; i<data.length; i++){
		                html += '<tr>'+
		                  		'<td>'+data[i].Id_Referensi+'</td>'+
		                        '<td>'+data[i].Judul_TA+'</td>'+
		                        '<td>'+data[i].Penulis+'</td>'+
                            '<td>'+data[i].Tahun+'</td>'+
                            '<td>'+data[i].Asal_Referensi+'</td>'+
		                        '</tr>';
		            }
		            $('#show_data').html(html);
		        }

		    });
		}

	});

</script>
</body>
</html>
