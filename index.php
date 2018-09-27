<!DOCTYPE html> 
<html>
<head>
<meta charset="utf-8">
<title>State Preserving Incrementing Button</title>
<!-- Call our very basic CSS file !-->
<link rel="stylesheet" href="stylesheet.css">
  
</head>
<body>
<center><h1>The State Preserving Incrementing Button</h1></center>
<center><h4>by Izan Mubarak for the CROMA Lab</h4></center>
<div class="container">
    <div class="boxC"> 
        <!-- Create the "+1" button !-->
        <button style="align: center" id="click2" name="click2" class="btn btn-primary">+1</button> 
        <div style="text-align: center" id="resultsAjax"></div>   
    </div>
</div>
</body>
    
<!-- Load in JQuery for the click event handler !-->
<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    
    <script>

    // Load the initial value.
    loadInitial();
        
    // Click event handler – will call increment() every time the button "+1" is clicked
    $("#click2").click(function (){ 
        increment();
    });
        
    // Increments the number of times the button is clicked. Code for this function is located in
    // "load_content.php" 
    function increment (){
        $.ajax({
            type:"GET",
            url:"load_content.php",
            data: "",
            success: function(data) {
                $("#resultsAjax").html(data);
            }
        });
    }

    // Gets the number of times the button was clicked when the page is initially loaded. This 
    // function is called once.
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