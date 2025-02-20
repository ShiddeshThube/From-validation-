
<style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; }
    form { width: 300px; padding: 20px; margin: 20px auto; background: white; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
    input { display: block; width: 100%; margin: 10px 0; padding: 8px; }
    button { width: 100%; padding: 10px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; }
    button:hover { background: #218838; }
</style>


<form id="registerForm" method="post" onsubmit="return validateRegister()">
    <input type="text" name="username" placeholder="Username" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Register</button><br><br>
	<button  href="<?php echo site_url('user/login'); ?>">Login</button>
</form>


<script>
function validateRegister() {
    let username = document.querySelector("[name='username']").value.trim();
    let email = document.querySelector("[name='email']").value.trim();
    let password = document.querySelector("[name='password']").value.trim();
    
    if (username === "" || email === "" || password === "") {
        alert("All fields are required.");
        return false;
    }
    
    if (!/^\S+@\S+\.\S+$/.test(email)) {
        alert("Invalid email format.");
        return false;
    }
    
    if (password.length < 6) {
        alert("Password must be at least 6 characters.");
        return false;
    }

    return true;
}
</script>
