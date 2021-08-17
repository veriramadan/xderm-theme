<?php


$ip_address = '8.8.8.8'; // IP address you'd like to ping.
exec("ping -c 1 " . $ip_address . " | head -n 2 | tail -n 1 | awk '{print $7, $8}'", $ping_time);
echo "<pre><span style='color:lime'>Respon $ping_time[0] </span></pre>";   // First item in array, since exec returns an array.

?>

<script>
$.get("http://ip-api.com/json", function (response) {
    $("#ip").html("IP: " + response.query);
    $("#address").html("Location: " + response.country + ", " + response.city);
    $("#isp").html("ISP: " + response.isp);
}, "jsonp");
</script>

