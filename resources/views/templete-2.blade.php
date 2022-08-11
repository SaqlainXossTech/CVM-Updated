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

        .semi-bold {
            font-weight: 500;
            font-size: 16px;
        }

        .resume {
            width: 800px;
            height: auto;
            display: -webkit-box;
            margin: 0px auto;
        }

        .resume .resume_left {
            width: 280px;
            background: #0bb5f4;
        }

        .resume .resume_left .resume_profile {
            width: 100%;
            height: 280px;
        }

        .resume .resume_left .resume_profile img {
            width: 100%;
            height: 100%;
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

        .resume .resume_left .regular {
            color: #b1eaff;
        }

        .resume .resume_item {
            padding: 25px 0;
            border-bottom: 2px solid #b1eaff;
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

        .resume .resume_left ul li:last-child {
            margin-bottom: 0;
        }

        .resume .resume_left ul li .icon {
            width: 35px;
            height: 35px;
            background: #fff;
            color: #0bb5f4;
            border-radius: 50%;
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
            color: #b1eaff;
        }

        .resume .resume_left .resume_skills ul li {
            display: inline-block;
            margin-bottom: 10px;
            color: #b1eaff;
            justify-content: space-between;
            align-items: center;
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

        .resume .resume_right .bold {
            color: #0bb5f4;
        }

        .resume .resume_right .resume_work ul,
        .resume .resume_right .resume_education ul {
            padding-left: 40px;
            overflow: hidden;
        }

        .resume .resume_right .resume_work ul,
        .resume .resume_right .resume_reference ul {
            padding-left: 40px;
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

        .resume .resume_right .resume_reference .date {
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

        .resume .resume_right .resume_work ul li:before,
        .resume .resume_right .resume_education ul li:before {
            content: "";
            position: absolute;
            top: 5px;
            left: -25px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            border: 2px solid #0bb5f4;
        }

        .resume .resume_right .resume_work ul li:after,
        .resume .resume_right .resume_education ul li:after {
            content: "";
            position: absolute;
            top: 14px;
            left: -21px;
            width: 2px;
            height: 115px;
            background: #0bb5f4;
        }

        .resume .resume_right .resume_reference ul li:before {
            content: "";
            position: absolute;
            top: 5px;
            left: -25px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            border: 2px solid #0bb5f4;
        }

        .resume .resume_right .resume_reference ul li:after {
            content: "";
            position: absolute;
            top: 14px;
            left: -21px;
            width: 2px;
            height: 34px;
            background: #0bb5f4;
        }

        .resume .resume_right .resume_train ul li:before {
            content: "";
            position: absolute;
            top: 5px;
            left: -25px;
            width: 6px;
            height: 6px;
            border-radius: 50%;
            border: 2px solid #0bb5f4;
        }

        .resume .resume_right .resume_train ul li:after {
            content: "";
            position: absolute;
            top: 14px;
            left: -21px;
            width: 2px;
            height: 92px;
            background: #0bb5f4;
        }

        /*.resume .resume_right .resume_hobby ul {*/
            /*display: flex;*/
            /*justify-content: space-between;*/
        /*}*/

        /*.resume .resume_right .resume_hobby ul li {*/
            /*width: 80px;*/
            /*height: 80px;*/
            /*border: 2px solid #0bb5f4;*/
            /*border-radius: 50%;*/
            /*position: relative;*/
            /*color: #0bb5f4;*/
        /*}*/

        /*.resume .resume_right .resume_hobby ul li i {*/
            /*font-size: 30px;*/
        /*}*/

        /*.resume .resume_right .resume_hobby ul li:before {*/
            /*content: "";*/
            /*position: absolute;*/
            /*top: 40px;*/
            /*right: -52px;*/
            /*width: 50px;*/
            /*height: 2px;*/
            /*background: #0bb5f4;*/
        /*}*/

        /*.resume .resume_right .resume_hobby ul li:last-child:before {*/
            /*display: none;*/
        /*}*/

    </style>
</head>
<body>

<div class="resume">
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
                    <p class="bold">{{$info->name}}</p>
                    <p class="regular">{{$info->job_title}}</p>
                </div>
                <ul>
                    <li>
                        <div class="icon">
                            <i class="fas fa-map-signs"></i>
                        </div>
                        <div class="data">
                            {{$info->present_address}}
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="data">
                            {{$info->mobile}}
                        </div>
                    </li>
                    <li>
                        <div class="icon">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="data">
                            {{$info->email}}
                        </div>
                    </li>
                </ul>
            </div>
            @endforeach
            
            
            
            <div class="resume_item resume_skills">
                @if(count($additonalInfos) >= 1)
                    <div class="title">
                        <p class="bold">Skills</p>
                    </div>
                @foreach($additonalInfos as $addinfo)
                    <ul>
                        <li>
                            <div class="skill_name">
                                {{$addinfo->skills}}
                            </div>
                        </li>
                    </ul>
                    
                @endforeach
                
                    @else
                <div class="title" style="visibility: hidden">
                    <p class="bold">Skills</p>
                </div>
            @endif
            </div>
        
            <div class="resume_item resume_social">
                @foreach($socials as $social)
                    @if (empty($social))
                    <div class="title" style="visibility: hidden">
                        <p class="bold">Social</p>
                    </div>
                    @else
                    <div class="title">
                        <p class="bold">Social</p>
                    </div>
                    @endif
                    <ul>
                        <li>
                            @if (empty($social->facebook))
                            <div class="icon" style="visibility: hidden">
                                <i class="fab fa-facebook-square"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold" style="visibility: hidden">Facebook</p>
                                <p>{{$social->facebook}}</p>
                            </div>
                            @else
                            <div class="icon">
                                <i class="fab fa-facebook-square"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold">Facebook</p>
                                <p>{{$social->facebook}}</p>
                            </div>
                            @endif
                        </li>
                        <li>
                            @if (empty($social->twitter))
                            <div class="icon" style="visibility: hidden">
                                <i class="fab fa-twitter-square"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold" style="visibility: hidden">Twitter</p>
                                <p>{{$social->twitter}}</p>
                            </div>
                            @else
                            <div class="icon">
                                <i class="fab fa-twitter-square"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold">Twitter</p>
                                <p>{{$social->twitter}}</p>
                            </div>
                            @endif
                        </li>
                        <li>
                            @if (empty($social->github))
                            <div class="icon" style="visibility: hidden">
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold" style="visibility: hidden">Github</p>
                                <p>{{$social->github}}</p>
                            </div>
                            @else
                            <div class="icon">
                                <i class="fab fa-github"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold">Github</p>
                                <p>{{$social->github}}</p>
                            </div>
                            @endif
                        </li>
                        <li>
                            @if (empty($social->linkedin))
                            <div class="icon" style="visibility: hidden">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold" style="visibility: hidden">Linkedin</p>
                                <p>{{$social->linkedin}}</p>
                            </div>
                            @else
                            <div class="icon">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold">Linkedin</p>
                                <p>{{$social->linkedin}}</p>
                            </div>
                            @endif
                        </li>
                        <li>
                            @if (empty($social->behance))
                            <div class="icon" style="visibility: hidden">
                                <i class="fab fa-behance"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold" style="visibility: hidden">Behance</p>
                                <p>{{$social->behance}}</p>
                            </div>
                            @else
                            <div class="icon">
                                <i class="fab fa-behance"></i>
                            </div>
                            <div class="data">
                                <p class="semi-bold">Behance</p>
                                <p>{{$social->behance}}</p>
                            </div>
                            @endif
                        </li>
                    </ul>
                @endforeach
            </div>

        </div>
    </div>
    <div class="resume_right">
        <div class="resume_item resume_about">
            <div class="title">
                <p class="bold">About</p>
            </div>
            @foreach($personal_infos as $info)
                <p>{{$info->profile_summary}}</p>
            @endforeach
        </div>
        <div class="resume_item resume_work">

            @if(count($experiences) >= 1)
                <div class="title">
                    <p class="bold">Work Experience</p>
                </div>
                    @foreach($experiences as $exp)
                    <ul>
                        <li>
                            <div class="date">{{$exp->company_name}}</div>
                            <div class="info">
                                <p class="semi-bold">{{$exp->position}}</p>
                                <p>{{$exp->work_summary}}</p>
                                <p>{{$exp->start}} - {{$exp->end}}</p><br>
                            </div>
                        </li>
                    </ul>
                    @endforeach
            @else
                <div class="title" style="visibility: hidden">
                    <p class="bold">Work Experience</p>
                </div>
            @endif

        </div>
        <div class="resume_item resume_education">
            @if(count($education) >= 1)
                <div class="title">
                    <p class="bold">Education</p>
                </div>
                @foreach($education as $edu)
                    <ul>
                        <li>
                            <div class="date">{{$edu->inst_name}}</div>
                            <div class="info">
                            <p>{{$edu->degree}}</p>
                            <p>{{$edu->dept}}</p>
                            <p>{{$edu->result}}</p>
                            <p>{{$edu->pass_year}}</p><br>
                            </div>
                        </li>
                    </ul>
                @endforeach
            @else
                <div class="title" style="visibility: hidden">
                    <p class="bold">Education</p>
                </div>
            @endif
        </div>
        <div class="resume_item resume_education resume_train">

            @if(count($trainings) >= 1)
                <div class="title">
                    <p class="bold">Training & Achievement</p>
                </div>
                @foreach($trainings as $training)
                    <ul>
                        <li>
                            <div class="date">{{$training->training_name}}</div>
                            <div class="info">
                                <p class="semi-bold">{{$training->training_summary}}</p>
                                <p>{{$training->end}}</p><br>
                            </div>
                        </li>
                    </ul>
                @endforeach
            @else
                <div class="title" style="visibility: hidden">
                    <p class="bold">Training & Achievement</p>
                </div>
            @endif

        </div>
        <div class="resume_item resume_education resume_project">
            @if(count($projects) >= 1)
                <div class="title">
                    <p class="bold">Projects</p>
                </div>
                @foreach($projects as $project)
                    <ul>
                        <li>
                            <div class="date">{{$project->project_name}}</div>
                            <div class="info">
                                <p class="semi-bold">{{$project->project_summary}}</p>
                                <p>{{$project->start}} - {{$project->end}}</p><br>
                            </div>
                        </li>
                    </ul>
                @endforeach
            @else
                <div class="title" style="visibility: hidden">
                    <p class="bold">Projects</p>
                </div>
            @endif

        </div>
        <div class="resume_item resume_reference">
            @if(count($references) >= 1)
                <div class="title">
                    <p class="bold">References</p>
                </div>
                @foreach($references as $ref)
                    <ul>
                        <li>
                            <div class="info">
                                <p class="semi-bold">{{$ref->name}}</p>
                                <p>{{$ref->designation}}</p>
                                <p>{{$ref->organization}}</p>
                                <p>{{$ref->email}}</p>
                                <p>{{$ref->mobile}}</p><br>
                            </div>
                        </li>
                    </ul>
                @endforeach
            @else
                <div class="title" style="visibility: hidden">
                    <p class="bold">References</p>
                </div>
            @endif
        </div>
    </div>
</div>

</body>
</html>
