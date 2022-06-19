<style>
    .navbar{
        height: 5vh;
    }
</style>
<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    <div class="flex bg-slate-800 space-x-4 text-white navbar">
            <a href="/" class="ml-4">Home</a>
            <a href="/generate">Generate</a>
            <a href="">Palettes</a>
            <div class="absolute right-0">
            @if (Auth::check())

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="" class="pr-4">{{ Auth::user()->name }}</a>
                <button :href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();">
                                {{ __('Log Out') }}
                </button>
            </form>
            @else
            <a href="/register">Register</a>
            <a href="/login" class="px-4">Login</a>
            @endif
            </div>
    </div>
</div>
