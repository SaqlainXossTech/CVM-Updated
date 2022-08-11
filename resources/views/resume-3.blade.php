<style>
    @include('style3')
</style>
<!DOCTYPE html>
<html>
    <head>

        <style type="text/css">
            .center {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <div class="main-container">
            {{--  <h1><strong>Saqlain Mustak</strong></h1>  --}}
            <div class="personal-info">
                <table id="info">
                    @foreach($personal_infos as $info)

                <tr>
                    <td style="color:rgb(85, 64, 221); font-size:40px;"><strong>{{$info->name}}</strong></td>

                </tr>
                    <p style="align:top right;" ><img src="{{$info->image}}" alt="profile_pic" height="200" width="150" ></p>

                </table>

                    <table id="info">

                        <tr>
                            <td>Address</td>
                            <td>:</td>
                            <td>{{$info->present_address}}</td>
                        </tr>
                        <tr>

                            <td>Mobile</td>
                            <td>:</td>
                            <td>{{$info->mobile}}</td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>:</td>
                            <td>{{$info->email}}</td>
                        </tr>
                        @endforeach
                    </table>




                <h2 style="background-color:LightGray;">Career Objective</h2>
                @foreach($personal_infos as $info)
                <p>{{$info->profile_summary}}</p>
                @endforeach
                <h2 style="background-color:LightGray;">Education</h2>
                    <table id="academic">

                        <tr>
                            <th>Degree</th>
                            <th>Dprt</th>
                            <th>Institution</th>
                            <th>Board</th>
                            <th>GPA</th>
                            <th>Passing year</th>
                        </tr>
                        @foreach($education as $edu)
                        <tr>


                            <td>{{$edu->degree}}</td>
                            <td>{{$edu->dept}}</td>
                            <td><strong>{{$edu->inst_name}}</strong><br></td>
                            <td>{{$edu->board}}</td>
                            <td>{{$edu->result}}</td>
                            <td>{{$edu->pass_year}}</td>

                            {{--  @if( $edu->degree == 'SSC')
                            <td>SSC</td>
                            <td>{{$edu->dept}}</td>
                            <td><strong>{{$edu->inst_name}}</strong><br></td>
                            <td>{{$edu->board}}</td>
                            <td>{{$edu->result}}</td>
                            <td>{{$edu->pass_year}}</td>
                            @else
                            <td>--</td>
							@endif  --}}


                        </tr>

                        {{--  <tr>
                            @if( $edu->degree == 'HSC')
                            <td>HSC</td>
                            <td>{{$edu->dept}}</td>
                            <td><strong>{{$edu->inst_name}}</strong><br></td>
                            <td>{{$edu->board}}</td>
                            <td>{{$edu->result}}</td>
                            <td>{{$edu->pass_year}}</td>
							@endif
                        </tr>
                         <tr>
                            @if( $edu->degree == 'Bsc')
                            <td>BSC</td>
                            <td>{{$edu->dept}}</td>
                            <td><strong>{{$edu->inst_name}}</strong><br></td>
                            <td>{{$edu->board}}</td>
                            <td>{{$edu->result}}</td>
                            <td>{{$edu->pass_year}}</td>
							@endif
                        </tr>
                        <tr>
                            @if( $edu->degree == 'Msc')
                            <td>MSC</td>
                            <td>{{$edu->dept}}</td>
                            <td><strong>{{$edu->inst_name}}</strong><br></td>
                            <td>{{$edu->board}}</td>
                            <td>{{$edu->result}}</td>
                            <td>{{$edu->pass_year}}</td>
							@endif
                        </tr>
                        <tr>
                            @if( $edu->degree == 'Phd')
                            <td>PHD</td>
                            <td>{{$edu->dept}}</td>
                            <td><strong>{{$edu->inst_name}}</strong><br></td>
                            <td>{{$edu->board}}</td>
                            <td>{{$edu->result}}</td>
                            <td>{{$edu->pass_year}}</td>
							@endif
                        </tr>  --}}
                        @endforeach
                    </table>

                <h2 style="background-color:LightGray;">Special Qualities</h2>
                @foreach($additonalInfos as $addinfo)
                <p>{{$addinfo->skills}}</p>
                @endforeach

                <h2 style="background-color:LightGray;">Language</h2>
                @foreach($additonalInfos as $addinfo)
                <p>{{$addinfo->language}}</p>
                @endforeach

                {{--  <span style="page-break-after:always;"></span>  --}}

                    <h2 style="background-color:LightGray;">Personal Info</h2>
                    <table id="info">
                        @foreach($personal_infos as $info)

                        <tr>
                            <td><strong>Name</td>
                            <td>:</td>
                            <td><strong>{{$info->name}}</td>
                        </tr>
                        <tr>
                            <td><strong>Fathers Name</td>
                            <td>:</td>
                            <td><strong>{{$info->father_name}}</td>

                        </tr>
                        <tr>
                            <td><strong>Mothers Name</td>
                            <td>:</td>
                            <td><strong>{{$info->mother_name}}</td>
                        </tr>

                        <tr>
                            <td><strong>Gender</td>
                            <td>:</td>
                            <td><strong>{{$info->gender}}</td>
                        </tr>

                        <tr>
                            <td><strong>Date of Birth</td>
                            <td>:</td>
                            <td><strong>{{$info->dob}}</td>
                        </tr>

                        <tr>
                            <td><strong>Maritial Status</td>
                            <td>:</td>
                            <td><strong>{{$info->marital_status}}</td>
                        </tr>

                        <tr>
                            <td><strong>Nationality</td>
                            <td>:</td>
                            <td><strong>{{$info->nationality}}</td>
                        </tr>

                        <tr>
                            <td><strong>Religion</td>
                            <td>:</td>
                            <td><strong>{{$info->religion}}</td>
                        </tr>

                        <tr>
                            <td><strong>Present Address</td>
                            <td>:</td>
                            <td><strong>{{$info->present_address}}</td>
                        </tr>

                        <tr>
                            <td><strong>Permanent Address</td>
                            <td>:</td>
                            <td><strong>{{$info->permanent_address}}</td>
                        </tr>
                        <span style="page-break-inside:always;"></span>
                    @endforeach

                </table>
            </div>
        </div>

    </body>
</html>
