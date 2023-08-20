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
    Edit User
@endsection
@section('content')
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="section-block" id="basicform">
                <h3 class="section-title">Edit user</h3>
            </div>
            @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Done!</strong> {{ session('success') }}!
                <a href="#" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </a>
            </div>
        @endif
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputText0" class="col-form-label">Image </label>
                        <form action="{{route('Image.update',['Image'=>$user->id])}}" method="post" enctype="multipart/form-data" >
                        @csrf
                        @method('PUT')
                        <input type="file" name='image' class="btn btn-primary">
                        <button class="btn btn-primary" type="submit">Upload Image</button> 
                        </form>
                    </div>

                    <form action="{{ route('UsersList.update' ,['UsersList'=>$user->id]) }}" method="post" >

                        @csrf
                        @method('PUT')
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="card influencer-profile-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-4 col-md-4 col-sm-4 col-12">
                                        <div class="text-center">
                                           
                                            <img src="{{asset('photos/'.$userImage)}}" alt="User Avatar"
                                                class="rounded-circle user-avatar-xxl">
                                        </div>
                                      

                                    </div>
                                    <div class="col-xl-10 col-lg-8 col-md-8 col-sm-8 col-12">
                                        <div class="user-avatar-info">
                                            <div class="m-b-20">
                                                <div class="user-avatar-name">
                                                    <h2 class="mb-1">{{ $user->name }}</h2>
                                                </div>

                                            </div>
                                            <!--  <div class="float-right"><a href="#" class="user-avatar-email text-secondary">www.henrybarbara.com</a></div> -->
                                            <div class="user-avatar-address">
                                                <p class="border-bottom pb-3">
                                                    <span class="d-xl-inline-block d-block mb-2"><i
                                                            class="fa fa-map-marker-alt mr-2 text-primary "></i>{{ $user->profile->country }}</span>
                                                    <span class="mb-2 ml-xl-4 d-xl-inline-block d-block">Joined date:
                                                        {{ $user->created_at }} </span>
                                                    <span class=" mb-2 d-xl-inline-block d-block ml-xl-4">{{$user->profile->gender}}
                                                    </span>
                                                    <span
                                                        class=" mb-2 d-xl-inline-block d-block ml-xl-4">{{ $user->profile->age }}
                                                        Year Old </span>
                                                </p>
                                                <div class="mt-3">
                                                    <a href="#" class="badge badge-light mr-1">Fitness</a> <a
                                                        href="#" class="badge badge-light mr-1">Life Style</a> <a
                                                        href="#" class="badge badge-light">Gym</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="inputText1" class="col-form-label">Full Name</label>
                            <input id="inputText1" type="text" class="form-control" name="name"
                                value="{{ $user->name }}">
                        </div>
                        <div class="form-group">
                            <label for="inputEmail">Email address</label>
                            <input id="inputEmail" type="email" placeholder="name@example.com" class="form-control"
                                name="email" value="{{ $user->email }}">
                        </div>
                        <div class="form-group">
                            <label for="inputText2" class="col-form-label">Phone Number </label>
                            <input id="inputText2" type="text" class="form-control" name="phone"
                                value="{{ $user->profile->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="inputText3" class="col-form-label">Age </label>
                            <input id="inputText3" type="text" class="form-control" name="age"
                                value="{{ $user->profile->age }}">
                        </div>
                        <div class="form-group">
                            <label for="input-select">Country</label>
                            <select class="form-control" id="input-select" name="country">

                                @foreach ($countries as $country)
                                    <option @selected($user->profile->country == $country) value="{{ $country }}">{{ $country }}
                                    </option>
                                @endforeach

                            </select>
                        </div>

                   
                        <div class="form-group">
                            <label for="input-select">Gender </label>
                            <select class="form-control" id="input-select" name="gender">

                                <option @selected($user->profile->gender == 'male') value="male">Male</option>
                                <option @selected($user->profile->gender == 'female') value="female">Female</option>

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="input-select">Access Role </label>
                            <select class="form-control" id="input-select" name="role">

                                <option @selected($user->profile->role == 'Admin') value="Admin">Admin</option>
                                <option @selected($user->profile->role == 'Employee') value="Employee">Employee</option>
                                <option @selected($user->profile->role == 'User') value="User">User</option>
                            </select>
                        </div>

                        <button class="btn btn-rounded btn-dark">Update</button>
                    </form>
                </div>

            </div>
        </div>
    </div>


@stop
