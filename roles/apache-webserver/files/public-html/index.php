<!DOCTYPE html>
<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <body>
                <div id="tools" class="tools">
                        <p>Your IP:</p>
                </div>
                <div id="ip-lookup" class="tools">
                        <?php if ($_SERVER["HTTP_X_FORWARDED_FOR"] != "") {
                                $IP = $_SERVER["HTTP_X_FORWARDED_FOR"];
                                $host = @gethostbyaddr($_SERVER["HTTP_X_FORWARDED_FOR"]);
                        } else {
                                $IP = $_SERVER["REMOTE_ADDR"];
                                $host = @gethostbyaddr($_SERVER["REMOTE_ADDR"]);
                        } ?>
                        <h1><?php echo $IP; ?></h1>
                </div>
                <div id="tools" class="tools">
                        <p>User Agent:</p>
                </div>
                <div id="more-info" class="tools">
                        <h1><?php echo $_SERVER["HTTP_USER_AGENT"]; ?></h1>
                </div>
        </body>
</html>
