<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Humane:Admin donate details</title>
<link rel="shortcut icon" href="imgs\hands.png">
<head>
<link rel="stylesheet" href="css\adminhomepage.css">
<link rel="stylesheet" href="css\humane.css">
<link href="https://use.fontawesome.com/releases/v5.0.7/css/all.css" rel="stylesheet"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" >
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>


<style type="text/css">
  .fa {
  padding: 7px;
  font-size: 30px;
  width: 30px;
  text-align: left;
  text-decoration: none;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    opacity: 0.7;
}

#footer { 
            position: fixed; 
            padding: 10px 10px 0px 10px; 
            bottom: 0; 
            width: 100%;   
      text-align: center;
            height: 40px; 
      background-color: #c5e5e8;
        } 

table, td, th {
  border: 1px solid black;
  text-align: center;
  padding: 8px;
  background-color: #b3b3b3b3;
}

table {
  width: 100%;
  border-collapse: collapse;
}


</style>
<body background="imgs\bg.png" >

<header style="background-image: url('dd.png');">

   <h1 style="display:flex; font-size:300%;text-align:center;justify-content: center;color: #ffffff;font-family:'Georgia';">HUMANE:DONATE AT DOORSTEP</h1>
   <div>
  <nav><a href="adminlogin.php"><i class="fas fa-user-circle"></i></a></nav>
  </div>
<div class="menu">
  <nav>
     <a href="adminhomepage.html">ADMIN HOME</a>
    <a href="userindex.php">USERS DETAILS</a>
    <a href="contactindex.php" >CONTACT DETAILS</a>
    <a href="donateindex.php" id="active">DONATE DETAILS</a>
    <a href="humanehomepage.html">USER HOME</a>
  </nav>
  </div>
</header>
<main>
<p style="font-size: 25px;color:#1a6970; text-align:center;  font-weight: 500; margin-left: 40px;"><b><br>Donate Page Information</b></p>

<button type="button" name="add" id="add" class="btn btn-info">Add</button>
<div id="alert_message"></div>
       
  <table id="user_data" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>name</th>
                      <th>email</th>
                      <th>address</th>
                      <th>city</th>
                      <th>state</th>
                      <th>zipcode</th>
                      <th>item</th>
                      <th>pickup</th>
                      <th>find</th>
                      <th>Query</th>    
                      <th>Delete</th>     
                    </tr>
                  </thead>
    </table>
  </main>
 </body>
</html>

<script type="text/javascript" language="javascript" >
 $(document).ready(function(){
  
  fetch_data();

  function fetch_data()
  {
   var dataTable = $('#user_data').DataTable({
    "processing" : true,
    "serverSide" : true,
    "order" : [],
    "ajax" : {
     url:"donatefetch.php",
     type:"POST"
    }
   });
  }
  
  function update_data(id, column_name, value)
  {
   $.ajax({
    url:"donateupdate.php",
    method:"POST",
    data:{id:id, column_name:column_name, value:value},
    success:function(data)
    {
     $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
     $('#user_data').DataTable().destroy();
     fetch_data();
    }
   });
   setInterval(function(){
    $('#alert_message').html('');
   }, 5000);
  }

  $(document).on('blur', '.update', function(){
   var id = $(this).data("id");
   var column_name = $(this).data("column");
   var value = $(this).text();
   update_data(id, column_name, value);
  });
  
  $('#add').click(function(){
   var html = '<tr>';
   html += '<td contenteditable id="data1"></td>';
   html += '<td contenteditable id="data2"></td>';
   html += '<td contenteditable id="data3"></td>';
   html += '<td contenteditable id="data4"></td>';
   html += '<td contenteditable id="data5"></td>';
   html += '<td contenteditable id="data6"></td>';
   html += '<td contenteditable id="data7"></td>';
   html += '<td contenteditable id="data8"></td>';
   html += '<td contenteditable id="data9"></td>';
   html += '<td contenteditable id="data10"></td>';
   html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
   html += '</tr>';
   $('#user_data tbody').prepend(html);
  });
  
  $(document).on('click', '#insert', function(){
   var name = $('#data1').text();
   var email = $('#data2').text();
   var address = $('#data3').text();
   var city= $('#data4').text();
   var state = $('#data5').text();
   var zipcode = $('#data6').text();
   var item = $('#data7').text();
   var pickup = $('#data8').text();
   var find = $('#data9').text();
   var interest = $('#data10').text();

   if(name != '' && email != '' && address != ''  && city!= ''  && state != ''  && zipcode != '' && item != '' && pickup != '' && find != '' && interest != '')
   {
    $.ajax({
     url:"donateinsert.php",
     method:"POST",
     data:{name:name,email:email,address:address,city:city,state:state,zipcode:zipcode,item:item,pickup:pickup,find:find,interest:interest},
     success:function(data)
     {
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
   else
   {
    alert("all fields are required");
   }
  });
  
 $(document).on('click', '.delete', function(){
   var id = $(this).attr("id");
   if(confirm("Are you sure you want to remove this?"))
   {
    $.ajax({
     url:"donatedelete.php",
     method:"POST",
     data:{id:id},
     success:function(data){
      $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
      $('#user_data').DataTable().destroy();
      fetch_data();
     }
    });
    setInterval(function(){
     $('#alert_message').html('');
    }, 5000);
   }
  });
 });

</script>
