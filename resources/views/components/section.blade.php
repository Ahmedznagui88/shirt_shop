<div class="container bgSec">
    <div class="row">
        <div class="col-6 col-sm-6">
            <h1 class="text-black mt-5 text-center">Your Product</h1>
            @foreach (Auth::user()->tshirts as $tshirt)
            <div class="col-md-6">
                <x-card :tshirt="$tshirt" />
            </div>
            @endforeach
        </div>
       
    </div>
        
</div>


