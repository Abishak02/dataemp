

<style>

.table {
    width: 100%;
    margin-bottom: 1rem;
    color: #212529;
}
.table-bordered {
    border: 1px solid #dee2e6;
}
table.dataTable {
    width: 100%;
    margin: 0 auto;
    clear: both;
    border-collapse: separate;
    border-spacing: 0;
}
.x_panel {
    position: relative;
    width: 100%;}
    </style>
<link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" crossorigin="anonymous">

<div class="right_col" role="main">

    <div class="">
      <div class="page-title">
       
        <div class="title_left">
      
        </div>              
      </div>
      <div class="clearfix"></div>            
      <div class="row">
        <div class="col-md-12 col-sm-12">
          <div class="x_panel">
            <div class="x_title">
              <h2>Employe Data</h2>
            
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <table class="table table-bordered" width="99%" id="registration_students_table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email </th>
                    <th>phone</th>
                    <th>gender </th>
                 
                    
                    <th>Action</th>
                  </tr>
                </thead>              
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <p style="float: right;"> <button> <a href="index">Logout</a> </button> </p>  
  <script language="JavaScript" type="text/javascript"  src="/resources/js/jquery.dataTables.min.js"></script>

  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript">
  $(document).ready( function () {
    $('#registration_students_table').DataTable({
       "processing": true,
       "serverSide": true,
       "ajax": "reg_view",
       "columns":[
          { "data": "id" },
         
    
          { "data": "name" },
          { "data": "email" },
          { "data": "phone" },
          { "data": "gender" },
         
          { "data": "action", orderable: false, searchable: false },
       ]
    });
  });
  </script>

