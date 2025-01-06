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

<div class="card bg-primary" style="width: 30rem;">
  <div class="card-body">
    <h5>Petunjuk: Berikan penilaian pada rentang skor 1-4</h5>
    <p>(1 = sangat buruk; 2 = buruk; 3 = baik; 4 = sangat baik)</p>
</div>
</div>

<!-- <body> -->
<div class="container">
    <div class="panel panel-default">
        <div class="panel-body">
            <div class="table-responsive">
                <table id="sample_data" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                        <th><span class="underscore">___________________</span>Pertanyaan<span class="underscore">________________</span></th>
                            <th>Mawan</th>
                            <th>Yheik</th>
                            <th>Ridwan</th>
                            <th>Wulan</th>
                            <th>Mika</th>
                            <th>Sutia</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- </body>

</html> -->

<style>
    .underscore {
        color: #f8f4fc;
    }
</style>


<script type="text/javascript" language="javascript" >
$(document).ready(function(){
  
  function load_data()
  {
    $.ajax({
      url:"<?php echo base_url(); ?>penilaian_ppnpn/load_data",
      dataType:"JSON",
      success:function(data){
        var html = '<tr>';
        for(var count = 0; count < data.length; count++)
        {
          html += '<tr>';
          html += '<td class="table_data" data-row_id="'+data[count].pertanyaan+'" data-column_name="pertanyaan">'+data[count].pertanyaan+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id_pertanyaan+'" data-column_name="nilai_mawan" contenteditable>'+data[count].nilai_mawan+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id_pertanyaan+'" data-column_name="nilai_yheik" contenteditable>'+data[count].nilai_yheik+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id_pertanyaan+'" data-column_name="nilai_ridwan" contenteditable>'+data[count].nilai_ridwan+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id_pertanyaan+'" data-column_name="nilai_wulan" contenteditable>'+data[count].nilai_wulan+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id_pertanyaan+'" data-column_name="nilai_mika" contenteditable>'+data[count].nilai_mika+'</td>';
          html += '<td class="table_data" data-row_id="'+data[count].id_pertanyaan+'" data-column_name="nilai_sutia" contenteditable>'+data[count].nilai_sutia+'</td>';

        }
        $('tbody').html(html);
      }
    });
  }

  load_data();

  $(document).on('blur', '.table_data', function(){
    var id = $(this).data('row_id');
    var table_column = $(this).data('column_name');
    var value = $(this).text();
    $.ajax({
      url:"<?php echo base_url(); ?>penilaian_ppnpn/update",
      method:"POST",
      data:{id:id, table_column:table_column, value:value},
      success:function(data)
      {
        load_data();
      }
    })
  });
  
});
</script>