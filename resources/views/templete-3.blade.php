<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @foreach ($cv as $c)
      <title>{{$c->price}}</title>
    @endforeach
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: "Montserrat", sans-serif;
        }

        body {
            background: #585c68;
            font-size: 14px;
            line-height: 22px;
            color: #555555;
        }

        .bold {
            font-weight: 700;
            font-size: 20px;
            text-transform: uppercase;
        }

        .bold1 {
            font-weight: 700;
            font-size: 20px;
            text-transform: uppercase;
        }

        .semi-bold {
            font-weight: 500;
            font-size: 16px;
            float: right;
            margin-top: -76px;
        }

        .semi-bold1 {
            font-weight: 500;
            font-size: 16px;
            float: right;
            margin-top: -60px;
        }

        .semi-bold2 {
            font-weight: 500;
            font-size: 16px;
            float: right;
            margin-top: -44px;
        }

        .resume {
            width: 800px;
            height: auto;
            display: -webkit-box;
            margin: auto;
        }

        .resume .resume_left {
            width: 280px;
            height: 100%;
            background: #000000;
        }

        .resume .resume_left1 {
            width: 295px;
            background: #D4D4D4;
        }

        .resume .resume_left .resume_profile {
            width: 100%;
        }

        .resume .resume_left .resume_profile img {
            width: 162px;
            height: 188px;
            margin-left: 58px;
            margin-top: 50px;
            border-radius: 13px;
        }

        .resume .resume_left .resume_content {
            padding: 0 25px;
        }

        .resume .title {
            margin-bottom: 20px;
        }

        .resume .resume_left .bold {
            color: #fff;
        }

        .resume .resume_left .bold1 {
            color: #fff;
            text-align: center;
        }

        .resume .resume_left .regular {
            color: #fff;
            text-align: center;
            margin-top: 30px;
            text-transform: uppercase;
        }

        .resume .resume_item {
            padding: 25px 0;
            /*border-bottom: 2px solid #b1eaff;*/
        }

        .resume .resume_left .resume_item:last-child,
        .resume .resume_right .resume_item:last-child {
            border-bottom: 0px;
        }

        .resume .resume_left ul li {
            display: -webkit-box;
            margin-bottom: 10px;
            align-items: center;
        }

        .resume .resume_left ul li:last-child{
            margin-bottom: 0;
        }

        .resume .resume_left ul li .icon {
            width: 19px;
            height: 40px;
            color: #fff;
            margin-right: 15px;
            font-size: 16px;
            position: relative;
        }

        .resume .icon i,
        .resume .resume_right .resume_hobby ul li i {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .resume .resume_left ul li .data {
            color: #fff;
        }

        .resume .resume_left .resume_skills ul li {
            display: inline-block;
            margin-bottom: 10px;
            color: #fff;
            justify-content: space-between;
            /*align-items: center;*/
        }

        .resume .resume_left .resume_skills ul li .skill_name {
            width: 25%;
        }

        .resume .resume_left .resume_skills ul li .skill_progress span {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            background: #fff;
        }

        .resume .resume_left .resume_social .semi-bold {
            color: #fff;
            margin-bottom: 3px;
        }

        .resume .resume_right {
            width: 520px;
            background: #fff;
            padding: 25px;
        }

        .resume .resume_right .regular {
            color: #000000;
            text-transform: uppercase;
        }

        .resume .resume_right .regular1 {
            color: #000000;
        }

        .resume .resume_right .bold {
            color: #000000;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            font-size: 16px;
            font-weight: 500;
        }

        td, th {
            text-align: left;
            padding: 15px;
        }

        .resume .resume_right .resume_work ul,
        .resume .resume_right .resume_education ul {
            /*padding-left: 40px;*/
            overflow: hidden;
        }

        .resume .resume_right .resume_work ul {
            /*padding-left: 40px;*/
            overflow: hidden;
        }

        .resume .resume_right ul li {
            position: relative;
        }

        .resume .resume_right ul li .date {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .resume .resume_right ul li .info {
            margin-bottom: 20px;
        }

        .resume .resume_right ul li:last-child .info {
            margin-bottom: 0;
        }

    </style>
</head>
<body>

<div class="resume">
    <div class="resume_left1">
        <div class="resume_left">
        <div class="resume_profile">
            @foreach($personal_infos as $info)
            <img src="{{$info->image}}" alt="profile_pic">
            @endforeach
        </div>
        <div class="resume_content">
            <div class="resume_item resume_info">
                @foreach($personal_infos as $info)
                <div class="title">
                    <p class="bold1">{{$info->name}}</p>
                    <p class="regular">{{$info->job_title}}</p>
                </div>
                <div class="title">
                    <p class="bold">Contact</p>
                </div>
                <ul>
                    <li>
                        <div class="icon">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="data">
                            {{$info->present_address}}
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="data">
                            {{$info->mobile}}
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="data">
                            {{$info->email}}
                        </div>
                    </li>
                    @endforeach
                    @foreach($socials as $social)
                    <li>
                        <div class="icon">
                            <i class="fab fa-github"></i>
                        </div>
                        <div class="data">
                            {{$social->github}}
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                        <div class="data">
                            {{$social->linkedin}}
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
            <div class="resume_item resume_skills">
                @foreach($additonalInfos as $addinfo)
                <div class="title">
                    <p class="bold">skills</p>
                </div>
                <ul>
                    <li>
                        <div class="skill_name">
                            {{$addinfo->skills}}
                        </div>
                    </li>
                </ul>
                @endforeach
            </div>
            <div class="resume_item resume_social">
                @if(count($references) >= 1)
                    <div class="title">
                        <p class="bold">References</p>
                    </div>
                    @foreach($references as $ref)
                        <ul>
                            <li>
                                <div class="data">
                                    <p>{{$ref->name}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="data">
                                    <p>{{$ref->designation}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="data">
                                    <p>{{$ref->organization}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="data">
                                    <p>{{$ref->email}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="data">
                                    <p>{{$ref->mobile}}</p><br>
                                </div>
                            </li>
                        </ul>
                    @endforeach
                @else
                    <div class="title" style="visibility: hidden">
                        <p class="bold">References</p>
                    </div>
                    <hr style="display:none; border-bottom: 2px solid #D4D4D4;">
                @endif
            </div>
        </div>
        </div>
    </div>
    <div class="resume_right">
        <div class="resume_item resume_about">
            <div class="title">
                <p class="bold">Profile</p>
            </div>
            @foreach($personal_infos as $info)
                <p>{{$info->profile_summary}}</p>
            @endforeach
        </div>
        {{--  <hr style="border-bottom: 2px solid #D4D4D4;">  --}}
        <div class="resume_item resume_work">
            @if(count($experiences) >= 1)
                <div class="title">
                    <p class="bold">Work Experience</p>
                </div>
                @foreach($experiences as $exp)
                    <ul>
                        <li>
                            <div class="date">{{$exp->company_name}}</div>
                            <div class="title">
                                <p class="regular">{{$exp->position}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$exp->location}}</p>
                            </div>
                            <div class="info">
                                <p class="semi-bold">{{$exp->start}} - {{$exp->end}}</p>
                                <p>{{$exp->work_summary}}</p><br>
                            </div>
                        </li>
                    </ul>
                @endforeach
            @else
                <div class="title" style="visibility: hidden">
                    <p class="bold">Work Experience</p>
                </div>
                <hr style="display:none; border-bottom: 2px solid #D4D4D4;">
            @endif
        </div>
        {{--  <hr style="border-bottom: 2px solid #D4D4D4;">  --}}
        <div class="resume_item resume_education">
            <div class="title">
                <p class="bold">Education</p>
            </div>
            @foreach($education as $edu)
            <table>
                <tr>
                    <td>{{$edu->pass_year}}</td>
                    <td>{{$edu->inst_name}}</td>
                    <td>{{$edu->degree}} <br> {{$edu->dept}}</td>
                    <td>{{$edu->result}}</td>
                </tr>
            </table>
            @endforeach
        </div>
        {{--  <hr style="border-bottom: 2px solid #D4D4D4;">  --}}
        <div class="resume_item resume_work">
            @if(count($trainings) >= 1)
                <div class="title">
                    <p class="bold">Award & Achievement</p>
                </div>
                @foreach($trainings as $training)
                    <ul>
                        <li>
                            <div class="date">{{$training->training_name}}</div>
                            <!--<div class="title">-->
                            <!--    <p class="regular">{{$training->training_summary}}</p>-->
                            <!--</div>-->
                            <div class="info">
                                <p class="semi-bold1">{{$training->end}}</p><br>
                                <p style="text-transform: uppercase; color: #000000;">{{$training->training_summary}}</p>
                            </div>
                            
                        </li>
                    </ul>
                @endforeach
            @else
                <div class="title" style="visibility: hidden">
                    <p class="bold">Award & Achievement</p>
                </div>
                <hr style="display:none; border-bottom: 2px solid #D4D4D4;">
            @endif
        </div>

        <div class="resume_item resume_work">
            @if(count($projects) >= 1)
                <div class="title">
                    <p class="bold">Projects</p>
                </div>
                @foreach($projects as $project)
                    <ul>
                        <li>
                            <div class="date">{{$project->project_name}}</div>
                            <div class="title">
                                <!--<p class="regular">Job Title&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Location</p>-->
                            </div>
                            <div class="info">
                                <p class="semi-bold2">{{$project->start}} - {{$project->end}}</p>
                                <p>{{$project->project_summary}}</p><br>
                            </div>
                        </li>
                    </ul>
                @endforeach
            @else
                <div class="title" style="visibility: hidden">
                    <p class="bold">Projects</p>
                </div>
                <hr style="display:none; border-bottom: 2px solid #D4D4D4;">
            @endif
        </div>

    </div>
</div>

</body>
</html>
