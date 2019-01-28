<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="header">
				<h2>
					Insert Data Using Ajax
				</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<form id="frm">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="text" class="form-control" name="password" id="password" placeholder="Password">
				  </div>
				  <div class="form-check">
				    <input type="checkbox" class="form-check-input" id="exampleCheck1">
				    <label class="form-check-label"  for="exampleCheck1">Check me out</label>
				  </div>
				  <button type="submit" id="save"  class="btn btn-primary">Submit</button>
		</form>
			</div>
			<div class="col-md-6">
				<div id="data">
			
				</div>
			</div>
			
			
		
		</div>
	</div>
	<script>
		// data insert 
		$(document).ready(function(){
			$("#save").click(function(){
				$.ajax({
					url:"insert.php",
					type:"post",
					data:$("#frm").serialize(),
					success:function(d)
					{
						alert(d);
						$("#frm")[0].reset();
					}
				});
			});
			
		});


// data get
		 var ajax = new XMLHttpRequest();
            var method = "GET";
            var url = "data.php";
            var asynchronous = true;

            //sending ajax request 
            ajax.open(method,url,asynchronous);
            ajax.send();

            //receiving response form data.php

            ajax.onreadystatechange = function()
            {
                if(this.readyState == 4 && this.status == 200)
                {
                    // mconverting jason back t array;
                    var data = JSON.parse(this.responseText);
                    console.log(data);
                    var html = "";
                     html += "<table class='table'>";
                     html += "<thead>";
                     html += " <tr>";
                     html += "<th>ID </th>";
                     html += "<th> User Name</th>";
                     html += "<th> Password</th>";
                     html += "<th> </th>";
                     html += "<th> </th>";
                     html += "</tr>";
                     html += " </thead>";
                     html += " <tbody>";
                     var counter=0;
                    for(var i=0;i<data.length;i++)
                    {
                    	 html += " <tr>";
                        var author = data[i].email;
                        var message = data[i].password;
                        html +="<td>"+(counter=counter+1)+"</td>";
                        html +="<td>"+author+"</td>";
                        html +="<td>"+message+"</td>";
                        html +="<td>"+"<button class='btn btn-primary'> Edit</button>"+"</td>";
                         html +="<td>"+"<button class='btn btn-danger'> Delete</button>"+"</td>";
                        html += "</tr>";
                    }
                   
                    html += " </tbody>";
                     html += "</table>";
                    document.getElementById('data').innerHTML = html;
                }
            }
	</script>
</body>
</html>