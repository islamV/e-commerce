@php
    $countries = [
         'Afghanistan',
         'Åland Islands',
         'Albania',
         'Algeria',
         'American Samoa',
         'AndorrA',
         'Angola',
         'Anguilla',
         'Antarctica',
         'Antigua and Barbuda',
         'Argentina',
         'Armenia',
         'Aruba',
         'Australia',
         'Austria',
         'Azerbaijan',
         'Bahamas',
         'Bahrain',
         'Bangladesh',
         'Barbados',
         'Belarus',
         'Belgium',
         'Belize',
         'Benin',
         'Bermuda',
         'Bhutan',
         'Bolivia',
         'Bosnia and Herzegovina',
         'Botswana',
         'Bouvet Island',
         'Brazil',
         'British Indian Ocean Territory',
         'Brunei Darussalam',
         'Bulgaria',
         'Burkina Faso',
         'Burundi',
         'Cambodia',
         'Cameroon',
         'Canada',
         'Cape Verde',
         'Cayman Islands',
         'Central African Republic',
         'Chad',
         'Chile',
         'China',
         'Christmas Island',
         'Cocos (Keeling) Islands',
         'Colombia',
         'Comoros',
         'Congo',
         'Congo, The Democratic Republic of the',
         'Cook Islands',
         'Costa Rica',
         'Cote D Ivoire',
         'Croatia',
         'Cuba',
         'Cyprus',
         'Czech Republic',
         'Denmark',
         'Djibouti',
         'Dominica',
         'Dominican Republic',
         'Ecuador',
         'Egypt',
         'El Salvador',
         'Equatorial Guinea',
         'Eritrea',
         'Estonia',
         'Ethiopia',
         'Falkland Islands (Malvinas)',
         'Faroe Islands',
         'Fiji',
         'Finland',
         'France',
         'French Guiana',
         'French Polynesia',
         'French Southern Territories',
         'Gabon',
         'Gambia',
         'Georgia',
         'Germany',
         'Ghana',
         'Gibraltar',
         'Greece',
         'Greenland',
         'Grenada',
         'Guadeloupe',
         'Guam',
         'Guatemala',
         'Guernsey',
         'Guinea',
         'Guinea-Bissau',
         'Guyana',
         'Haiti',
         'Heard Island and Mcdonald Islands',
         'Holy See (Vatican City State)',
         'Honduras',
         'Hong Kong',
         'Hungary',
         'Iceland',
         'India',
         'Indonesia',
         'Iran, Islamic Republic Of',
         'Iraq',
         'Ireland',
         'Isle of Man',
         'Israel',
         'Italy',
         'Jamaica',
         'Japan',
         'Jersey',
         'Jordan',
         'Kazakhstan',
         'Kenya',
         'Kiribati',
         'Korea, Democratic People Republic of',
         'Korea, Republic of',
         'Kuwait',
         'Kyrgyzstan',
         'Lao People Democratic Republic',
         'Latvia',
         'Lebanon',
         'Lesotho',
         'Liberia',
         'Libyan Arab Jamahiriya',
         'Liechtenstein',
         'Lithuania',
         'Luxembourg',
         'Macao',
         'Macedonia, The Former Yugoslav Republic of',
         'Madagascar',
         'Malawi',
         'Malaysia',
         'Maldives',
         'Mali',
         'Malta',
         'Marshall Islands',
         'Martinique',
         'Mauritania',
         'Mauritius',
         'Mayotte',
         'Mexico',
         'Micronesia, Federated States of',
         'Moldova, Republic of',
         'Monaco',
         'Mongolia',
         'Montserrat',
         'Morocco',
         'Mozambique',
         'Myanmar',
         'Namibia',
         'Nauru',
         'Nepal',
         'Netherlands',
         'Netherlands Antilles',
         'New Caledonia',
         'New Zealand',
         'Nicaragua',
         'Niger',
         'Nigeria',
         'Niue',
         'Norfolk Island',
         'Northern Mariana Islands',
         'Norway',
         'Oman',
         'Pakistan',
         'Palau',
         'Palestinian Territory, Occupied',
         'Panama',
         'Papua New Guinea',
         'Paraguay',
         'Peru',
         'Philippines',
         'Pitcairn',
         'Poland',
         'Portugal',
         'Puerto Rico',
         'Qatar',
         'Reunion',
         'Romania',
         'Russian Federation',
         'RWANDA',
         'Saint Helena',
         'Saint Kitts and Nevis',
         'Saint Lucia',
         'Saint Pierre and Miquelon',
         'Saint Vincent and the Grenadines',
         'Samoa',
         'San Marino',
         'Sao Tome and Principe',
         'Saudi Arabia',
         'Senegal',
         'Serbia and Montenegro',
         'Seychelles',
         'Sierra Leone',
         'Singapore',
         'Slovakia',
         'Slovenia',
         'Solomon Islands',
         'Somalia',
         'South Africa',
         'South Georgia and the South Sandwich Islands',
         'Spain',
         'Sri Lanka',
         'Sudan',
         'Suriname',
         'Svalbard and Jan Mayen',
         'Swaziland',
         'Sweden',
         'Switzerland',
         'Syrian Arab Republic',
         'Taiwan, Province of China',
         'Tajikistan',
         'Tanzania, United Republic of',
         'Thailand',
         'Timor-Leste',
         'Togo',
         'Tokelau',
         'Tonga',
         'Trinidad and Tobago',
         'Tunisia',
         'Turkey',
         'Turkmenistan',
         'Turks and Caicos Islands',
         'Tuvalu',
         'Uganda',
         'Ukraine',
         'United Arab Emirates',
         'United Kingdom',
         'United States',
         'United States Minor Outlying Islands',
         'Uruguay',
         'Uzbekistan',
         'Vanuatu',
         'Venezuela',
         'Viet Nam',
         'Virgin Islands, British',
         'Virgin Islands, U.S.',
         'Wallis and Futuna',
         'Western Sahara',
         'Yemen',
         'Zambia',
         'Zimbabwe',
    ];

