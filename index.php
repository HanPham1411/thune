<?php
include "header.php";
$path = $_SERVER['REQUEST_URI'];
$url = explode("menu=", $path);
if(!isset($url[1]))
{
    header("location: ?menu=1");
}
?>
<script>
$(function(){
	$("form").submit(function(){
		$.ajax({
			url: $(this).attr("action"),
			method: $(this).attr("method"),
			data : $(this).serialize(),
			success: function(result){
					$(".alert strong").text(result);
				}
		});
		return false;
	});
});

</script>

<div class="jumbotron text-center">
  <h1>Trang Demo</h1>
  <p>Trang demo các bài tập ứng dụng PHP</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-7">
    <h3>Tính tổng các chữ số</h3>
            <form action="function.php" method="post">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Chữ số</span>
                    </div>
                    <input type="number" class="form-control" name="number" />
                </div>
                <button type="submit" style="float:right" class="btn btn-primary">Submit</button>
       	    </form>
       	    <br/>
       	    <br/>
       	    <div style="display:block" class="alert alert-success">
              Kết quả là <strong></strong>
            </div>
    </div>
    <div class="col-sm-2"></div>
    <div class="col-sm-3">
      <h3>Mục lục</h3>        
      	<ul class="list-group">
          <li class="list-group-item list-group-item-success"><a href="?menu=1">Tính tổng các chữ số</a></li>
		</ul>
    </div>
  </div>
</div>

<?php 
include "footer.php";
?>