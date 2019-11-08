@extends('/project/main')
@section('content')
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
        <div class="ple1">
        <a href="{{url('/intro-sungmin')}}">
          <img src="https://s3.amazonaws.com/castle.kpu/project_img/pro_sung.jpg" alt="Avatar" style="width:172px; ">
        </a>
        </div>
    </div>
  </div>
  </div>
</div>





<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
@endsection