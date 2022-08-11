
<!-- Responsive HTML/CSS CV template -->
<!-- Originally by Thomas Hardy; adapted by William Chase and Leslie Myint -->

<!DOCTYPE html>
<html>
<head>
    @foreach ($cv as $c)
      <title>{{$c->price}}</title>
    @endforeach

    <meta name="viewport" content="width=device-width"/>
    <meta name="description" content="The Curriculum Vitae of Hermione Granger."/>
    <meta charset="UTF-8">

    <link href='https://fonts.googleapis.com/css?family=Rokkitt:regular,bold|Lato:regular,black' rel='stylesheet' type='text/css'>
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

    <style>

        html,body,div,span,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,abbr,address,cite,code,del,dfn,em,img,ins,kbd,q,samp,small,strong,sub,sup,var,b,i,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,figcaption,figure,footer,header,hgroup,menu,nav,section,summary,time,mark,audio,video {
            border:0;
            font:inherit;
            font-size:100%;
            margin:0;
            padding:0;
            vertical-align:baseline;
        }

        article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section {
            display:block;
        }

        html, body {
            background: #181818;
            font-family: 'Lato', helvetica, arial, sans-serif;
            font-size: 16px;
            color: #222;
        }

        body em {
            font-weight: bold;
            text-decoration: underline;
        }

        body b {
            font-weight: bold;
        }

        body i {
            font-style: italic;
        }

        .clear {
            clear: both;
        }

        p {
            font-size: 1.1em;
            line-height: 1.4em;
            margin-bottom: 20px;
            color: #000000;
        }

        #cv {
            width: 800px;
            max-width: 800px;
            background: #FFFFFF;
            margin: auto;
            margin-top: 0px;
            margin-bottom: 0px;
        }

        .mainDetails {
            padding: 25px 25px;
            /*border-bottom: 2px solid #cf8a05;*/
            background: #2196F6;
            padding-bottom: 0;
        }

        .mainDetails1 {
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
            padding: 25px 25px;
            /*border-bottom: 2px solid #cf8a05;*/
            background: #BEC2CE;
            padding-bottom: 1px;
        }

        #name h1 {
            font-size: 3em;
            font-weight: 700;
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
            margin-bottom: -6px;
            text-transform: uppercase;
        }

        #name h2 {
            font-size: 2em;
            margin-left: 2px;
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
        }

        #mainArea {
            padding: 0px 25px;
        }

        #name {
            float: left;
            /*text-align: center;*/
            color: #FFFFFF;
        }

        #name .name_left {
            width: 30%;
            float: left;
        }

        #name .name_right {
            width: 70%;
            float: left;
        }

        #name p {
            font-size: 2em;
            /*text-align: center;*/
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
            color: #FFFFFF;
            /*margin-top: 20px;*/

        }

        #contactDetails ul {
            list-style-type: none;
            margin-top: 2px;
        }

        #contactDetails ul li {
            margin-bottom: 3px;
            color: #444;
            font-size: 15px;
        }

        section {
            /*border-top: 2px solid #515151;*/
            padding: 20px 0 0;
            overflow: hidden;
            word-wrap: break-word;
        }

        section:first-child {
            border-top: 0;
        }

        section:last-child {
            padding: 20px 0 10px;
        }

        .mainDetails img {
            display: block;
            float: right;
            border-radius: 50%;
            width: 120px;
            height: 120px;
            margin-left: 73px;
            margin-top: 0;
        }

        .sectionContent {
            font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
        }

        .sectionContent .body_left {
            width: 32%;
            float: left;
            padding-right: 20px;
        }

        .sectionContent .body_right {
            width: 62%;
            float: right;
        }

        .sectionContent .body_right_right {
            width: 27%;
            float: right;
        }

        .sectionContent .title1 {
            color: #3E93CC;
            font-weight: 800;
            font-size: 20px;
        }

        .sectionContent .title2 {
            color: #C5C5C5;
        }

        .sectionContent .title3 {
            font-weight: 800;
            font-size: 20px;
        }

        .sectionTitle h1 {
            font-size: 1.8em;
            font-weight: 800;
            color: #5A5A5A;
            padding-top: 2px;
        }

        .sectionContent h2 {
            font-weight: bold;
            margin-bottom: 1px;
        }

        .sectionContent ol, ul {
            margin-left: 35px;
        }

        /*@media all and (max-width: 601px) {*/
        /*    #cv {*/
        /*        width: 95%;*/
        /*        margin: 10px auto;*/
        /*        min-width: 280px;*/
        /*    }*/

        /*}*/

        /*@media all and (max-width: 480px) {*/
        /*    hr {*/
        /*        display: none;*/
        /*    }*/
        /*    .mainDetails {*/
        /*        padding: 15px 15px;*/
        /*    }*/

        /*    section {*/
        /*        padding: 15px 0 0;*/
        /*    }*/

        /*    #mainArea {*/
        /*        padding: 0 25px;*/
        /*    }*/

        /*    #name h1 {*/
        /*        line-height: .8em;*/
        /*        margin-bottom: 4px;*/
        /*    }*/
        /*}*/

        /*@media print {*/
        /*    #cv {*/
        /*        width: 100%;*/
        /*    }*/
        /*}*/

    </style>
