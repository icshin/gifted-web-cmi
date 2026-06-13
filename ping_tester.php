<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Network Ping Tester</title>
</head>
<body>
    <h2>Ping Test</h2>
    <!-- IP 주소를 입력받는 폼 -->
    <form method="POST" action="">
        <label for="ip">IP Address to Ping:</label>
        <input type="text" id="ip" name="ip" placeholder="8.8.8.8" required>
        <button type="submit">Test</button>
    </form>

    <hr>

    <h3>Test Result:</h3>
    <pre>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['ip'])) {
        $target = $_POST['ip'];

        $cmd = "ping -c 3 " . $target;

        $output = shell_exec($cmd);

        echo htmlspecialchars($output, ENT_QUOTES, 'UTF-8');
    }
    ?>
    </pre>
</body>
</html>
