<style>
    @include('style1')
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Templete 1</title>
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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
           {{--  <li>
             <div class="icon">
               <i class="fab fa-weebly"></i>
             </div>
             <div class="data">
               www.cr7.com
             </div>
           </li>  --}}
         </ul>
         @endforeach
       </div>
       <div class="resume_item resume_skills">
        @foreach($additonalInfos as $addinfo)
         <div class="title">
           <p class="bold">skills</p>
         </div>
         <ul>
           <li>
             <div class="semi-bold">
                <p>{{$addinfo->skills}}</p>
             </div>
             {{--  <div class="skill_progress">
               <span style="width: 80%;"></span>
             </div>
             <div class="skill_per">80%</div>  --}}
           </li>
           {{--  <li>
             <div class="semi-bold">
               CSS
             </div>
           </li>
           <li>
             <div class="semi-bold">
               SASS
             </div>
           </li>
           <li>
             <div class="semi-bold">
               JS
             </div>
           </li>
           <li>
             <div class="semi-bold">
               JQUERY
             </div>
           </li>  --}}
         </ul>
         @endforeach
       </div>
       <div class="resume_item resume_social">
         <div class="title">
           <p class="bold">Social</p>
         </div>
         @foreach($socials as $social)
         <ul>
           <li>
             <div class="icon">
               <i class="fab fa-facebook-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Facebook</p>
               <p>{{$social->facebook}}</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-twitter-square"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Twitter</p>
               <p>{{$social->twitter}}</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-github"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Github</p>
               <p>{{$social->github}}</p>
             </div>
           </li>
           <li>
             <div class="icon">
               <i class="fab fa-linkedin"></i>
             </div>
             <div class="data">
               <p class="semi-bold">Linkedin</p>
               <p>{{$social->linkedin}}</p>
             </div>
           </li>
           <li>
            <div class="icon">
              <i class="fab fa-behance"></i>
            </div>
            <div class="data">
              <p class="semi-bold">Behance</p>
              <p>{{$social->behance}}</p>
            </div>
          </li>
         </ul>
         @endforeach
       </div>

       <div class="resume_item resume_social">
        <div class="title">
          <p class="bold">Reference</p>
        </div>
        @foreach($references as $ref)
        <ul>
          <li>
            <div class="icon">
                <i class="fas fa-male"></i>
            </div>
            <div class="data">
              <p class="semi-bold">{{$ref->name}}</p>
              <p>{{$ref->designation}}</p>
              <p>{{$ref->organization}}</p>
              <p>{{$ref->email}}</p>
              <p>{{$ref->mobile}}</p>
            </div>
          </li>
        </ul>
        @endforeach
      </div>
     </div>
  </div>
  <div class="resume_right">
    <div class="resume_item resume_about">
        <div class="title1">
           <p class="bold">About</p>
         </div>
         @foreach($personal_infos as $info)
        <p>{{$info->profile_summary}}</p>
        @endforeach
    </div>
    <div class="resume_item">
        <div class="title">
           <p class="bold">Work Experience</p>
         </div>
         @foreach($experiences as $exp)
        <ul>
            <li>
                <div class="date">{{$exp->start}} - {{$exp->end}}</div>
                <div class="info">
                    <p class="semi-bold">{{$exp->company_name}}</p>
                    <p class="semi-bold">{{$exp->position}}</p>
                    <p>{{$exp->work_summary}}</p><br>
                </div>
            </li>
        </ul>
        @endforeach
    </div>
    <div class="resume_item">
        <div class="title">
           <p class="bold">Education</p>
        </div>
        @foreach($education as $edu)
      <ul>
            <li>
                <div class="date">{{$edu->pass_year}}</div>
                <div class="info">
                     <p class="semi-bold">{{$edu->inst_name}}</p>
                  <p>{{$edu->degree}}</p>
                  <p>{{$edu->dept}}</p>
                  <p>{{$edu->result}}</p><br>
                </div>
            </li>
        </ul>
        @endforeach
    </div>
    <div class="resume_item">
        <div class="title">
             <p class="bold">Projects</p>
           </div>
           @foreach($projects as $project)
        <ul>
              <li>
                  <div class="date">{{$project->start}} - {{$project->end}}</div>
                  <div class="info">
                        <p class="semi-bold">{{$project->project_name}}</p>
                        <p>{{$project->project_summary}}</p><br>
                  </div>
              </li>
          </ul>
          @endforeach
      </div>
  </div>
</div>

</body>
</html>
