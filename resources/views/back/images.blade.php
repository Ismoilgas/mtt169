@extends('back.layout')

@section('css')
<style>
.back-pannel img {
width: 120px; 
}
</style>  

@endsection

@section('main')
       <!-- yield('main') -->    
        <div class="row padding_body">
           <div class="col-md-12">
              <div class="box box-primary">
                 <div class="box-body">
                    <div id="spinner" class="text-center"></div>
                    <div class="table-responsive">
                      <table>
                         <thead>
                          <tr>
                            <td class="widthbutton">&nbsp;</td>
                            <td>Rasmlar</td>
                            
                          </tr>  
                          </thead>
                          <tbody id="image-pannel" class="back-pannel">
                             @include('back.image-standard')
                          </tbody>    
                       </table>
                     </div>
                     <hr>                       
                   </div>  
                 </div>
              </div> 
           </div>       
@endsection

@section('js') 
    <!-- !!! main.js (or mine.js - see in public)-->
    <script src="{{ asset('public/js/main2.js') }}"></script>
    <script>
       $(document).ready(function(){
         $('.listbuttonremove').click(function(){
            BaseRecord.destroy($(this).attr('id'));
            return false;
         });
       });
    </script>
@endsection   
         
   