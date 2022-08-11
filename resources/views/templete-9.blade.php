<!DOCTYPE html>
<html>
<head>
	@foreach ($cv as $c)
      <title>{{$c->price}}</title>
    @endforeach
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<style>
		@import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
		body{
			background-image: linear-gradient(#636162, #b1afaf);
			height: 122vh;
			font-weight: bold;
			letter-spacing: 2px;
		}
		*{
			margin: 0px; padding: 0px; font-family: 'Montserrat', sans-serif;
		}
		.main{
			background-color: white;
			height: auto;
			width: 650px;
			position: absolute;
			transform: translate(-50%, -50%);
			left: 50%;
			top: 60%;
		}
		.left{
			background-color: #fbb03b;
			width: 200px;
			height: 100%;
			float: left;
		}
		.right{
			width: 450px;
			float: left;
		}
		.profile-img{
			height: 180px;
			width: 180px;
			background-color: #ddd;
			border-radius: 50%;
			margin-bottom: 20px;
			margin-left: 60px;
			border: 10px solid #fbb03b;
			box-shadow: 6px 7px 9px 5px #fbb03b73;
		}
		.profile-img img{
			width: 100%;
			border-radius: 50%;
		}
		.box-1{
			position: relative;
		}
		.heading{
			background-color: #4d4d4d;
			padding: 10px;
			color: #fbb03b;
			text-align: left;
			padding-left: 20px;
			margin-right: -15px;
		}
		.heading::after{
			content: '';
			position: absolute;
			width: 21px;
			height: 18px;
			background-color: #5a5959;
			left: 191px;
			top: 26px;
			transform:rotate(56deg);
			z-index: -1;
		}
		.p1{
			padding: 9px 10px;
			font-size: 11px;
		}
		.icons1{
			font-size: 16px!important;
			padding-right: 10px!important;
			vertical-align: sub;
		}
		.skill-container{
			width: 90%;
			background-color: #4d4d4d;
			margin: 0px 10px;
		}
		.skill{
			text-align: right;
			padding-top: 2px;
			padding-bottom: 2px;
			color: white;
		}
		.html{
			width: 90%;
			background-color: white;
		}
		.css{
			width: 80%;
			background-color: white;
		}
		.js{
			width: 85%;
			background-color: white;
		}
		.jquery{
			width: 80%;
			background-color: white;
		}
		.web {
			width: 85%;
			background-color: white;
		}
		.gra{
			width: 70%;
			background-color: white;
		}
		.icons2{
			padding: 18px 10px;
		}
		.name-div{
			padding: 86px 0px 60px 55px;
			text-align: center;
			letter-spacing: 3px;
		}
		.name-div h1{
			margin-bottom: 10px;
		}
		.box-2{
			padding: 0px 50px;
			margin-top: 30px;
		}
		.p2{
			font-size: 10px;
			font-weight: 300;
			letter-spacing: 1px;
			word-spacing: 2px;
			line-height: 18px;
			margin-top: 5px;
		}
		h2{
			font-size: 16px;
			margin-bottom: 15px;
		}
		.icons3{
			vertical-align: bottom;
			font-size: 21px!important;
			color: #4d4d4d;
		}
		.p3{
			font-size: 13px;
			word-spacing: 1px;
			letter-spacing: 0px;
			margin-top: 10px;
		}
		.p3 span{
			color: #ff9b00; padding-left: 20px;
		}
	</style>

</head>
<body>

<div class="main">
	<div class="left">
		<br>
        @foreach($personal_infos as $info)
		<div class="profile-img"><img src="{{$info->image}}"></div>
        @endforeach
		<div class="box-1">
			<div class="heading">
				<p>CONTACT</p>
			</div>
            @foreach($personal_infos as $info)
			<p class="p1"><i class="material-icons icons1">call</i>{{$info->mobile}}</p>
			<p class="p1"><i class="material-icons icons1">email</i>{{$info->email}}</p>
            @endforeach
		</div>

		<div class="box-1">
			<div class="heading">
				<p>LANGUAGES</p>
			</div>
            @foreach($additonalInfos as $addinfo)
			<p class="p1">
                {{$addinfo->language}}
			</p>

		</div>
		<br>

		<div class="box-1">
			<div class="heading">
				<p>SKILLS</p>
			</div>

			<p class="p1">
                {{$addinfo->skills}}
			</p>

		</div>
		<br>
		<div class="box-1">
			<div class="heading">
				<p>HOBBIES</p>
			</div>

			<p class="p1">
                {{$addinfo->hobby}}
			</p>
            @endforeach
		</div>

        <br>
		<div class="box-1">
			<div class="heading">
				<p style="text-transform: uppercase">Achievement</p>
			</div>
            @foreach($trainings as $training)
			<p class="p1" style="font-size: 14px;">{{$training->training_name}}</p>

			<p class="p1" style="margin-top: -8px;">{{$training->training_summary}}</p>

			<p class="p1" style="margin-top: -8px;">{{$training->end}}</p>
            @endforeach
		</div>

        <br>
		<div class="box-1">
			<div class="heading">
				<p style="text-transform: uppercase">Reference</p>
			</div>
            @foreach($references as $ref)
			<p class="p1" style="font-size: 14px;">{{$ref->name}}</p>

			<p class="p1" style="margin-top: -8px;">{{$ref->designation}}</p>

			<p class="p1" style="margin-top: -8px;">{{$ref->organization}}</p>

			<p class="p1" style="margin-top: -8px;">{{$ref->email}}</p>

			<p class="p1" style="margin-top: -8px;">{{$ref->mobile}}</p>
            @endforeach
		</div>

	</div>


	<div class="right">
        @foreach($personal_infos as $info)
		<div class="name-div">

			<h1>{{$info->name}}</h1>
			<p>{{$info->job_title}}</p>
		</div>

		<div class="box-2">
			<h2>ABOUT ME <i class="material-icons icons3" style="font-size: 28px!important; ">perm_identity</i></h2>
			<p class="p2">
				{{$info->profile_summary}}
			</p>
		</div>
        @endforeach



		<div class="box-2">
			<h2>EDUCATION <i class="material-icons icons3" >border_color</i></h2>
            @foreach($education as $edu)
			<p class="p3">{{$edu->pass_year}}<span>{{$edu->inst_name}}</span></p>
			<p class="p2">
				{{$edu->degree}} in {{$edu->dept}}, Result- {{$edu->result}}
			</p>
            @endforeach
		</div>


		<div class="box-2">
			<h2>WORK EXPERIENCE <i class="material-icons icons3" >folder</i></h2>
            @foreach($experiences as $exp)
			<p class="p3">{{$exp->start}} - {{$exp->end}} <span>{{$exp->company_name}}</span></p>
			<p class="p2">
                {{$exp->work_summary}}
			</p>
            @endforeach
		</div>

        <div class="box-2">
			<h2 style="text-transform: uppercase">Projects <i class="material-icons icons3" >engineering</i></h2>
            @foreach($projects as $project)
			<p class="p3">{{$project->start}} - {{$project->end}} <span style="padding-left: 49px;">{{$project->project_name}}</span></p>
			<p class="p2">
				{{$project->project_summary}}
			</p>
            @endforeach
		</div>

	</div>
</div>




</body>
</html>
