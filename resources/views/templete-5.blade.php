<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    @foreach ($cv as $c)
      <title>{{$c->price}}</title>
    @endforeach
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

        *{
            margin: 0;
            padding: 0;
            list-style: none;
            box-sizing: border-box;
            font-family: 'Roboto', sans-serif;
        }

        body{
            background: #c4c4c4;
            font-size: 14px;
            line-height: 20px;
        }

        .resume_wrapper{
            display: flex;
            width: 800px;
            margin: auto;
            background: #fff;
        }

        .resume_wrapper .title {
            margin-bottom: 20px;
        }

        .semi-bold {
            font-weight: 500;
            font-size: 16px;
            float: right;
            margin-top: -76px;
        }

        .resume_wrapper .resume_right ul li .date {
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .resume_wrapper .resume_right .regular {
            color: #000000;
            text-transform: uppercase;
        }

        .resume_wrapper .resume_right ul li .info {
            margin-bottom: 20px;
        }

        .resume_wrapper .resume_top{
            background: #41424C;
            position: absolute;
            height: 200px;
            width: 800px;
        }

        .resume_wrapper .resume_left{
            width: 53%;
            background: #F9E5BC;
            margin-left: 35px;
            margin-bottom: 43px;
            z-index: 1;
        }

        .resume_wrapper .resume_left .resume_image{
            width: 100%;
        }

        .resume_wrapper .resume_left .resume_image img{
            display: block;
            border-radius: 50%;
            width: 150px;
            height: 150px;
            margin: 25px 0px 0px 51px;
        }

        .resume_wrapper .resume_title{
            color: #000000;
            text-transform: uppercase;
            font-weight: 700;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .resume_wrapper .resume_left .resume_info{
            color: #000000;
            display: flex;
            font-weight: bold;
            text-transform: uppercase;
        }

        .resume_wrapper .resume_left .resume_bottom{
            padding: 20px 30px;
        }

        .resume_wrapper .resume_item{
            padding: 20px 0;
            /*border-bottom: 1px solid #0175b2;*/
        }

        .resume_wrapper  .resume_item:last-child{
            border-bottom: 0;
        }

        .resume_wrapper .resume_left .resume_namerole{
            /*display: none;*/
        }

        .resume_wrapper .resume_namerole .name{
            font-size: 20px;
            color: #000000;
            text-transform: uppercase;
            font-weight: 700;
            margin-bottom: 5px;
            margin-top: -27px;
            text-align: center;
        }

        .resume_wrapper .resume_left .resume_namerole .role{
            color: #000000;
            text-transform: uppercase;
            text-align: center;
            margin-top: 25px;
        }

        .resume_wrapper .resume_left .resume_skills ul li {
            display: inline-block;
            margin-bottom: 10px;
            justify-content: space-between;
            align-items: center;
        }

        .resume_wrapper .resume_top ul li {
            /*display: inline-block;*/
            margin-bottom: 10px;
            color: #fff;
            position: relative;
            left: 400px;
            top: 53px;
            justify-content: space-between;
            align-items: center;
        }

        #icon{
            font-size: 22px;
            position: absolute;
            left: -23px;
            top: -2px;
        }

        #icon1{
            font-size: 22px;
            position: absolute;
            left: 157px;
            top: -2px;
        }

        .resume_wrapper .resume_top .data{
            margin-left: 10px;
        }

        .resume_wrapper .resume_top .data1{
            margin-top: 40px;
            margin-left: 10px;
        }

        .resume_wrapper .resume_top .data2{
            margin-left: 190px;
            margin-top: -30px;
        }

        .resume_wrapper .resume_left .skill_name1 {
            margin-bottom: 10px;
            font-weight: 600;
        }

        .resume_wrapper .resume_left .skill_name2 {
            font-style: italic;
        }

        .resume_wrapper .resume_left .resume_contact .resume_info:last-child{
            margin-top: 10px;
        }

        .resume_wrapper .resume_left .resume_skills .skills_list .skills_bar p{
            position: relative;
            width: 125px;
            height: 20px;
            background: #fff;
        }

        .resume_wrapper .resume_left .resume_skills .skills_list .skills_bar p span{
            position: absolute;
            top: 0;
            left: 0;
            background: #0175b2;
            width: 100%;
            height: 100%;
        }

        .resume_wrapper .resume_right{
            width: 100%;
            padding: 210px 40px;
            color: #26252d;
            z-index: 1;
        }

        .resume_wrapper .resume_right .resume_namerole .name{
            color: #26252d;
            font-size: 32px;
        }

        .resume_wrapper .resume_right .resume_namerole .role{
            font-size: 14px;
            text-transform: uppercase;
        }

        .resume_wrapper .resume_right .resume_item .resume_title{
            color: #26252d;
            margin-bottom: 30px;
        }

        .resume_wrapper .resume_right .resmue_interests .resume_info ul li{
            margin-top: 9px;
        }

        .resume_wrapper .resume_right .resmue_interests .resume_info{
            display: flex;
            justify-content: space-between;
        }

        .resume_wrapper .resume_right .resmue_interests .resume_info .data1{
            font-style: italic;
            font-weight: 600;
        }

    </style>
</head>
<body>


