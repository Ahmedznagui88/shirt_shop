<x-layout>

    <div class="container d-flex justify-content-center">
        <div class="row justify-content-center ">
            <div class="col-8 col-md-5 contForm">
                <div class="container">
                    <div class="row text-center">
                        <h2 class="my-2 fs-1">Edit</h2>
                    </div>
                </div>
                <form action="{{ route('tshirt.update', $tshirt) }}" method="POST" class="p-5 shadow bg-custom rounded text-light" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="d-flex flex-row">
                        <div class="">
                            <label for="name" class="form-lable">Name</label>
                            <input type="text" class="form-control " name="name" value="{{ $tshirt->name}}" id="name">
                            @error('name')
                                <div class="fst-italic">{{ $message }}</div>                            
                            @enderror 
                        </div>
    
                        <div class="mx-4"> 
                            <label for="brand" class="form-lable">Brand</label>
                            <input type="text" class="form-control " name="brand" value="{{ $tshirt->brand}}" id="brand">
                            @error('brand')
                                <div class="fst-italic">{{ $message }}</div>                            
                            @enderror
                        </div>
                    </div>

                    <div class="my-3 d-flex flex-column align-items-center">
                        <label for="logo" class="form-lable m-2">Logo</label>
                        <img src="{{ Storage::url($tshirt->logo) }}" alt="{{ $tshirt->name}}" class="img-fluid w-25 rounded-4">                       
                    </div>

                    <div class="my-3">
                        <label for="logo" class="form-lable">Logo</label>
                        <input type="file" class="form-control w-75" name="logo"  id="logo">
                        @error('logo')
                            <div class="fst-italic">{{ $message }}</div>                            
                        @enderror
                    </div>
                    
                   <div class="d-flex flex-row">
                    <div class="my-3">
                        <label for=""  class="form-lable">Gender</label>
                        <select class="form-select " name="gender_id">
                            <option selected disabled>Select Gender</option>
                            @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}" @if($tshirt->gender_id == $gender->id) selected @endif>{{ $gender->name }}</option>
                            @endforeach
                          </select>
                    </div>

                    <div class="my-3 mx-3"> 
                        <label for="size" class="form-lable">Size</label>
                        <input type="text" class="form-control w-25" name="size" value="{{ $tshirt->size}}" id="size">
                        @error('size')
                            <div class="fst-italic">{{ $message }}</div>                            
                        @enderror
                    </div>
                   </div>
                   <div class="my-3">
                    <label for=""  class="form-lable">Categories</label>
                    <select class="form-select w-50" name="categories[]" multiple>
                        @foreach ($categories as $category)
                        <option  value="{{ $category->id }}" @if($tshirt->categories->contains($category->id)) selected @endif>{{ $category->name }}</option >
                        @endforeach
                      </select>
                </div>
                    <button type="submit" class="btn btn-light text-warning mt-3">edit</button>
                </form>
               
            </div>
        </div>
    </div>
</x-layout>