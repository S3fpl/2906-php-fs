<div class="form-content">
    <button class="close-btn" onclick="closeForm()">×</button>
    <h2>Sign Up</h2>
    <form action="layout/php/process_signup.php" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" required>

        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Sign Up</button>
        <button class="switch-btn" onclick="loadForm('login')">Already have an account? Login</button>
    </form>
</div>
