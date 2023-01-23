@extends('admin_layout')
@section('admin_content')

<ul class="breadcrumb">
    <li>
        <i class="icon-home"></i>
        <a href="{{URL::to('/admin/users')}}"><b>Home</b></a>
        <i class="icon-angle-right"></i>
    </li>
    <li><a href="#"><b>Profile</b></a></li>
</ul>


<section class="profile py-5">
    <div class="container">
        <div class="row">
            <!-- left -->
            <div class="col-12 col-md-4">
                <div class="card" style=" box-shadow: 0 2px 4px 0 #e6e6e6, 0 2px 4px 0 #e6e6e6">
                    <div class="card-body">
                        <div style="text-align: center;">
                        @foreach( $personal_infos as $data )
                            <div style="overflow:hidden;border: 3px solid #3472ce; height: 110px; width: 110px; border-radius: 50%;
                                display: flex; align-items: center; justify-content: center; margin: 0 auto">
                                <!-- updated img -->
                                <img class="img-fluid" src="{{ $data->image }}" alt="user" />
                            </div>
                            <h4 class="mt-3">{{ $data->name }}</h4>

                        </div>
                        <hr class="my-4" style="width: 100px;">
                        <h1>Personal Info</h1><br>
                        <div class="profile_infowrapper">
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Email: {{ $data->email}}</h4>
                            </div>
                            <div> <i class="fas fa-phone-alt mr-3"></i>
                                <h4>Mobile: {{ $data->mobile }}</h4>
                            </div>
                            <div><i class="fas fa-map-marker-alt mr-3"></i>
                                <h4>Present Address: {{ $data->present_address }}</h4>
                            </div>
                            <div><i class="fas fa-map-marker-alt mr-3"></i>
                                <h4>Permanent Address: {{ $data->permanent_address }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Father Name: {{ $data->father_name }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Mother Name: {{ $data->mother_name }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Job Title: {{ $data->job_title }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Marital Status: {{ $data->marital_status }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Religion: {{ $data->religion }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Nationality: {{ $data->nationality }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Gender: {{ $data->gender }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Date of Birth: {{ $data->dob }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Profile Summary: {{ $data->profile_summary }}</h4>
                            </div>
                        </div>
                        @endforeach

                        <hr class="my-4" style="width: 100px;">
                        <h1>Education</h1><br>
                        @foreach( $education as $data )
                        <div class="profile_infowrapper">
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Institution Name: {{ $data->inst_name }}</h4>
                            </div>
                            <div> <i class="fas fa-phone-alt mr-3"></i>
                                <h4>Degree: {{ $data->degree }}</h4>
                            </div>
                            <div><i class="fas fa-map-marker-alt mr-3"></i>
                                <h4>Department: {{ $data->dept }}</h4>
                            </div>
                            <div><i class="fas fa-map-marker-alt mr-3"></i>
                                <h4>Pass Year: {{ $data->pass_year }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Result: {{ $data->result }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Board: {{ $data->board }}</h4>
                            </div>
                        </div>
                        @endforeach

                        <hr class="my-4" style="width: 100px;">
                        <h1>Work Experience</h1><br>
                        @foreach( $experiences as $data )
                        <div class="profile_infowrapper">
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Company Name: {{ $data->company_name }}</h4>
                            </div>
                            <div> <i class="fas fa-phone-alt mr-3"></i>
                                <h4>Position: {{ $data->position }}</h4>
                            </div>
                            <div><i class="fas fa-map-marker-alt mr-3"></i>
                                <h4>Start Date: {{ $data->start }}</h4>
                            </div>
                            <div><i class="fas fa-map-marker-alt mr-3"></i>
                                <h4>End Date: {{ $data->end }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Work Summary: {{ $data->work_summary }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Location: {{ $data->location }}</h4>
                            </div>
                        </div>
                        @endforeach

                        <hr class="my-4" style="width: 100px;">
                        <h1>Projects</h1><br>
                        @foreach( $projects as $data )
                        <div class="profile_infowrapper">
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Project Name: {{ $data->project_name }}</h4>
                            </div>
                            <div><i class="fas fa-map-marker-alt mr-3"></i>
                                <h4>Start Date: {{ $data->start }}</h4>
                            </div>
                            <div><i class="fas fa-map-marker-alt mr-3"></i>
                                <h4>End Date: {{ $data->end }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Project Summary: {{ $data->project_summary }}</h4>
                            </div>
                        </div>
                        @endforeach

                        <hr class="my-4" style="width: 100px;">
                        <h1>Trainings</h1><br>
                        @foreach( $trainings as $data )
                        <div class="profile_infowrapper">
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Training Name: {{ $data->training_name }}</h4>
                            </div>
                            <div><i class="fas fa-map-marker-alt mr-3"></i>
                                <h4>End Date: {{ $data->end }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Training Summary: {{ $data->training_summary }}</h4>
                            </div>
                        </div>
                        @endforeach

                        <hr class="my-4" style="width: 100px;">
                        <h1>Additional Info</h1><br>
                        @foreach( $additonalInfos as $data )
                        <div class="profile_infowrapper">
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Skills: {{ $data->skills }}</h4>
                            </div>
                            <div><i class="fas fa-map-marker-alt mr-3"></i>
                                <h4>Hobby: {{ $data->hobby }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Languages: {{ $data->language }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Linkedin: {{ $data->linkedin }}</h4>
                            </div>
                            <div><i class="fas fa-map-marker-alt mr-3"></i>
                                <h4>Github: {{ $data->github }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Twitter: {{ $data->twitter }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Behance: {{ $data->behance }}</h4>
                            </div>
                        </div>
                        @endforeach

                        <hr class="my-4" style="width: 100px;">
                        <h1>References</h1><br>
                        @foreach( $references as $data )
                        <div class="profile_infowrapper">
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Name: {{ $data->name }}</h4>
                            </div>
                            <div><i class="fas fa-map-marker-alt mr-3"></i>
                                <h4>Designation: {{ $data->designation }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Organization: {{ $data->organization }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Mobile: {{ $data->mobile }}</h4>
                            </div>
                            <div><i class="fas fa-envelope mr-3"></i>
                                <h4>Email: {{ $data->email }}</h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

@endsection
