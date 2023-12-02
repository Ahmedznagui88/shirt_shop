<x-layout>
    <div class="container ">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-8 contForm">
                <form action="{{ route('register') }}" method="POST" class="p-5 shadow bg-custom rounded">
                    <div class="text-center">
                        <h2>Sign in</h2>
                    </div>
                    @csrf
                    <div class="my-3"> name
                        <label for="name" class="form-lable"></label>
                        <input type="name" class="form-control" name="name" value="{{ old('name') }}" id="name">
                        @error('name')
                            <div class="fst-italic">{{ $message }}</div>                            
                        @enderror
                    </div>
                    <div class="my-3"> email
                        <label for="email" class="form-lable"></label>
                        <input type="email" class="form-control" name="email" value="{{ old('name') }}" id="email">
                        @error('email')
                            <div class="fst-italic">{{ $message }}</div>                            
                        @enderror
                    </div>
                    <div class="my-3"> password
                        <label for="password" class="form-lable"></label>
                        <input type="password" class="form-control" name="password" id="password">
                        @error('password')
                        <div class="fst-italic">{{ $message }}</div>                            
                        @enderror
                    </div>
                    <div class="my-3"> confirm
                        <label for="password_confirmation" class="form-lable"></label>
                        <input type="password" class="form-control" name="password_confirmation" id="password_confirmation">
                    </div>

                    <button type="submit" class="btn btn-dark mt-3">registrati</button>
                </form>
               
            </div>
        </div>
    </div>
</x-layout>