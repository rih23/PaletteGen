<style>
    .navbar{
        height: 5vh;
    }
</style>
<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    <div class="flex bg-slate-800 space-x-4 text-white navbar text-3xl pt-2">
            <a href="/" class="ml-4 hover:text-blue-400">Home</a>
            <a href="/generate" class="hover:text-blue-400">Generate</a>
            <a href="/palettes" class="hover:text-blue-400">Palettes</a>
            <div class="absolute right-0">
            @if (Auth::check())

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                @if (Auth::user()->role=='admin')
                <a href="/users" class="underline font-bold pr-4 hover:text-blue-400">Users</a>
                @endif
                <a href="/profile" class="pr-4 hover:text-blue-400">{{ Auth::user()->name }}</a>
                <button :href="route('logout')"
                    onclick="event.preventDefault();
                    this.closest('form').submit();" class = "hover:text-blue-400 mr-4">
                                {{ __('Logout') }}
                </button>
            </form>
            @else
            <a href="/register" class="hover:text-blue-400">Register</a>
            <a href="/login" class="px-4 hover:text-blue-400">Login</a>
            @endif
            </div>
    </div>
</div>
