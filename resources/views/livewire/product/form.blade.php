<div>
    <div class="flex flex-col items-center mt-12">
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded-md my-2" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
    
    <form wire:submit='store' enctype="multipart/form-data" class="flex flex-col items-center my-8">

        @csrf

        <!--select category-->
        <div class="relative flex flex-col mb-8 w-5/6 md:w-2/4 xl:w-2/5">
            <select wire:model.live="category_id" type="text" id="category" class="peer h-10 w-full border-2 rounded border-gray-300 placeholder-transparent focus:outline-none focus:border-emerald-400 @error('category') border-red-600 focus:border-red-300 @enderror" placeholder=" ">
                <option value="">Scegli la categoria</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->title}}</option>
                @endforeach
            </select>
            <label for="category" class="absolute left-2 -top-3.5 text-gray-600 text-xs peer-placeholder-shown:text-base peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-emerald-500 transition-all @error('category') peer-focus:text-red-400 @enderror">Categoria</label>
        
            @error('category_id')
                <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        <!--fine select category-->

        <!--input object-->
        <div class="relative flex flex-col mb-8 w-5/6 md:w-2/4 xl:w-2/5">
            <input wire:model.live="object" type="text" id="object" class="peer h-10 w-full border-2 rounded border-gray-300 placeholder-transparent focus:outline-none focus:border-emerald-400 @error('object') border-red-600 focus:border-red-300 @enderror" placeholder=" ">
            <label for="object" class="absolute left-2 -top-3.5 text-gray-600 text-xs peer-placeholder-shown:text-base peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-emerald-500 transition-all @error('object') peer-focus:text-red-400 @enderror">Oggetto</label>
        
            @error('object')
                <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        <!--fine input object--> 
    
        <!--input price-->
        <div class="relative flex flex-col mb-8 w-5/6 md:w-2/4 xl:w-2/5">
            <input wire:model.live="price" type="text" id="price" class="peer h-10 w-full border-2 rounded border-gray-300 placeholder-transparent focus:outline-none focus:border-emerald-400 @error('price') border-red-600 focus:border-red-300 @enderror" placeholder=" ">
            <label for="price" class="absolute left-2 -top-3.5 text-gray-600 text-xs peer-placeholder-shown:text-base peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-emerald-500 transition-all @error('price') peer-focus:text-red-400 @enderror">Prezzo</label>
        
            @error('price')
                <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        <!--fine input price-->

        <!--input about-->
        <div class="relative flex flex-col mb-8 w-5/6 md:w-2/4 xl:w-2/5">
            <textarea wire:model.live="about" type="text" id="about" rows="5" class="peer w-full border-2 rounded border-gray-300 placeholder-transparent focus:outline-none focus:border-emerald-400 @error('about') border-red-600 focus:border-red-300 @enderror" placeholder=" "></textarea>
            <label for="about" class="absolute left-2 -top-3.5 text-gray-600 text-xs peer-placeholder-shown:text-base peer-placeholder-shown:top-2.5 peer-focus:-top-3.5 peer-focus:text-xs peer-focus:text-emerald-500 transition-all @error('about') peer-focus:text-red-400 @enderror">Descrizione</label>
        
            <p class="text-gray-600 text-center">
                Descrivi le caratteristiche.
            </p>

            @error('about')
                <span class="text-red-500">{{$message}}</span>
            @enderror
        </div>
        <!--fine input about-->

        <!--upload file-->
        <div class="col-span-full w-5/6 md:w-2/4 xl:w-2/5">
            <label for="cover-photo" class="block text-center font-medium leading-6 text-gray-600">Carica un'imagine</label>
        
            <div id="drop-area" class="mt-2 flex justify-center bg-white rounded-lg border border-dashed border-gray-900/25 px-6 py-10 w-full">
                <div class="text-center">
                    <svg id="svg-image" class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                    </svg>

                    <div id="image-preview" class="hidden mt-4">
                        <img id="preview-image" src="#" alt="Uploaded Image" class="max-h-40 mx-auto" />
                    </div>
        
                    <div class="mt-4 flex text-sm leading-6 text-gray-600">
                        <label for="file-upload" class="relative cursor-pointer rounded-md font-semibold text-emerald-600 focus-within:outline-none hover:text-emerald-400">
                            <span>Upload a file</span>
                            <input id="file-upload" name="image" type="file" class="sr-only"  />
                        </label>
                        <p class="pl-1">or drag and drop</p>
                    </div>
        
                    <p class="text-xs leading-5 text-gray-600">PNG, JPG, JPEG up to 5MB</p>
                </div>
            </div>
        </div>
        <!--fine upload file-->
    
        <!--button publica-->
        <div class="mt-6 flex items-center justify-center gap-x-6">
            <button type="submit" class="bg-emerald-400 py-2 px-14 rounded-full hover:bg-emerald-200 transition-all">Pubblica</button>
        </div>
        <!--fine bottom publica-->

    </form>
</div>
