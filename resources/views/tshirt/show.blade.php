<x-layout>
    <div class="container  contUno">
        <div class="row align-items-center">
            <div class="col-10 col-md-6">
                <img src="{{ Storage::url($tshirt->logo) }}" class="w-50 imgCard" alt="{{ $tshirt->name }}">
            </div>
            <div class="col-6 col-md-6 ">
                <h4 class="">{{ $tshirt->brand }}</h4>
                <div class="d-flex">
                    @if(count($tshirt->categories))
                    @foreach ($tshirt->categories as $category)
                           <p>{{ $category->name }}</p>
                    @endforeach
                    @else
                    No Categories
                    @endif
                    <p class="mx-5">size: {{ $tshirt->size }}</p>

                </div>
                <div class="w-25"> 
                    
                    <p>Gender: {{ $tshirt->gender->name ?? ''}}</p>
                </div>
                
                <div class="bg-body-tertiary w-25 rounded-2 text-center">
                    <p class="">Seller: {{ $tshirt->user->name ?? 'Unknown'}}</p>
                </div>
                <div class="d-flex ">
                    @auth
                    @if ($tshirt->user_id == Auth::user()->id)
                    <p class="d-inline-flex ">
                        <a class="btn btn-light btn-1 " data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Edit the product</a>
                    </p>
                    <div class="row">
                        <div class="col">
                            <div class="collapse multi-collapse" id="multiCollapseExample1">
                                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                                    
                                    <a href="{{ route('tshirt.edit', $tshirt) }}" class="btn btn-light rounded-0 text-warning">Edit</a>
                                    
                                    <form action="{{ route('tshirt.destroy', $tshirt) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-light btn-2 text-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
</x-layout>
{{-- <p class="my-5">Add at: {{ $tshirt->created_at->format('d/m/y') }}</p> --}}