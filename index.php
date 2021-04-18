<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<style>
html,body{
    background-color : black;
}

#degerr {
    text-align: center;
    color: #fff;
    background: black;
    padding: 10px;
    border-radius: 30px;
    font-family: arial;
    font-weight: bold;
    font-size : 25px;
}
</style>
<script>
$(document).ready(function(){
 $('#degerr').ready(function(){
  var tweet_txt = $('#degerr').val();
  //trim() is used to remover spaces
  if($.trim(tweet_txt) != '')
  {
   $.ajax({
    url:"load.php",
    method:"POST",
    data:{data:data},
    dataType:"text",
    success:function(data)
    {
     $('#degerr').val("");
    }
   });
  }
 });
 
 setInterval(function(){//setInterval() method execute on every interval until called clearInterval()
  $('#degerr').load("load.php").fadeIn("slow");
  //load() method fetch data from fetch.php page
 }, 1000);
 
});
</script>

<html>
<body>
 <div id="degerr"></div>
 </body>
 </html>
