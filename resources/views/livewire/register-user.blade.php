<div>
   
    @if ($registrationComplete)
    <div class="alert bg-white text-dark" role="alert">
        Your account has been created! Go to Login Tab
    </div>
    @else

    <form wire:submit.prevent="register">
        @csrf
        <div class="form-group">
            <label>First name</label>
            <input type="text" placeholder="First name" name="first_name" wire:model="first_name">
            @error('first_name')  <div class="error_message">
                <p><img src="images/error.svg" alt="">{{ $message }}</p>
            </div> @enderror
        </div>
        <div class="form-group">
            <label>Last name</label>
            <input type="text" placeholder="Last name" name="last_name" wire:model="last_name">
            @error('last_name')  <div class="error_message">
                <p><img src="images/error.svg" alt="">{{ $message }}</p>
            </div> @enderror
        </div>
        <div class="form-group">
            <label>nick name</label>
            <input type="text" placeholder="Nic name" name="nick_name" wire:model="nick_name">
            @error('nick_name')  <div class="error_message">
                <p><img src="images/error.svg" alt="">{{ $message }}</p>
            </div>@enderror
        </div>
        <div class="form-group">
            <label>Enter Email</label>
            <input type="email" placeholder="Enter Email" name="email" wire:model="email">
            @error('email')  <div class="error_message">
                <p><img src="images/error.svg" alt="">{{ $message }}</p>
            </div>@enderror
        </div>
        <div class="form-group">
            <label>college</label>
            <select wire:model="college" name="college" >
                <option value="1">Virginia tech</option>
                <option value="2">2</option>
            </select>
           
            @error('college') 
            <div class="error_message">
                <p><img src="images/error.svg" alt="">{{ $message }}</p>
            </div>
            @enderror
        </div>
        <div class="form-group">
            <div class="d-flex content_between">
            <label>Enter password</label>
            <label class="pstrength d-none">Password srength: <span class="green_text">Strong</span> <span class="red_text">Weak</span></label>
            </div>
    
            <div class="pwd_icon">
                <input type="{{ $showPassword ? 'text' : 'password' }}" placeholder="Password" wire:model="password">
                <img wire:click="togglePasswordVisibility" src="images/eye-off.svg" alt="">
            </div>
            @error('password') 
            <div class="error_message">
                <p><img src="images/error.svg" alt="">{{ $message }}</p>
            </div>
            @else
            {{-- <div class="success_message">
                <p><img src="images/success.svg" alt=""> Your password it strong.</p>
            </div>	 --}}
            @enderror	    				
        </div>
        <div class="form-group">
            <label>CONFIRM PASSWORD</label>
            <div class="pwd_icon">
                <input type="{{ $showPassword ? 'text' : 'password' }}" placeholder="Password" wire:model="password_confirmation">
                <img wire:click="togglePasswordVisibility" src="images/eye-off.svg" alt="">
            </div>
            @error('password_confirmation') 
            <div class="error_message">
                <p><img src="images/error.svg" alt="">Please enter the same value again.</p>
            </div>
            @enderror		
        </div>
    
        {{-- <div class="form-group form-inline checkbox_text">
            <input type="hidden" name="" id="" >
            <input type="checkbox"  wire:model="newsletter" />
            Sign up for newsletter
        </div> --}}
    
        <div class="form-group">
            <button>Sign Up
                <img src="images/black_arrow.svg" alt="">
            </button>
        </div>
    
        <div class="or-dividor">
            <span>OR</span>
        </div>
    
    
        <h3>Login with Your Soical Profile</h3>
        <div class="login_with_social">
            <a href="#">
                <img src="images/facebook.svg" alt="">
            </a>
            <a href="#">
                <img src="images/google.svg" alt="">
            </a>
            <a href="#">
                <img src="images/steam.svg" alt="">
            </a>
        </div>
    
    </form>	
    @endif
</div>