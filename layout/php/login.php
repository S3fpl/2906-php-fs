<div class="form-content">
    <button class="close-btn" onclick="closeForm()">×</button>
    <h2>Login</h2>
    <form action="layout/php/process_login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" required>

        <button type="submit">Login</button>
        <button class="switch-btn" onclick="loadForm('signup')">Don't have an account? Sign Up</button>
    </form>
</div>
