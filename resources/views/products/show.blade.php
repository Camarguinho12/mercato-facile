<x-layouts.app>
		<div class="grid-cols-2">
			<div class="row gx-4 gx-lg-5 align-items-center">
				<div>
					 
					<img style="width:20rem" src="{{Storage::url($product->image)}}" alt="..." />
				</div>
				<div>
				 
					<h1>{{$product->object}}</h1>
					<p>Categoria: {{$product->category}}</p>
					<p>Prezzo: {{$product->price}}</p> 
					
                    <p>Descrizione: {{$product->about}}</p>
					<hr> 
				</div>
			</div>
	</section>
</x-layouts.app>