@endphp
<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Profile Information') }}
        </h2>

        <p class="mt-1 text-sm text-gray-600">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('patch')
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Done!</strong> {{ session('status') }}!
            <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </a>
        </div>
    @endif
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required autofocus autocomplete="name" />
            <x-input-error class="mt-2" :messages="$errors->get('name')" />
        </div>

        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)" required autocomplete="username" />
            <x-input-error class="mt-2" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div>
                    <p class="text-sm mt-2 text-gray-800">
                        {{ __('Your email address is unverified.') }}

                        <button form="send-verification" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-2 font-medium text-sm text-green-600">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>
        <div>
            <x-input-label for="age" :value="__('Phone number')" />
            <x-text-input id="phone" name="phone" type="text" class="mt-1 block w-full" :value="old('phone', $user->profile->phone)" required autofocus autocomplete="phone" />
                <x-input-error class="mt-2" :messages="$errors->get('phone')" />
                </div>
                
                <div>
                    <x-input-label for="phone" :value="__('Your age')" />
                    <x-text-input id="age" name="age" type="text" class="mt-1 block w-full" :value="old('age', $user->profile->age)" required autofocus autocomplete="age" />
                    <x-input-error class="mt-2" :messages="$errors->get('age')" />
                </div>
                <div >
                    <x-input-label for="email" :value="__('Gender')" />
                    <select class="form-control" id="input-select" name="gender">
                            <option @selected($user->profile->gender == 'male') value="male">Male</option>
                            <option @selected($user->profile->gender == 'female') value="female">Female</option>
                    </select>
                </div>

                <div >
             
                    <x-input-label for="country" :value="__('Country')" />  
                    <select name="country"  class="form-control" >             
                        @foreach ($countries as   $country )
                            <option @selected($user->profile->country == $country)  value="{{ $country }}">{{  $country  }}</option>
                        @endforeach

                    </select>
                </div>

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>
