$(document).ready(function(){

	//alert('ahmed');
	$('#meta').change(function() {
		//alert($(this).select().val());
		var url = $(this).data('url') + 'Users/ajax';
		//alert(url);
		$.ajax({
        url: url,
        type: "GET",
        data: { id: $(this).select().val() },
        contentType: "application/json; charset=utf-8",
        dataType: "json",
        success: function (result) {
            //alert(result.msg);
            $('#resultsearch').html(result.msg);
        },
        error: function (e) {
            alert(e.error);
        }

    });
	
});    		
});
function get_search_meta(){
	//alert('ahmed');
	//alert(mt_id);
	
}

