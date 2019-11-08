<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css"> 
<style>
 {
outline: 1px solid red;
}
/* header */

.header{
   /*position:fixed;*/
   position:relative;
    top:0;
    width:100%;
    color:blue;
   height:102px;
   background: white;
        
}
.header .hmenu{
margin: 0 auto;
   width:980px;
   height:25px;
}
.header .hmenu ul{
   float:right;
/*display: inline-block;*/
vertical-align:top;
}
.header .hmenu ul li{
display:inline;
font-size:10px;
color:#999999;
padding:0 10px;
}
.header .section{
width:980px;
height:74px;
}
.header .section img{
float:left;
margin-top:1%;
}
.smenu{
  display:inline-block;
  height:75px;
  width:69%;

}

.m1, .m2, .m3{
  display:inline;

}
.m1 a, .m2 a, .m3 a{
  line-height:2;
  margin-right:14%;
  padding-right:52px;
  border-right:1px solid grey;
  color:black;
}


/* body */
.backg{
  background:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIcYoP6kArBMc3KJTmhgebM_dpt75ithpL0rkuh3QZnixl1IRLaw&s) 50%  ;

}

body {
    
    width:100%;
  text-align: center;
  color: white;
  font-family: Arial, Helvetica, sans-serif;
 
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
       width:100%;
       
        
      }
      .ple1 span{
        color:blue;
      }
      .ple1 img{
          margin:1%;
      }
      .row1:after{
      content:"";
      display:table;
      clear:both;
      }
      .name{
          color:black;
          float:left;
          margin:1%;
      }
      .row2{
          color:black;
          display:flex;
      }
      tr{
          border-top:1px solid #ccc;
      }
      th,td{
          
          padding:5px;
      }
      th{
          margin-right:20px;
      }
      td{
          float:center;
      }
  /* footer */
      .footer{

position:relative;
bottom:0;
width:100%;
height:149px;
background-color: #003d75;
}
.section{
width:980px;
min-width:980px;
margin: 0 auto;
height:130px;

}
.q1{
float:left;
width:22%;

}
.q1 img{
margin-top:8%;

}
.q2{
float:center;
color:#5f89b1;
font-size:12px;
width:100%;
margin-top:3%;
padding:4px 8px;

}
.q3{
float:right;

}
.writer{
float:left;
font-size:12px;
margin-top:1%;
margin-left:15px;
margin-right:5%;
font-size:11px;
color:#5f89b1;
}
#site{
padding-left:5%;
}
.hits{
margin-top:1%;
font-size:13px;
color:#5f89b1;

}

select{
color: #b5cee6;
border: 0;
background:#05325b;
height:22px;
}
      
</style>

</head>
<body>


<div class="header">
   <div class="hmenu">
       <ul><li>LOGIN</li><li>WEBMAIL</li><li>SEARCH</li><li>SITEMAP</li><li>ENGLICH</li><li>CHINESE</li>
        <li><img src="http://www.kpu.ac.kr/front/images/blog.png"></li>
        <li><img src="http://www.kpu.ac.kr/front/images/icon_social_instagram.png"></li>
        <li><img src="http://www.kpu.ac.kr/front/images/icon_social_facebook.png">
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
<!--body-->
<div class="backg">
  <div class="content">

    <div class="row1">
        <div class="ple1">
            <img src="https://s3.amazonaws.com/castle.kpu/project_img/pro_sung.jpg" alt="Avatar" style="width:172px; float:left;">
            <div class="name">
                <h3 style="float:left;">Sungmin Jung</h3><br/><br/>
                <p>Sungmin Jung, Korea Polytechnic University</p>

            </div>
        </div>

    </div>

    <div class="row2">
        <table>
        <tr style="border-top:1px solid #a000a0;border-width: 3px;">
                <th>이름</th>
                <td>정성민</td>
            </tr>
            <tr>
                <th>생년월일</th>
                <td>1997.03.25</td>
            </tr>
            <tr>
                <th>학번</th>
                <td>2016150049</td>
            </tr>
            <tr>
                <th>이메일</th>
                <td>cbedp4109@kpu.ac.kr</td>
            </tr>
            <tr style="border-bottom:1px solid #ccc;">
                <th>취미</th>
                <td>낚시</td>
            </tr>
        </table>

        <div id="tabs" style="width:75%;" >
        <ul>
            <li><a href="#tabs-1">유튜브</a></li>
            <li><a href="#tabs-2">사진첩</a></li>
            <li><a href="#tabs-3">풍경</a></li>
        </ul>
        <div id="tabs-1">
            <p><iframe width="560" height="315" src="https://www.youtube.com/embed/kOHB85vDuow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
        </div>
        <div id="tabs-2">
            <p><img src="https://s3.amazonaws.com/castle.kpu/project_img/fish.jpg" alt=""></p>
        </div>
        <div id="tabs-3">
            <p><img src="https://s3.amazonaws.com/castle.kpu/project_img/lan_sung.jpg" width="100%" alt=""></p>
        </div>
</div>
    </div>
  </div>
</div>

<!--body-end-->


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

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>