</head>
<body id="top">
<div id="cv" class="instaFade">
    <div class="mainDetails">
        @foreach($personal_infos as $info)
        <div id="name">
            <div class="name_left">
                <h1 class="quickFade delayOne">{{$info->name}}</h1>
                <p class="quickFade delayOne">{{$info->job_title}}</p>
            </div>
            <div class="name_right">
                <img src="{{$info->image}}" alt="Resume_image">
            </div>
        </div>
        <br />
        <div class="clear"></div>
        @endforeach
    </div>
    <div class="mainDetails1">
        @foreach($personal_infos as $info)
        <p>{{$info->profile_summary}}</p>
        @endforeach
        <div class="clear"></div>
    </div>

    <div id="mainArea" class="quickFade delayThree">
        <section>
            <div class="sectionContent">
                <div class="body_left">
                    <div class="title1">Contact Me</div>
                    <br>
                    @foreach($personal_infos as $info)
                    <div class="title2">Mobile</div>
                    <p style="margin-bottom: 1px;">{{$info->mobile}}</p>
                    <div class="title2">E-mail</div>
                    <p style="margin-bottom: 1px;">{{$info->email}}</p>
                    <div class="title2">Address</div>
                    <p style="margin-bottom: 1px;">{{$info->present_address}}</p>
                    <div class="title2">Birth Date</div>
                    <p style="margin-bottom: 1px;">{{$info->dob}}</p>
                    @endforeach

                </div>
                <div class="body_right">
                    <div class="title1">Education</div>
                    <br>

                    @foreach($education as $edu)
                    <hr style="border: 1px solid #BEC2CE; position: absolute; width: 334px;">
                    <div class="body_right_right">
                        <div class="title1" style="font-weight: 200;">{{$edu->pass_year}}</div>
                    </div>
                    <br>
                    <div class="title3">{{$edu->inst_name}}</div>
                    <div class="title3">{{$edu->degree}} in {{$edu->dept}}</div>
                    <p>Result: {{$edu->result}}</p>
                    @endforeach

                </div>
            </div>
            <div class="clear"></div>
        </section>

        <section>

            <div class="sectionContent">
                <div class="body_left">
                    @foreach($additonalInfos as $addinfo)
                        @if (empty($addinfo->skills))
                        <div class="title1" style="visibility: hidden">Skills</div>
                        <br>
                        @else
                        <div class="title1">Skills</div>
                        <br>
                        <p>{{$addinfo->skills}}</p>
                        @endif

                        @if (empty($addinfo->language))
                        <div class="title1" style="visibility: hidden">Language</div>
                        <br>
                        @else
                        <div class="title1">Language</div>
                        <br>
                        <p>{{$addinfo->language}}</p>
                        @endif

                        @if (empty($addinfo->hobby))
                        <div class="title1" style="visibility: hidden">Interest</div>
                        <br>
                        @else
                        <div class="title1">Interest</div>
                        <br>
                        <p>{{$addinfo->hobby}}</p>
                        @endif
                    @endforeach

                </div>
                <div class="body_right">
                    @if(count($experiences) >= 1)
                        <div class="title1" >Experience</div>
                        <br>
                        @foreach($experiences as $exp)
                            <hr style="border: 1px solid #BEC2CE; position: absolute; width: 334px;">
                            <div class="body_right_right">
                            <div class="title1" style="font-weight: 200;">{{$exp->start}} - {{$exp->end}}</div>
                            </div>
                            <br>
                            <div class="title3">{{$exp->company_name}}</div>
                            <div class="title3">{{$exp->position}}</div>
                            <p>{{$exp->work_summary}}</p>
                        @endforeach
                    @else
                        <div class="title1" style="visibility: hidden">Experience</div>
                        <br>
                    @endif
                </div>

            </div>
            <div class="clear"></div>
            <br />

        </section>

        <section>
            <div class="sectionContent">
                <div class="body_left">

                </div>

                <div class="body_right">
                    @if(count($trainings) >= 1)
                        <div class="title1">Award & Achievement</div>
                        <br>
                        @foreach($trainings as $training)
                            <hr style="border: 1px solid #BEC2CE; position: absolute; width: 334px;">
                            <div class="body_right_right">
                                <div class="title1" style="font-weight: 200;">{{$training->end}}</div>
                            </div>
                            <br>
                            <p class="title3">{{$training->training_name}}</p>
                            <p>{{$training->training_summary}}</p>
                        @endforeach
                    @else
                        <div class="title1" style="visibility: hidden">Award & Achievement</div>
                        <br>
                    @endif

                </div>
            </div>
            <div class="clear"></div>
        </section>

        <section>
            <div class="sectionContent">
                <div class="body_left">

                </div>

                <div class="body_right">
                    @if(count($projects) >= 1)
                        <div class="title1">Projects</div>
                        <br>
                        @foreach($projects as $project)
                            <hr style="border: 1px solid #BEC2CE; position: absolute; width: 334px;">
                            <div class="body_right_right">
                                <div class="title1" style="font-weight: 200;">{{$project->start}} - {{$project->end}}</div>
                            </div>
                            <br>
                            <div class="title3">{{$project->project_name}}</div>
                            <p>{{$project->project_summary}}</p>
                        @endforeach
                    @else
                        <div class="title1" style="visibility: hidden">Projects</div>
                        <br>
                    @endif

                </div>
            </div>
            <div class="clear"></div>
        </section>
    </div>
</div>
</body>
</html>
