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
			background-color: white;
			box-shadow: 5px 7px 15px 5px #b9b6b6;
			margin: auto;

		}

		.top-section{
			background-color:#151b29;
			text-align: center;
			padding: 20px;
		}
		.profile{
			width: 17%;
			height: 134px;
			border-radius: 50%;
		}
		.p1{
			color: white;
			font-size: 40px;
			font-weight: bold;
			margin: 0px;
			margin-top: 10px;
		}
		.p1 span{
			font-weight: 100;
			color: #c7c7c7;
		}
		.p2{
			font-size: 20px;
			color: #c7c7c7;
			margin: 0px;
			margin-top: 10px;
		}
		.col-div-4{
			width: 35%;
			float: left;

		}
		.col-div-8{
			width: 62%;
			float: left;
		}
		.line{
			border-left: 1px solid #c7c7c7;
			height: 1423px;
			width: 2%;
			margin-top: 30px;
			float:left;
		}
		.content-box{
			padding: 20px;
		}
		.head{
			font-size: 20px;
			text-transform: uppercase;
			font-weight: 600;
		}

		table {
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
		}

		td, th {
			text-align: left;
			padding: 8px;
		}

		.p3{
			color: #7b7b7b;
			margin-bottom: -5px;

		}

		.ref{
			list-style: none;
			margin-left: -40px;
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
			margin-left: -20px;
			margin-bottom: 0px;
		}
		.skills li{
			padding: 5px;
		}
		.skills li span{
			color: #7b7b7b;
		}
		.p-4{
			font-size: 14px;
			color: #7b7b7b;
		}
	</style>

</head>
<body>

<div class="main" id="printpls">
	<div class="top-section">
        @foreach($personal_infos as $info)
		<img src="{{$info->image}}" class="profile" />
		<p class="p1">{{$info->name}}</p>
		<p class="p2">{{$info->job_title}}</p>
        @endforeach
	</div>
	<div class="clearfix"></div>

	<div class="col-div-4">
		<div class="content-box" style="padding-left: 40px;">


			<p class="head">Contact</p>
			<p class="p3"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;&nbsp;{{$info->mobile}}</p>
			<p class="p3"><i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;&nbsp;{{$info->email}}</p>
			<p class="p3"><i class="fa fa-home" aria-hidden="true"></i> &nbsp;&nbsp;{{$info->present_address}}</p>


			<br/>
			<p class="head">my skills</p>
			<ul class="skills">
                @foreach($additonalInfos as $addinfo)
				<li><span>{{$addinfo->skills}}</span></li>
                
			</ul>

			<br/>
			<!--<p class="head">awards</p>-->
			<!--<p class="p3">CSS Design Awards</p>-->
			<!--<p class="p3">D&AD Awards</p>-->
			<!--<p class="p3">CSS Winner Awards</p>-->
			<!--<p class="p3">The Shorty Awards</p>-->
			<!--<p class="p3">Awwwards</p>-->

			<p class="head">Languages</p>
			<p class="p3">{{$addinfo->language}}</p>
			@endforeach
			<br/>

        @if(count($references) >= 1)
			<p class="head">References</p>
            @foreach($references as $ref)
                <ul class="ref">
                    <li>
                        <div class="p3">
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
                            <p>{{$ref->mobile}}</p><br>
                        </div>
                    </li>
                </ul>
            @endforeach
        @else
            <p class="head" style="visibility: hidden">References</p>
        @endif
		</div>
	</div>
	<div class="line"></div>
	<div class="col-div-8">
		<div class="content-box">
			<p class="head">profile</p>
            @foreach($personal_infos as $info)
                <p>{{$info->profile_summary}}</p>
            @endforeach
			<br/>

        @if(count($experiences) >= 1)
			<p class="head">EXPERIENCE</p>
            @foreach($experiences as $exp)
                <p>{{$exp->company_name}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$exp->start}} - {{$exp->end}}</p>
                <p class="p-4">
                    {{$exp->work_summary}}
                </p>
            @endforeach
        @else
            <p class="head" style="visibility: hidden">EXPERIENCE</p>
        @endif
			<br/>

			<p class="head">Education</p>
            @foreach($education as $edu)
			<p class="p-4" >{{$edu->degree}} from {{$edu->dept}}&nbsp;&nbsp;&nbsp;&nbsp; {{$edu->inst_name}}&nbsp;&nbsp;&nbsp;&nbsp; {{$edu->pass_year}}&nbsp;&nbsp;&nbsp;&nbsp; {{$edu->result}}</p>
            @endforeach
			<br/>

        @if(count($trainings) >= 1)
			<p class="head">Award & Achievement</p>
            @foreach($trainings as $training)
                <table>
                    <tr>
                        <td>
                            <p>{{$training->training_name}}</p>
                            <p>{{$training->training_summary}}</p>
                            <p class="p-4">{{$training->end}}</p>
                        </td>
                    </tr>
                </table>
            @endforeach
        @else
            <p class="head" style="visibility: hidden">Award & Achievement</p>
        @endif
			<br/>

        @if(count($projects) >= 1)
			<p class="head">Projects</p>
            @foreach($projects as $project)
                <p>{{$project->project_name}}</p>
                <p style="font-size: 14px;">{{$project->start}} - {{$project->end}}</p>
                <p class="p-4">
                    {{$project->project_summary}}
                </p>
            @endforeach
        @else
            <p class="head" style="visibility: hidden">Projects</p>
        @endif
		</div>
	</div>

	<div class="clearfix"></div>
</div>
<br/>
</body>
</html>