<div class="resume_wrapper">
    <div class="resume_top">
        @foreach($personal_infos as $info)
        <ul>
            <li>
                <div class="data">
                    <i class="fas fa-map-marker-alt" id="icon"></i>
                    <p>{{$info->present_address}}</p>
                </div>

            </li>
            <li>
                <div class="data1">
                    <i class="fas fa-phone-alt" id="icon"></i>
                    <p>{{$info->mobile}}</p>
                </div>
            </li>
            <li>
                <div class="data2">
                    <i class="fas fa-envelope" id="icon1"></i>
                    <p>{{$info->email}}</p>
                </div>
            </li>
        </ul>
        @endforeach
    </div>
    <div class="resume_left">
        <div class="resume_image">
            @foreach($personal_infos as $info)
            <img src="{{$info->image}}" alt="Resume_image">
            @endforeach
        </div>
        <div class="resume_bottom">
            <div class="resume_item resume_namerole">
                @foreach($personal_infos as $info)
                <div class="name">{{$info->name}}</div>
                <div class="role">{{$info->job_title}}</div>
                @endforeach
            </div>
            <div class="resume_item resume_skills">
                <div class="resume_title">Skills</div>
                <ul>
                    <li>
                        <div class="skill_name">
                            @foreach($additonalInfos as $addinfo)
                            {{$addinfo->skills}}
                            @endforeach
                        </div>
                    </li>

                </ul>
            </div>
            <div class="resume_item resume_address">
                <div class="resume_title">Education</div>
                @foreach($education as $edu)
                <div class="resume_info">
                    {{$edu->degree}}
                </div>

                <div class="resume_info">
                    {{$edu->dept}}
                </div>

                <div class="skill_name1">
                    {{$edu->inst_name}}
                </div>

                <div class="skill_name2">
                    {{$edu->pass_year}}
                </div>
                <div class="skill_name2">
                    {{$edu->result}}
                </div>
                <div class="skill_name2">
                    {{$edu->board}}
                </div>
                <br>
                @endforeach

            </div>
            <div class="resume_item resume_contact">
                @if(count($references) >= 1)
                    <div class="resume_title">References</div>
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
                                    <p>{{$ref->mobile}}</p>
                                </div>
                            </li>
                            <br/>
                        </ul>
                    @endforeach
                @else
                    <div class="resume_title" style="visibility: hidden">References</div>
                @endif
            </div>

        </div>
    </div>
    <div class="resume_right">
        <div class="resume_item resume_education">
            <div class="resume_title">Profile</div>
            <div class="resume_info">
                @foreach($personal_infos as $info)
                <p>{{$info->profile_summary}}</p>
                @endforeach
            </div>
        </div>

        <div class="resume_item resume_experience">
            @if(count($experiences) >= 1)
                <div class="resume_title">Work Experience</div>
                    <div class="resume_info">
                        @foreach($experiences as $exp)
                            <ul>
                                <li>
                                    <div class="date">{{$exp->company_name}}</div>
                                    <div class="title">
                                        <p class="regular">{{$exp->position}}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$exp->location}}</p>
                                    </div>
                                    <div class="info">
                                        <p class="semi-bold">{{$exp->start}} - {{$exp->end}}</p>
                                        <p>{{$exp->work_summary}}</p>
                                    </div>
                                </li>
                            </ul>
                        @endforeach
                    </div>
            @else
                <div class="resume_title" style="visibility: hidden">Work Experience</div>
            @endif
        </div>

        <div class="resume_item resume_experience">
            @if(count($trainings) >= 1)
                <div class="resume_title">Award & Achievement</div>
                    <div class="resume_info">
                        @foreach($trainings as $training)
                            <ul>
                                <li>
                                    <div class="date">{{$training->training_name}}</div>
                                    <div class="title">
                                        <p class="regular">{{$training->training_summary}}</p>
                                    </div>
                                    <div class="info">
                                        <p class="semi-bold" style="margin-top: -30px;">{{$training->end}}</p>
                                    </div>
                                </li>
                            </ul>
                        @endforeach
                    </div>
            @else
                <div class="resume_title" style="visibility: hidden">Award & Achievement</div>
            @endif
        </div>

        <div class="resume_item resume_experience">
            @if(count($projects) >= 1)
                <div class="resume_title">Projects</div>
                    <div class="resume_info">
                        @foreach($projects as $project)
                            <ul>
                                <li>
                                    <div class="date">{{$project->project_name}}</div>
                                    <div class="info">
                                        <p class="semi-bold" style="margin-top: -34px;">{{$project->start}} - {{$project->end}}</p>
                                        <p>{{$project->project_summary}}</p>
                                    </div>
                                </li>
                            </ul>
                        @endforeach
                    </div>
            @else
                <div class="resume_title" style="visibility: hidden">Projects</div>
            @endif
        </div>

        <div class="resume_item resmue_interests">
            <div class="resume_title">Language</div>
            @foreach($additonalInfos as $addinfo)
            <div class="resume_info">
                <ul>
                    <li>
                        <div class="data">
                            <p>{{$addinfo->language}}</p>
                        </div>
                    </li>
                </ul>
            </div>
            @endforeach
        </div>
    </div>
</div>

</body>
</html>
