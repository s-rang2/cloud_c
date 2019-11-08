<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="{{asset('css/app.css')}}" type="text/css" rel="stylesheet" />
<style>
 
.backg{
  background:url(https://t1.daumcdn.net/cfile/tistory/23267B3454B5DA7B03) 50%  ;
}
.hcontent{
    width:980px;
    margin: 0 auto;

}
.content{
  /* background-color: rgba( 255, 255, 255, 0.5 ); */
  /* background-color:white; */
width:980px;
margin: 0 auto;
  background-color: rgba( 255, 255, 255, 0.9 );

}
      #hello {
        padding: 30px;
        font-size: 50px;
        font-weight: bold;
        text-align: center;
        background-color: #ffffff;
        color:black;
        background-color: rgba( 255, 255, 255, 0.5 );
      }
      .ple1{
      float:left;
      padding:10px;
       width:50%;
       height:230px;
       
        
      }
      .ple1 img{
        text-align:center;
      }
      .ple1 span{
        color:blue;
      }
      .row1:after{
      content:"";
      display:table;
      clear:both;
      }
</style>
</head>
<body>

<div class="header">
   <div class="hmenu">
       <ul><li>LOGIN</li><li>WEBMAIL</li><li>SEARCH</li><li>SITEMAP</li><li>ENGLICH</li><li>CHINESE</li>
        <li><img src="http://www.kpu.ac.kr/front/images/blog.png" alt="ㅋㅋ"></li>
        <li><img src="http://www.kpu.ac.kr/front/images/icon_social_instagram.png" alt="ㅋㅋ"></li>
        <li><img src="http://www.kpu.ac.kr/front/images/icon_social_facebook.png" alt="ㅋㅋ">
        </ul>
    </div>
    
   <div class="section">
   <a href="{{url('intro')}}"><img src="http://www.kpu.ac.kr/front/images/header_logo.png"></a>
      <div class="smenu">
          <ul>
            <li class="m1">
              <a href="{{url('/intro')}}">홈으로</a> 
            </li>
            <li class="m2">
                <a href="{{url('/intro-wook')}}">조성욱</a> 
            </li>
            <li class="m3">
                <a href="{{url('/intro-sungmin')}}">정성민
            </li></a> 
          </ul>
      </div>
    </div>
</div>

<div class="backg">
      <div class="hcontent">
      <p id="hello">Self Introduction of 13 Team.</p>
  <div class="content">

    <p>13팀의 자기소개.</p>
    <div class="row1">
        <div class="ple1">
        <a href="{{url('/intro-wook')}}">
          <img src="https://s3.amazonaws.com/castle.kpu/project_img/pro_wook.jpg" alt="Avatar" style="width:200px; ">
        </a>
        </div>
        <div class="ple1" style="width:50%;">
        <a href="{{url('/intro-sungmin')}}">
          <img src="https://s3.amazonaws.com/castle.kpu/project_img/pro_sung.jpg" alt="Avatar" style="width:172px; ">
        </a>
        </div>
    </div>
  </div>
  </div>
</div>


<div class="footer">
   <div class="section">
    
   <div class="q1">
   <img src="http://www.kpu.ac.kr/front/images/footer_logo.png">    
    </div>
    
   <div class="q2">
    
           <span>개인정보처리방침 |</span>
            <span>개인정보목적외이용제공대장 |</span>
            <span>정보보호실천수칙 |</span>
            <span>정보공개 |</span>
            <span>대학정보공시 |</span>
            <span>원격지원 |</span>
            <span id="site">
                      <select>
           <option selected>관련사이트바로가기</option>
            <option>잉?</option>
                    </select>
            </span>
           
    </div>
    
    <div class="q3">
    

       
    </div>
    <div class="writer">
    15073 경기도 시흥시 산기대학로 237 (정왕동) 한국산업기술대학교 대표전화 031-8041-1000 입학안내 1588-2036<br/>
    COPYRIGHT 2014 KOREA POLYTECHNIC UNIVERSITY. ALL RIGHTS RESERVED. webmaster2@kpu.ac.kr
    
    </div>
       <div class="hits">Today : <span style="color:#b5cee6">1</span> <br/>
                       Total : <span style="color:#b5cee6">39,482,776</span></div>
    </div>
  </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>