﻿$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})

var BaseRecord=(function() {

return {

typeSelect: function(type_id){
	var ajaxSetting={
		method: 'get',
		url: './',
		data:{
			type: type_id, //$request->type
		},
		success: function(data){
			//alert(data);
			$('#pannel').html(data.table);
		},
		error: function(data){
                alert(data.responseText);
            },

	};
	$.ajax(ajaxSetting);
},

destroy: function(id){
   var ajaxSetting={
       method: 'delete',
       url: './cards/'+id,
       //data:
       success: function(data){
          
          //BaseRecord.dashboard();
          $('#pannel').html(data.table);
          $('.listbuttonremove').click(function(){
             BaseRecord.destroy($(this).attr('id'));
             return false;
          });                
       },
       error: function(data){
          alert(data.responseText);
       },
   };
   $.ajax(ajaxSetting);
},

dashboard: function(){
   var ajaxSetting={
       method: 'get',
       url: './dashboard',
       //data:
       success: function(data){
          // alert(data);
          $('#pannel').html(data.table);
          $('.listbuttonremove').click(function(){
             BaseRecord.destroy($(this).attr('id'));
             return false;
          }); 
       },
       error: function(data){
          alert(data.responseText);
       },
   };
   $.ajax(ajaxSetting);
},

}

})();