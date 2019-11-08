@extends('/project/main')
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

      
</style>

<script src="https://cdn.ckeditor.com/ckeditor5/15.0.0/classic/ckeditor.js"></script>


<!--body-->
<div class="backg">
  <div class="content">

    <div class="row1">
        <div class="ple1">
            <img src="https://s3.amazonaws.com/castle.kpu/project_img/pro_wook.jpg" alt="Avatar" style="width:200px; float:left;">
            <div class="name">
                <h3 style="float:left;">SeongUk Jo</h3><br/><br/>
                <p>SeongUk Jo, Korea Polytechnic University</p>

            </div>
        </div>

    </div>

    <div class="row2">
        <table>
        <tr style="border-top:1px solid #a000a0;border-width: 3px;">
                <th>이름</th>
                <td>조성욱</td>
            </tr>
            <tr>
                <th>생년월일</th>
                <td>1996.06.26</td>
            </tr>
            <tr>
                <th>학번</th>
                <td>2015150036</td>
            </tr>
            <tr>
                <th>이메일</th>
                <td>jo631@kpu.ac.kr</td>
            </tr>
            <tr style="border-bottom:1px solid #ccc;">
                <th>취미</th>
                <td>사진</td>
            </tr>
        </table>

        <div id="tabs" style="width:75%;" >
        <ul>
            <li><a href="#tabs-1">유튜브</a></li>
            <li><a href="#tabs-2">사진첩</a></li>
            <li><a href="#tabs-3">방명록</a></li>

        </ul>
        <div id="tabs-1">
            <!-- <p><iframe width="100%" src="https://www.youtube.com/watch?v=ib-o3OZfqy4&feature=youtu.be"></iframe></p> -->
                <p><iframe width="560" height="315" src="https://www.youtube.com/embed/ib-o3OZfqy4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></p>
        </div>
        <div id="tabs-2">
            <p><img src="https://s3.amazonaws.com/castle.kpu/project_img/pic_wook.jpg" alt="" width="100%;"></p>
        </div>
        <div id="tabs-3">
          <form action="" method="post">
          <textarea name="content" id="editor" cols="230" rows="520"></textarea>
          <input type="submit" value="전송">
          </form>
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