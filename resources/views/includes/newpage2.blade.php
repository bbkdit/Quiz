 @foreach ($data as $quizs)
      <tr class="table table-bordered">
        <td ><a href="{{ url('display/quiz/')}}/{{$quizs->id}}">{{ $quizs->quiz_name }}</a></td>
        
        <td>{{ $quizs->id }}</td>
        <td><a href="deleteqz/{{$quizs->id}}">delete</a></td>
        <td><a href="create/{{$quizs->id}}">Add Questions</a></td>
        <td><button type="button" class="btn btn-info">play</button></td>
      </tr>
      @endforeach