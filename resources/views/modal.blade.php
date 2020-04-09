<div class="hidden fixed bg-gray-900 opacity-75 inset-0 z-40">
</div>
<div class="hidden fixed flex items-center justify-center inset-0 z-50">
  <div class="bg-white rounded-lg p-4 max-w-xl w-full shadow-xl mx-3">
    <carousel-component :items='<?php echo json_encode(array(
     array(
         "title" => "Forsta",
          "image" => URL::asset('images/mobile-code-over.jpg')
     ),
    array(
          "title" => "Forsta",
          "image" => URL::asset('images/mobile-code-over.jpg')
     )
    )); ?>'> 
    </carousel-component>
  </div>
</div>