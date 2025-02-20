<style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; }
    form { width: 300px; padding: 20px; margin: 20px auto; background: white; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
    input { display: block; width: 100%; margin: 10px 0; padding: 8px; }
    button { width: 100%; padding: 10px; background: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; }
    button:hover { background: #218838; }
</style>


<form id="changePasswordForm" method="post" onsubmit="return validateChangePassword()">
    <input type="password" name="current_password" placeholder="Current Password" required>
    <input type="password" name="new_password" placeholder="New Password" required>
    <button type="submit">Change Password</button>
</form>

<script>
function validateChangePassword() {
    let currentPassword = document.querySelector("[name='current_password']").value.trim();
    let newPassword = document.querySelector("[name='new_password']").value.trim();
    
    if (currentPassword === "" || newPassword === "") {
        alert("Both current and new password fields are required.");
        return false;
    }
    
    if (newPassword.length < 6) {
        alert("New password must be at least 6 characters.");
        return false;
    }

    return true;
}
</script>
