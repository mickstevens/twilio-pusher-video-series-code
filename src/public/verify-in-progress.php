<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <title>Request a callback</title>
        <script src="//js.pusher.com/2.2/pusher.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.11.2.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        <script src="http://crypto-js.googlecode.com/svn/tags/3.1.2/build/rollups/md5.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {

            });

        </script>
    </head>
    <body>
        <div class="container">
            <h4>Verify your phone number</h4>
            <p>You will shortly receive a phone call to verify your phone number. Please use the 4 digit code shown below to verify your phone number.</p>
            <p><large><?php echo $_GET['code']; ?></large></p>
        </div>
    </body>
</html>
