<x-layout>

    <div class="container">
        
    </div>

    <div class="container ">
        
        <div class="row justify-content-center ">
            <div class="col-8 col-md-5 contForm">
                <form action="{{ route('tshirt.store') }}" method="POST" class="p-5 shadow bg-custom rounded" enctype="multipart/form-data">
                    @csrf
                    <div class="row text-center">
                        <h2>Product</h2> 
                   </div>
                    <div class="">
                        <label for="name" class="form-lable">Name</label>
                        <input type="text" class="form-control w-50" name="name" value="{{ old('name') }}" id="name">
                        @error('name')
                            <div class="fst-italic">{{ $message }}</div>                            
                        @enderror
                    </div>

                    <div class="my-3"> 
                        <label for="brand" class="form-lable">Brand</label>
                        <input type="text" class="form-control w-50" name="brand" value="{{ old('brand') }}" id="brand">
                        @error('brand')
                            <div class="fst-italic">{{ $message }}</div>                            
                        @enderror
                    </div>

                    <div class="my-3">
                        <label for=""  class="form-lable">Gender</label>
                        <select class="form-select w-50" name="gender_id">
                            <option selected disabled>Select Gender</option>
                            @foreach ($genders as $gender)
                            <option value="{{ $gender->id }}">{{ $gender->name }}</option>
                            @endforeach
                          </select>
                    </div>

                    <div class="my-3">
                        <label for=""  class="form-lable">Categories</label>
                        <select class="form-select w-50" name="categories[]" multiple>
                            @foreach ($categories as $category)
                            <option  value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                          </select>
                    </div>

                    <div class="my-3">
                        <label for="logo" class="form-lable">Logo</label>
                        <input type="file" class="form-control w-75" name="logo"  id="logo">
                        @error('logo')
                            <div class="fst-italic">{{ $message }}</div>                            
                        @enderror
                    </div>

                    <div class="my-3"> 
                        <label for="size" class="form-lable">Size</label>
                        <input type="text" class="form-control w-25" name="size" value="{{ old('size') }}" id="size">
                        @error('size')
                            <div class="fst-italic">{{ $message }}</div>                            
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-dark mt-3">Add product</button>
                </form>
               
            </div>
        </div>
    </div>

    
</x-layout>