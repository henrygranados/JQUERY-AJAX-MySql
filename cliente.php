<html>
  <head>
    <script type="text/javascript" src="jquery-1.9.1.js"></script>
  </head>
  <body>

  <input type="button" id="display" value="Data information" />
  <br/><br/>
  <div id="output"></div>
    

  <script id="source" language="javascript" type="text/javascript">

  $(document).ready(function() 
  {
    //HTTP Request with Ajax
    $("#display").click(function() {
    $.ajax({                                      
      url: 'api.php',                           
      data: "",                        
                                       
      dataType: 'json',                      
      success: function(data)          
      {
        var user = data[0];      
        var name = data[1];           
        var age = data[2];
        $('#output').html("User: "+user+"<br/> Name: "+name + "<br/> Age: " + age);
      } 
    });
    });
  }); 

  </script>
  </body>
</html>