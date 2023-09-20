<!DOCTYPE html>
<html>
<head>
    <script>
        var userAgent = window.navigator.userAgent;
        var urlToRedirect = '';

        // Detect user's platform and set the appropriate URL
        if (/iPhone|iPad|iPod/.test(userAgent)) {
            urlToRedirect = 'https://apps.apple.com/us/app/just-expenses-app/id1373021367';
        } else if (/Android/.test(userAgent)) {
            urlToRedirect = 'https://play.google.com/store/apps/details?id=org.zerocode.justexpenses';
        } else {
            // Handle other platforms or provide a fallback URL
            urlToRedirect = 'https://example.com';
        }

        // Perform the redirection
        window.location.href = urlToRedirect;
    </script>
</head>
<body>
    <p>If you are not redirected, <a href="https://example.com">click here</a>.</p>
</body>
</html>