$(document).ready(function(){
	$(document).on('click' , '.bn-edit' ,function(){
			var id = this.id;
			$.ajax({
				url: 'read.php',
				type: 'POST',
				dataType: 'JSON',
				data: {"id":id,"type":"single"},
				success:function(response){
					$("#edit-modal").modal('show');
					$('#title').val(response.title);
					$('#content').val(response.content);
					$("#name").val(response.name);
					$("#id").val(id);
				}
			});
		});
	

	$(document).on('click' , '.btn-primary' ,function(){
		            var title = $('#title').val();
				    var content = $('#content').val();
					var name= $('#name').val();
					var id = this.id;

			$.ajax({
					url: 'edit.php',
					type: 'POST',
					data: {"title": title, "content":content, "name":name, "id":id},
					success:function(response){
						$("#messageModal").modal('show');
						$("#msg").html(response);
						$("#edit-modal").modal('hide');
						loadData();
					}
				});
		});
	
	$(document).on('click' , '.bn-delete' ,function(){
		if(confirm("确定删除吗?")) {
			var id = this.id;
			$.ajax({
				url: 'delete.php',
				type: 'POST',
				dataType: 'JSON',
				data: {"id":id},
				success:function(response){
					loadData();
				}
			});
		}
	});
	
});
	
function loadData() {
	$.ajax({
		url: 'read.php',
		type: 'POST',
		data: {"type":"all"},
		success:function(response){
			$("#container").html(response);
		}
	});
}