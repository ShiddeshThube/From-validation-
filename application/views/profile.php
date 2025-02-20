<style>
    body { 
        font-family: Arial, sans-serif; 
        background: #f4f4f4; 
        display: flex; 
        justify-content: center; 
        align-items: center; 
        height: 100vh; 
        margin: 0;
    }
    
    .container {
        text-align: center;
    }

    form { 
        width: 300px; 
        padding: 20px; 
        margin-bottom: 10px; 
        background: white; 
        border-radius: 5px; 
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); 
    }

    input { 
        display: block; 
        width: 100%; 
        margin: 10px 0; 
        padding: 8px; 
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    button { 
        width: 100%; 
        padding: 10px; 
        background: #28a745; 
        color: white; 
        border: none; 
        border-radius: 5px; 
        cursor: pointer; 
        margin-top: 10px;
    }

    button:hover { 
        background: #218838; 
    }

    
    .btn-secondary {
        background: #007bff;
    }

    .btn-secondary:hover {
        background: #0056b3;
    }

    .btn-danger {
        background: #dc3545;
    }

    .btn-danger:hover {
        background: #c82333;
    }
</style>

<div class="container">
    <form id="updateForm" method="post" onsubmit="return validateProfile()">
        <h3>Update Profile</h3>
        <input type="text" name="username" value="<?php echo $user['username']; ?>" required>
        <input type="email" name="email" value="<?php echo $user['email']; ?>" required>
        <button type="submit">Update</button>
    </form>

    <button class="btn-secondary" onclick="window.location.href='<?php echo site_url('user/change_password'); ?>'">Change Password</button>
    <button class="btn-danger" onclick="window.location.href='<?php echo site_url('user/logout'); ?>'">Logout</button>
</div>

<script>
function validateProfile() {
    let username = document.querySelector("[name='username']").value.trim();
    let email = document.querySelector("[name='email']").value.trim();
    
    if (username === "" || email === "") {
        alert("Both username and email are required.");
        return false;
    }
    
    if (!/^\S+@\S+\.\S+$/.test(email)) {
        alert("Invalid email format.");
        return false;
    }

    return true;
}
</script>
