<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script type="text/javascript">
	$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});
</script>
<script>
 $(document).ready(function(){
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.onload = function(e) {
      $('#previewHolder').attr('src', e.target.result);
    }

    reader.readAsDataURL(input.files[0]);
  }
}

$("#filePhoto").change(function() {
  readURL(this);
});
 });
 </script>
 <script type="text/javascript">

        $('body').on('click','#confrmidpass',function(){
          // alert('jhdfs');
      debugger;
        var userid = $('#txtUserid').val();
        var password = $('#txtPassword').val();
       
       });
    </script>

    <script type="text/javascript">
  $(document).ready(function(e) {
  $('body').on('change','#dpartment',function(){
      debugger;
      var depart_id=$(this).val();
      $.ajax({
        type:"POST",
        url:"<?php echo base_url("website/get_postlistbyid"); ?>",
        data:{depart_id:depart_id},
        success: function(data){
          console(data);
          // $(data).each(function(i, val) {
          //   option+="<option value='"+val['position']+"'>After "+val['name']+"</option>";
          // });
          // option+='</select>';
          // $('#position').replaceWith(option);
          // $('.box-overlay').hide();
        }
      });
    });
});

</script>