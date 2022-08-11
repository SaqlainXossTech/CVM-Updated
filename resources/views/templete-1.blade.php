
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    @foreach ($cv as $c)
      <title>{{$c->price}}</title>
    @endforeach
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">

    <style>
        * {margin: 1;padding: 0;}

        body{font-family: 'Montserrat', sans-serif;}

        #page {
            min-height: 200px;
            width: 60%;
            min-width: 600px;
            background: #FAFAFA;
            margin: auto;
            padding: 30px;
            color: #000000;
        }

        .photo-and-name {
            /* NO STYLE NEEDED YET */
        }

        .photo {
            width: 15%;
            min-width: 130px;
            float: right;
            margin-right: 20px;
        }

        .contact-info-box {
            width: 70.9%;
            display: inline-block;
        }

        .name {
            margin-bottom: -5px;
        }
        .job-title {
            /*display: inline-block;*/
            padding: 5px;
        }

        #objective {

        }

        #objective h3 {
            background: #D3D3D3;
            /*border: 1px solid #d3d3d3;*/
            /*text-transform: uppercase;*/
            padding: 3px;
            /*border-radius: 5px;*/
            margin: 30px 0 10px;
        }

        #objective p {
            padding: 0 5px;
            line-height: 25px;
            font-size: 14px;
            color: #000;
        }

        #education h3 {
            background: #D3D3D3;
            /*border: 1px solid #d3d3d3;*/
            /*text-transform: uppercase;*/
            padding: 3px;
            /*border-radius: 5px;*/
            margin: 30px 0 10px;
        }

        #education table {
            border: 2px solid #000000;
            padding: 5px;
            font-size: 14px;
            color: #000;
            border-collapse: collapse;
            width: 100%;
        }

        #education table td, th {
            border: 2px solid #000000;
            padding: 5px;
            font-size: 14px;
            color: #000;
            border-collapse: collapse;
            text-align: center;
        }

        #education table tr.school-1 td:first-child {
            width: 120px;
            /*color: gray;*/
            /*padding-bottom: 25px;*/
        }

        #language h3 {
            background: #D3D3D3;
            /*border: 1px solid #d3d3d3;*/
            /*text-transform: uppercase;*/
            padding: 3px;
            /*border-radius: 5px;*/
            margin: 30px 0 10px;
        }

        #language table {
            border: 2px solid #000000;
            padding: 5px;
            font-size: 14px;
            color: #000;
            border-collapse: collapse;
            width: 100%;
        }

        #language table th, td {
            border: 2px solid #000000;
            padding: 5px;
            font-size: 14px;
            color: #000;
            border-collapse: collapse;
            text-align: center;
        }

        #work h3 {
            background: #D3D3D3;
            /*border: 1px solid #d3d3d3;*/
            /*text-transform: uppercase;*/
            padding: 3px;
            /*border-radius: 5px;*/
            margin: 30px 0 10px;
        }

        #work ul li {
            display: inline-block;
        }

        #work .skill {
            padding: 0 2px;
            line-height: 25px;
            font-size: 14px;
            color: #000;
        }

        #bio-data h3 {
            background: #D3D3D3;
            /*border: 1px solid #d3d3d3;*/
            /*text-transform: uppercase;*/
            padding: 3px;
            /*border-radius: 5px;*/
            margin: 30px 0 10px;
        }

        #bio-data ul li {
            display: block;
        }

         .s1 {
            padding-left: 121px;
        }

         .s2 {
            padding-left: 62px;
        }

         .s3 {
            padding-left: 57px;
        }

         .s4 {
            padding-left: 112px;
        }

         .s5 {
            padding-left: 74px;
        }

         .s6 {
            padding-left: 67px;
        }

         .s7 {
            padding-left: 87px;
        }

         .s8 {
            padding-left: 105px;
        }

         .s9 {
            padding-left: 48px;
        }

         .s10 {
            padding-left: 22px;
        }

        #bio-data .skill {
            padding: 0 2px;
            line-height: 25px;
            font-size: 14px;
            font-weight: bold;
            color: #000;
        }

        #bio-data table td {
            padding: 8px;
            font-size: 15px;
            color: #000;
        }

        #bio-data table tr td:first-child {
            width: 200px;
        }

        #bio-data table tr td:nth-child(2) {
            width: 300px;
        }
    </style>
