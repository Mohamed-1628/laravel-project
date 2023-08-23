<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          @foreach ($cards as $card)
            <div class="flip-card">
              <div class="flip-card-inner">
                <div class="flip-card-front">
                  <p class="title">{{ $card->name }}</p>
                  <p><img src="images/{{ $card->image }}" alt="yo"></p>
                </div>
                <div class="flip-card-back">
                  <a href="{{ $card->adress }}">
                    <div class="link">
                      <p class="title">Descrition</p>
                      <p class="desciption">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, eos rem
                        animi
                        cumque quam veritatis, suscipit voluptatibus odit eaque hic modi. Doloremque pariatur debitis
                        aut eos.
                        Porro aut quod quos?</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
