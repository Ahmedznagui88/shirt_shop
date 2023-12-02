<x-layout>
    

    <div class="container ">
        <div class="row justify-content-center ">
            <div class="col-12 col-md-8  contForm">
                <form action="{{ route('login') }}" method="POST" class="p-5 shadow bg-custom rounded">
                    <div class="text-center">
                        <h2>Login</h2>
                    </div>
                    @csrf
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
                    <div class="my-3">
                        <input type="checkbox" class="form-check-input" name="remember" id="remember">
                        <label for="remember" class="form-lable">Remember</label>
                    </div>

                    <button type="submit" class="btn btn-dark mt-3">Login</button>
                </form>
               
            </div>
        </div>
    </div>

    
</x-layout>