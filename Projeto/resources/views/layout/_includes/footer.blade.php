
<script type="text/javascript" src="//code.jquery.com/jquery-2.1.4.js"></script><style type="text/css"></style>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<script type="text/javascript">//<![CDATA[
window.onload=function(){
$(document).ready(function() {
    $('select').material_select();
});
}//]]>
</script>

<script type="text/javascript">
  function update() {
    var select = document.getElementById('produtos');
    var option = select.options[select.selectedIndex];
    var quantidade = document.getElementById('quantidade');
    var newquantidade = quantidade.value;
    var oldquantidade = option.value;
    document.getElementById('oldquantidade').value = option.value;
    document.getElementById('newquantidade').value = quantidade.value;
    document.getElementById('id').value = option.id;
    document.getElementById('nome').value = option.text;

    if(newquantidade<0 && newquantidade<0-oldquantidade){
      alert("newquantidade:"+newquantidade+"oldquantidade"+oldquantidade);
    }
  }

  update();
</script>
</body>
</html>
