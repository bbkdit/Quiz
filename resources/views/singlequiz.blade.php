
<html>
<head>
  <title>new page</title>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
   .list-group {
      top: 50px;
  
       margin-left: -250px;
       left: 240px;
       width: 240px;
       background: #000;
       position: fixed;
       height: 100%;
       overflow-y: auto;
       z-index: 1000;
       transition: all 0.4s ease 0s;
      }
      #box{
        top: 50px;
  
       margin-left: 250px;

      }

      
  
  </style>
  
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#">LOGO</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
     
      <ul class="nav navbar-nav navbar-right">
      <h3></h3>
       <h2 style="color: #FFFFFF;">{{$quiz->id}}  {{$quiz->quiz_name}}</h2>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<div class="col-sm-2 fixed-top">
<div class="list-group">

<ul class="nav nav-staked" id="sidemnu"><br>
@for($j=1;$j<=5;$j++)

        <li><a href="#{{$j}}" class="page-scroll">Question {{$j}}</a></li>

        @endfor
        </ul>
        
        
      
</div>
</div>
<div class="col-sm-10">


      
     @if(count($questions) > 0)
     
    @foreach ($questions as $question)

   <div id="{{ ++$i }}" style="min-height: 400px; background:#F0FFFF;">
<div id="{{ $question->id}}"><br><br><br>
    <div class="panel col-sm-8" id="box">
  
  <h4><span class="label label-default">Q.{{ $i }}</span>  {{ $question->question_name }}</h4><br>
  <form role="form" method="POST" >
  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <label class="radio">
      <input type="radio" name="optradio" value="{{ $question->option_a }}"><b>A</b>.&nbsp;&nbsp;{{ $question->option_a }}
    </label>
    <label class="radio">
      <input type="radio" name="optradio" value="{{ $question->option_b }}"><b>B</b>.&nbsp;&nbsp;{{ $question->option_b }}
    </label>
    <label class="radio">
      <input type="radio" name="optradio" value="{{ $question->option_c }}"><b>C</b>.&nbsp;&nbsp;{{ $question->option_c }}
    </label>
     <label class="radio">
      <input type="radio" name="optradio" value="{{ $question->option_d }}"><b>D</b>.&nbsp;&nbsp;{{ $question->option_d }}
    </label>
    <div id="ans"></div>
   
  </form>
   </div> 
</div>
</div><br><br><br>
<div class="alert alert-success" id="results">
    <button type="button" class="btn btn-info" id="flip2" >check</button>
</div>
@endforeach
@endif
 <br>
</div>
</div>
</div>
</div>


<script>
    $(document).ready(function(){
    $('.page-scroll').click(function() {
     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
     && location.hostname == this.hostname) {
      var $target = $(this.hash);
      $target = $target.length && $target
      || $('[name=' + this.hash.slice(1) +']');
      if ($target.length) {
        var targetOffset = $target.offset().top;
        $('html,body')
        .animate({scrollTop: targetOffset}, 500);
       return false;
      }
    }
  });
});

      $(document).ready(function(){

       $("#flip2").click(function(event){
         var chkd = $('input[name="optradio"]:checked').val();
         var qsnid='{{$question->id}}';
         var qzid='{{$quiz->id}}'
        $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
         }
        });


        $.ajax({
          method: 'POST', 
          url: './ajaxrequest', 
          data: {
                  'qzid':qzid,
                  'qsnid':qsnid,
                  'chkd':chkd,
                  }, 
          success: function(data){ 
          console.log(data); 
          },
          error: function(jqXHR, textStatus, errorThrown) { 
          console.log(JSON.stringify(jqXHR));
          console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
    }
    });
  });
});

         $(document).ready(function(){
         $("#flip").click(function(){
         //  var x = $("form").serializeArray();
         //  $.each(x, function(i, field){
         //  $("#results").append( field.value );

            var qid='{{ $question->id}}';
            var c_ans='{{ $question->correct_answers}}';
            var chkd = $('input[name="optradio"]:checked').val();
             
            if(c_ans===chkd){
            $("#results").append( "<b>" + c_ans + "</b>" + "  is correct! " );
            }else{
            $("#results").append( "<b>" + chkd + "</b>" + " is Wrong Answer!!!, correct answer is: " + "<b>" + c_ans );
           }

        });
    });
</script>

</body>
</html>