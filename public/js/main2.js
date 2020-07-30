$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})


var BaseRecord={


destroy: function(id){
   var ajaxSetting={
       method: 'delete',
       url: './photo/'+id,
       //data:
       success: function(data){
          
          //BaseRecord.dashboard();
          $('#image-pannel').html(data.table);
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




};
