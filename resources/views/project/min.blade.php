@extends('/project/main')
<title>정성민</title>
@section('content')
<style>


/* body */
.backg{
  background:url(https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIcYoP6kArBMc3KJTmhgebM_dpt75ithpL0rkuh3QZnixl1IRLaw&s) 50%  ;

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
      .table1 tr{
          border-top:1px solid #ccc;
      }
      .table1 th,td{
          padding:5px;
      }
      .table1 th{
          margin-right:20px;
      }
      .table1 td{
          float:center;
      }
      .pagination{
          justify-content:center;
      }
      .area{
          width:77%;
          display:inline-block;

      }
      .btn0{
        background-color: #4CAF50; /* Green */
        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        cursor: pointer;
        
      }

      .btn1 {
          float:right;
            background-color: white;
            color: black;
            border: 2px solid #e7e7e7;
    }
.btn1:hover {background-color: #e7e7e7;}

      .btn2{
    background-color: Transparent;
    background-repeat:no-repeat;
    border: none;
    cursor:pointer;
    overflow: hidden;
    outline:none;
      }
      .d2{
          font-size:13px;
      }
      .d1{
          font-size:16px;
          font-weight:bold;
      }
      
</style>

<script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>


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
    <div class="table1">
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
        </div>

        <div id="tabs" style="width:75%;" >
        <ul>
            <li><a href="#tabs-1">방명록</a></li>
            <li><a href="#tabs-2">사진첩</a></li>
            <li><a href="#tabs-3">유튜브</a></li>

        </ul>

 
        <div id="tabs-1">
            <div class="table2">
          <form action="{{route('store2')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <table>
                <tr>
                    <th>이름
                        <td>
                            <input type="text" name="name">
                        </td>
                    </th>
                    <th>비번
                        <td>
                            <input type="password" name="pwd">
                        </td>
                    </th>
                </tr>
            </table>
            <div class="area">
          <textarea name="content"  id="editor" cols="230" rows="520"></textarea>
          </div>
          <script>
            $(function (){
                config.width='75%';
                CKEDITOR.config.width=200;
            });
          </script>
          <button class="btn0 btn1">댓글남기기</button>
          </form>
            <table width="100%">
                @foreach($cloud2s as $cloud)
                <tr style="border-top:1px solid #ccc;">
                <td width="15%" class="d2">{{$cloud->id}}</td>
                    <td class="d1">{{$cloud->name}}</td>       
                    <td class="d2" style="color:#999999;">{{ date("Y년 m월 d일", strtotime($cloud->created_at)) }}</td>
                    <td>
                        <form action="{{route('delete2',$cloud->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn2" >삭제</button>
                        </form>
                    </td>

                </tr>
                <tr>
                    <td colspan=5 style="padding:3%;">{!!$cloud->content!!}</td>
                </tr>
                @endforeach
            </table>
            </div>
            
            {{$cloud2s->links()}}
        </div>

        <div id="tabs-2">
            <p><img src="https://s3.amazonaws.com/castle.kpu/project_img/fish.jpg" alt=""></p>
        </div>

        <div id="tabs-3">
            <p><iframe width="560" height="315" src="https://www.youtube.com/embed/kOHB85vDuow" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
        </div>
      </div>

    </div>
  </div>
</div>
          <script>
        ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );

          </script>

@endsection