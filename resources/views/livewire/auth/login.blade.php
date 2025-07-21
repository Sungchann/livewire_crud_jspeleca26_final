<div class="card p-4 shadow w-100" style="max-width: 500px; margin-top: -5%;">
    <h2 class="text-center mb-3">Login</h2>
    <form wire:submit.prevent="login">
        <div class="mb-3">
            <input type="text" wire:model.defer="username" class="form-control" placeholder="Username">
            @error('username') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <div class="mb-3">
            <input type="password" wire:model.defer="password" class="form-control" placeholder="Password">
            @error('password') <div class="text-danger small">{{ $message }}</div> @enderror
        </div>

        <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>

    <div class="text-center mt-3">
        <span>Don't have an account? </span>
        <a href="/register" wire:navigate>Register</a>
    </div>
</div>