<html>
<head>
    <title>create</title>
</head>
<body>


<div>

    <form action="/create-post" method="post">
        @csrf
        <label>Tieu de bai viet</label>
        <input name="tieuDe" type="text">
        <label> Noi dung bai biet</label>
        <input name="noiDung" type="text">
        <button type="submit">submit</button>
    </form>

       <p> tieu de bai viet la : {{$tieuDe}}</p>
       <p> Noi dung bai viet la : {{$noiDung}}</p>
</div>
</body>
</html>