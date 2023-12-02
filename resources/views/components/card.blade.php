<a id="areaUno" href="{{ route('tshirt.show' , $tshirt) }}" class="text-decoration-none">
  <div class="card my-5 cardBlade" style=" max-width: 440px;">
    <div class="row g-0 ">
      <div class="col-md-4">
        <img src="{{Storage::url($tshirt->logo)}}" class="img-fluid rounded-start" alt="{{ $tshirt->name }}">
      </div>
      <div class="col-md-4 d-flex align-items-center">
        <div class="card-body">
          <h5 class="card-title">{{ $tshirt->name }}</h5>
          <p class="card-text">{{ $tshirt->brand}}</p>
          <p class="card-text">{{ $tshirt->size}}</p>
        </div>
      </div>
    </div>
  </div>
</a>