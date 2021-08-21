<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV | {{$user->nama_lengkap}}</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        font-family: helvetica;
    }
    body {
        background-image: url(cv/cv-background.png);
        background-size: cover;
    }
    .container {
        padding: 80px;
    }
    .nama {
        /* background-color: chartreuse; */
        width: 400px;
    }
    .contact {
        margin-top: 20px;
    }
    .contact ul li{
        padding: 5px;
        list-style-type: none;
    }
    .about {
        margin-top: 70px;
    }
    .work {
        margin-top: 20px;
    }
    .work-span {
        margin-top: 15px;
    }
    .education {
        margin-top: 20px;
    }
    .education-span {
        margin-top: 15px;
    }
    .footer {
        margin-top: 30px;
        /* width: 650px; */
        /*height: 100px; */
        /* background-image: url(cv/cv-footer.png);
        background-size: cover; */
    }
    .footer-content{
        /* padding:20px; */
    }
    .avatar{
        margin-top: -42px;
        margin-left: 447px;
    }
    .avatar img {
        width: 200px;
        height: 200px;
    }
    .tahun-lulus {
        width: 100px;
        color: white;
        margin-left: 25px;
        margin-top:-20px;
        border-radius: 50%;
        text-align: center;
        background-color: #9C27B0;
    }
    .periode {
        width: 100px;
        color: white;
        margin-left: 25px;
        margin-top:-20px;
        border-radius: 50%;
        text-align: center;
        background-color: #9C27B0;
    }
    </style>
</head>
<body>

<div class="container">
    <div class="nama">
        <h1>{{$user->nama_lengkap}}</h1>
        <h4>{{$bidang->nama}}</h4>
        <img src="{{base_path('public/cv/cv-line.png')}}" width="300px">
        <div class="avatar">
            @if(is_null($user->photo_profile))
                <img src="{{base_path('public/cv/default.png')}}">
            @else
                <img src="data:image/{{$extension}};base64,{{$image}}" style="border-radius: 650%;">
            @endif
        </div>
    </div>
    <div class="contact">
        <h4>Contact</h4>
        <ul>
            <li><img src="{{base_path('public/cv/cv-email.png')}}" width="20px"> {{$user->email}}</li>
            <li><img src="{{base_path('public/cv/cv-phone.png')}}" width="20px"> {{$user->no_hp}}</li>
            <li><img src="{{base_path('public/cv/cv-location.png')}}" width="18px"> {{$user->tempat_lahir}}</li>
        </ul>
    </div>
    <div class="about">
        <h4>About</h4>
        <p>{{$user->profile_singkat}}</p>
    </div>
    <div class="work">
        <h4>Work Experience</h4>
        @if(!empty($pengalamanKerja))
        @foreach($pengalamanKerja as $p)
        <div class="work-span">
            <span>
                <img src="{{base_path('public/cv/cv-job.png')}}" width="20px">
                <div class="periode">
                    {{$p->periode}}
                </div>
            </span>
            <p style="margin-left:25px;"> {{$p->nama_perusahaan}}, {{$p->posisi_jabatan}}</p>
        </div>
        @endforeach
        @endif
    </div>
    <div class="education">
        <h4>Education</h4>
        @if(!empty($pendidikan))
        @foreach($pendidikan as $p)
        <div class="education-span">
            <span>
                <img src="{{base_path('public/cv/cv-education.png')}}" width="20px">
                <div class="tahun-lulus">
                    {{$p->tahun_lulus}}
                </div>
            </span>
            <p style="margin-left:25px;">{{$p->nama_lembaga_pendidikan}}</p>
        </div>
        @endforeach
        @endif
    </div>
    <div class="footer">
        <div class="footer-content">
            <table style='padding:5px;background-image:url(cv/cv-footer.png);background-size: cover;'>
                <tr>
                    <td>
                        <h4>Skill</h4><
                    </td>
                </tr>
                @if(!empty($user->skill_kompetensi))
                @foreach($user->skill_kompetensi as $u)
                <tr style='padding-top:100px;'>    
                <td style='width:650px;padding:10px;'>
                    <img src="{{base_path('public/cv/cv-star.png')}}" width="20px">
                    {{$u}}
                </td>
                </tr>
                @endforeach
                @endif
            </table>
        </div>
    </div>
</div>

</body>
</html>