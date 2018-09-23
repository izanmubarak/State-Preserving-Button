<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>State Preserving Incrementing Button</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="stylesheet.css">
  
</head>
<body>
<center><h1>The State Preserving Incrementing Button</h1></center>
<center><h4>by Izan Mubarak for the CROMA Lab</h4></center>
<div class="container">
    <div class="boxC"> 
        <button style="align: center" id="click2" name="click2" class="btn btn-primary">+1</button> 
        <div style="text-align: center" id="resultsAjax"></div>   
    </div>
</div>
</body>
    
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    
    <script>

    loadInitial();
        
    //load db content
    $("#click2").click(function (){ 
        loadBox();
    });
        
    function loadBox (){
        $.ajax({
            type:"GET",
            url:"load_content.php",
            data: "",
            success: function(data) {
                $("#resultsAjax").html(data);
            }
        });
    }

    function loadInitial (){
        $.ajax({
            type:"GET",
            url:"load_initial.php",
            data: "",
            success: function(data) {
                $("#resultsAjax").html(data);
            }
        });
    }

</script>
    
</html>