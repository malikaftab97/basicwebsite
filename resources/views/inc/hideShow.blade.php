<script>
$(document).ready(function(){
  $("#hide").click(function(){
    $("h3").hide();
  });
  $("#show").click(function(){
    $("h3").show();
  });
});
</script>
<h3>If you click on the "Hide" button, I will disappear.</h3>
<button id="hide">Hide</button>
<button id="show">Show</button>