</head>
<body>

<div id="page">
    @foreach($personal_infos as $info)
    <div class="photo-and-name">
        <img src="{{$info->image}}" class="photo" alt="Profile Picture">
        <div class="contact-info-box">
            <h1 class="name">{{$info->name}}</h1>
            <br>
            <p class="job-title">Address: {{$info->present_address}}</p>
            <p class="job-title">Mobile: {{$info->mobile}}</p>
            <p class="job-title">E-mail: {{$info->email}}</p>
        </div>
    </div>
    <div id="objective">
        <h3>Career Objective</h3>
        <p>
            {{$info->profile_summary}}
        </p>
    </div>
    @endforeach
    <div id="education">
        <h3>Education</h3>
        <table>
            <tr>
                <th>Exam Title</th>
                <th>Department</th>
                <th>Institute</th>
                <th>Board</th>
                <th>Result</th>
                <th>Passing Year</th>
            </tr>
            @foreach($education as $edu)
            <tr class="school-1">
                <td>{{$edu->degree}}</td>
                <td>{{$edu->dept}}</td>
                <td>{{$edu->inst_name}}</td>
                <td>{{$edu->board}}</td>
                <td>{{$edu->result}}</td>
                <td>{{$edu->pass_year}}</td>
            </tr>
            @endforeach
        </table>
    </div>
    <div id="work">
        @foreach($additonalInfos as $addinfo)
            @if (empty($addinfo->skills))
            <h3 style="visibility: hidden">Special Qualities</h3>
            @else
            <h3>Special Qualities</h3>
            <ul>
                <p>{{$addinfo->skills}}</p>
            </ul>
            @endif
        @endforeach
    </div>
    <div id="language">
        <h3>Language</h3>
        <table>
            @foreach($additonalInfos as $addinfo)
                <p>{{$addinfo->language}}</p>
            @endforeach
        </table>
    </div>
    <div id="bio-data">
        <h3>Personal Details</h3>
        @foreach($personal_infos as $info)
        <ul>
            <li>
                <div class="skill">Name<span class="s1">:&nbsp;&nbsp;&nbsp;{{$info->name}}</span></div>
            </li>
            <li>
                <div class="skill">Fathers Name<span class="s2">: &nbsp;&nbsp;&nbsp;{{$info->father_name}}</span> </div>
            </li>
            <li>
                <div class="skill">Mothers Name<span class="s3">: &nbsp;&nbsp;&nbsp;{{$info->mother_name}}</span> </div>
            </li>
            <li>
                <div class="skill">Gender<span class="s4">: &nbsp;&nbsp;&nbsp;{{$info->gender}}</span> </div>
            </li>
            <li>
                <div class="skill">Date of Birth<span class="s5">: &nbsp;&nbsp;&nbsp;{{$info->dob}}</span> </div>
            </li>
            <li>
                <div class="skill">Marital Status<span class="s6">: &nbsp;&nbsp;&nbsp;{{$info->marital_status}}</span> </div>
            </li>
            <li>
                <div class="skill">Nationality<span class="s7">: &nbsp;&nbsp;&nbsp;{{$info->nationality}}</span> </div>
            </li>
            <li>
                <div class="skill">Religion<span class="s8">: &nbsp;&nbsp;&nbsp;{{$info->religion}}</span> </div>
            </li>
            <li>
                <div class="skill">Present Address<span class="s9">: &nbsp;&nbsp;&nbsp;{{$info->present_address}}</span> </div>
            </li>
            <li>
                <div class="skill">Permanent Address<span class="s10">: &nbsp;&nbsp;&nbsp;{{$info->permanent_address}}</span> </div>
            </li>
        </ul>
        @endforeach
    </div>
</div>

</body>
</html>
