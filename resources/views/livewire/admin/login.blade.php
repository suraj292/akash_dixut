<div class="container">
    <div class="w-50 text-center mx-auto" style="margin: 100px;">
        <form class="form-signin" wire:submit.prevent="login">

            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>

            <label class="sr-only">Email address</label>
            <input type="text" class="form-control" placeholder="Email address" required wire:model="username">
            <br>
            <label class="sr-only">Password</label>
            <input type="password" class="form-control" placeholder="Password" required wire:model="password">
            @if(session('worng_pass'))
            <span class="text-danger">{{ session('worng_pass') }}</span>
            @endif
            <br>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
{{--    <p>username = {{ $username }}</p>--}}
</div>
