<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>



<link rel="stylesheet" href="css/bootstrap.min (2).css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min (2).js"></script>
  <link href="css/account.css" rel='stylesheet' type='text/css' />
  <?php /*?><?php include 'php/user_account.php' ?><?php */?>
  <script>
  $(document).ready(function(e) {

    $("#save").click(function(){
	  var fname = $("#f_name").val();
	  var lname = $("#l_name").val();
	  var mobile = $("#mobile").val();
	  var area = $("#area").val();
	  var email = $("#email").val();
		$.post("php/user_account.php",{fname:fname,lname:lname,mobile:mobile,area:area,email:email},function(data){		alert($data);
			}).done(function(data){alert(data);})
		});
});
  
  </script>
</head>

<body>
<div class="container container-class">
	<div class="opa">
<div class="inner-container">
	<div class="col-xs-12 acc-back-color">
   
        <div class="col-xs-12 my-account ">
        	<h2 class="acc-name">My Account</h2>
        	<button type="button" class="btn btn-success log-out">Logout</button>
        </div>
        <div class="col-xs-12">
        	<div class="acc-tab">
  
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#address">Address</a></li>
    <li><a data-toggle="tab" href="#order-history">Order History</a></li>
    <li><a data-toggle="tab" href="#shopping-list">Shopping List</a></li>
    
  </ul>

  <div class="tab-content">
  
  					<!--ADDRESS-->
    <div id="address" class="tab-pane fade in active">
      
      <div class="col-xs-4 add-box-pad">
      	<p class="add-area" id="firstname">First Name</p>
        <p class="add-area">Last Name</p>
        <p class="add-area"> Mobile</p>
        <p class="add-area"> Address</p>
        <p class="add-area pintab"> E-mail</p>
        
      </div>
      
      <div class="col-xs-8">
      	<form  role="role" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" name="fname" id="f_name" placeholder="Enter Name">
                 </div>
                 <div class="form-group">
                    <input type="text" class="form-control" name="lname" id="l_name" placeholder="Enter Last Name">
                 </div>
                  <div class="form-group">
                    <input type="number" class="form-control" name="mobile" id="mobile" placeholder="Enter Mobile Number ">
                 </div>
                 <div class="form-group">
                    <textarea class="form-control" rows="3" id="area" name="area" placeholder="Enter Address"></textarea>
                 </div>
                 <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="E-mail Address">
                 </div>
                 
                 <button type="submit"  class="btn btn-success " id="save" style="float:right;" >Save </button>
        </form>
      	
      </div>
      
      
      

      
    </div>
    
    				<!--ORDER HISTORY-->
    <div id="order-history" class="tab-pane fade">
  		<div class="col-xs-12 acc-order">
        	<div class="col-xs-3">
            <p class="order-name"> Order Number</p>
            </div>
            <div class="col-xs-3">
            <p class="order-name"> Date placed</p>
            </div>
            <div class="col-xs-3">
            <p class="order-name"> Status </p>
            </div>
            <div class="col-xs-3">
            <p class="order-name">Total Amount </p>
            </div>
        </div>
    </div>
    
    				<!--SHOPPING LIST-->
    <div id="shopping-list" class="tab-pane fade">
      <div class="col-xs-12 acc-list">
      	<div class="col-xs-8">
        <p class="splist-name"> Item Name </p>
        </div>
        <div class="col-xs-4 remover-icon">
        	<div class="glyphicon glyphicon-remove"> </div>
        </div>
      </div>
    </div>
   
  </div>
</div>
        </div>
        
       
    </div>
    
    </div>
    
    </div>
</div>

</body>
</html>
