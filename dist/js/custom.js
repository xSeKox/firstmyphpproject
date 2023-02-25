function getInfo() {
  
    var username=document.getElementById("username").value;

    $.ajax({  
		url:"http://localhost/api/user.php",  
		type:"POST", 
		data:{'username':username,}, 
		dataType: "json",
		success:function(veriSonuc){
                    if(veriSonuc=="success")
					location.href = "http://localhost/home.php";
					else
					alert("basarısız");        
		}                                
	});
 }

 function logout() {

	alert ("sdfgsdg");
	$.ajax({  
		url:"http://localhost/api/logout.php",  
		type:"GET", 
		success:function(veriSonuc){   
		}   
	});





 }