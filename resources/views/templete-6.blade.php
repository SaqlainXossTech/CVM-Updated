
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
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,500,700&display=swap");
    body{
      margin: 0px;
      padding: 0px;
      background-image: radial-gradient(#c7c7c7 25%, #c7c7c7 74%);
      height: 100vh;
      font-family: "Montserrat", sans-serif;

    }
    .clearfix{
      clear: both;
    }
    .main{
      width: 210mm;
      height: auto;
      background-color: #EFF1F3;
      box-shadow: 5px 7px 15px 5px #b9b6b6;
      margin: auto;

    }

    .p1 span{
      font-weight: 100;
      color: #c7c7c7;
    }
    .col-div-4{
        background: #3A3C3D;
        height: 1899px;
      padding: 20px;
      width: 34%;
      float: left;

    }

     img {
         border-radius: 50%;
         width: 120px;
         height: 120px;
         margin-top: 14px;
         margin-left: 25px;
    }
    .col-div-8{
      width: 60%;
      float: left;
    }

    .bg {
        background: #3881A8;
        height: 150px;
        width: 450px;
        margin-top: 60px;
        margin-left: 33px;
    }

    .bg1 {
        background: #458EB3;
        height: 150px;
        width: 310px;
        margin-top: 40px;
      margin-left: -20px;
    }

    .bg .img_left{
        width: 20%;
        float: left;
    }

    .bg .text_right{
        width: 65%;
        float: left;
    }
    .content-box{
      padding: 20px;
    }

    .head{
      font-size: 18px;
      letter-spacing: 2px;
      text-transform: uppercase;
      font-weight: 700;
      color: #EFF8E8;
      margin-bottom: -5px;
      margin-top: 46px;
    }

    .head22{
      font-size: 18px;
      letter-spacing: 2px;
      text-transform: uppercase;
      font-weight: 700;
      color: #4B4D4E;
      margin-bottom: -5px;
      margin-top: 46px;
    }

    .head21{
      font-size: 30px;
      /*text-transform: uppercase;*/
      font-weight: 600;
      /*float: right;*/
      margin-top: -1px;
      /*margin-right: -39px;*/
      /*padding-top: 20px;*/
      padding: 20px;
        padding-left: 64px;
      color: #F1EEF0;
    }

    .head1 {
      font-size: 17px;
      text-transform: uppercase;
      font-weight: 500;
      color: #EFF8E8;
      margin-bottom: 4px;
      margin-top: 32px;
    }

    .head112 {
      font-size: 17px;
      text-transform: uppercase;
      font-weight: 500;
      color: #4B4D4E;
      margin-bottom: 4px;
      margin-top: 32px;
    }

    .skill_name1 {
      margin-bottom: 6px;
      /*font-weight: 600;*/
      color: #EFF8E8;
      font-size: 12px;
    }

    .skill_name2 {
      margin-bottom: 6px;
      /*font-weight: 600;*/
      color: #4B4D4E;
      font-size: 12px;
    }

    .skill_name23 {
      margin-bottom: 6px;
      margin-top: 10px;
      line-height: 2;
      /*font-weight: 600;*/
      color: #4B4D4E;
      font-size: 12px;
    }

    .p3{
      font-size: 12px;
      color: #EFF8E8;
      margin-bottom: -10px;

    }

    .p4{
      color: #008AD3;
      margin-bottom: -14px;
      font-style: italic;
      font-weight: 400;

    }


    .p6{
      font-size: 12px;
      color: #EFF8E8;
      /*margin-bottom: -5px;*/
      /*font-style: italic;*/
      font-weight: 500;
      margin-bottom: -10px;

    }


    .p7{
      color: #F1EEF0;
      padding: 20px;
        /*float: right;*/
        /*text-align: left;*/
        text-transform: uppercase;
      /*margin-bottom: -5px;*/
      /*font-style: italic;*/
      font-weight: 400;
      margin-top: -70px;
        padding-left: 64px;
      /*margin-bottom: -10px;*/

    }


    .p8{
      color: #4B4D4E;
      font-weight: 400;

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
      color: #EFF8E8;
      font-size: 12px;
      padding: 2px;
      display: inline-block;
    }
  </style>

</head>
<body>

<div class="main" id="printpls">
  <div class="clearfix"></div>

  <div class="col-div-4">
      <div class="bg1">
        @foreach($personal_infos as $info)
        <p class="p5" style="color: #F1F0F2;padding-top: 20px; padding-left: 63px; font-size: 14px;"><i class="fa fa-phone" aria-hidden="true" style="font-size: 14px; color: #F1F0F2;"></i>&nbsp;&nbsp;&nbsp;{{$info->mobile}}</p>
        <hr style="border: 1px solid #F1F0F2; margin-top: -7px; width: 204px; margin-left: 63px;">
        <p class="p5" style="color: #F1F0F2; margin-top: -5px; margin-left: 63px; font-size: 14px;"><i class="fa fa-envelope" aria-hidden="true" style="font-size: 14px; color: #F1F0F2;"></i>&nbsp;&nbsp;&nbsp;{{$info->email}}</p>
        <hr style="border: 1px solid #F1F0F2; margin-top: -7px; width: 204px; margin-left: 63px;">
        <p class="p5" style="color: #F1F0F2; margin-top: -5px; margin-left: 63px; font-size: 14px;"><i class="fa fa-map-marker" aria-hidden="true" style="font-size: 14px; color: #F1F0F2;"></i>&nbsp;&nbsp;&nbsp;{{$info->present_address}}</p>
        @endforeach
      </div>

    <div class="content-box">

      <p class="head">|| Education</p>
      <hr style="border: 1px solid #E6EEF0;">
      @foreach($education as $edu)
      <div class="head1">{{$edu->degree}}</div>
      <div class="skill_name1">{{$edu->inst_name}}/{{$edu->dept}}</div>
      <div class="skill_name1">{{$edu->pass_year}}</div>
      @endforeach

      <p class="head">|| Skills</p>
      <hr style="border: 1px solid #E6EEF0;">
      @foreach($additonalInfos as $addinfo)
      <ul class="skills">
        <li>{{$addinfo->skills}}</li>
      </ul>
      @endforeach

        @if(count($references) >= 1)
            <p class="head">|| References</p>
            <hr style="border: 1px solid #E6EEF0;">

            <ul class="ref">
                @foreach($references as $ref)
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
                    <br>
                @endforeach
            </ul>
        @else
            <p class="head" style="visibility: hidden">|| References</p>
            <hr style="border: 1px solid #E6EEF0; visibility: hidden">
        @endif

        @if(count($trainings) >= 1)
            <p class="head">|| Award & Achievement</p>
            <hr style="border: 1px solid #E6EEF0;">
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
                @endforeach
        @else
            <p class="head" style="visibility: hidden">|| Award & Achievement</p>
            <hr style="border: 1px solid #E6EEF0; visibility: hidden">
        @endif
            <br>
    </div>
  </div>
  <div class="col-div-8">
      <div class="bg">
        @foreach($personal_infos as $info)
          <div class="img_left">
              <img src="{{$info->image}}" alt="Resume_image">
          </div>
          <div class="text_right">
              <p class="head21">{{$info->name}}</p>
              <p class="p7" style="font-size: 14px;">{{$info->job_title}}</p>
          </div>
          @endforeach
      </div>
    <div class="content-box">
      <p class="head22">|| Profile</p>
      <hr style="border: 1px solid #4B4D4E;">
      @foreach($personal_infos as $info)
      <p class="p8" style="font-size: 12px; line-height: 2;">{{$info->profile_summary}}</p>
        @endforeach

      @if(count($experiences) >= 1)
        <p class="head22">|| Experience</p>
        <hr style="border: 1px solid #4B4D4E;">
            @foreach($experiences as $exp)
                <div class="head112">{{$exp->position}}</div>
                <div class="skill_name2">{{$exp->company_name}}/{{$exp->location}}/{{$exp->start}} - {{$exp->end}}</div>
                <div class="skill_name23">{{$exp->work_summary}}</div>
            @endforeach
      @else
        <p class="head22" style="visibility: hidden">|| Experience</p>
        <hr style="border: 1px solid #4B4D4E; visibility: hidden">
      @endif

      @if(count($projects) >= 1)
        <p class="head22">|| Projects</p>
        <hr style="border: 1px solid #4B4D4E;">
            @foreach($projects as $project)
                <div class="head112">{{$project->project_name}}</div>
                <div class="skill_name2">{{$project->start}} - {{$project->end}}</div>
                <div class="skill_name23">{{$project->project_summary}}</div>
            @endforeach
      @else
        <p class="head22" style="visibility: hidden">|| Projects</p>
        <hr style="border: 1px solid #4B4D4E; visibility: hidden">
      @endif
    </div>
  </div>

  <div class="clearfix"></div>
</div>
<br/>
</body>
</html>
