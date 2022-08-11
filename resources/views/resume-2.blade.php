<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Cv Master Template-2</title>

    <style>
        body {
            font-size: 17px;
        }
        h2 {
            font-weight: 100;
            padding: 20px 0;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }
        .container {
            width: 70%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <a name="" id="" class="btn btn-primary" href="{{route('resume.download')}}"
                                                role="button">Download</a>

        <h1>Template-2</h1>

        {{--  <section class="heading">

            <h2>{{ucfirst($user->details->fullname)}}</h2>

            <p>Email: {{$user->details->email}}</p>
            <p>Phone: {{$user->details->phone}}</p>
            <p>Address: {{$user->details->phone}}</p>



            <h2 class="sum">Summary</h2>


            <h3>{{$user->details->summary}}</h3>


        </section>  --}}


        <section class="education">

            <h2>Education</h2>

            @foreach($education as $e)

            <h4> Degree: {{$e->degree}}</h4>

            <p>School: {{$e->inst_name}} </p>
            <p>Start Date: {{$e->start_year}} </p>
            <p>Graduation Date: {{$e->pass_year}} </p>
            @endforeach
        </section>


        {{--  <section class="work">

            <h2>Work History</h2>

            @foreach($user->experiences as $work)
            <h3>
                Job Title: {{$work->job_title}}
            </h3>
            <p>Employer: {{$work->employer}} </p>
            <p>Start Date: {{$work->start_date}} </p>
            <p>End Date: {{$work->end_date}} </p>
            @endforeach
        </section>  --}}



        <section class="skills">

            <h2>Skills</h2>

            @foreach($project as $skill)
            <h4> {{$skill->project_name}}</h4>
            @endforeach
        </section>

    </div>
</body>

</html>
