<!-- <head>
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>DataTable Inline Editing using PHP Mysqli jquery ajax and X-Editable</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css" />
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>
</head> -->

<!-- <body> -->
<?php if ($_SESSION['level'] != 'Admin')
{
    redirect(base_url('dashboard'));
} ?>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
            <form action="<?php echo base_url() ?>admin/refresh" method="POST">
            <button type="submit" class="btn btn-success" onclick="myFunction()">Update Data</button><br><br>
                <table id="sample_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama</th>
                            <th>Indeks</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- </body>

</html> -->

<script type="text/javascript" language="javascript" >
$(document).ready(function(){
  
  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url(); ?>admin/load_data",
      dataType:"JSON",
      success:function(data){
        var html = '<tr>';
        for(var count = 0; count < data.length; count++)
        {
          html += '<tr>';
          html += '<td class="table_data" data-row_id="'+data[count].nomor_urut+'" data-column_name="id">'+data[count].nomor_urut+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="nama_lengkap">'+data[count].nama_lengkap+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id+'" data-column_name="indeks">'+data[count].indeks+'</td>';

        }
        $('tbody').html(html);
      }
    });
  }

  load_data();
});
</script>

<script>
function myFunction() {
  alert("Update Data Berhasil!");
}
</script>