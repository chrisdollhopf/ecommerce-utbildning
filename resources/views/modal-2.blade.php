{{-- <div class="fixed inset-0 bg-gray-900 opacity-75 z-20">
</div>

<div class="fixed flex flex-col justify-center align-center inset-0 z-30 mx-4" > --}}


    {{-- <div>
      <div 
        class="bg-white rounded-t-lg"
        x-data="{ activeSlide: 1, slides:[{{implode(',', array_keys($data))}}], slideData: {{json_encode($data)}} }"
        > --}}

        {{-- Slides --}}

          {{-- <template x-for="slide in slides" x-bind:key="slide">
            <div x-show="activeSlide === slide"
                  class="font-bold text-5xl text-gray-900 pb-4">    
              <img x-bind:src="slideData[slide].image" alt="feature image"
                    class="w-full rounded-t-lg">
                <div class="p-6">
                  <p x-text="slideData[slide].name"
                    class=""></p>
                  <p x-text="slideData[slide].description"
                    class="text-base"></p>
                </div>
            </div>
          </template> --}}

        {{-- Modal Navigation --}}

        {{-- <div class="flex flex-row justify-between px-8"> --}}

        {{-- Left Arrow --}}

        {{-- <div>
          <button 
            class="bg-teal-100 text-gray-900 hover:text-teal-400 font-bold hover:shadow-lg rounded-full w-12 h-12"
            x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1">
            &#8592;
          </button>
        </div> --}}

        {{-- Slide Indicators/Buttonw --}}

          {{-- <div>
            <template x-for="slide in slides" x-bind:key="slide">
              <button
                class="w-4 h-4 mt-4 mx-2 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-teal-600 hover:shadow-lg"
                x-bind:class="{ 
                    'bg-teal-400': activeSlide === slide,
                    'bg-gray-300': activeSlide !== slide 
                }" 
                x-on:click="activeSlide = slide"
              ></button>
              </template>
          </div> --}}
    
          {{-- Right Arrow --}}
          
          {{-- <div class="pb-8">
            <button 
              class="bg-teal-100 text-gray-900 hover:text-teal-400 font-bold hover:shadow rounded-full w-12 h-12"
              x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1">
              &#8594;
            </button>
          </div>

        </div>
    
      </div>

    </div> --}}

  {{-- <div class="flex justify-center bg-white rounded-b-lg pb-12">
    <button x-on:click="isOpen = false"
            x-ref="modalCloseButton"
            class="flex rounded-full bg-teal-400 px-12 py-4 ">Close
    </button>
  </div>

</div> --}}