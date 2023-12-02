<x-layout>
<x-header/>
<section id="areaDue" class="container col-xm-6">
    <div class="row justify-content-end ">
        <div class="col-6 col-md-6 divHome d-flex flex-column align-items-center">
            <h1 class="text-black">Next purchases</h1>
            @foreach ($tshirts as $tshirt)
            <div class="col-md-6">
                <x-card :tshirt="$tshirt" />
            </div>
            @endforeach
        </div>
    </div>
</section>
</x-layout>
