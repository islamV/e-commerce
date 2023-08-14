@extends('index')
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
@section('titel')
    Add User
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="basicform">
                <h3 class="section-title">Add new user</h3>
            </div>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('UsersList.store') }}" method="post">
                        @csrf
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="inputText1" class="col-form-label">Full Name</label>
                            <input id="inputText1" type="text" class="form-control" name="name"
                                value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email address</label>
                            <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control"
                                name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Phone Number </label>
                            <input id="inputText2" type="text" class="form-control" name="phone"
                                value="{{ old('phone') }}">
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Age </label>
                            <input id="inputText3" type="text" class="form-control" name="age"
                                value="{{ old('age') }}">
                        </div>
                        <div class="form-group">
                            <label for="input-select">Access Role </label>
                            <select class="form-control" id="input-select" name="role">
                  
                                    <option value="Admin">Admin</option>
                                    <option value="Employee">Employee</option>
                                    <option value="User">User</option>
                           

                            </select>
                        </div>
                    
                        <div class="form-group">
                            <label for="input-select">Country</label>
                            <select class="form-control" id="input-select" name="country">
                             
                                @foreach ($countries as   $country )
                                    <option value="{{ $country }}">{{  $country  }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Password </label>
                            <input id="inputText3" type="password" class="form-control" name="password">
                        </div>
           
                        <button class="btn btn-rounded btn-success">Add</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@stop
