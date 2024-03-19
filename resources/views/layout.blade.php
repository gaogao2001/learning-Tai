<html>
<head>
    <title>LAYOUT</title>
</head>
<body>
{{ 'ten:'.  $ten. 'tuoi:'. $tuoi. 'email:'. $email. 'taikhoan:'. $email . 'taikhoan'. $taikhoan   }}
<form action="/form2-post" method="post">
    @csrf

   <div>
       <input name="ten" type="text" >
       <label >Nhập họ và tên</label>
       @if(strlen($ten)>20)
           <p style="color: red">ten qua dai</p>
       @else <p style="color: olivedrab">ten du dieu kien</p>

       @endif
   </div>
    <div>
        <input name="tuoi" type="number" >
        <label >Nhập tuổi</label>

    </div>
    <div>
        <input name="email" type="email" >
        <label >Nhập email</label>
    </div>
    <div>
        <input name="taikhoan" type="text" >
        <label >Nhập Tai khoan</label>
    </div>
    <div>
        <input name="matkhau" type="password" >
        <label >Nhập password</label>
    </div>

    <input type="submit" value="submit">
    <div>
        @foreach ($classes as $class)
            @if ($class['room'] == 'A1' || $class['room'] == 'A2')
                Room: {{ $class['room'] }} <br>
                <hr>
            @endif
        @endforeach
    </div>
    <div>
        @foreach( $classes as $class)
           <p>Name: {{$class['name']}}</p>
           <p>Teacher: {{$class['teacher']}}</p>
           <p> Room: {{$class['room']}}</p>
            <p>Time: {{$class['time']}}</p>
            <p>Students:{{$class['students']}}</p>
           <ul>
               @foreach($class['topics'] as $topic)
                   <li>{{$topic}}</li>
               @endforeach
           </ul>
            <p>Active:{{$class['is_active']}}</p>
            <hr>
        @endforeach
    </div>
    <div>
        @foreach($classes as $class)
            <ul>
                @foreach($class['topics'] as $topic)
                    <li>{{$topic}}</li>
                @endforeach
            </ul>
        @endforeach
    </div><hr>
    <div>
        @foreach($classes as $class)
            @if($class['is_active'] == true)
                {{$class['is_active']}}
            @endif
        @endforeach
    </div>
    <hr>
    <div>
        @foreach($classes as $class)
            <p>So sinh vien cua lop {{$class['room']}} la : {{$class['students']}}</p>
        @endforeach
        @php
        $tongSoSinhVien = 0;
         foreach ($classes as $class){
             $soSinhVien = $class['students'];
             $tongSoSinhVien += $soSinhVien;
         }
        @endphp
        <p>Tong so sinh vien cua ca lop tren la : {{$tongSoSinhVien}}</p>
    </div>
    <div>
        <form method="post">
            @csrf
            <label for="className"> Enter class name</label>
            <input name="className" type="text">git
            <button type="submit">submit</button>
        </form>
    @if(request()->isMethod('post'))
        @php
        $className = request('$className');
        $classFound = false;
        @endphp
        @foreach( $classes as $class)
            @if($class['name'] == $className)E
                    <p>Class: {{ $class['name'] }}</p>
                    <p>Teacher: {{ $class['teacher'] }}</p>
                    <p>Room: {{ $class['room'] }}</p>
                    <p>Time: {{ $class['time'] }}</p>
                    <p>Topics:</p>
                    <ul>
                        @foreach ($class['topics'] as $topic)
                            <li>{{ $topic }}</li>
                        @endforeach
                    </ul>
                    <p>Number of Students: {{ $class['students'] }}</p>
                    <hr>
                    @php
                        $classFound = true;
                        break;
                    @endphp
            @endif
        @endforeach
            @if (!$classFound)
                <p>No information found for the class with name: {{ $className }}</p>
            @endif

    @endif
    </div>


</form>

</body>

</html>