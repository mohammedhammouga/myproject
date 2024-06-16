<x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>
         <img src="/images/rejester.png" alt=""> 

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
            @csrf

            <div>
                <x-label for="name" value="{{ __('Name') }}" />
                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div>
                <x-label for="special" value="{{ __('Special') }}" />
                <select id="special" class="block mt-1 w-full form-control"  name="special"  required autofocus autocomplete="special">
                    <option selected disabled>Select your specialty</option>
                    <option value="Cardiology">Cardiology</option>
                    <option value="Cardiothoracic surgery">Cardiothoracic surgery</option>
                    <option value="Child and adolescent psychiatry">Child and adolescent psychiatry</option>
                    <option value="Clinical neurophysiology">Clinical neurophysiology</option>
                    <option value="Colorectal surgery">Colorectal surgery</option>
                    <option value="Dermatology">Dermatology</option>
                    <option value="Developmental pediatrics">Developmental pediatrics</option>
                    <option value="Emergency medicine">Emergency medicine</option>
                    <option value="Endocrinology">Endocrinology</option>
                    <option value="Family Medicine">Family Medicine</option>
                    <option value="Forensic pathology">Forensic pathology</option>
                    <option value="Forensic psychiatry">Forensic psychiatry</option>
                    <option value="Gastroenterology">Gastroenterology</option>
                    <option value="General surgery">General surgery</option>
                    <option value="General surgical oncology">General surgical oncology</option>
                    <option value="Geriatrics">Geriatrics</option>
                    <option value="Geriatric psychiatry">Geriatric psychiatry</option>
                    <option value="Gynecologic oncology">Gynecologic oncology</option>
                    <option value="Hematology">Hematology</option>
                    <option value="Hematologic pathology">Hematologic pathology</option>
                    <option value="Infectious disease">Infectious disease</option>
                    <option value="Internal medicine">Internal medicine</option>
                    <option value="Interventional radiology">Interventional radiology</option>
                    <option value="Maternal-fetal medicine">Maternal-fetal medicine</option>
                    <option value="Medical genetics">Medical genetics</option>
                </select>
            </div>

            <div>
                <x-label for="city" value="{{ __('City') }}" />
                <select id="city" class="block mt-1 w-full form-control" name="city" required autofocus autocomplete="city">
                    <option selected disabled>Select city</option>
                    <option value="Casablanca">Casablanca</option>
                    <option value="Fès">Fès</option>
                    <option value="Tanger">Tanger</option>
                    <option value="Marrakesh">Marrakesh</option>
                    <option value="Salé">Salé</option>
                    <option value="Meknes">Meknes</option>
                    <option value="Rabat">Rabat</option>
                    <option value="Téméra">Téméra</option>
                    <option value="Agadir">Agadir</option>
                    <option value="Oujda">Oujda</option>
                    <option value="Tétouan">Tétouan</option>
                    <option value="Safi">Safi</option>
                    <option value="Berkane">Berkane</option>
                    <option value="Taza">Taza</option>
                    <option value="Nador">Nador</option>
                    <option value="Khémisset">Khémisset</option>
                    <option value="Béni Mellal">Béni Mellal</option>
                    <option value="Khouribga">Khouribga</option>
                    <option value="El Jadida">El Jadida</option>
                    <option value="Zemmamra">Zemmamra</option>
                    <option value="Sidibanour">Sidibanour</option>
                    <option value="Mohammédia">Mohammédia</option>
                    <option value="Laayoune">Laayoune</option>
                    <option value="Oujda">Oujda</option>
                    <option value="Bengrir">Bengrir</option>
                    
                </select>
            </div>
            

            <!-- <div>
                <x-label for="profile" value="{{ __('Profile') }}" />
                <x-input id="profile" class="block mt-1 w-full" type="file" name="profile" :value="old('profile')" required autofocus autocomplete="profile" />
            </div> -->
            <div>
                <x-label for="image" value="{{ __('image') }}" />
                <x-input id="image" class="block mt-1 w-full" type="file" name="image" :value="old('image')" accept="image/*" required autofocus autocomplete="image" />
            </div>

            <div>
                <x-label for="phone" value="{{ __('Phone') }}" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required autofocus autocomplete="phone" />
            </div>

            <div class="mt-4">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ms-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> 
