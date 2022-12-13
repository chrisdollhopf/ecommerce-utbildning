<div id="courses"></div>
  <div class="w-screen h-full">
  
    <div class="m-auto pb-24 md:pb-32"
         id="backing-texture">

      <div class="text-center pt-12 sm:pt-16 pb-8 sm:pb-10 lg:pt-20 lg:pb-16 lg:px-20">
        <p class="text-5xl lg:text-6xl leading-none text-teal-500 pb-3 lg:pb-6">Emobile Kurs Utbud</p>
        <p class="md:text-3xl italic font-hairline tracking-tight text-black mx-6">"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil."
        </p>
      </div>

      <div  x-data="{ isOpen: true }"
      class="flex flex-wrap justify-center">
        
        <div class="max-w-md lg:flex-none rounded overflow-hidden shadow-xl m-3">
          <div class="h-56 bg-cover bg-no-repeat" style="background-image: url({{ asset('images/mobile-code-over.jpg') }})">
          </div>
            <div class="bg-white px-6 py-4">
              <div class="px-6 py-4 text-left">
                <div class="font-bold text-xl mb-2">Första Utbildning</div>
                  <p class="text-gray-700 text-base">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                  </p>
              </div>
                <div class="flex justify-center px-6 pt-1 pb-2">
                  <span class="bg-gray-200 rounded-full px-4 py-1 text-sm font-semibold text-gray-700 mr-2">Höst</span>
                  <span class="bg-gray-200 rounded-full px-4 py-1 text-sm font-semibold text-gray-700 mr-2">Distans</span>
                  <span class="bg-gray-200 rounded-full px-4 py-1 text-sm font-semibold text-gray-700">Heltid</span>
                </div>
              <div class="flex justify-center py-8">
                <button x-on:click="isOpen = true"
                        class="bg-teal-400 rounded-full w-1/2 px-6 py-4 text-sm font-semibold text-gray-900">Course Details</button>
                <div x-show="isOpen">
                  @include('modal-2', ['data' => [
                    1 => [
                          'image' => asset('images/mobile-code-over.jpg'),
                          'name' => 'Första Kursen',
                          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.'
                          ],
                    2 => [
                          'image' => asset('images/mobile-pad-over.jpg'),
                          'name' => 'Andra Kursen',
                          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.'
                          ],
                    3 => [
                          'image' => asset('images/mobile-screen-over.jpg'),
                          'name' => 'Tredje Kursen',
                          'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.'
                          ]
                          ]])
                </div>
              </div>
            </div>
        </div>
      
      
        <div class="max-w-md lg:flex-none rounded overflow-hidden shadow-xl m-3">
          
            <div class="h-56 bg-cover bg-no-repeat" style="background-image: url({{ asset('images/mobile-pad-over.jpg') }})">
            </div>            
              <div class="bg-white px-6 py-4">
                <div class="px-6 py-4 text-left">
                  <div class="font-bold text-xl mb-2">Andra Utbildning</div>
                    <p class="text-gray-700 text-base">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="flex justify-center px-6 pt-1 pb-2 text-left">
                  <span class="bg-gray-200 rounded-full px-4 py-1 text-sm font-semibold text-gray-700 mr-2">Vinter</span>
                  <span class="bg-gray-200 rounded-full px-4 py-1 text-sm font-semibold text-gray-700 mr-2">Distans</span>
                  <span class="bg-gray-200 rounded-full px-4 py-1 text-sm font-semibold text-gray-700">Deltid</span>
                </div>
                <div class="flex justify-center py-8">
                  <button x-on:click="isOpen = true"
                          class="bg-teal-400 rounded-full w-1/2 px-6 py-4 text-sm font-semibold text-gray-900">Course Details</button>
                </div>
            </div>
        
        </div>

        <div class="max-w-md lg:flex-none rounded overflow-hidden shadow-xl m-3">
          
            <div class="h-56 bg-cover bg-no-repeat" style="background-image: url({{ asset('images/mobile-screen-over.jpg') }})">
            </div>            
              <div class="bg-white px-6 py-4">
                <div class="px-6 py-4 text-left">
                  <div class="font-bold text-xl mb-2">Tredje Utbildning</div>
                    <p class="text-gray-700 text-base">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <div class="flex justify-center px-6 pt-1 pb-2">
                  <span class="bg-gray-200 rounded-full px-4 py-1 text-sm font-semibold text-gray-700 mr-2">Vinter</span>
                  <span class="bg-gray-200 rounded-full px-4 py-1 text-sm font-semibold text-gray-700 mr-2">Distans</span>
                  <span class="bg-gray-200 rounded-full px-4 py-1 text-sm font-semibold text-gray-700">Heltid</span>
                </div>
                <div class="flex justify-center py-8">
                  <button x-on:click="isOpen = true"
                  class="bg-teal-400 rounded-full w-1/2 px-6 py-4 text-sm font-semibold text-gray-900">Course Details</button>
                </div>
            </div>
        </div>
        

      </div>
    </div>
  </div>



  {{-- <button class="focus:outline-none"> </button> --}}