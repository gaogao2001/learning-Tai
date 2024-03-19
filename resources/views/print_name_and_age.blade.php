<html>
<body>
@php
    echo "My name is " . $name . " and I am " . $age . " years old.";
@endphp
<pre>
    {{ '<form action="/print-name-and-age-post" method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="text" name="age" placeholder="Enter your age">
    <input type="text" name="password" placeholder="Enter your password">
    <input type="submit" value="Submit">
</form>' }}
</pre>
</pre>

<form action="/print-name-and-age-post" method="post">
    <input type="text" name="name" placeholder="Enter your name">
    <input type="text" name="age" placeholder="Enter your age">
    <input type="password" name="password" placeholder="Enter your password">
    <input type="submit" value="Submit">
</form>
</body>
</html>