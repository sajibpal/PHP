 <?php
$ip = "92.168.0.0";

if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)==true) {
    echo "$ip is a valid IPv4 address" ;
} else {
    echo "$ip is not a valid IPv4 address";
}
?> 