
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @foreach ($cv as $c)
      <title>{{$c->price}}</title>
    @endforeach
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
    body{
      margin: 0px;
      padding: 0px;
      background-image: radial-gradient(#c7c7c7 25%, #c7c7c7 74%);
      height: 100vh;
      font-family: system-ui;

    }
    .clearfix{
      clear: both;
    }
    .main{
      width: 210mm;
      height: auto;
      background-color: #FAFAFA;
      box-shadow: 5px 7px 15px 5px #b9b6b6;
      margin: auto;

    }

    .p1 span{
      font-weight: 100;
      color: #c7c7c7;
    }
    .col-div-4{
      width: 30%;
      float: left;

    }

     img {
       width: 170px;
       height: 200px;
       margin-top: 10px;
       margin-left: 10px;
    }
    .col-div-8{
      width: 54%;
      float: left;
    }

    .bg {
      background: #008AD3;
      height: 200px;
      width: 555px;
      margin-top: 10px;
    }
    .content-box{
      padding: 20px;
    }

    .head{
      font-size: 20px;
      /*text-transform: uppercase;*/
      font-weight: 700;
      color: #008AD3;
      margin-bottom: -5px;
    }

    .head21{
      font-size: 27px;
      /*text-transform: uppercase;*/
      font-weight: 600;
      /*float: right;*/
      margin-top: 2px;
      /*margin-right: -39px;*/
      /*padding-top: 20px;*/
      padding: 20px;
      color: #FAFAFA;
    }

    .head1 {
      font-size: 20px;
      /*text-transform: uppercase;*/
      font-weight: 600;
      color: #008AD3;
      margin-bottom: 4px;
      margin-top: 20px;
    }

    .skill_name1 {
      margin-bottom: 10px;
      font-weight: 600;
    }

    .p3{
      /*color: #7b7b7b;*/
      margin-bottom: -10px;

    }

    .p4{
      color: #008AD3;
      margin-bottom: -14px;
      font-style: italic;
      font-weight: 400;

    }


    .p6{
      color: #008AD3;
      /*margin-bottom: -5px;*/
      /*font-style: italic;*/
      font-weight: 400;
      margin-bottom: -10px;

    }


    .p7{
      color: #FAFAFA;
      padding: 20px;
      /*margin-bottom: -5px;*/
      /*font-style: italic;*/
      font-weight: 400;
      margin-top: -61px;
      /*margin-bottom: -10px;*/

    }

    .content-box .resume_info ul li {
      list-style: none;
      margin-left: -40px;
    }

    .ref{
      list-style: none;
      margin-left: -40px;
      /*margin-top: 58px;*/
    }

    .content-box .p3 li{
      display: block;
      color: #7b7b7b;
      margin-bottom: -5px;

    }
    .fa{
      color: #151b29;
    }
    .skills{
      margin-left: -44px;
      margin-bottom: 0px;
    }
    .skills li{
      padding: 2px;
      display: inline-block;
    }
  </style>

</head>
<body>

<div class="main" id="printpls">
  <div class="clearfix"></div>

  <div class="col-div-4">
    @foreach($personal_infos as $info)
        <div class="img">
        <img src="{{$info->image}}" alt="Resume_image">
        </div>
        <div class="content-box">
        <p class="p5"><i class="fa fa-envelope" aria-hidden="true" style="display: block; font-size: 23px; color: #008AD3;"></i>{{$info->email}}</p>
        <p class="p5"><i class="fa fa-mobile" aria-hidden="true" style="display: block; font-size: 33px; color: #008AD3;"></i>{{$info->mobile}}</p>
        <p class="p5"><i class="fa fa-map-marker" aria-hidden="true" style="display: block; font-size: 24px; color: #008AD3;"></i>{{$info->present_address}}</p>
      @endforeach

      @foreach($additonalInfos as $addinfo)
        @if (empty($addinfo->skills))
        <p class="head" style="visibility: hidden">Skills</p>
        <hr style="border: 1px solid #008AD3; visibility: hidden">
        @else
        <p class="head">Skills</p>
        <hr style="border: 1px solid #008AD3;">
      <ul class="skills">
        <li>{{$addinfo->skills}}</li>
      </ul>
        @endif
        @if (empty($addinfo->language))
            <p class="head" style="visibility: hidden">Languages</p>
            <hr style="border: 1px solid #008AD3; visibility: hidden">
        @else
            <p class="head">Languages</p>
            <hr style="border: 1px solid #008AD3;">
            <p class="p3">{{$addinfo->language}}</p><br>
        @endif
      @endforeach

    @if(count($references) >= 1)
      <p class="head">References</p>
      <hr style="border: 1px solid #008AD3;">
      @foreach($references as $ref)
        <ul class="ref">
            <li>
            <div class="p6">
                <p>{{$ref->name}}</p>
            </div>
            </li>
            <li>
            <div class="p3">
                <p>{{$ref->designation}}</p>
            </div>
            </li>
            <li>
            <div class="p3">
                <p>{{$ref->organization}}</p>
            </div>
            </li>
            <li>
            <div class="p3">
                <p>{{$ref->email}}</p>
            </div>
            </li>
            <li>
            <div class="p3">
                <p>{{$ref->mobile}}</p>
            </div>
            </li>
        </ul>
        <br>
      @endforeach
      </ul>
    @else
      <p class="head" style="visibility: hidden">References</p>
      <hr style="border: 1px solid #008AD3; visibility: hidden">
    @endif

    @if(count($trainings) >= 1)
      <p class="head">Award & Achievement</p>
      <hr style="border: 1px solid #008AD3;">
      @foreach($trainings as $training)
        <ul class="ref">
            <li>
            <div class="head1">
                <p>{{$training->training_name}}</p>
            </div>
            </li>
            <li>
            <div class="p6">
                <p>{{$training->training_summary}}</p>
            </div>
            </li>
            <li>
            <div class="p3">
                <p>{{$training->end}}</p>
            </div>
            </li>
        </ul>
        <br>
      @endforeach
    @else
        <p class="head" style="visibility: hidden">Award & Achievement</p>
        <hr style="border: 1px solid #008AD3; visibility: hidden">
    @endif
    </div>
  </div>
  <div class="col-div-8">
      <div class="bg">
        @foreach($personal_infos as $info)
        <p class="head21">{{$info->name}}</p>
        <p class="p7" style="font-size: 14px;">{{$info->profile_summary}}</p>
        @endforeach
      </div>
    <div class="content-box">
      <p class="head">Educational Qualification</p>
      <hr style="border: 1px solid #008AD3; width: 137%;">
      @foreach($education as $edu)
        <div class="head1">{{$edu->degree}}</div>
        <div class="skill_name1">{{$edu->inst_name}}</div>
        <p class="p4">{{$edu->pass_year}}</p>
        <p class="p4">{{$edu->result}}</p>
        <p class="p4">{{$edu->board}}</p><br>
      @endforeach

    @if(count($experiences) >= 1)
      <p class="head">Professional Experience</p>
      <hr style="border: 1px solid #008AD3; width: 137%;">
      @foreach($experiences as $exp)
        <div class="head1">{{$exp->position}}</div>
        <div class="skill_name1">{{$exp->company_name}}</div>
        <p class="p4">{{$exp->work_summary}}</p>
        <p class="p4">{{$exp->location}}</p>
        <p class="p4">{{$exp->start}} - {{$exp->end}}</p><br>
      @endforeach
    @else
      <p class="head" style="visibility: hidden">Professional Experience</p>
      <hr style="border: 1px solid #008AD3; width: 137%; visibility: hidden">
    @endif

    @if(count($projects) >= 1)
      <p class="head">Projects</p>
      <hr style="border: 1px solid #008AD3; width: 137%;">
      @foreach($projects as $project)
        <div class="head1">{{$project->project_name}}</div>
        <p class="p4">{{$project->start}} - {{$project->end}}</p>
        <p class="p3">{{$project->project_summary}}</p><br>
      @endforeach
    @else
        <p class="head" style="visibility: hidden">Projects</p>
        <hr style="border: 1px solid #008AD3; width: 137%; visibility: hidden">
    @endif
    </div>
  </div>

  <div class="clearfix"></div>
</div>
<br/>
</body>
</html>
