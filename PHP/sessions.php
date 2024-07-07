<?php

// seesion are a way to store the information (in varibales) to be used in multiple pages.
// unlike cookies.seesion are stored on the server side.

session_start();

if(isset($_POST['submit'])){
    $usernname =  filter_input(INPUT_POST,'username',FILTER_SANITIZE_SPECIAL_CHARS);
    
    $password = $_POST['password'];

    if($usernname == 'Prajwal' && $password=='password'){
        $_SESSION['username'] = $username;
        header('Location:/php/extras/dashboard.php');
    }
    else{
        echo 'Incorrect Login';
    }
}
?>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
    method="POST">
    <div>
        <label for="username">UserName: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" name="password">
    </div> 
    <input type="submit" value="Submit" name="submit">
</form>

