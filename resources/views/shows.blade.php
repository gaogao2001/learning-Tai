Form</title>
<link rel="stylesheet" href="{{asset('css/app.css')}}">
<style>
	form > div {
		margin-bottom: 15px;
	}
</style>
</head>
<body>
<form action="/form" method="get">
    <div>
        <label>Input your name <span style="color: red">(bắt buộc)</span></label>
        <input name="name" type="text" required>
    </div>
    <div>
        <label>Input your email</label>
        <input name="name" readonly value="crew@gmail.com" type="email">
    </div>
    <div>
        <label>Input your age</label>
        <input name="name" type="number">
    </div>
    <div>
        <label>Input your password</label>
        <input name="name" type="password">
    </div>
    <div>
        <label>Choose your sex</label>
        <select name="sex">
            <option>Male</option>
            <option>Female</option>
        </select>
    </div>
    <div>
        <label>Choose your hobby</label>
        <input type="checkbox" name="hobby[]" value="football">Football
        <input type="checkbox" name="hobby[]" value="basketball">Basketball
        <input type="checkbox" name="hobby[]" value="swimming">Swimming
    </div>
    <div>
        <label>Choose your favorite color</label>
        <input type="radio" name="color" value="red">Red
        <input type="radio" name="color" value="green">Green
        <input type="radio" name="color" value="blue">Blue
    </div>
    <div>
        <label>Input your address</label>
        <textarea name="address">Do Duc Thu</textarea>
    </div>
    <div>
        <label>Input your avatar</label>
        <input type="file" name="avatar">
    </div>
    <div>
        <label>Input your birthday</label>
        <input type="date" name="birthday">
    </div>
    <button type="submit">Submit</button>
</form>
</body>
</html>