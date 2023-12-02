<x-layout>
    <div class="container  mt-5 d-flex justify-content-center ">
        <div class="row ">
            @if ($tshirts->isNotEmpty())
                @foreach ($tshirts as $tshirt)
                    <div class="col-6 col-md-6">
                        <x-card :tshirt="$tshirt" />
                    </div>
                @endforeach
            @else
            
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-12 col-md-12 mt-5">
                            <h3 class="text-center">No products here</h3>
                        </div>
                    </div>

                   <div class="row">
                        <div class="col-12 col-md-12 d-flex justify-content-center mt-5">
                            <img src="/media/empty hangers.avif" class="img-fluid w-25" alt="">
                        </div>
                    </div>
                </div> 
                
            @endif
        </div>
    </div>
</x-layout>