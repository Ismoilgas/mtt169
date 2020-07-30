$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
})


// $(document).ready(function(){
   // $('.product').css('opacity', 0.7)
   // .mouseover(function(){
   //    $(this).css('opacity', 1);  
   // })
   // .mouseout(function(){
   //    $(this).css('opacity', 0.7);  
   // });
// });

var BaseRecord={
search: function(value){
   var ajaxSetting={
      method: 'get',
      url: './', 
      data: {
         search: value,
      },
      success: function(data){
         //alert(data.table);
         $('#row').html(data.table);
      },
   };
   $.ajax(ajaxSetting);	   
},

removeone: function(id){
   var ajaxSetting={
      method: 'post',
      url: './clearone',
      data: {
         id: id,
      },
      success: function(data){
         // alert(data);
         BaseRecord.cart();

      },
   };
   $.ajax(ajaxSetting); 
},

clearall: function(){
   var ajaxSetting={
      method: 'post',
      url: './clearall', 
      success: function(data){
         //alert(data);
         BaseRecord.cart(); 
      },
   };
   $.ajax(ajaxSetting);
},


cart: function(){ 
   var ajaxSetting={
      method: 'get',
      url: './cart',
      success: function(data){
         $('.cart-standard').html(data.table);
         $('.listbuttonremove').click(function(){ 
            BaseRecord.removeone($(this).attr('id'));
            return false;
         });         
      },
   };
   $.ajax(ajaxSetting); 
},

mailer: function(value){
   var ajaxSetting={
      method: 'post',
      url: './mailer',
      data: {
         email: value,
      },
            success: function(data){
         //alert(data.answer); //!!!data.answer - {"mail":[true],"request":[true]}
         //alert(data); //!!!data - {"email":["The email must be a valid email address."]}
         if(data.answer) {
            var data_json=JSON.parse(data.answer);
            if(data_json['mail']) alert('We sent the message to your email!'); 
         } else {
            var data_json=JSON.parse(data);
            var error_str='';
            for(var i in data_json){
               error_str+=data_json[i]+'\n';
            }
            alert(error_str);
         }
      },

   };
   $.ajax(ajaxSetting); 
},

destroy: function(id){
   var ajaxSetting={
       method: 'delete',
       url: './products/'+id,
       //data:
       success: function(data){
          
          BaseRecord.dashboard();
          // $('#pannel').html(data.table);
          // $('.listbuttonremove').click(function(){
          //    BaseRecord.destroy($(this).attr('id'));
          //    return false;
          // });                
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




};
